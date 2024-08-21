<?php
    include './configs/index.php';
    include './configs/icons.php';
    include './layouts/header.php';
?>
<body>
  <?php include './layouts/navbar.php'; ?>


  <main>
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Order Received</h2>
        <?php
          $step = 3;
          include './layouts/cart-topbar.php';
          include './blocks/confirm.php';
        ?> 
    </section>
</main>

  <div class="mb-5 pb-xl-5"></div>

  <?php include './layouts/footer.php'; ?>
  <?php include './layouts/scripts.php'; ?>

</body>
</html>
