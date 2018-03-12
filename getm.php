<?php
$connect = mysqli_connect("localhost","root","","mdata");
mysqli_select_db($connect,"mdata");
$id=addslashes($_REQUEST['id']);

 $query= mysqli_query($connect,"select * from user_posts where post_id=$id");
 $image= mysqli_fetch_assoc($query);
 $image= $image['post_img'];

header("Content-type: image/jpeg");
 echo $image;
 ?>
