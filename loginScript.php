<?php

if(isset($_POST["submit"])){
	$username = $_POST["uId"]; 
	$pwd = $_POST["pwd"];

	require_once 'dbConnect.php';
	require_once 'functions.php';

	loginUser($conn, $username, $pwd);
}
else{
	header("location:login.php");
		
	exit();
}