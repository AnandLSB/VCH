<?php
	include('Header.php');
	
	if(isset($_GET['submitmsg'])){
		echo '
			<div class="overlay">
				<div class="popup">
					<a class="close" href="contact.php">&times;</a>
					<h2>Success!</h2>
					<p>Message sent, we will get back to you soon!</p>
				</div>
			</div>
		 ';
	}
?>

<body>
	<div id="masterContainer">
		<div id="main">
			<div class="container-fluid p-5 mt-xl-5">
				<div class="row">
					<div class="col d-flex justify-content-center">
						<div class="card p-5">
							<div class="card-body">
								<form method="get">
									<h2>Send us a message!</h2>
									<br>
									<h4>Name:</h4>
									<input type="text" name="uId" class="w-100" required>
									<h4>Email: </h4>
									<input type="text" name="email" class="w-100" required>
									<h4>Message: </h4>
									<input type="text" name="email" class="w-100" required>
									<br><br>
									<button type="submit" name="submitmsg" class="btn btn-light">Submit</button>
									<br><br>
								</form>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer id="footer"></footer>