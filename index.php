<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="banner-area bg_cover" style="background-image: url(assets/website/images/banner-bg-1.jpg)">
    <div class="banner-overlay d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content text-center">
                        <h1 class="title">Trusted <span>Elevator</span> Solutions</h1>
                        <p>Delivering safe, reliable, and trusted elevator solutions since <?php echo isset($site[0]['site_year']) ? $site[0]['site_year'] : "0"; ?></p>
                        <!-- <a class="main-btn" href="#">Learn More</a> -->
                    </div> <!-- banner content -->
                </div>
            </div>
        </div>
        <div class="none-scroll">
            <a class="page-scroll" href="#easy">
                <img src="assets/website/images/noun-Scroll.png" alt="">
            </a>
        </div>
    </div>
</section>
<section class="ltd-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">Welcome to <?php echo isset($site[0]['site_name']) ? $site[0]['site_name'] : ""; ?></h2>
                    <p>Trusted Hydraulic Lift Technology with Minimal Maintenance and Maximum Safety.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="ltd-item mt-30 text-center">
                    <i class="flaticon-trust"></i>
                    <h5 class="title">Safe & Reliable Technology</h5>
                    <p>Our hydraulic lifts are designed with advanced safety features, minimal failure chances, and smooth, jerk-free operation to ensure passenger confidence every time.</p>
                </div> <!-- ltd item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9 order-3 order-lg-2">
                <div class="ltd-item mt-30 text-center center">
                    <i class="flaticon-solution"></i>
                    <h5 class="title">Energy Efficient & Low Maintenance</h5>
                    <p>With lower power consumption, negligible maintenance needs, and no machine room requirement, our systems are cost-effective and space-saving.</p>
                </div> <!-- ltd item -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9 order-2 order-lg-3">
                <div class="ltd-item mt-30 text-center">
                    <i class="flaticon-success"></i>
                    <h5 class="title">Global Standards, Local Expertise</h5>
                    <p>Backed by over a decade of experience, we deliver elevators that match international standards, supported by a skilled team and trusted by leading corporates.</p>
                </div> <!-- ltd item -->
            </div>
        </div>
    </div>
</section>
<section id="easy" class="easy-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="easy-thumb mr-70">
                    <img src="assets/website/images/easy-thumb.jpg" alt="">
                </div> <!-- easy thumb -->
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="easy-content">
                    <div class="section-title">
                        <h2 class="title">We Make Things Easy <span>for Everyone</span></h2>
                        <p>Trusted Hydraulic Lift Technology with Minimal Maintenance and Maximum Safety.</p>
                    </div>
                    <div class="easy-list pt-40">
                        <div class="single-easy">
                            <h5 class="title">Design & Consultation</h5>
                            <p>We analyze your building needs and customize the perfect hydraulic elevator system with international standard components.</p>
                            <span>01</span>
                        </div>
                        <div class="single-easy mt-25">
                            <h5 class="title">Installation & Safety Check</h5>
                            <p>Our expert engineers ensure smooth installation, advanced safety integration, and compliance with global quality benchmarks.</p>
                            <span>02</span>
                        </div>
                        <div class="single-easy mt-25">
                            <h5 class="title">Maintenance & Support</h5>
                            <p>With negligible maintenance needs and dedicated customer support, we guarantee long-term reliability and hassle-free operation.</p>
                            <span>03</span>
                        </div>
                    </div>
                </div> <!-- easy content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<div class="sub-area">
    <div class="container">
        <div class="sub-bg">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-sub mt-30 d-flex align-items-center">
                        <div class="sub-icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="sub-content pl-20">
                            <h6 class="title">10 Years of Experience</h6>
                            <p></p>
                        </div>
                    </div> <!-- single sub -->
                </div>
                <div class="col-lg-4">
                    <div class="single-sub mt-30 d-flex align-items-center">
                        <div class="sub-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="sub-content pl-20">
                            <h6 class="title">Experienced Workers</h6>
                            <p></p>
                        </div>
                    </div> <!-- single sub -->
                </div>
                <div class="col-lg-4">
                    <div class="single-sub mt-30 d-flex align-items-center">
                        <div class="sub-icon">
                            <i class="flaticon-sports-and-competition"></i>
                        </div>
                        <div class="sub-content pl-20">
                            <h6 class="title">10+ Awards</h6>
                            <p></p>
                        </div>
                    </div> <!-- single sub -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
