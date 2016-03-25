	<?php 
include ("model.php");
$connect = new Connect("localhost", "root", "", "Lesson15");

$sql= "SELECT * FROM news";
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
        <li><a href="">NEWS LIST</a></li>
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
    <!--   Icon Section   -->
    <div class="row">
      

      	<table>
			<?php while($row=mysqli_fetch_assoc($query)): ?>
	      		<tr>
	      			<td><?php echo $row["id"]; ?></td>
	      			<td><?php echo $row["news_title"]; ?></td>
	      			<td><?php echo $row["news_status"]; ?></td>
	      		</tr>
	      	<?php endwhile; ?>
      	</table>

<!--         <a href="news.php?show=<?php echo $row['id']; ?>" value=" <?php echo $row['id']; ?> ">
        <div class="col s12 m3">
          <div class="card">
            <img src="nikon.jpg">
            <div class="card-content black-text">
              <span><h5><?php echo $row["news_title"]; ?></h5></span>
              <p><?php echo $row["news_desc"]; ?></p>
            </div>
          </div>
        </div>
        </a> -->
      
    </div>
  </div>
  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>