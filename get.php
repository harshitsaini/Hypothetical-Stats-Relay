<?php
$connect = mysqli_connect("localhost","root","","databaseimage");
mysqli_select_db($connect,"databaseimage");
$id=addslashes($_REQUEST['id']);

 $query= mysqli_query($connect,"select * from store where id=$id");
 $image= mysqli_fetch_assoc($query);
 $image= $image['image'];

header("Content-type: image/jpeg");
 echo $image;
 ?>
