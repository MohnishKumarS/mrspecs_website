<?php
    include './configs/index.php';
    include './configs/icons.php';
    include './layouts/header.php';
?>
<body>
  <?php include './layouts/navbar.php'; ?>

  <main>
    <?php
        $step = 2;
        include './blocks/checkout.php';
    ?>
  </main>

  <div class="mb-5 pb-xl-5"></div>

  <?php include './layouts/footer.php'; ?>
  <?php include './layouts/scripts.php'; ?>

</body>
</html>
