<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Yourself!</title>
  <link rel="stylesheet" href="css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <form action="thankyou.php" method = "POST" style="border:1px solid #ccc">
  <div class="container" data-aos="fade-up">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="firstname" required>

    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name" name="lastname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat">

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <input type="submit" class="signupbtn" name="reg_user" value="Sign Up">
    </div>
  </div>
  </form>
</body>
</html>

