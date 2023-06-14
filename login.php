<?php
	include('Header.php');

	if(isset($_GET["error"])) {
		if($_GET["error"] == "wronglogin"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="login.php">&times;</a>
							<h2>Failure!</h2>
							<p>Invalid username or password!</p>
					</div>
				</div>
			';
		}
	}
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
	<div class="container-fluid p-5 mt-xl-5">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<div class="card p-5">
					<div class="card-body">
						<form action="loginScript.php" method="post">
							<h2>Login</h2>
							<br>
							<h4>Username/Email:</h4>
							<input type="text" name="uId" required>
							<h4>Password: </h4>
							<input type="password" name="pwd" required>
							<br><br>
							<button type="submit" name="submit" class="btn btn-light">Login</button>
							<button type="reset" name"btnReset" class="btn btn-light">Clear</button>
							<br><br>
							<p>Don't Have an Account? <a href="register.php">Register</a></p>
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
</html>