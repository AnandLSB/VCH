<?php
	include_once('Header.php');
	//product display function
	if(isset($_GET['productDetails'])){
		$p_id = $_GET['productDetails'];
		$sql = "SELECT * FROM product WHERE prodID ='$p_id';";
		$result = mysqli_query($conn, $sql);

		$queryResult = mysqli_num_rows($result);

		echo '<div class="container-fluid p-5">';
		if($queryResult > 0){
			while($product = mysqli_fetch_assoc($result)){
				echo '
					<form method="post">
						<div class="row">
							<div class="col-auto">
								<img class="align-self-center m-2 border border-dark" name="prodImg" src="'.$product['prodImg'].'" width="400" height="400" ">
							</div>
							<div class="col">
								<div class="align-self-center ml-3 mt-3">
									<h3 name="prodName" class="">'.$product['prodName'].'</h3>
									<hr>
									<div class="dropdown show"><a class="btn btn-sm dropdown-toggle btn-block" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cake Desc </a>
									  	<div class="dropdown-menu">
										<h6 class="dropdown-header text-wrap">'.$product['prodDesc'].'</h6>
										</div>
									</div>
									<br>
									<h5 class="d-inline">Category: </h5>
									<h5 name="prodCat" class="d-inline">'.$product['category'].'</h5>
									<br>
									<br><h5 class="d-inline">Price: </h5>
									<form method="post">
										<h5 name="price" value='.$product['price'].' class="d-inline">RM'.$product['price'].'</h5><br><br>
										<div class="d-block"><input type="text" name="qty" id="Qtytext" placeholder="Qty" required></div><br>
										<button type="submit" name="addCart" class="btn btn-light btn-lg btn-block" value='.$p_id.'>Add to cart</button>
									</form>	
								</div>
							</div>
						</div>
					</form>	
				';
			}
		}
		else{
			echo "There are no results";
		}
		echo '</div>';
	}
	else{
		header("location:index.php");
	}
	//add to cart function
	if(isset($_POST['addCart'])){
		 if(!empty($_SESSION['useruid'])){
			 $userID = $_SESSION['userid'];
			 $prodID = $_POST['addCart'];
		
			 $Qty = $_POST['qty'];

			 $sql = "INSERT INTO cart (userId, prodID, prodName, prodDesc, price, Qty, category, prodImg, Total) 
					SELECT '$userID', prodID, prodName, prodDesc, price, '$Qty', category, prodImg, price*'$Qty' FROM product 
					WHERE prodID='$prodID';";
			 
			 if($result = mysqli_query($conn, $sql) === TRUE){
				 //query successful
				 echo '
					<div class="overlay">
						<div class="popup">
							<a class="close" href="">&times;</a>
								<h2>Success!</h2>
								<p>Item added to cart successfully!</p>
						</div>
					</div>
				 ';
				 exit();
			 }
			 else{
				 //query failure
				 echo '
				 	<div class="overlay">
						<div class="popup">
							<a class="close" href="">&times;</a>
								<h2>Failure!</h2>
								<p>Unable to add item to cart!</p>
						</div>
					</div>
				 ';
			 }
		 }
		 else{
			 header("location: login.php");
		 }
	}
?>
