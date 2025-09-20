<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="page-title-area bg_cover" style="background-image: url(assets/website/images/page-title-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Services</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo isset($site[0]['website_url']) ? $site[0]['website_url'] : ""; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $services = fetchData("service.json");
    if(!empty($services)) {
?>
        <section class="services-area services-page-1 pt-180 pb-130">
            <div class="container">
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
    include 'include/footer.php'; 
?>