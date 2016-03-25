<?php
include ("../model.php");
$connect = new Connect("localhost", "root", "", "Lesson15");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
  <nav class="ca-color" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">oxu.az</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACTS</a></li>
        <li><a href="login.php">LOG IN</a></li>
        <li><a href="register.php">REGISTER  </a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- <div class="container"> -->
  <div class="section">
    <div class="row">
    <div class="col s2 black2">

    <!-- Dropdown Trigger -->
<div class="leftMenu">
  <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown1'>News</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">Add News</a></li>
    <li class="divider"></li>
    <li><a href="#!">All News</a></li>
  </ul>
  </div>
  <!-- Dropdown Trigger -->
<div class="leftMenu">
  <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown2'>Menu</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!">Add Menu</a></li>
     <li class="divider"></li>
    <li><a href="#!">Menu Item</a></li>
  </ul>
  </div>
  <!-- Dropdown Trigger -->
  <div class="leftMenu">
  <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown3'>Pages</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown3' class='dropdown-content'>
    <li><a href="#!">Add Page</a></li>
    <li class="divider"></li>
    <li><a href="#!">All Pages</a></li>
  </ul>
  </div>
</div>
    <div class="col s10">
      
    </div>
    </div>
  </div>
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>