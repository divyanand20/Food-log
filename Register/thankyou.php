<?php
  session_start();
  $email="";
  $firstname="";
  $lastname="";
  $errors = array(); 

  $db = mysqli_connect('localhost', 'root', '', 'registration');

  if (isset($_POST['reg_user'])) 
  {
    // receive all input values from the form
    $firstname  = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname   = mysqli_real_escape_string($db, $_POST['lastname']);
    $email      = mysqli_real_escape_string($db, $_POST['email']);
    $psw        = mysqli_real_escape_string($db, $_POST['psw']);
    $psw_1      = mysqli_real_escape_string($db, $_POST['pswrepeat']);
    
    $query      = "INSERT INTO users(firstname, lastname, email, psw) 
                   VALUES('$firstname', '$lastname', '$email', '$psw')";

    mysqli_query($db, $query);

    $user_id                  =  mysqli_insert_id($db); 

      $_SESSION['user_id']    = $user_id;
      $_SESSION['email']      = $email;
      $_SESSION['firstname']  = $firstname;
      $_SESSION['lastname']   = $lastname;
      $_SESSION['success']    = "You are now logged in";
      //header("location:thankyou.php");
  }

  if (isset($_POST['abt_user'])) 
  {

   // receive all input values from the form

    $user_id      = $_SESSION['user_id'];

    $dob          = mysqli_real_escape_string($db, $_POST['dob']);
    $gen          = mysqli_real_escape_string($db, $_POST['gen']);
    $age          = mysqli_real_escape_string($db, $_POST['age']);
    $height       = mysqli_real_escape_string($db, $_POST['height']);
    $weight       = mysqli_real_escape_string($db, $_POST['weight']);
    $targetweight = mysqli_real_escape_string($db, $_POST['targetweight']);
    
    $query_prof        = "INSERT INTO  user_detail (user_id, dob, gender, age, height, weight, targetweight) 
                     VALUES($user_id, '$dob', '$gen', $age, $height, $weight, $targetweight )";

    mysqli_query($db, $query_prof);

    // Adding data to session
    $_SESSION['dob']          = $dob;
    $_SESSION['gen']          = $gen;
    $_SESSION['age']          = $age;
    $_SESSION['height']       = $height;
    $_SESSION['weight']       = $weight;
    $_SESSION['targetweight'] = $targetweight;
      //header("location:thankyou.php");
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
  <div class="container" data-aos="fade-up">
    <h1> Hello <?php echo $_SESSION['firstname']; ?> </h1>
    <div class="clearfix">
       <?php 
       if (isset($_POST['reg_user'])) 
       { ?>
          <h2>Your account has been created!</h2>
          <a href="Sign2.php">Click here to continue </a>
      <?php 
       }
       else{ ?>
        <h2>Your Profile is saved!</h2>
        <a href="action.php">Click here to Dashboard </a>
       <?php } ?>
    </div>
  </div>
</body>
</html>

