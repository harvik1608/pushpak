<?php 
	include dirname(__DIR__).'/header.php';
	$site = fetchData("settings.json");
	$_src = $site[0]["website_url"]."admin/service/submit.php";

	$module_name = "New Service";
	$button = "Create";
	$action = "add";
	$no = time();
	$service = array();
	if(isset($_GET["no"]) && trim($_GET["no"]) != "") {
		$module_name = "Edit Service";
		$button = "Save";
		$action = "edit";
		$no = $_GET["no"];
		$service = fetchRowData("service.json",$_GET["no"]);
	}
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Service List</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/service/list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Service List</a>
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
					<input type="hidden" name="redirect_url" value="<?php echo $site[0]["website_url"]; ?>admin/service/list.php" />
					<input type="hidden" name="old_photo" value="<?php echo isset($service['avatar']) ? $service['avatar'] : ''; ?>" />
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Service Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter service name" value="<?php echo isset($service['name']) ? rawurldecode($service['name']) : ''; ?>" autofocus required  />
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Service Description</label>
								<textarea class="form-control" name="description" id="description" placeholder="Enter service description" required><?php echo isset($service['description']) ? rawurldecode($service['description']) : ''; ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Service Status</label>
								<select class="select" name="is_active" id="is_active">
									<option value="1" <?php echo isset($service['is_active']) && $service['is_active'] == 1 ? "selected" : ""; ?>>Active</option>
									<option value="0" <?php echo isset($service['is_active']) && $service['is_active'] == 0 ? "selected" : ""; ?>>Inactive</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Service Photo</label>
								<input type="file" class="form-control" name="photo" id="photo" />
								<?php
									if(isset($service['avatar']) && $service['avatar'] != "" && file_exists("uploads/".$service['avatar'])) {
										echo '<br><img src="uploads/'.$service['avatar'].'" alt="product" class="img img-thumbnail" style="width: 5%;">';
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
	var page_title = "Service List";
	$(document).ready(function(){
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				