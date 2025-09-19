<?php 
	include dirname(__DIR__).'/header.php'; 
	$categories = fetchData("category.json");
?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Category List</h4>
			<h6>Total <?php echo count($categories); ?> categories found.</h6>
		</div>
	</div>
	<div class="page-btn">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/category/add_edit.php" class="btn btn-primary text-white"><i class="ti ti-circle-plus me-1"></i>Add Category</a>
	</div>
</div>
<div class="card">
	<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
		<div class="search-set">
			<div class="search-input">
				<span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
			</div>
		</div>
		<div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
			<div class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle btn btn-white btn-md d-inline-flex align-items-center" data-bs-toggle="dropdown">
					Status
				</a>
				<ul class="dropdown-menu  dropdown-menu-end p-3">
					<li>
						<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card-body p-0">
		<div class="table-responsive">
			<table class="table datatable">
				<thead class="thead-light">
					<tr>
						<th width="5%">#</th>
						<th width="65%">Name</th>
						<th width="10%">Status</th>
						<th width="10%" class="no-sort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($categories)) {
							foreach($categories as $key => $val) {
					?>
								<tr>
									<td><?php echo $key+1; ?></td>
									<td><?php echo rawurldecode($val['name']); ?></td>
									<td><span class="d-inline-flex align-items-center p-1 pe-2 rounded-1 text-white bg-<?php echo $val['is_active'] ? 'success' : 'danger'; ?> fs-10"><i class="ti ti-point-filled me-1 fs-11"></i><?php echo $val['is_active'] ? 'Active' : 'Inactive'; ?></span></td>
									<td class="d-flex">
										<div class="edit-delete-action d-flex align-items-center">
											<a class="me-2 p-2 d-flex align-items-center border rounded" href="<?php echo $site[0]["website_url"]; ?>admin/category/add_edit.php?no=<?php echo $val['no']; ?>">
												<i data-feather="edit" class="feather-edit"></i>
											</a>
											<a class="p-2 d-flex align-items-center border rounded" href="<?php echo $site[0]["website_url"]; ?>admin/category/submit.php?action=delete&no=<?php echo $val['no']; ?>" onclick="return confirm('Are you sure to remove this category?')">
												<i data-feather="trash-2" class="feather-trash-2"></i>
											</a>
										</div>
									</td>
								</tr>
					<?php
							}
						} 
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="<?php echo $site[0]["website_url"]; ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $site[0]["website_url"]; ?>assets/js/dataTables.bootstrap5.min.js"></script>
<script>
	var page_title = "Category List";
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				