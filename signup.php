<!-- Header -->
<?php require './includes/header.php' ?>
<?php if (!empty($_SESSION['email'])) { ?>
  <?php header("Location: ./homepage.php");
  exit();
  ?>
<?php } ?>


<div class="body-div">
  <div class="text">
    <img class="svg" src="./assets/undraw_join_re_w1lh.svg" alt="">
    <div>
      <h1>Join us Today!</h1>
      <p>we make your dinner</p>
    </div>
  </div>

  <div class="loginform">
    <h1></h1>
    <div class=" wrapper">
      <!-- Form -->
      <form method="post" action="./includes/signup.inc.php">
        <h1>Create free account</h1>

        <!-- Checking error message -->
        <?php if (!empty($_GET["success"])) { ?>
          <p class="alert success"><?php echo $_GET['success'] ?></p>
        <?php } ?>

        <?php if (!empty($_GET["error"])) { ?>
          <p class="alert"><?php echo $_GET['error'] ?></p>
        <?php } ?>



        <div class="form-group mt">
          <label for="name">Username</label>
          <input name="name" type="name" placeholder="Bernard Hackwell" />
        </div>
        <div class="form-group mt">
          <label for="email">Email</label>
          <input name="email" type="email" placeholder="exmaple@example.com" />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="eye">
            <input name="password" class="passwd" type="password" placeholder="********" />
            <button class="eyes"><i class="fa fa-eye"></i></button>
          </div>
        </div>

        <button type="submit" class="btn">Create account</button>
        <a href="./index.php" class="signup">Already has an Account</a>
      </form>
    </div>
  </div>
</div>


<script src="./js/app.js"></script>
<!-- Footer -->
<?php require './includes/footer.php' ?>