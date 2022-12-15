<!-- Header -->
<?php require './includes/header.php' ?>


<?php if (empty($_SESSION['email'])) { ?>
  <?php header("Location: ./index.php?error=Please Login to Continue");
  exit() ?>
<?php }  ?>

<h1>Welcome <?php echo $_SESSION['name'] ?>!</h1>




<!-- Footer -->
<?php require './includes/footer.php' ?>