<?php
include './configs/index.php';
include './configs/icons.php';
include './layouts/header.php';
?>

<body>
  <?php include './layouts/navbar.php'; ?>

  <main>
    <?php
      include './blocks/shop.php';
    ?>
  </main>

  <?php
  include './layouts/footer.php';
  include './addons/filter-drawer.php';
  include './layouts/scripts.php';
  ?>

</body>

</html>