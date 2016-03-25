<?php 

include ("model.php");
$connect = new Connect("localhost", "root", "", "lesson15");

$sql= "SELECT * FROM news WHERE news_status=1";
$query=mysqli_query($connect->connect,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

<div class="container">
    <div class="section st-padding">
        <div class="row">
            <?php while($row=mysqli_fetch_assoc($query)): ?>

            <a href="news.php?show=<?php echo $row['id']; ?>" value=" <?php echo $row['id']; ?> ">
            <div class="col s12 m3">
                <div class="card">
                    <img src="nikon.jpg">
                    <div class="card-content black-text">
                        <span><h5><?php echo $row["news_title"]; ?></h5></span>
                        <p><?php echo $row["news_desc"]; ?></p>
                    </div>
                </div>
            </div>
            </a>
            
          <?php endwhile; ?>
        </div>
    </div>
</div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>