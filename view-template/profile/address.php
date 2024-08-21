<?php
include '../configs/index.php';
include '../configs/icons.php';
include '../layouts/header.php';
$active = "address";
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
          <div class="page-content my-account__address">
            <p class="notice">The following addresses will be used on the checkout page by default.</p>
            <div class="my-account__address-list">
              <div class="my-account__address-item">
                <div class="my-account__address-item__title">
                  <h5>Billing Address</h5>
                  <a href="#">Edit</a>
                </div>
                <div class="my-account__address-item__detail">
                  <p>Daniel Robinson</p>
                  <p>1418 River Drive, Suite 35 Cottonhall, CA 9622</p>
                  <p>United States</p>
                  <br>
                  <p>sale@gmail.com</p>
                  <p>+1 246-345-0695</p>
                </div>
              </div>
              <div class="my-account__address-item">
                <div class="my-account__address-item__title">
                  <h5>Shipping Address</h5>
                  <a href="#">Edit</a>
                </div>
                <div class="my-account__address-item__detail">
                  <p>Daniel Robinson</p>
                  <p>1418 River Drive, Suite 35 Cottonhall, CA 9622</p>
                  <p>United States</p>
                  <br>
                  <p>sale@gmail.com</p>
                  <p>+1 246-345-0695</p>
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