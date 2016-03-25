<?php 
include ("../model.php");
$connect = new Connect("localhost", "root", "", "Lesson15");

if (isset($_POST['action'])) {
  $title=$_POST['title'];
  $desc=$_POST['description'];
  $status=$_POST['group1'];
  $date=$_POST['date'];
  $text=$_POST['text'];
  $img=$_FILES['file']['name'];
  $addnews= new AddNews($connect->connect,$title,$img,$img,$desc,$text,$status,$date);
}

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

<div class="leftMenu">
    <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header green2">Menu</div>
      <div class="collapsible-body green2 "><a href="#!">Add Menu</a></div>
      <div class="collapsible-body green2"><a href="#!">Menu Item</a></div>
    </li>
    <li>
      <div class="collapsible-header green2">Pages</div>
      <div class="collapsible-body green2"><a href="#!">Add Page</a></div>
      <div class="collapsible-body green2"><a href="#!">All Pages</a></div>
    </li>
    <li>
      <div class="collapsible-header green2">News</div>
      <div class="collapsible-body green2"><a href="#!">Add News</a></div>
      <div class="collapsible-body green2"><a href="#!">All News</a></div>
    </li>
  </ul>
</div>
</div>
    <div class="col s10">
      <form  method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6">
            <input name="title" id="first_name" type="text" class="validate">
            <label for="first_name">News title</label>
          </div>
          <div class="input-field col s6">
            <input name="description" id="last_name" type="text" class="validate">
            <label for="last_name">News Description</label>
          </div>
        </div>
        <div class="input-field col s3">
          <input name="date" type="date" class="datepicker">
        </div>
        <p>
          <input name="group1" type="radio" id="test1" value="1" />
          <label for="test1">Visible</label>
        </p>
        <p>
          <input name="group1" type="radio" id="test2" value="0" />
          <label for="test2">Not Visible</label>
        </p>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="text" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input name="file" type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
        </button>
      </form>
      </div>
    </div>
  </div>
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>