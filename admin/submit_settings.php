<?php 
	session_start();
	include 'common.php';

	$post = $_POST;
	truncateData("settings.json");
	$post['about_us'] = rawurlencode($post['about_us']);
	$post['privacy_policy'] = rawurlencode($post['privacy_policy']);
	insertData("settings.json",$post);	
	
	$_SESSION["error"] = "General settings updated successfully.";
	header("location: settings.php");
?>