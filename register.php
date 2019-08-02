  <?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hkz.css">

</head>

<body>
  <style type="text/css">
    body
    {
      background-color: #fff; 
      height: 100%;
    }
  </style>

<div class="hero is-fullheight is-centered">
   <div class="container">
      <div class="column is-desktop is-vcentered">
      <div class="columns is-centered">

   <div class="login">Register</div>
</div>
<svg viewBox="0, 0, 720, 600" class="RegAnim">
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
        <path class="regPath"d="m 35,115 539.99984,-3.2e-4 c 0,0   24.99263,0.79932  25.00016,35.00016   0.008,34.20084  -25.00016,35  -25.00016,35 h -539.99984 c 0,-0.0205   -25,4.01348 -25,38.5  0,34.48652  25,38.5 25,38.5 h 539.99984 c 0,0   24.99263,0.79932  25.00016,35.00016   0.008,34.20084  -25.00016,35  -25.00016,35 h -539.99984 c 0,-0.0205   -25,4.01348 -25,38.5  0,34.48652  25,38.5 25,38.5 h 539.99984 c 0,0   24.99263,0.79932  25.00016,35.00016   0.008,34.20084  -25.00016,35  -25.00016,35 h -539.99984 c 0,-0.0205   -25,4.01348 -25,38.5  0,34.48652  25,38.5 25,38.5 h 539.99984"/>
      </svg>
<div class="form">

  <form action="login.php" method="POST">

<label class="label">First Name</label>
  <div class="control">
    <input class="inputs" type="text" id="firstName" name="reg_fname" value="<?php 
          if(isset($_SESSION['reg_fname'])) {
            echo $_SESSION['reg_fname'];
          } ?>"
     required>
  </div>

  <label class="label">Last Name</label>
  <div class="control">
    <input class="inputs" type="text" id="lastName" name="reg_lname" value="<?php 
          if(isset($_SESSION['reg_lname'])) {
            echo $_SESSION['reg_lname'];
          } 
          ?>" required>
  </div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="inputs" type="email" id="userEmail" name="reg_email" value="<?php 
          if(isset($_SESSION['reg_email'])) {
            echo $_SESSION['reg_email'];
          } 
          ?>" required>
  </div>
</div>


<div class="field">
  <label class="label">Confirm Email</label>
  <div class="control">
    <input class="inputs" type="email" id="username" name="reg_email2" value="<?php 
          if(isset($_SESSION['reg_email2'])) {
            echo $_SESSION['reg_email2'];
          } 
          ?>" required>
  </div>
  <br><?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
          else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
          else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>

</div>

  

<label class="label">Password</label>
  <div class="control">
    <input class="inputs" type="Password" id="Password" name="reg_password" required>
  </div>

  <label class="label">Confirm Password</label>
  <div class="control">
    <input class="inputs" type="Password" id="confirmPassword" name="reg_password2" required>
  </div>

  <br>
          <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
          else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
          else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>

          <div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      I agree to the <a href="#">terms and conditions</a>
    </label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button onclick="window.location.href='login.php'" class="customBtn" type="submit" name="register_button" value="Register" >Submit</button>
  </div>
  <div class="control">
  <button class="customBtn" onclick="window.location.href='login.php'">Cancel</button>
</div>
</div>

</form>


</div>
    </div>
    </div>
  </div>

   <script src = "https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    <script src="../JS/anim.js"></script>
  </body>
</html>