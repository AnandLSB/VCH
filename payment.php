<body>
<div id="masterContainer">
	<div id="main">
<?php
	include('Header.php');

	if(isset($_POST['pay'])){
		$userID = $_SESSION['userid'];
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		
		$sql = "INSERT INTO custOrder (userId, Name, Contact, prodID, Qty, Address) SELECT '$userID', '$name', '$contact', prodID, Qty, '$address' FROM cart WHERE 				userId='$userID';";
			
		if($result = mysqli_query($conn, $sql) === TRUE){
				 //query successful
				 echo '
				 		<div class="container-fluid d-flex justify-content-center">
							<h2 class="d-block pt-5">Payment Successful!</h2>
							<br>
						</div>
						<div class="container-fluid d-flex justify-content-center">
							<p class="d-block"><a href="index.php">Return to home</a></p>
						</div>
				 ';
			
			 	$sqlDelete = "DELETE FROM cart WHERE userId='$userID';";
			 	$resultDelete = mysqli_query($conn, $sqlDelete);
		 }	
		 else{
				 //query failure
				 echo 'no work';
		 }
	}
?>
	</div>	
</div>	
</body>	
<footer id="footer"></footer>