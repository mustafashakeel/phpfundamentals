<!DOCTYPE html>
<html lang="en">

<?php

include 'snippets/header.php';
include 'config.php';

?>

<body>
<form action="admin.php" method="post" class="login-form">
  <div class="imgcontainer">
    <img src="imgs/logo.png" alt="gum logo" class="avatar" />
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="password" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="sub">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw log-message">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>