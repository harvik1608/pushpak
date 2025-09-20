				</div>
			</div>
		</div>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/feather.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/toast.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
		<script src="<?php echo $site[0]["website_url"]; ?>assets/js/script.js"></script>
		<script>
			$(document).ready(function(){
				if($("#flashMsg").length) {
					show_toast($("#flashMsg").text());
				}
				if($('.summernote').length > 0) {
					$('.summernote').summernote({
			      		placeholder: 'Type here...',
			      		tabsize: 2,
			      		height: "auto"
			    	});
				}
				$("#main_menu_list li").each(function(){
					if($.trim($(this).text()) == page_title) {
						$(this).addClass("active");
					}
				});
			});
			function show_toast(msg,second = 3000)
		    {
		    	$.toast({
				    text: msg,
				    showHideTransition: 'fade',
				    position: 'bottom-center',
				    hideAfter: second
				})
		    }
		</script>
	</body>
</html>	