<?php 
	include ('Header.php');

	$sqlProd1 = "SELECT prodID, prodName, prodImg, price FROM product WHERE category='Cakes' ORDER BY RAND() LIMIT 3;";
	$result = mysqli_query($conn, $sqlProd1);

	$sqlProd2 = "SELECT prodID, prodName, prodImg, price FROM product WHERE category='Cupcakes' ORDER BY RAND() LIMIT 3;";
	$result1 = mysqli_query($conn, $sqlProd2);
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
	<div class="row container-fluid">
	  <div class="col p-2 d-flex justify-content-center">
	    <div id="carouselExampleIndicators1" class="carousel slide w-75" data-ride="carousel" style="background-color: white">
	      <ol class="carousel-indicators">
		      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
		      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
		      <div class="carousel-item active"> <img class="d-block mx-auto" src="Images/banner1.jpeg" width="1080" height="320" alt="First slide">
	          </div>
		      <div class="carousel-item"> <img class="d-block mx-auto" src="Images/banner2.jpeg" width="1080" height="320" alt="Second slide">
	          </div>
		      <div class="carousel-item"> <img class="d-block mx-auto" src="Images/banner3.jpeg" width="1080" height="320" alt="Third slide">
	          </div>
	      </div>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
</div>
<div class="row pastel-pink">
  <div class="col d-flex justify-content-center pt-3 pb-3">RECOMMENDED CAKES</div>
</div>
<div class="container-fluid">
	<hr>	
</div>

<div class="row container-fluid">
	<?php
	  while($row = mysqli_fetch_assoc($result)){
		  echo'
		  	<div class="searchGrid-index w-25">
				<form action="product.php" method="get">
					<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100 h-75" value='.$row['prodID'].'>
					<div class="container"><img src="'.$row['prodImg'].'" width="200" height="200" "</div>
					<div class="container text-nowrap">'.$row['prodName'].'</div>
					<div class="container">RM'.$row['price'].'</div>
					</button>
				</form>
				<br>
			</div>
		  ';
	  }
	?>
</div>
<br><br><br><br>
<div class="row pastel-pink">
  <div class="col d-flex justify-content-center pt-3 pb-3">RECOMMENDED CUPCAKES</div>
</div>
<div class="container-fluid">
	<hr>	
</div>
<div class="row container-fluid">
  <?php
	  while($row2 = mysqli_fetch_assoc($result1)){
		  echo'
		  	<div class="searchGrid-index w-25">
				<form action="product.php" method="get">
					<button name="productDetails" type="submit" class="btn btn-lg btn-outline-dark w-100 h-75" value='.$row2['prodID'].'>
					<div class="container"><img src="'.$row2['prodImg'].'" width="200" height="200" "</div>
					<div class="container text-nowrap">'.$row2['prodName'].'</div>
					<div class="container">RM'.$row2['price'].'</div>
					</button>
				</form>
				<br>
			</div>
		  ';
	  }
	?>
</div>
</div>	
</div>
</body>
	<footer id="footer">
	</footer>
</html>