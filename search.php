<?php
	include('Header.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div id="masterContainer">
	<div id="main">
	<div class="container-fluid">
		<?php
			if(isset($_GET['searchSubmit'])){
				$search = mysqli_real_escape_string($conn, $_GET['search']);
				
				$sql = "SELECT * FROM product WHERE prodName LIKE '%$search%'";
				$result = mysqli_query($conn, $sql);
				$queryResult = mysqli_num_rows($result);
				
				echo '<hr>
						<h1>Search Results for "'.$_GET['search'].'"</h1>
							<hr>
				';
				
				if($queryResult > 0){
					while($row = mysqli_fetch_assoc($result)){
						
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}

				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['cakes'])){
				$sql = "SELECT * FROM product WHERE category ='Cakes';";
				$resultC = mysqli_query($conn,$sql);
				$queryResultC = mysqli_num_rows($resultC);
				
				echo '<hr>
						<h1>Cake Products</h1>
							<hr>
				';
				
				if($queryResultC > 0){
					while($row = mysqli_fetch_assoc($resultC)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['cupcakes'])){
				$sql = "SELECT * FROM product WHERE category ='Cupcakes';";
				$resultCC = mysqli_query($conn,$sql);
				$queryResultCC = mysqli_num_rows($resultCC);
				
				echo '<hr>
						<h1>Cupcake Products</h1>
							<hr>
				';
				
				if($queryResultCC > 0){
					while($row = mysqli_fetch_assoc($resultCC)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['choc'])){
				$sql = "SELECT * FROM product WHERE Flavor ='Chocolate';";
				$resultChoc = mysqli_query($conn,$sql);
				$queryResultChoc = mysqli_num_rows($resultChoc);
				
				echo '<hr>
						<h1>Chocolate Products</h1>
							<hr>
				';
				
				if($queryResultChoc > 0){
					while($row = mysqli_fetch_assoc($resultChoc)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['chees'])){
				$sql = "SELECT * FROM product WHERE Flavor ='Cheese';";
				$result = mysqli_query($conn,$sql);
				$queryResult = mysqli_num_rows($result);
				
				echo '<hr>
						<h1>Cheese Products</h1>
							<hr>
				';
				
				if($queryResult > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['vanil'])){
				$sql = "SELECT * FROM product WHERE Flavor ='Vanilla';";
				$result = mysqli_query($conn,$sql);
				$queryResult = mysqli_num_rows($result);
				
				echo '<hr>
						<h1>Vanilla Products</h1>
							<hr>
				';
				
				if($queryResult > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			else if(isset($_GET['caram'])){
				$sql = "SELECT * FROM product WHERE Flavor ='Caramel';";
				$result = mysqli_query($conn,$sql);
				$queryResult = mysqli_num_rows($result);
				
				echo '<hr>
						<h1>Caramel Products</h1>
							<hr>
				';
				
				if($queryResult > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo '
							<div class="searchGrid">
								<form action="product.php" method="get">
									<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100" value='.$row['prodID'].'>
									<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
									<div class="container text-nowrap">'.$row['prodName'].'</div>
									<div class="container">RM'.$row['price'].'</div>
									</button>
								</form>
								<br>
							</div>
						';
					}
				}
				else{
					echo "There are no results";
				}
			}
			
		?>
	</div>	
	</div>
</div>
</body>
<footer id="footer"></footer>	
</html>