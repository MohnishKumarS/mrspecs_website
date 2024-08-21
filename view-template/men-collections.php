<?php
include './configs/index.php';
include './configs/icons.php';
include './layouts/header.php';
?>

<body>
    <?php include './layouts/navbar.php'; ?>

    <main>
       
        <div class="mb-3 mb-md-4 mb-xl-5 pb-2 pt-1"></div>

        <section class="grid-banner container mb-3" id="section-grid-banner">
            <div class="row">
                <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Categories</h2>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/oversize.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/jean.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/shirt.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/jackets.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/sneaker.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/polo.webp" width="450" height="450" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="grid-banner__item position-relative mb-3">
                        <img loading="lazy" class="w-100 h-auto" src="<?= $url ?>assets/images/mocks/cargo-pant.webp" width="450" height="450" alt="">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="grid-banner container mb-3" id="section-grid-banner">
            <div class="row">
                <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Launched Today</h2>
                <?php
                    $limit = 12;
                    include './blocks/shop.php';
                ?>
            </div>
        </section>
    </main>

    <?php include './layouts/footer.php'; ?>
    <?php include './layouts/scripts.php'; ?>

</body>

</html>