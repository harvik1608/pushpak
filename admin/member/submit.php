<?php
	session_start(); 
	include dirname(__DIR__).'/common.php';

	if(isset($_GET['action']) && $_GET['action'] != "") {
		$member = fetchRowData("member.json",$_GET["no"]);
		removeData("member.json",$_GET['no']);
		if($member["avatar"] != "" && file_exists("uploads/".$member["avatar"])) {
			unlink("uploads/".$member["avatar"]);
		}
		$redirect_url = "http://localhost/pushpak/admin/member/list.php";
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
			$post["designation"] = rawurlencode($post["designation"]);
			unset($post["redirect_url"]);
			insertData("member.json",$post);	
			$_SESSION["error"] = "Member added successfully.";
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
			$post["designation"] = rawurlencode($post["designation"]);
			unset($post["redirect_url"]);
			updateData("member.json",$post["no"],$post);	
			$_SESSION["error"] = "Member edited successfully.";
		}
	}
	header("location: ".$redirect_url);
?>