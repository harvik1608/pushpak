<?php 
	include dirname(__DIR__).'/header.php';
	$site = fetchData("settings.json");
	$_src = $site[0]["website_url"]."admin/category/submit.php";

	$module_name = "New Category";
	$button = "Create";
	$action = "add";
	$no = time();
	$category = array();
	if(isset($_GET["no"]) && trim($_GET["no"]) != "") {
		$module_name = "Edit Category";
		$button = "Save";
		$action = "edit";
		$no = $_GET["no"];
		$category = fetchRowData("category.json",$_GET["no"]);
	}
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Category List</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/category/list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Category List</a>
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
					<input type="hidden" name="redirect_url" value="<?php echo $site[0]["website_url"]; ?>admin/category/list.php" />
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Category Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter category name" value="<?php echo isset($category['name']) ? rawurldecode($category['name']) : ''; ?>" autofocus required  />
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Category Status</label>
								<select class="select" name="is_active" id="is_active">
									<option value="1" <?php echo isset($category['is_active']) && $category['is_active'] == 1 ? "selected" : ""; ?>>Active</option>
									<option value="0" <?php echo isset($category['is_active']) && $category['is_active'] == 0 ? "selected" : ""; ?>>Inactive</option>
								</select>
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
	var page_title = "Category List";
	$(document).ready(function(){
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				