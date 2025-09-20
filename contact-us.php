<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="page-title-area bg_cover" style="background-image: url(assets/website/images/page-title-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Contact Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo isset($site[0]['website_url']) ? $site[0]['website_url'] : ""; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-area contact-page">
    <div class="container">
        <div class="contact-shadow">
            <div class="row no-gutters">
                <div class="col-lg-7">
                    <div class="contact-form-area">
                        <div class="contact-title">
                            <h3 class="title">Request A Quote</h3>
                            <p>We are here to listen you.</p>
                        </div>
                        <form action="send-quote.php" method="POST" id="quoteForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box mt-20">
                                        <input type="text" placeholder="Your Name" name="name" id="name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-20">
                                        <input type="tel" placeholder="Your Phone" name="phone" id="phone" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box mt-20">
                                        <input type="email" placeholder="Your Email" name="email" id="email" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box mt-20">
                                        <textarea cols="30" rows="10" placeholder="Your Messege" name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box d-flex justify-content-between align-items-center mt-30">
                                        <ul class="checkbox_common checkbox_style5">
                                            <li>
                                                <!-- <input type="checkbox" name="checkbox5" id="checkbox13">
                                                <label for="checkbox13"><span></span>Also subscribe us</label> -->
                                            </li>
                                        </ul>
                                        <button class="main-btn" type="submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="contact-info-title">
                            <h3 class="title">Contact Details</h3>
                            <p></p>
                        </div>
                        <div class="contact-info-item mt-30">
                            <i class="flaticon-call-answer"></i>
                            <span>Phone:</span>
                            <ul>
                                <li>+91 <?php echo isset($site[0]['site_phone']) ? $site[0]['site_phone'] : ""; ?></li>
                            </ul>
                        </div>
                        <div class="contact-info-item mt-30">
                            <i class="flaticon-envelope"></i>
                            <span>Email:</span>
                            <ul>
                                <li><?php echo isset($site[0]['site_email']) ? $site[0]['site_email'] : ""; ?></li>
                            </ul>
                        </div>
                        <div class="contact-info-item mt-30">
                            <i class="flaticon-placeholder"></i>
                            <span>Address:</span>
                            <ul>
                                <li><?php echo isset($site[0]['site_address']) ? $site[0]['site_address'] : ""; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include 'include/footer.php'; 
?>