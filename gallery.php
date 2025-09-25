<?php 
    include 'include/header.php'; 
    $site = fetchData("settings.json");
?>
<section class="page-title-area bg_cover" style="background-image: url(assets/website/images/page-title-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Gallery</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo isset($site[0]['website_url']) ? $site[0]['website_url'] : ""; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $photos = fetchData("photo.json");
    if(!empty($photos)) {
?>
        <section class="blog-grid-area pt-100 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                        foreach($photos as $photo) {
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="blog-grid-item mt-30">
                                    <div class="blog-thumb">
                                        <img src="admin/photo/uploads/<?php echo $photo['avatar']; ?>" alt="blog">
                                    </div>
                                </div>
                            </div>
                    <?php
                        } 
                    ?>
                </div>
            </div>
        </section>
<?php 
    } 
    include 'include/footer.php'; 
?>