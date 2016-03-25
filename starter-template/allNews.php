<?php 

include ("model.php");
$connect = new Connect("localhost", "root", "", "lesson15");

$sql= "SELECT id,news_title,news_status,news_date FROM news";
$query=mysqli_query($connect->connect,$sql);


$id=$_POST['delete_button'];

$sql1="DELETE FROM news WHERE id=$id";
$query1=mysqli_query($connect->connect,$sql1);

?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <style type="text/css">
      .color {
        background-color: #c62828;

      }
      th,td {
        text-align: center;
      }
      </style>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <div class="container">
        <table class="striped">
        <thead>
          <tr>
              <th data-field="id"><h4>ID</h4></th>
              <th data-field="name"><h4>News Title</h4></th>
              <th data-field="price"><h4>Status</h4></th>
              <th data-field="price"><h4>News Date</h4></th>
              <th data-field="price"><h4>Delete</h4></th>
              <th data-field="price"><h4>Edit</h4></th>
          </tr>
        </thead>
            
        <tbody>

     <?php while($row=mysqli_fetch_assoc($query)): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['news_title']; ?></td>
            <td><?php echo $row['news_status']; ?></td>
            <td><?php echo $row['news_date']; ?></td>
            
            <form method="POST">
            <td><button class="btn waves-effect waves-light color" type="submit" value="<?php echo $row['id']; ?>" name="delete_button">Delete</button></td>  </form>

            <td><button class="btn waves-effect waves-light " type="submit" name="action">Edit</button></td>
          </tr>
        
    <?php endwhile; ?>
        </tbody>
      </table>
            </div> 

      </body>
      </html>