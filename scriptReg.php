<?php

if (isset($_POST["submit"])){ 
	
	$name = $_POST["name"];
	$email = $_POST["email"]; 
	$username = $_POST["uId"];
 	$pwd = $_POST["pwd"]; 
	$pwdRepeat = $_POST["pwdRepeat"]; 

	require_once 'dbConnect.php'; 
	require_once 'functions.php'; 
	
	if(invalidUid($username) == true){
		header("location:register.php?error=invalidUid"); 
		
		exit(); 
	}
	if(invalidEmail($email) == true){
		header("location:register.php?error=invalidemail"); 
		
		exit(); 
	}
	if(pwdMatch($pwd, $pwdRepeat) == true){
		header("location:register.php?error=pwdnotmatch"); 
		
		exit(); 
	}
	if(uidExists($conn, $username, $email) == true){
		header("location:register.php?error=usrnametaken"); 
		
		exit(); 
	}
	

	createUser($conn, $name, $email, $username, $pwd); 

}
else{
	header("location:register.php"); 
	exit();
}