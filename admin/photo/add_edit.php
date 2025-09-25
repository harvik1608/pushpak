<?php 
	include dirname(__DIR__).'/header.php';
	$site = fetchData("settings.json");
	$_src = $site[0]["website_url"]."admin/photo/submit.php";

	$module_name = "New Photo";
	$button = "Upload";
	$action = "add";
	$no = time();
	$photo = array();
	if(isset($_GET["no"]) && trim($_GET["no"]) != "") {
		$module_name = "Edit Photo";
		$button = "Save";
		$action = "edit";
		$no = $_GET["no"];
		$photo = fetchRowData("photo.json",$_GET["no"]);
	}
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Photo List</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/photo/list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Photo List</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title"><?php echo $module_name; ?></h5>
			</div>
			<div class="card-body">
				<form action="<?php echo $_src; ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="no" value="<?php echo $no; ?>" />
					<input type="hidden" name="action" value="<?php echo $action; ?>" />
					<input type="hidden" name="redirect_url" value="<?php echo $site[0]["website_url"]; ?>admin/photo/list.php" />
					<input type="hidden" name="old_photo" value="<?php echo isset($member['avatar']) ? $member['avatar'] : ''; ?>" />
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Photo</label>
								<input type="file" class="form-control" name="photo" id="photo" />
								<?php
									if(isset($photo['avatar']) && $photo['avatar'] != "" && file_exists("uploads/".$photo['avatar'])) {
										echo '<br><img src="uploads/'.$photo['avatar'].'" alt="product" class="img img-thumbnail" style="width: 5%;">';
									} 
								?>
							</div>
						</div>
					</div>
					<div class="text-end">
						<button type="reset" class="btn btn-secondary">Clear</button>
						<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	var page_title = "Photo List";
	$(document).ready(function(){
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				