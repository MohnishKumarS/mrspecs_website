<?php
include './configs/index.php';
include './configs/icons.php';
include './layouts/header.php';
?>

<body>
  <?php include './layouts/navbar.php'; ?>
  <main>
    <div class="mb-md-1 pb-md-3"></div>
    <?php
    include './blocks/product-info.php';
    include './blocks/related-product.php';
    ?>
  </main>

  <?php include './layouts/footer.php'; ?>
  <?php include './layouts/scripts.php'; ?>

</body>

</html>