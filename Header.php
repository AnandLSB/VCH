<?php
	session_start();

	require('dbConnect.php');
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Village Cake House</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-flex pastel-pink">
<div class="row container-head">
  <div class="col-auto d-flex justify-content-start"><a href="index.php"><img src="Images/logo3.png" width="172" height="89" alt=""/></a></div>
  <div class="col d-inline-flex m-auto" >
	<form action="search.php" method="GET">
		<input type="text" name="search" id="Search"  placeholder="Search" required>
    	<button type="submit" name="searchSubmit" class="btn btn-sm btn-light">Search</button>
	</form>  
    <button type="button" name="cart" class="btn btn-link d-flex ml-xl-2"><a href="cart.php"><img src="Images/cart.png" width="24" height="24" alt=""/></a></button>
  </div>
  <div class="col m-auto">
	  <?php
	  	if(isset($_SESSION['useruid'])){
			echo '
				<div class="col d-block d-flex justify-content-center mb-n3"><p><span class="d-block p-2">Hello, '.$_SESSION['useruid'].'!</span></p></div>
				<div class="col d-block d-flex justify-content-center"><a href="logout.php"><span class="d-block p-2">Logout</span></a></div>
			';
		}
	  	else{
			echo '<div class="col d-block d-flex justify-content-center"><a href="login.php"><span class="d-block p-2">Login</span></a></div>';
		}
	  ?>
	</div>		
  
</div>
<div class="row container-head">
  <div class="col">
	  <form action="search.php" method="get">
	  	<button type="submit" name="cakes" class="btn btn-sm btn-block">Cakes</button>
	  </form>
  </div>
  <div class="col">
	  <form action="search.php" method="get">
    	<button type="submit" name="cupcakes" class="btn btn-sm btn-block">Cupcakes</button>
	  </form>	  
  </div>
  <div class="col">
<div class="dropdown show"> <a class="btn btn-sm dropdown-toggle btn-block" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Flavors </a>
    <div class="dropdown-menu">
		<form action="search.php" method="get">
			<button type="submit" name="choc" class="btn btn-sm dropdown-item">Chocolate</button>
			<div class="dropdown-divider"></div>
			<button type="submit" name="chees" class="btn btn-sm dropdown-item">Cheese</button> 
			<div class="dropdown-divider"></div>
			<button type="submit" name="vanil" class="btn btn-sm dropdown-item">Vanilla</button>
			<div class="dropdown-divider"></div>
			<button type="submit" name="caram" class="btn btn-sm dropdown-item">Caramel</button>
		</form>
        
        
	</div>
    </div>
  </div>
  <div class="col">
	  <form action="contact.php">
    <button type="submit" class="btn btn-sm btn-block">Contact</button>
	</form>	  
  </div>
  <div class="col">
	  <form action="about.php">
    <button type="submit" class="btn btn-sm btn-block">About Us</button>
	</form>	  
  </div>
</div>
</div>	

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
