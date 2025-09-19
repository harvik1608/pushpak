<?php include dirname(__DIR__).'/header.php'; ?>
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">Quote List</h4>
			<h6>Total quotes found.</h6>
		</div>
	</div>
	<!-- <div class="page-btn">
		<a href="#" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#add-biller"><i class="ti ti-circle-plus me-1"></i>Add Biller</a>
	</div> -->
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
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile No.</th>
						<th>Message</th>
						<th>Sent On</th>
						<th class="no-sort"></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
<script src="<?php echo $site[0]["website_url"]; ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $site[0]["website_url"]; ?>assets/js/dataTables.bootstrap5.min.js"></script>
<script>
	var page_title = "Quote List";
	$(document).ready(function(){
		// $('.datatable').DataTable({
		// 	"bFilter": true,
		// 	"sDom": 'fBtlpi',  
		// 	"ordering": true,
		// 	"language": {
		// 		search: ' ',
		// 		sLengthMenu: '_MENU_',
		// 		searchPlaceholder: "Search",
		// 		sLengthMenu: 'Row Per Page _MENU_ Entries',
		// 		info: "_START_ - _END_ of _TOTAL_ items",
		// 		paginate: {
		// 			next: ' <i class=" fa fa-angle-right"></i>',
		// 			previous: '<i class="fa fa-angle-left"></i> '
		// 		},
		// 	 },
		// 	initComplete: (settings, json)=>{
		// 		$('.dataTables_filter').appendTo('#tableSearch');
		// 		$('.dataTables_filter').appendTo('.search-input');

		// 	},	
		// });
	})
</script>
<?php include dirname(__DIR__).'\footer.php'; ?> 
				