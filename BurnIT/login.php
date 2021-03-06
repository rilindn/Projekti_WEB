<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css" />
    <link rel="icon" href="photos/icon.jpg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="//db.onlinewebfonts.com/c/dbf69272e2482b8d0f1fc45d9f9a45b8?family=OitaW01-CondDemiItalic"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="css/loginreg.css" type="text/css" />
    <title>Login</title>
  </head>

  <body>
    <div class="body">
      <div class="container">
        <div class="header">
          <h2>Login</h2>
        </div>
        <form id="form" class="form" name="loginForm" action="businessLogic/loginVerify.php" method="POST">
          <div class="form-control">
            <label for="username">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              class="input-field"
            />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small></small>
          </div>
          <div class="form-control">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="input-field"
            />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small></small>
          </div>
          <button type="submit" name='login-btn' value="Login">Log in</button>
        </form>
        <div class="sign-up">
          <a href="register.php">Not a member yet? Sign up now!</a>
          <br>
          <a href="index.php">Return to Home!</a>
        </div>
      </div>
      <script src="js/loginValidate.js"></script>
      <?php 
        include 'components/footer.php';
      ?>