<?php
    $services = fetchData("service.json");
    if(!empty($services)) {
?>
        <section class="services-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title">Our Services</h2>
                            <p>Pioneering Hydraulic Elevator Solutions with Safety, Reliability, and Innovation.</p>
                        </div> <!-- section title -->
                    </div>
                </div>
                <div class="row justify-content-center">
        	        <?php
                        foreach($services as $service) {
                            if($service["is_active"] == 1) {
                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-9">
                                    <div class="single-services mt-30 text-center">
                                        <h5 class="title"><?php echo rawurldecode($service['name']); ?></h5>
                                        <p><?php echo rawurldecode($service['description']); ?></p>
                                    </div> 
                                </div>
                    <?php
                            }
                        } 
                    ?>
        	   	</div>
           	</div>
        </section>
<?php 
    }
    $projects = fetchData("project.json");
    if(!empty($projects)) {
?>
        <section class="projects-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title">Our Top Projects</h2>
                            <p>Delivering World-Class Hydraulic Lift Systems with Proven Excellence for Over a Decade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row projects-slide owl-carousel">
                    <?php
                        foreach($projects as $project) {
                            if($project["is_active"] == 1) {
                    ?>
                                <div class="col-lg-12">
                                    <div class="single-projects mt-30">
                                        <img src="admin/project/uploads/<?php echo $project['avatar']; ?>" alt="project">
                                        <div class="projects-overlay">
                                            <div class="projects-share">
                                                <a href="#"><i class="flaticon-share"></i></a>
                                            </div>
                                            <div class="projects-content">
                                                <span></span>
                                                <h4 class="title"><?php echo rawurldecode($project['name']); ?></h4>
                                                <!-- <a href="project-details.html">View Project <i class="flaticon-long-right-arrow"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
<?php 
    }
    $products = fetchData("product.json");
    $services = fetchData("service.json");
?>
<section class="counter-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">Success In A Glance</h2>
                    <p>Advanced, Safe, and Energy-Efficient Elevators Backed by Global Standards</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter text-center mt-30">
                    <i class="flaticon-notepad"></i>
                    <h3 class="title"><span class="counter"><?php echo isset($site[0]['site_completed_projects']) ? $site[0]['site_completed_projects'] : "0"; ?></span>+</h3>
                    <p>Completed Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter text-center mt-30">
                    <i class="flaticon-user"></i>
                    <h3 class="title"><span class="counter"><?php echo isset($site[0]['site_experienced_workers']) ? $site[0]['site_experienced_workers'] : "0"; ?></span>+</h3>
                    <p>Experienced Workers</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter text-center mt-30">
                    <i class="flaticon-rating"></i>
                    <h3 class="title"><span class="counter"><?php echo count($products); ?></span>+</h3>
                    <p>Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter text-center mt-30">
                    <i class="flaticon-interlock"></i>
                    <h3 class="title"><span class="counter"><?php echo count($services); ?></span>+</h3>
                    <p>Services</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mission-vission-area gray-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="mission-vission-thumb">
                    <img src="assets/website/images/mission-vission-thumb.jpg" alt="mission-vission">
                    <a class="video-popup" href="<?php echo isset($site[0]['site_video_url']) ? $site[0]['site_video_url'] : ""; ?>"><i class="flaticon-play-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="mission-vission-content">
                    <div class="section-title">
                        <h2 class="title">Discover <span>The Best Way</span> of Grow a Factory</h2>
                        <p></p>
                    </div>
                    <div class="mission-vission-list pt-30">
                        <div class="single-mission-vission">
                            <h5 class="title">Our Mission</h5>
                            <p>To deliver safe, energy-efficient, and reliable hydraulic elevator solutions that exceed customer expectations. We are committed to continual innovation, international quality standards, and cost-effective systems designed for smooth performance, minimal maintenance, and long service life.</p>
                        </div>
                        <div class="single-mission-vission mt-30">
                            <h5 class="title">Our Vission</h5>
                            <p>To be recognized as a global leader in hydraulic elevator technology by setting benchmarks in safety, sustainability, and engineering excellence. We aim to make world-class lift systems accessible across industries, while building lasting trust with customers through quality, innovation, and dedicated service.</p>
                        </div>
                        <!-- <a class="main-btn" href="#">Learn More</a> -->
                    </div>
                </div> <!-- easy content -->
            </div>
        </div>
    </div>
</section>
<?php
    $members = fetchData("member.json");
    if(!empty($members)) {
?>
        <section class="team-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title">Meet with Our Team</h2>
                            <p>The dedicated minds and hands behind our reliable elevator solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        foreach($members as $member) {
                            if($member["is_active"] == 1) {
                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-9">
                                    <div class="single-team mt-30">
                                        <img src="admin/member/uploads/<?php echo $member['avatar']; ?>" alt="team">
                                        <div class="team-overlay">
                                            <div class="team-content text-center">
                                                <span><?php echo rawurldecode($member['designation']); ?></span>
                                                <h4 class="title"><?php echo rawurldecode($member['name']); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
<?php 
    }
?>
<section class="get-a-quote-area pt-120" id="why_we_best">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">Why We Are The Best</h2>
                    <p>Delivering safe, reliable, and trusted elevator solutions since <?php echo isset($site[0]['site_year']) ? $site[0]['site_year'] : "0"; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="get-a-quote-item mt-30">
                    <div class="single-get">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">Proven Expertise</h4>
                        <p>Over 10 years of experience in the hydraulic industry with a strong track record and numerous satisfied clients, including large corporate houses.</p>
                    </div>
                    <div class="single-get mt-45">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">High Reliability & Safety</h4>
                        <p>Low failure rate, minimal accident risk, and multiple built-in safety devices like pressure release valves and PU packing sets.</p>
                    </div>
                    <div class="single-get mt-45">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">Energy Efficient</h4>
                        <p>The system consumes very little power while maintaining top performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="get-a-quote-item mt-30">
                    <div class="single-get">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">Minimal Maintenance</h4>
                        <p>Requires negligible upkeep due to robust design and high-quality components.</p>
                    </div>
                    <div class="single-get mt-45">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">Versatile & Space-Saving</h4>
                        <p>Can be installed anywhere without a dedicated machine room, suitable for direct and indirect applications.</p>
                    </div>
                    <div class="single-get mt-45">
                        <i class="flaticon-correct-symbol"></i>
                        <h4 class="title">Technologically Advanced</h4>
                        <p>Features microprocessor-based auto control panels, smooth car-guiding systems, and adherence to international standards with continuous R&D support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-area" id="contact-area">
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
                            <input type="hidden" name="no" value="<?php echo time(); ?>" />
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
<?php include 'include/footer.php'; ?>