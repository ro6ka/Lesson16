<?php 
include 'model.php';
$connect = new Connect("localhost", "root", "", "Lesson15");
if (isset($_POST['action'])) {
  $title=$_POST['title'];
  $link=$_POST['link'];
  $status=$_POST['group1'];
  $image=$_FILES['file'];
  $imagename=$image['name'];
  $text=$_POST['text'];
  $addpage=new Addpage($connect->connect,$title,$link,$status,$imagename,$text);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data"> 
  <div class="row">
    <div class="input-field col s6">
      <input  id="first_name2" type="text" class="validate" name="title">
      <label class="active" for="first_name2">Page Title</label>
    </div>
  </div>
    <div class="row">
    <div class="input-field col s6">
      <input  id="first_name2" type="text" class="validate" name="link">
      <label class="active" for="first_name2">Page Link</label>
    </div>
  </div>
        <p>
          <input name="group1" type="radio" id="test1" value="1" />
          <label for="test1">Visible</label>
        </p>
        <p>
          <input name="group1" type="radio" id="test2" value="0" />
          <label for="test2">Not Visible</label>
        </p>
            <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input name="file" type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
    <div class="input-field col s12">
            <textarea name="text" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        
        </button>
</form>
</body>
</html>

// ck editor