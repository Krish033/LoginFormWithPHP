<!-- Header -->
<?php require './includes/header.php' ?>

<?php if (!empty($_SESSION['email'])) { ?>
  <?php header("Location: ./homepage.php");
  exit();
  ?>
<?php } ?>

<div class="body-div">


  <div class="text">
    <img class="svg" src="./assets/undraw_barbecue_3x93.svg" alt="">
    <div>
      <h1>Finding the Future!</h1>
      <p>Cooking is a best thing</p>
    </div>

  </div>



  <div class="loginform">
    <h1>Know your recipe!</h1>

    <div class="wrapper">
      <!-- Form -->
      <form method="post" action="./includes/index.inc.php">
        <h1>Login to Access</h1>

        <!-- Checking error message -->
        <?php if (!empty($_GET["error"])) { ?>
          <p class="alert"><?php echo $_GET['error'] ?></p>
        <?php } ?>

        <div class="form-group mt">
          <label for="email">Email</label>
          <input name="email" type="text" placeholder="exmaple@example.com" />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input name="password" type="password" placeholder="********" />
        </div>
        <a href="#" class="passwdReset">Forgot password?</a>

        <!-- <div class="remb">
        <input type="checkbox" name="check" />
        </div> -->

        <button type="submit" class="btn">Sign in</button>
        <a href="./signup.php" class="signup">create an account</a>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php require './includes/footer.php' ?>