<?php 
	include('Header.php');
?>

<!doctype html>
<html>
<body>
<div id="masterContainer">
	<div id="main">
	<br>
	<div class="container-fluid">
		<div class="checkoutGrid">
			<div>
				<h4>Billing Information</h4>
				<hr>
				<form action="payment.php" method="post">
				<h6>Name</h6>
			  	<input name="name" type="text" required>
				<br><br>
				<h6>Phone Number</h6>
				<input name="contact" type="text" required>
				<br><br>
				<h6>Payment Method</h6>
				<input type="radio" required>
				<img src="Images/credit-card.png" width="24" height="24" alt=""/> Credit Card
				<hr>
				<h4>Shipping Information</h4>
				<hr>
				<h6>Delivery Address</h6>
				<input name="address" type="text" required>
				<br><br>
				<h6>Delivery Instruction</h6>
				<input type="text">
				<br><br>
				<button type="submit" name="pay" class="btn btn-light btn-lg btn-block">Pay</button>
				</form>	
		  </div>
			
			<div>
				<?php
					if(!empty($_SESSION['useruid'])){
						$userID = $_SESSION['userid'];

						$sqlCart = "SELECT * FROM cart WHERE userId='$userID';";
						$resultCart = mysqli_query($conn, $sqlCart);
						$queryCart = mysqli_num_rows($resultCart);
						$sqlTotal = "SELECT SUM(Total) AS Total FROM cart WHERE userId='$userID';";
						$resultTotal = mysqli_query($conn, $sqlTotal);
						$total = mysqli_fetch_assoc($resultTotal);
						
						echo '
							<h4>Products</h4><hr>
						';

						if($queryCart > 0){
							//if there items in cart
							while($row = mysqli_fetch_assoc($resultCart)){
									echo '
										<div class="container w-100">
											<div class="card p-1">
												<div class="d-flex flex-row">
													<div class="container w-25 p-1"><img src="'.$row['prodImg'].'" width="100" height="100"></div>
													<div class="container">
														<h4>'.$row['prodName'].'</h4>
														<h6 class="d-block">Quantity: '.$row['Qty'].'</h6>
														<h6 class="d-block">RM'.$row['price'].'</h6>
													</div>
												</div>	
											</div>
										</div>
										<hr>
									';
									  
							}
							echo '
								<div class="container d-flex justify-content-center">
									<h5>Total(RM): '.$total['Total'].'</h5>
								</div>
							';
						}
						else{
							//no items in cart
							header("location:index.php");
							exit();
						}
					}
				?>
			</div>
		</div>
	</div>
	</div>	
</div>		
</body>
<footer id="footer"></footer>	
</html>