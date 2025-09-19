<?php 
	include 'header.php'; 
	$quotes = 0;
	$projects = fetchData("project.json");
	$services = fetchData("service.json");
	$products = fetchData("product.json");
	$categories = fetchData("category.json");
	$members = fetchData("member.json");
	$feedbacks = fetchData("feedback.json");
?>
<div class="welcome-wrap mb-4">
	<div class=" d-flex align-items-center justify-content-between flex-wrap">
		<div class="mb-3">
			<h2 class="mb-1 text-white">Welcome Pushpak Hydro Tech</h2>
			<p class="text-light"><?php echo date('l'); ?> - <?php echo date('d M, Y'); ?></p>
		</div>
	</div>
	<div class="welcome-bg">
		<img src="<?php echo $site[0]["website_url"]; ?>assets/img/bg/welcome-bg-02.svg" alt="img" class="welcome-bg-01">
		<img src="<?php echo $site[0]["website_url"]; ?>assets/img/bg/welcome-bg-01.svg" alt="img" class="welcome-bg-03">
	</div>
</div>
<div class="row">
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-secondary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Quotes</p>
						<h4>0</h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-primary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Projects</p>
						<h4><?php echo count($projects); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-secondary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Services</p>
						<h4><?php echo count($services); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-primary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Categories</p>
						<h4><?php echo count($categories); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-primary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Products</p>
						<h4><?php echo count($products); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-secondary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Members</p>
						<h4><?php echo count($members); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 d-flex">
		<div class="card flex-fill">
			<div class="card-body d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center overflow-hidden">
					<span class="avatar avatar-lg bg-primary flex-shrink-0">
						<i class="ti ti-building fs-16"></i>
					</span>
					<div class="ms-2 overflow-hidden">
						<p class="fs-12 fw-medium mb-1 text-truncate">Total Feedbacks</p>
						<h4><?php echo count($feedbacks); ?></h4>
					</div>
				</div>
				<div id="total-chart"></div>
			</div>
		</div>
	</div>
</div>
<script>
	var page_title = "Dashboard";
</script>
<?php include 'footer.php'; ?>
				