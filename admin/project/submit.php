<?php
	session_start(); 
	include dirname(__DIR__).'/common.php';

	if(isset($_GET['action']) && $_GET['action'] != "") {
		$project = fetchRowData("project.json",$_GET["no"]);
		removeData("project.json",$_GET['no']);
		if($project["avatar"] != "" && file_exists("uploads/".$project["avatar"])) {
			unlink("uploads/".$project["avatar"]);
		}
		$redirect_url = "http://localhost/pushpak/admin/project/list.php";
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
			insertData("project.json",$post);	
			$_SESSION["error"] = "Project added successfully.";
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
			updateData("project.json",$post["no"],$post);	
			$_SESSION["error"] = "Project edited successfully.";
		}
	}
	header("location: ".$redirect_url);
?>