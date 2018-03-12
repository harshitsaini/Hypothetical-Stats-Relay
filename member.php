<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<style>
img  {
    float: left;
    margin-left: 100px;
}
.php1,.php2 {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    color: black;
    text-align: center;
}

</style>

<body>
<div id="includeHTML" w3-include-html="header.php"></div>
 <script>
  w3.includeHTML();
 </script> 

<br><br><br>

<div class="php1">
<?php

session_start();

$connect = mysqli_connect("localhost","root","","mdata");
mysqli_select_db($connect,"mdata");

if(isset($_POST['delete']))
{
$last_id=$_REQUEST['var'];
        $nquery= "delete from user_posts where post_id='".$last_id."'";
        mysqli_query($connect,$nquery);
}

if($_SESSION['username'])
  {
        $nquery= mysqli_query($connect,"select * from user_data where username='".$_SESSION['username']."'");
   $row = mysqli_fetch_assoc($nquery);
   $this_id= $row['user_id'];
   $noffset= $row['isAdmin'];
        $_SESSION['user_id']=$this_id;
        $cid=$_REQUEST['var'];

if($noffset==0){

        echo "<br><br>Welcome, " .$_SESSION['username']." ! <br><br><br> ";        

     $query="Select * from user_posts where user_id=".$_SESSION['user_id']."";
    $result = mysqli_query($connect,$query);
      while($row=mysqli_fetch_assoc($result))
      {
       $this_id=$row['user_id'];
       $pid_data=$row['post_id'];
       $post_txt=$row['post_text'];
       $post_title=$row['post_title'];
       $post_img=$row['post_img'];
       echo "<form action='member.php?var=".$pid_data."' method ='post' >";
       echo "<br><hr><br>";
       echo "Post No: $pid_data with Title:<b>'$post_title'</b> posted by USER_ID:$this_id ";
       //header("Content-type: image/jpeg");
       echo "<img src=getm.php?id=$pid_data height='120' width='120' >";
       echo "<p>.".$post_txt."</p>";
       echo "<button type='submit' value='submit' name='delete'>DELETE</button>";
       echo "</form>";
      }
     }
    else 
    {
echo "<br><br>Welcome administrator, " .$_SESSION['username']." ! <br><br><br> ";        

    $query="Select * from user_posts ";
    $result = mysqli_query($connect,$query);
      while($row=mysqli_fetch_assoc($result))
      {
       $this_id=$row['user_id'];
       $pid_data=$row['post_id'];
       $post_txt=$row['post_text'];
       $post_title=$row['post_title'];
       $post_img=$row['post_img'];
       echo "<form action='member.php?var=".$pid_data."' method ='post' >";
       echo "<br><hr><br>";
       echo "Post No: $pid_data with Title:<b>'$post_title'</b> posted by USER_ID:$this_id ";
       //header("Content-type: image/jpeg");
       echo "<img src=getm.php?id=$pid_data height='120' width='120' >";
       echo "<p>.".$post_txt."</p>";
       echo "<button type='submit' value='submit' name='delete'>DELETE</button>";
       echo "</form>";
      }
    }



    }


else
die ("You must be logged in!");
?>
<br><br><br>
</div>
<div class="php2">
<?php
include 'post.php';
?>
<hr size="20" color="black">
</div>

<div class="paypal">
<h3>YOU MAY ALSO SUPPORT US BY DONATING SOME FUNDS BY CLICKING THE BUTTON BELOW. THANK YOU :)</h3>
<br>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" >

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business"
        value="donations@andhrapradesh.gov">

    <!-- Specify a Donate button. -->
    <input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <input type="hidden" name="item_name" value="Friends of the Park">
    <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <pre align="center"><input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png"
    alt="Donate"></pre>
    <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
</center>
</div>
</body>


</html>