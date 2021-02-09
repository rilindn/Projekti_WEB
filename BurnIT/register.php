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
    <link rel="stylesheet" href="css/loginreg.css" />
    <title>Register</title>
  </head>

  <body>
    <div class="body">
      <div class="container">
        <div class="header">
          <h2>Create Account</h2>
        </div>
        <form class="form" id="form">
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
            <label for="username">Email</label>
            <input type="email" name="email" id="email" class="input-field" />
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
          <div class="form-control">
            <label for="username">Password check</label>
            <input type="password" id="password2" class="input-field" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
          </div>
          <button>Register</button>
        </form>
        <div class="sign-up">
          <a href="login.php">Have an Account already? Log in!</a>
          <br>
          <a href="index.php">Return to Home!</a>
        </div>
      </div>
      <footer>
        <div class="footer">
          <div>
            <small>
              <b>BurnIt</b>
              .© 2020 Daily Burn, Inc. All rights reserved
            </small>
          </div>
          <div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-youtube"></a>
          </div>
        </div>
      </footer>
    </div>
    <script src="js/register.js"></script>
  </body>
</html>
