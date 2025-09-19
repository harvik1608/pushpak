<?php 
	session_start();
	include 'common.php';

	$post = $_POST;
	$jsondata = fetchData("auth.json");
	if(isset($jsondata["email"]) && $jsondata["email"] == $post["email"]) {
		if($jsondata["password"] == md5($post["password"])) {
			$_SESSION["jsondata"] = $jsondata;
			header("location: dashboard.php");	
		} else {
			$_SESSION["error"] = "Password is wrong.";
			header("location: index.php");	
		}
	} else {
		$_SESSION["error"] = "Email not found.";
		header("location: index.php");
	}
?>