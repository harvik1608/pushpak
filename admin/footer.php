				</div>
			</div>
		</div>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/feather.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/script.js"></script>
		<script>
			$(document).ready(function(){
				$("#main_menu_list li").each(function(){
					if($.trim($(this).text()) == page_title) {
						$(this).addClass("active");
					}
				});
			});
		</script>
	</body>
</html>	