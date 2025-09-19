<?php
	session_start(); 
	include dirname(__DIR__).'/common.php';

	if(isset($_GET['action']) && $_GET['action'] != "") {
		$category = fetchRowData("category.json",$_GET["no"]);
		removeData("category.json",$_GET['no']);
		$redirect_url = "http://localhost/pushpak/admin/category/list.php";
	} else {
		$post = $_POST;
		$redirect_url = $post["redirect_url"];
		if($post["action"] == "add") {
			$avatar = "";
			if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
		        $targetDir = "uploads/";
		        $originalName = $_FILES["photo"]["name"];
		        $fileTmpPath = $_FILES["photo"]["tmp_name"];
		        $fileType = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

		        $avatar = time().'.'.$fileType;
	            $targetFilePath = $targetDir . $avatar;
	            if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
	                // echo "File uploaded successfully as: " . $avatar;
	            }
		    }
		    $post["avatar"] = $avatar;
			$post["name"] = rawurlencode($post["name"]);
			unset($post["redirect_url"]);
			insertData("category.json",$post);	
			$_SESSION["error"] = "Categoty added successfully.";
		} else {
			$avatar = $post["old_photo"];
			if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
		        $targetDir = "uploads/";
		        $originalName = $_FILES["photo"]["name"];
		        $fileTmpPath = $_FILES["photo"]["tmp_name"];
		        $fileType = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

		        $avatar = time().'.'.$fileType;
	            $targetFilePath = $targetDir . $avatar;
	            if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
	                // echo "File uploaded successfully as: " . $avatar;
	            }
		    }
		    $post["avatar"] = $avatar;
			$post["name"] = rawurlencode($post["name"]);
			unset($post["redirect_url"]);
			updateData("category.json",$post["no"],$post);	
			$_SESSION["error"] = "Category edited successfully.";
		}
	}
	header("location: ".$redirect_url);
?>