		<?php
			$site = fetchData("settings.json"); 
		?>
		<footer class="footer-area pt-130">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-10">
	                    <div class="footer-content text-center">
	                        <a href="index.html"><img src="assets/website/images/logo-2.png" alt="logo"></a>
	                        <p>Over 10 years of experience in the hydraulic industry with a strong track record and numerous satisfied clients, including large corporate houses.</p>
	                        <ul>
	                        	<?php 
	                        		if(isset($site[0]['site_facebook_url']) && $site[0]['site_facebook_url'] != "") {
	                        			echo '<li><a href="'.$site[0]['site_facebook_url'].'" target="_blank"><i class="flaticon-facebook-logo"></i></a></li>';
	                        		}
	                        		if(isset($site[0]['site_twitter_url']) && $site[0]['site_twitter_url'] != "") {
	                        			echo '<li><a href="'.$site[0]['site_twitter_url'].'" target="_blank"><i class="flaticon-twitter"></i></a></li>';
	                        		}
	                        		if(isset($site[0]['site_pinterest_url']) && $site[0]['site_pinterest_url'] != "") {
	                        			echo '<li><a href="'.$site[0]['site_pinterest_url'].'" target="_blank"><i class="flaticon-pinterest"></i></a></li>';
	                        		}
	                        		if(isset($site[0]['site_instagram_url']) && $site[0]['site_instagram_url'] != "") {
	                        			echo '<li><a href="'.$site[0]['site_instagram_url'].'" target="_blank"><i class="flaticon-instagram"></i></a></li>';
	                        		}
	                        	?>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="footer-last d-flex justify-content-between align-items-center">
	                        <p>Copyright © 2019 | All Right Reserved</p>
	                        <ul>
	                            <li><a href="#">Services</a></li>
	                            <li><a href="#">FAQ</a></li>
	                            <li><a href="privacy-policy.php">Privacy & Policy</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <div class="back-to-top">
	        <a href="#">
	            <i class="flaticon-double-up-arrow-angles"></i>
	        </a>
	    </div>
		<!--====== jquery js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/vendor/modernizr-3.6.0.min.js"></script>
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/vendor/jquery-1.12.4.min.js"></script>

	    <!--====== Bootstrap js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/bootstrap.min.js"></script>
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/popper.min.js"></script>

	    <!--====== Slick js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/slick.min.js"></script>

	    <!--====== Isotope js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/isotope.pkgd.min.js"></script>

	    <!--====== Owl Carousel js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/owl.carousel.min.js"></script>

	    <!--====== Images Loaded js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/imagesloaded.pkgd.min.js"></script>

	    <!--====== Magnific Popup js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/jquery.magnific-popup.min.js"></script>

	    <!--====== Counterup js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/jquery.counterup.min.js"></script>

	    <!--====== appear js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/jquery.appear.min.js"></script>

	    <!--====== Waypoints js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/waypoints.min.js"></script>

	    <!--====== Ajax Contact js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/ajax-contact.js"></script>

	    <!--====== Main js ======-->
	    <script src="<?php echo $site[0]['website_url']; ?>assets/website/js/main.js"></script>
	    <script src="<?php echo $site[0]["website_url"]; ?>assets/js/toast.js"></script>

	    <script>
	    	$(document).ready(function(){

	    		$("#quoteForm").submit(function(e){
	    			e.preventDefault();

	    			if($.trim($("#quoteForm #name").val()) == "") {
	    				$("#quoteForm #name").focus();
	    				show_toast("Your name is required.");
	    			} else if($.trim($("#quoteForm #phone").val()) == "") {
	    				$("#quoteForm #phone").focus();
	    				show_toast("Your phone is required.");
	    			} else if($.trim($("#quoteForm #phone").val()).length != 10) {
	    				$("#quoteForm #phone").focus();
	    				show_toast("Your phone must have 10 digits.");
	    			} else if($.trim($("#quoteForm #email").val()) == "") {
	    				$("#quoteForm #email").focus();
	    				show_toast("Your email is required.");
	    			} else if($.trim($("#quoteForm #message").val()) == "") {
	    				$("#quoteForm #message").focus();
	    				show_toast("Your message is required.");
	    			} else {
	    				$.ajax({
	    					url: $(this).attr("action"),
	    					type: $(this).attr("method"),
	    					data: new FormData(this),
	    					processData: false,
	    					contentType: false,
	    					cache: false,
	    					beforeSend:function(){
	    						$("#quoteForm button[type=submit]").html('Sending...').attr("disabled",true);
	    					},
	    					dataType: "json",
	    					success:function(response){
	    						$("#quoteForm button[type=submit]").html('Send').attr("disabled",false);
	    						if(response.status == 200) {
	    							$("#quoteForm input,#quoteForm textarea").val("");
	    							show_toast(response.message);
	    						}
	    					}
	    				});
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