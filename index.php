<html>
<head>
	<title>Upload an image</title>
</head>
<body>

<?php
$connect = mysqli_connect("localhost","root","","databaseimage");
mysqli_select_db($connect,"databaseimage");


 
if(isset($_FILES['image'])) {
	$file= $_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);
    echo $image_name;
    $image_size= getimagesize($file);
      if($image_size!=FALSE)
      {
      $query= mysqli_query($connect,"insert into store values('','$image_name','$image')");
       if($query)
        {
        $last_id =mysqli_insert_id($connect);
        echo "Image uploaded.<p />Your Image :<p /><img src=get.php?id=$last_id>";
        }
        else 
        {
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