<body>
<div id="masterContainer">
	<div id="main">
<?php
	require_once('Header.php');
		//delete from cart function
		if(isset($_POST['deleteCart'])){
			if(!empty($_SESSION['useruid'])){
				 $userID = $_SESSION['userid'];
				 $prodID = $_POST['deleteCart'];

				 $sql = "DELETE FROM cart WHERE userId='$userID' AND prodID='$prodID';";

				 if($result = mysqli_query($conn, $sql) === TRUE){
					 //query successful
					 header("location:cart.php");
					 exit();
				 }
				 else{
					 //query failure
					 echo '
					 	<div class="overlay">
							<div class="popup">
								<a class="close" href="">&times;</a>
								<h2>Failure!</h2>
								<p>Unable to delete item from cart!</p>
							</div>
						</div>
					 ';
				 }
			 }
			 else{
				 header("location:login.php");
			 }
		 }
		 if(!empty($_SESSION['useruid'])){
			 $userID = $_SESSION['userid'];

			 $sql = "SELECT * FROM cart where userId='$userID';";
			 $result = mysqli_query($conn, $sql);
			 $queryResult = mysqli_num_rows($result);

			 echo'
				<div class="container-fluid">
					<hr>
					<h1>Cart for '.$_SESSION['useruid'].'</h1>
					<hr>
			 ';

			 if($queryResult > 0){
				 while($row = mysqli_fetch_assoc($result)){
						echo '
							<div class="container w-50">
								<div class="card p-1">
									<div class="d-flex flex-row">
										<div class="container w-25 p-1"><img src="'.$row['prodImg'].'" width="100" height="100"></div>
										<div class="container">
											<h4>'.$row['prodName'].'</h4>
											<h6 class="d-block">Quantity: '.$row['Qty'].'</h6>
											<h6 class="d-block">RM'.$row['price'].'</h6>
											<form method="post">
												<button type="submit" name="deleteCart" class="btn btn-light btn-sm btn-block" value='.$row['prodID'].'>
													<img src="Images/bin.png" width="24" height="24" alt=""/>
												</button>
											<form>
										</div>
									</div>	
								</div>
							</div>
						';
				}
			 }
			 else{
				 //no items in cart
				 echo 'No Items in cart';
			 }

			 echo'
						<hr>
					<button type="submit" name="checkout" class="btn btn-light btn-lg"><a href="checkout.php">Checkout</a></button>
				</div>
			 ';
		 }
		 else{
			 header("location:Login.php");
		 }
?>
	</div>		
</div>	
</body>	
<footer id="footer"></footer>