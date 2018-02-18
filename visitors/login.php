<?php include '../view/homeHeader.php' ?>

<div class="container" style="height: 100vh;">
  <div class="row mt-5">
    <div class="col-md-6 mx-auto text-center">
      <img class="mb-3" src="../img/marka-logo.png" style="height: 150px; width: 150px;">
      <form class="form-signin" action="index.php?type=<?php echo $type;?>" method="post">
        <h1 class="h3 mb-3 font-weight-normal text-capitalize"><?php echo $type;?> Sign In</h1>
        <div id="message">
            <?php echo $message;?>
        </div>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control my-2" placeholder="Password" required>
        <div class="mt-3">
          <p><a href="">Create Account</a> | <a href="">Employee Login</a></p>
        </div>
        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit" name="go_button">Sign In</button>
      </form>
    </div>
  </div>
</div>

<?php include '../view/homeFooter.php' ?>
