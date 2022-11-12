<?php
session_start();

/*echo "<pre>";
print_r($_SESSION);*/

$usr_email        = $_SESSION['email'];
$usr_id           = $_SESSION['user_id'];
$usr_firstname    = $_SESSION['firstname'];
$usr_lastname     = $_SESSION['lastname'];
$usr_success      = $_SESSION['success'];
$usr_dob          = $_SESSION['dob'];
$usr_gen          = $_SESSION['gen'];
$usr_age          = $_SESSION['age'];
$usr_height       = $_SESSION['height'];
$usr_weight       = $_SESSION['weight'];
$usr_targetweight = $_SESSION['targetweight'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Welcome</title>
  <meta name="keywords" content="free css template, XHTML, CSS, food blog template" />
  <meta name="description" content="Food Blog Template - free CSS website layout, XHTML CSS template" />
  <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black; background-color: #cccccc; border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:bold;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
</head>
<body background="https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/11/mango-mangos-1296x728-header.jpg?w=1155&h=1528">
  <div id="templatemo_background_section_top">
    <div class="templatemo_container">
      <div id="templatemo_header">
        <div id="templatemo_logo_section">
          <h1>CALOFY</h1>            
          <h2>Welcome, <?php echo $usr_firstname; ?>!</h2>
        </div>
      </div><!-- end of headder -->
      <div id="templatemo_menu_panel">
        <div id="templatemo_menu_section" text-align="center">
          <ul align="center">
            <li><a href="action.php">Home</a></li>
            <li><a href="Count.html">Count Calories</a></li>
            <li><a href="Log.html">Log</a></li>
            <li><a href="progress.html">Progress</a></li>                     
          </ul> 
        </div>
      </div>
    </div>
  </div>
  <div id="templatemo_background_section_middle">
    <div class="templatemo_container">
      <div id="templatemo_left_section">
        <div class="templatemo_post">
          <div class="templatemo_post_top">
            <h1>Your Profile</h1>
          </div>
          <div class="templatemo_post_mid_top">
          </div>
          <div class="templatemo_post_mid">
            <table class="tg">
            <thead>
              <tr>
               <th>Details</th>
               <th>Profile</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0lax">Name</td>
                <td class="tg-0lax"><?php echo $usr_firstname . " " . $usr_lastname; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Email </td>
                <td class="tg-0lax"><?php echo $usr_email ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Date of Birth</td>
                <td class="tg-0lax"><?php echo $usr_dob ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Gender</td>
                <td class="tg-0lax"><?php echo $usr_gen ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Age</td>
                <td class="tg-0lax"><?php echo $usr_age ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Height</td>
                <td class="tg-0lax"><?php echo $usr_height ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Weight</td>
                <td class="tg-0lax"><?php echo $usr_weight ; ?></td>
              </tr>
              <tr>
                <td class="tg-0lax">Target Weight</td>
                <td class="tg-0lax"><?php echo $usr_targetweight ; ?></td>
              </tr>
            </tbody>
            </table>
            <div class="clear">
            </div>
          </div>
          <div class="templatemo_post_bottom">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  unset($_SESSION);
  ?>
</body>
</html>