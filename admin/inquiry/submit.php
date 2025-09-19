<?php
	session_start(); 
	include dirname(__DIR__).'/common.php';

	if(isset($_GET['action']) && $_GET['action'] != "") {
		$inquiry = fetchRowData("inquiry.json",$_GET["no"]);
		removeData("inquiry.json",$_GET['no']);
		$redirect_url = "http://localhost/pushpak/admin/inquiry/list.php";
	}
	header("location: ".$redirect_url);
?>