<?php
    include './configs/index.php';
    include './configs/icons.php';
    include './layouts/header.php';
?>
<body>
  <?php include './layouts/navbar.php'; ?>

  <main>
    <?php
      include './blocks/collection-grid.php';
    ?>
  </main>

  <?php include './layouts/footer.php'; ?>
  <?php include './layouts/scripts.php'; ?>

</body>
</html>
