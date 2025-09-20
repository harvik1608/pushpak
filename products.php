<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="page-title-area bg_cover" style="background-image: url(assets/website/images/page-title-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Products</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo isset($site[0]['website_url']) ? $site[0]['website_url'] : ""; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $products = fetchData("product.json");
    if(!empty($products)) {
?>
        <section class="our-services pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-title-2 text-center">
                            <span>Our Products</span>
                            <h3 class="title">What We Do For Your Business</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        foreach($products as $product) {
                            if($product["is_active"] == 1) {
                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-8">
                                    <div class="single-services mt-30">
                                        <div class="services-thumb">
                                            <img src="admin/product/uploads/<?php echo $product['avatar']; ?>" alt="services">
                                        </div>
                                        <div class="services-content">
                                            <a>
                                                <h5 class="title"><?php echo rawurldecode($product['name']); ?></h5>
                                            </a>
                                            <p>₹<?php echo number_format($product['amount'],2); ?></p>
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
    include 'include/footer.php'; 
?>