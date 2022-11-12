<?php
session_start();
if(isset($_SESSION['firstname'])){
  $firstname = $_SESSION['firstname'];
}else{
   $firstname = "";
}
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
  <form action="thankyou.php" id = "myform" method = "post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Almost There</h1>
    <p>Please help us to know you better</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required value="<?php echo $firstname ?>">

    <label for="dob"><b>Date Of Birth (DD-MM-YYYY)</b></label>
    <input type="text" placeholder="Enter your Date of Birth" name="dob">

    <label for="gen"><b>Gender (Male/Female)</b></label>
    <input type="text" placeholder="Enter your Gender" name="gen" >

	<label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter your Age" name="age">

    <label for="height"><b>Height in cm</b></label>
    <input type="text" placeholder="Enter your height" name="height" >

    <label for="weight"><b>Weight in kg</b></label>
    <input type="text" placeholder="Enter your weight" name="weight" >

    <label for="target weight"><b>Target weight in kg</b></label>
    <input type="text" placeholder="Enter your target weight" name="targetweight">
    <p>Please click below to continue, else to go <a href= Sign.html style="color:dodgerblue">back</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="abt_user">Sign Up!</button>
    </div>
  </div>
</form>

</body>
</html>
