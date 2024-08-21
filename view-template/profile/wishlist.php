<?php
include '../configs/index.php';
include '../configs/icons.php';
include '../layouts/header.php';
$active = "wishlist";
?>

<body>
  <?php include '../layouts/navbar.php'; ?>

  <main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Addresses</h2>
      <div class="row">
        <?php include '../layouts/account-sidebar.php'; ?>
        <div class="col-lg-9">
          <div class="page-content my-account__wishlist">
            <div class="products-grid row row-cols-2 row-cols-lg-3" id="products-grid">
              <div class="product-card-wrapper">
                <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                  <div class="pc__img-wrapper">
                    <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img loading="lazy" src="<?= $url ?>assets/images/mocks/slider/mock1.webp " width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                        </div><!-- /.pc__img-wrapper -->
                        <div class="swiper-slide">
                          <img loading="lazy" src="<?= $url ?>assets/images/mocks/slider/mock1.webp" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                        </div><!-- /.pc__img-wrapper -->
                      </div>
                      <span class="pc__img-prev">
                        <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_prev_sm" />
                        </svg>
                      </span>
                      <span class="pc__img-next">
                        <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                          <use href="#icon_next_sm" />
                        </svg>
                      </span>
                    </div>
                    <button class="btn-remove-from-wishlist">
                      <?= $icon_close ?>
                    </button>
                  </div>

                  <div class="pc__info position-relative">
                    <p class="pc__category">Dresses</p>
                    <h6 class="pc__title">Colorful Jacket</h6>
                    <div class="product-card__price d-flex">
                      <span class="money price">Rs.29</span>
                    </div>

                    <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                      <?= $icon_heart ?>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="mb-4 mb-xl-5 pt-1 pb-5"></div>

  <?php include '../layouts/footer.php'; ?>

  <!-- External JavaScripts -->
  <script src="<?= $url ?>assets/scripts/jquery.min.js"></script>
  <script src="<?= $url ?>assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?= $url ?>assets/vendors/bootstrap/bootstrap-slider.min.js"></script>

  <script src="<?= $url ?>assets/vendors/swiper/swiper.min.js"></script>

  <!-- Footer Scripts -->
  <script src="<?= $url ?>assets/scripts/main.js"></script>

</body>

</html>