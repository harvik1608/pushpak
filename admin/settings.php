<?php 
	include 'header.php'; 
	$settings = fetchData("settings.json");
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">
<div class="page-header">
	<div class="add-item d-flex">
		<div class="page-title">
			<h4 class="fw-bold">General Settings</h4>
			<h6>(*) indicates required field.</h6>
		</div>
	</div>
	<div class="page-btn mt-0">
		<a href="<?php echo $site[0]["website_url"]; ?>admin/dashboard.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Dashboard</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">General Settings</h5>
			</div>
			<div class="card-body">
				<form action="submit_settings.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="website_url" value="<?php echo isset($settings[0]['website_url']) ? $settings[0]['website_url'] : ''; ?>" />
					<div class="row">
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Site Name</label>
								<input type="text" class="form-control" name="site_name" id="site_name" placeholder="Enter site name" value="<?php echo isset($settings[0]['site_name']) ? $settings[0]['site_name'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Site Email</label>
								<input type="text" class="form-control" name="site_email" id="site_email" placeholder="Enter site email" value="<?php echo isset($settings[0]['site_email']) ? $settings[0]['site_email'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Site Phone</label>
								<input type="text" class="form-control" name="site_phone" id="site_phone" placeholder="Enter site phone" value="<?php echo isset($settings[0]['site_phone']) ? $settings[0]['site_phone'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Site Year</label>
								<input type="text" class="form-control" name="site_year" id="site_year" placeholder="Enter site year" value="<?php echo isset($settings[0]['site_year']) ? $settings[0]['site_year'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Site Address</label>
								<input type="text" class="form-control" name="site_address" id="site_address" placeholder="Enter site address" value="<?php echo isset($settings[0]['site_address']) ? rawurldecode($settings[0]['site_address']) : ''; ?>" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Completed Projects</label>
								<input type="text" class="form-control" name="site_completed_projects" id="site_completed_projects" placeholder="Enter completed projects" value="<?php echo isset($settings[0]['site_completed_projects']) ? $settings[0]['site_completed_projects'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Experienced Workers</label>
								<input type="text" class="form-control" name="site_experienced_workers" id="site_experienced_workers" placeholder="Enter experienced workers" value="<?php echo isset($settings[0]['site_experienced_workers']) ? $settings[0]['site_experienced_workers'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Site Video</label>
								<input type="text" class="form-control" name="site_video_url" id="site_video_url" placeholder="Enter site video" value="<?php echo isset($settings[0]['site_video_url']) ? $settings[0]['site_video_url'] : ''; ?>" required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Facebook URL</label>
								<input type="text" class="form-control" name="site_facebook_url" id="site_facebook_url" placeholder="Enter facebook url" value="<?php echo isset($settings[0]['site_facebook_url']) ? $settings[0]['site_facebook_url'] : ''; ?>"  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Twitter URL</label>
								<input type="text" class="form-control" name="site_twitter_url" id="site_twitter_url" placeholder="Enter twitter url" value="<?php echo isset($settings[0]['site_twitter_url']) ? $settings[0]['site_twitter_url'] : ''; ?>"  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Pinterest URL</label>
								<input type="text" class="form-control" name="site_pinterest_url" id="site_pinterest_url" placeholder="Enter pinterest url" value="<?php echo isset($settings[0]['site_pinterest_url']) ? $settings[0]['site_pinterest_url'] : ''; ?>"  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Instagram URL</label>
								<input type="text" class="form-control" name="site_instagram_url" id="site_instagram_url" placeholder="Enter instagram url" value="<?php echo isset($settings[0]['site_instagram_url']) ? $settings[0]['site_instagram_url'] : ''; ?>"  />
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">About Us</label>
								<textarea class="form-control summernote" name="about_us" id="about_us"><?php echo isset($settings[0]['about_us']) ? rawurldecode($settings[0]['about_us']) : ''; ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Privacy Policy</label>
								<textarea class="form-control summernote" name="privacy_policy" id="privacy_policy"><?php echo isset($settings[0]['privacy_policy']) ? rawurldecode($settings[0]['privacy_policy']) : ''; ?></textarea>
							</div>
						</div>
					</div>
					<div class="text-end">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	var page_title = "General Settings";
</script>
<?php include 'footer.php'; ?>
				