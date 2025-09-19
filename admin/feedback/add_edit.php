<?php 
	include dirname(__DIR__).'/header.php';
	$site = fetchData("settings.json");
	$_src = $site[0]["website_url"]."admin/feedback/submit.php";

	$module_name = "New Feedback";
	$button = "Create";
	$action = "add";
	$no = time();
	$feedback = array();
	if(isset($_GET["no"]) && trim($_GET["no"]) != "") {
		$module_name = "Edit Feedback";
		$button = "Save";
		$action = "edit";
		$no = $_GET["no"];
		$feedback = fetchRowData("feedback.json",$_GET["no"]);
	}
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Feedback List</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/feedback/list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Feedback List</a>
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
					<input type="hidden" name="redirect_url" value="<?php echo $site[0]["website_url"]; ?>admin/feedback/list.php" />
					<input type="hidden" name="old_photo" value="<?php echo isset($feedback['avatar']) ? $feedback['avatar'] : ''; ?>" />
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Name*</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo isset($feedback['name']) ? rawurldecode($feedback['name']) : ''; ?>" autofocus required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">City*</label>
								<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation" value="<?php echo isset($feedback['designation']) ? rawurldecode($feedback['designation']) : ''; ?>" autofocus required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Star*</label>
								<select class="select" name="star" id="star" required>
									<option value="">Choose option</option>
									<?php
										for($i = 1; $i <= 5; $i ++) {
									?>
											<option value="<?php echo $i; ?>" <?php echo isset($feedback['star']) && $feedback['star'] == $i ? "selected" : ""; ?>><?php echo $i; ?></option>
									<?php
										} 
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select class="select" name="is_active" id="is_active">
									<option value="1" <?php echo isset($feedback['is_active']) && $feedback['is_active'] == 1 ? "selected" : ""; ?>>Active</option>
									<option value="0" <?php echo isset($feedback['is_active']) && $feedback['is_active'] == 0 ? "selected" : ""; ?>>Inactive</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Comment</label>
								<textarea class="form-control" name="comment" id="comment" placeholder="Enter comment"><?php echo isset($feedback['comment']) ? rawurldecode($feedback['comment']) : ''; ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Photo</label>
								<input type="file" class="form-control" name="photo" id="photo" />
								<?php
									if(isset($feedback['avatar']) && $feedback['avatar'] != "" && file_exists("uploads/".$feedback['avatar'])) {
										echo '<br><img src="uploads/'.$feedback['avatar'].'" alt="product" class="img img-thumbnail" style="width: 5%;">';
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
	var page_title = "Feedback List";
	$(document).ready(function(){
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				