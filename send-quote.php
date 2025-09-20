<?php 
	include 'admin/common.php';

	$post = $_POST;
	$post['name'] = rawurlencode($post['name']);
	$post['phone'] = rawurlencode($post['phone']);
	$post['email'] = rawurlencode($post['email']);
	$post['message'] = rawurlencode($post['message']);
	$post["created_at"] = date("Y-m-d H:i:s");
	insertData("quote.json",$post);

	echo json_encode(["status" => 200,"message" => "Your request has been sent."]);
	exit;
?>