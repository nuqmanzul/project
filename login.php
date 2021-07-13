<?php require 'config/db_login.php'; ?>

<!DOCTYPE html>
<html>
  <?php include ("style/header.php"); ?>
  <div class="d-flex flex-column justify-content-center align-items-center bg-image" style="background-image: url('https://wallpaperaccess.com/full/3926632.jpg'); height: 100vh;">
    <div class="container-sm form-bg2 col-md-6 gx-5 py-3" style="background-color: rgba(0, 0, 0, 0.6)">
      <h1 class="text-center fs-3 gx-3 text-white">User Log In</h1>
      <div class="row">
        <form class="col-md-10 m-auto p-3 g-3" method="post" action="login.php">
          <!-- Username -->
          <div class="row my-3 form-floating">
            <input type="text" class="form-control" id="name" name="username" placeholder="name@gmail.com" value="<?php echo htmlspecialchars($username);?>">
            <label for="name" class="form-label">Username</label>
            <?php if (array_filter($errors)) { ?>
              <div class="alert alert-danger" role="alert" id="alert"><?php echo $errors['username']; ?></div>
            <?php } ?>
          </div>
          <!-- Password -->
          <div class="row my-3 form-floating">
            <input type="password" class="form-control" id="pass" name="password" placeholder="********">
            <label for="pass" class="form-label">Password</label>
            <div class="alert alert-danger invisible" role="alert" id="alert"><?php echo $errors['password']; ?></div>
            <div class="form-check">
              <input class="form-check-input form-bg" type="checkbox" id="check" onclick="showPass()">
              <label class="form-check-label text-white" for="check">Show Password</label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn form-bg" name="submit">Log In</button>
             <a href="signup.php" class="btn form-bg float-end">Sign Up</a>
          </div>
        </form>
    </div>
  <?php include ("style/footer.php"); ?>
  </div>
</html>