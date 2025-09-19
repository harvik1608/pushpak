<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="robots" content="">
		<title>Pushpak Hydro Tech</title>
		
		<script src="../assets/js/theme-script.js"></script>
		
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/animate.css">
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="../assets/plugins/tabler-icons/tabler-icons.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<div class="main-wrapper">
			<div class="header">
				<div class="main-header">
					<div class="header-left active">
						<a href="index.html" class="logo logo-normal"><img src="../assets/img/logo.svg" alt="Img"></a>
						<a href="index.html" class="logo logo-normal"><img src="../assets/img/logo-white.svg" alt="Img"></a>
						<a href="index.html" class="logo logo-normal"><img src="../assets/img/logo-small.png" alt="Img"></a>
					</div>
					<a id="mobile_btn" class="mobile_btn" href="#sidebar">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<ul class="nav user-menu">
						<li class="nav-item dropdown has-arrow main-drop profile-nav">
							<a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
								<span class="user-info p-0">
									<span class="user-letter">
										<img src="../assets/img/profiles/avator1.jpg" alt="Img" class="img-fluid">
									</span>
								</span>
							</a>
							<div class="dropdown-menu menu-drop-user">
								<div class="profileset d-flex align-items-center">
									<div>
										<h6 class="fw-medium">John Smilga</h6>
										<p>Admin</p>
									</div>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="ti ti-user-circle me-2"></i>MyProfile</a>
								<a class="dropdown-item" href="sales-report.html"><i class="ti ti-file-text me-2"></i>Reports</a>
								<a class="dropdown-item" href="general-settings.html"><i class="ti ti-settings-2 me-2"></i>Settings</a>
								<hr class="my-2">
								<a class="dropdown-item logout pb-0" href="signin.html"><i class="ti ti-logout me-2"></i>Logout</a>
							</div>
						</li>
					</ul>
					<div class="dropdown mobile-user-menu">
						<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
							aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="general-settings.html">Settings</a>
							<a class="dropdown-item" href="signin.html">Logout</a>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar" id="sidebar">
				<div class="sidebar-logo">
					<a href="index.html" class="logo logo-normal">
						<img src="../assets/img/logo.svg" alt="Img">
					</a>
					<a href="index.html" class="logo logo-white">
						<img src="../assets/img/logo-white.svg" alt="Img">
					</a>
					<a href="index.html" class="logo-small">
						<img src="../assets/img/logo-small.png" alt="Img">
					</a>
					<a id="toggle_btn" href="javascript:void(0);">
						<i data-feather="chevrons-left" class="feather-16"></i>
					</a>
				</div>
				<div class="modern-profile p-3 pb-0">
					<div class="text-center rounded bg-light p-3 mb-4 user-profile">
						<div class="avatar avatar-lg online mb-3">
							<img src="../assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
						</div>
						<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
						<p class="fs-12 mb-0">System Admin</p>
					</div>
					<div class="sidebar-nav mb-3">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
							<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
							<li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
							<li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
						</ul>
					</div>
				</div>
				<div class="sidebar-header p-3 pb-0 pt-2">
					<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
						<div class="avatar avatar-md onlin">
							<img src="../assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
						</div>
						<div class="text-start sidebar-profile-info ms-2">
							<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
							<p class="fs-12">System Admin</p>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between menu-item mb-3">
						<div>
							<a href="index.html" class="btn btn-sm btn-icon bg-light">
								<i class="ti ti-layout-grid-remove"></i>
							</a>
						</div>
						<div>
							<a href="chat.html" class="btn btn-sm btn-icon bg-light">
								<i class="ti ti-brand-hipchat"></i>
							</a>
						</div>
						<div>
							<a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
								<i class="ti ti-message"></i>
							</a>
						</div>
						<div class="notification-item">
							<a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
								<i class="ti ti-bell"></i>
								<span class="notification-status-dot"></span>
							</a>
						</div>
						<div class="me-0">
							<a href="general-settings.html" class="btn btn-sm btn-icon bg-light">
								<i class="ti ti-settings"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Main</h6>
								<ul>
									<li class="active"><a href="product-list.html"><i data-feather="box"></i><span>Dashboard</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Quote List</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Project List</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Service List</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Product List</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Member List</span></a></li>
									<li><a href="product-list.html"><i data-feather="box"></i><span>Feedback List</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-wrapper">
				<div class="content">
					<div class="welcome-wrap mb-4">
						<div class=" d-flex align-items-center justify-content-between flex-wrap">
							<div class="mb-3">
								<h2 class="mb-1 text-white">Welcome Pushpak Hydro Tech</h2>
								<p class="text-light"><?php echo date('l'); ?> - <?php echo date('d M, Y'); ?></p>
							</div>
						</div>
						<div class="welcome-bg">
							<img src="../assets/img/bg/welcome-bg-02.svg" alt="img" class="welcome-bg-01">
							<img src="../assets/img/bg/welcome-bg-01.svg" alt="img" class="welcome-bg-03">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Quotes</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Projects</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Services</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Products</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Members</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center overflow-hidden">
										<span class="avatar avatar-lg bg-primary flex-shrink-0">
											<i class="ti ti-building fs-16"></i>
										</span>
										<div class="ms-2 overflow-hidden">
											<p class="fs-12 fw-medium mb-1 text-truncate">Total Feedbacks</p>
											<h4>950</h4>
										</div>
									</div>
									<div id="total-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../assets/js/jquery-3.7.1.min.js"></script>
		<script src="../assets/js/feather.min.js"></script>
		<script src="../assets/js/jquery.slimscroll.min.js"></script>
		<script src="../assets/js/dataTables.bootstrap5.min.js"></script>
		<script src="../assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>