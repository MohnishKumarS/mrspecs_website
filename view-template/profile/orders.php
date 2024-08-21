<?php
include '../configs/index.php';
include '../configs/icons.php';
include '../layouts/header.php';
$active = "order";
?>

<body>
  <?php include '../layouts/navbar.php'; ?>

  <main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Orders</h2>
      <div class="row">
        <?php include '../layouts/account-sidebar.php'; ?>
        <div class="col-lg-9">
          <div class="page-content my-account__orders-list">
            <table class="orders-table">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#2416</td>
                  <td>October 1, 2023</td>
                  <td>On hold</td>
                  <td>Rs.1,200.65 for 3 items</td>
                  <td><button class="btn btn-primary">VIEW</button></td>
                </tr>
                <tr>
                  <td>#2417</td>
                  <td>October 2, 2023</td>
                  <td>On hold</td>
                  <td>Rs.1,200.65 for 3 items</td>
                  <td><button class="btn btn-primary">VIEW</button></td>
                </tr>
                <tr>
                  <td>#2418</td>
                  <td>October 3, 2023</td>
                  <td>On hold</td>
                  <td>Rs.1,200.65 for 3 items</td>
                  <td><button class="btn btn-primary">VIEW</button></td>
                </tr>
                <tr>
                  <td>#2419</td>
                  <td>October 4, 2023</td>
                  <td>On hold</td>
                  <td>Rs.1,200.65 for 3 items</td>
                  <td><button class="btn btn-primary">VIEW</button></td>
                </tr>
              </tbody>
            </table>
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