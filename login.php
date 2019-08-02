<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hkz.css">
</head>

<body>
  	<Section class="section">
    <div class="container">
      <div class="column is-desktop is-vcentered">
      <div class="columns is-centered">
  
    <div class="logRight">
    	<div class="login">LOGIN</div>
      <svg viewBox="0 0 320 400" class="anim">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#833ab4;"
                  offset="0"
                  id="stop876" />
                  <stop
                  style="stop-color:#fd1d1d;"
                  offset="0.5"
                  id="stop878" />
            <stop
                  style="stop-color:#fcb045;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path class="loginPath" d="m 40,120.00016 239.99984,-3.2e-4 c 0,0   24.99263,0.79932  25.00016,35.00016   0.008,34.20084  -25.00016,35  -25.00016,35 h -239.99984 c 0,-0.0205   -25,4.01348 -25,38.5  0,34.48652  25,38.5   25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143,0,24.00396 c 0,0   24.99263,0.79932  25.00016,35.00016   0.008,34.20084  -25.00016,35  -25.00016,35 h -190.5714 3 c 0,0 -20,1.71033 -20,-25 0,-24.00396 20,-25 20,-25  h 190 c 0,0 20,1.71033 20,25 0,24.00396 -20,25 -20,25 
        " />
      </svg>

      <div class="form">

        <form action="login.php" method="POST">

          <label for="label">Email</label>
          <input class="inputs" type="email" id="email" name="log_email" value="<?php 
          if(isset($_SESSION['log_email'])) {
            echo $_SESSION['log_email'];
          } 
          ?>" required>

          <label for="label">Password</label>
          <input class="inputs"type="password" id="password" name="log_password">
          <br>
          
          <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
          
          <input class="inputs" type="submit" id="submit" value="Submit" name="login_button">

        </form>

        <a href="register.php">
          <input class="inputs" type="submit" id="register" value="Register">
          </a>

      </div>
    </div>
  </div>
</div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
<script src="assets/js/hkz.js"></script>
</body>
</html>