<?php
    include './configs/index.php';
    include './configs/icons.php';
    include './layouts/header.php';
?>
<body>
  <?php include './layouts/navbar.php'; ?>

  <main class="home-page">
    <?php
      include './blocks/home-slider.php';
      echo '<div class="pt-1 pb-5"></div>';
      include './blocks/categories-slider.php';
      echo '<div class="mb-4 mb-xl-5 pt-1 pb-5"></div>';
      include './blocks/category-banners.php';
      echo '<div class="mb-4 mb-xl-5 pt-1 pb-5"></div>';
      include './blocks/trends.php';
      include './blocks/offers-cards.php';
      echo '<div class="mb-4 mb-xl-5 pt-1 pb-5"></div>';
      include './blocks/latest-blocks.php';
      echo '<div class="mb-4 mb-xl-5 pt-1 pb-5"></div>';
      include './blocks/services-block.php';
    ?>
  </main>

  <?php include './layouts/footer.php'; ?>
  <?php include './layouts/scripts.php'; ?>
</body>
</html>
