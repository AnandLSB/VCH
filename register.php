<?php
	include('Header.php');
	
	if(isset($_GET["error"])) {
		if($_GET["error"] == "invalidUid"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="register.php">&times;</a>
							<h2>Failure!</h2>
							<p>Please choose a proper username!</p>
					</div>
				</div>
			';
		}
		else if($_GET["error"] == "invalidemail"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="register.php">&times;</a>
							<h2>Failure!</h2>
							<p>Email invalid!</p>
					</div>
				</div>
			';
		}
		else if($_GET["error"] == "pwdnotmatch"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="register.php">&times;</a>
							<h2>Failure!</h2>
							<p>Passwords unidentical!</p>
					</div>
				</div>
			';
		}
		else if($_GET["error"] == "stmtfailed"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="register.php">&times;</a>
							<h2>Failure!</h2>
							<p>Something went wrong! :(</p>
					</div>
				</div>
			';
		}
		else if($_GET["error"] == "usrnametaken"){
			echo '
				<div class="overlay">
					<div class="popup">
						<a class="close" href="register.php">&times;</a>
							<h2>Failure!</h2>
							<p>Username taken!</p>
					</div>
				</div>
			';
		}
		else if($_GET["error"] == "none"){
			echo '<div class="overlay">
					<div class="popup">
						<a class="close" href="login.php">&times;</a>
							<h2>Success!</h2>
							<p>Registration successful! Close this message to enter the Login page</p>
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
						<form action="scriptReg.php" method="post">
							<h3>Register</h3>
							<br>
							<h5>Full Name:</h5>
							<input type="text" name="name" required>
							<h5>Email:</h5>
							<input type="text" name="email" required>
							<h5>Username:</h5>
							<input type="text" name="uId" required>
							<h5>Password:</h5>
							<input type="password" name="pwd" required>
							<h5>Re-enter Password</h5>
							<input type="password" name="pwdRepeat" required>
							<br><br>
							<button type="submit" name="submit" class="btn btn-light">Register</button>
							<button type="reset" name="btnReset" class="btn btn-light">Clear</button>
							<br><br>
							<p>Already Have an Account? <a href="login.php">Login</a></p>
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