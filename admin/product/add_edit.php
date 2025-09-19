<?php 
	include dirname(__DIR__).'/header.php';
	$site = fetchData("settings.json");
	$categories = fetchData("category.json");
	$custom_arr = [];
	if($categories) {
		foreach($categories as $category) {
			$custom_arr[$category["no"]] = rawurldecode($category["name"]);
		}
	}
	$_src = $site[0]["website_url"]."admin/product/submit.php";

	$module_name = "New Product";
	$button = "Create";
	$action = "add";
	$no = time();
	$product = array();
	if(isset($_GET["no"]) && trim($_GET["no"]) != "") {
		$module_name = "Edit Product";
		$button = "Save";
		$action = "edit";
		$no = $_GET["no"];
		$product = fetchRowData("product.json",$_GET["no"]);
	}
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Product List</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/product/list.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Product List</a>
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
					<input type="hidden" name="redirect_url" value="<?php echo $site[0]["website_url"]; ?>admin/product/list.php" />
					<input type="hidden" name="old_photo" value="<?php echo isset($product['avatar']) ? $product['avatar'] : ''; ?>" />
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Product Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter product name" value="<?php echo isset($product['name']) ? rawurldecode($product['name']) : ''; ?>" autofocus required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Product Category</label>
								<select class="select" name="category_id" id="category_id" required>
									<option value="">Choose option</option>
									<?php
										if(!empty($categories)) {
											foreach($categories as $key => $val) {
									?>
												<option value="<?php echo $val['no']; ?>"><?php echo rawurldecode($val['name']); ?></option>
									<?php
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Product Amount</label>
								<input type="number" class="form-control" name="amount" id="amount" placeholder="Enter product amount" value="<?php echo isset($product['amount']) ? rawurldecode($product['amount']) : ''; ?>" min="0" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Product Status</label>
								<select class="select" name="is_active" id="is_active">
									<option value="1" <?php echo isset($product['is_active']) && $product['is_active'] == 1 ? "selected" : ""; ?>>Active</option>
									<option value="0" <?php echo isset($product['is_active']) && $product['is_active'] == 0 ? "selected" : ""; ?>>Inactive</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Product Photo</label>
								<input type="file" class="form-control" name="photo" id="photo" />
								<?php
									if(isset($product['avatar']) && $product['avatar'] != "" && file_exists("uploads/".$product['avatar'])) {
										echo '<br><img src="uploads/'.$product['avatar'].'" alt="product" class="img img-thumbnail" style="width: 5%;">';
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
	var page_title = "Product List";
	$(document).ready(function(){
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				