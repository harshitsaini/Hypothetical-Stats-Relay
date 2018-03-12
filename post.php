<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <link rel="stylesheet" href="post.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>


<div>
<fieldset >
<legend>NEW POST</legend>
<center>
<form action="member.php?var=$this_id" method="POST" enctype="multipart/form-data" >
    File:
    <input type="file" name="image">
    <br>
    POST HEADING<br><input type="text" name="mytext">
    <br>
    POST TEXT <br><textarea name="mytextarea" cols="40" rows="6" placeholder=""></textarea>
    <br><br>
    <input type="submit" value="upload">
</form>	
</center>
</fieldset>
</div>
<?php
$connect = mysqli_connect("localhost","root","","mdata");
mysqli_select_db($connect,"mdata");
$text = @$_POST['mytext'];
$textarea = @$_POST['mytextarea'];
$this_name=$_SESSION['username'];
//$this_id=$_SESSION['user_id'];


if(isset($_FILES['image'])) {
	$file= $_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);
   $nquery= mysqli_query($connect,"select * from user_data where username='$this_name'");
   $row = mysqli_fetch_assoc($nquery);
   $this_id= $row['user_id'];
    $image_size= getimagesize($file);
      if($image_size!=FALSE)
      {
      $query= mysqli_query($connect,"insert into user_posts values('','$this_id','$text','$textarea','$image')");
       if($query)
        {
        $last_id =mysqli_insert_id($connect);
        echo "Image uploaded.<p /> Your Image : <p /><img src=getm.php?id=$last_id>";
        }
        else 
        {
        	die(mysqli_error($connect));
        echo "Image not uploaded in the database !!!";
        }
      }
    else 
    {
       echo "File uploaded is not an image !!!";
    }
}
else {echo "No Image Selected !!!";}
?>

</body>

</html>