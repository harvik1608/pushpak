<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="page-title-area bg_cover" style="background-image: url(assets/website/images/page-title-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">About Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo isset($site[0]['website_url']) ? $site[0]['website_url'] : ""; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area mt-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="about-content-area">
                    <div class="about-content">
                        <?php echo isset($site[0]['about_us']) ? rawurldecode($site[0]['about_us']) : ""; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include 'include/footer.php'; 
?>