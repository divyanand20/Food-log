<?php
session_start();

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
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  --> 
</head>
<body background="https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/11/mango-mangos-1296x728-header.jpg?w=1155&h=1528">
  <div id="templatemo_background_section_top">
    <div class="templatemo_container">
      <div id="templatemo_header">
        <div id="templatemo_logo_section">
          <h1>CALOFY</h1>            
      <h2>Welcome,<?php echo $usr_firstname; ?>!</h2>
        </div>
               
    </div><!-- end of headder -->
                
        <div id="templatemo_menu_panel">
            
          <div id="templatemo_menu_section" text-align="center">
                
                <ul align="center">
                    <li><a href="action.php">Home</a></li>
                    <li><a href="count.php">Count Calories</a></li>
                    <li><a href="Log.html">Log</a></li>
                    <li><a href="progress.html">Progress</a></li>  
                </ul> 
                    
        </div>
                
        </div> <!-- end of menu -->
            
    </div><!-- end of container-->
        
  </div><!-- end of templatemo_background_section_top-->
    
    <div id="templatemo_background_section_middle">
    
      <div class="templatemo_container">
        
          <div id="templatemo_left_section">
              
                <div class="templatemo_post">
                
                  <div class="templatemo_post_top">
                      <h1>Calories Identifier</h1>
                    </div>
                    <div class="templatemo_post_mid_top">
                    </div>
                    
              <div class="templatemo_post_mid">
                <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><p>Calculate Calories</p></h2>
          <p><button type="button" class="cancelbtn">Open Camera</button>
          <button type="submit" class="signupbtn">Upload Image</button></p>
        </div>
        <p>Scanning..</p>
        <h1><p>Ingredients Identified: Banana, Rasberry, Blueberry</p></h1>
        <h1><p>Calories per 100 grm: 200 cal</p></h1>
        <h1><p>Nutrients Identified: 21% Carb, 4% Protein, Vitamin A, Vitamin C</p></h1>

            </div>
          </div>
                        
                    </div>
                    <div class="templatemo_post_bottom">
                        
                    </div>
                    
        </div><!-- end of templatemo_post-->
   </html>