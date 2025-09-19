<?php
	session_start(); 
	include dirname(__DIR__).'/common.php';

	if(isset($_GET['action']) && $_GET['action'] != "") {
		$feedback = fetchRowData("feedback.json",$_GET["no"]);
		removeData("feedback.json",$_GET['no']);
		if($feedback["avatar"] != "" && file_exists("uploads/".$feedback["avatar"])) {
			unlink("uploads/".$feedback["avatar"]);
		}
		$redirect_url = "http://localhost/pushpak/admin/feedback/list.php";
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
			$post["city"] = rawurlencode($post["city"]);
			$post["comment"] = rawurlencode($post["comment"]);
			unset($post["redirect_url"]);
			insertData("feedback.json",$post);	
			$_SESSION["error"] = "Feedback added successfully.";
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
			$post["city"] = rawurlencode($post["city"]);
			$post["comment"] = rawurlencode($post["comment"]);
			unset($post["redirect_url"]);
			updateData("feedback.json",$post["no"],$post);	
			$_SESSION["error"] = "Feedback edited successfully.";
		}
	}
	header("location: ".$redirect_url);
?>