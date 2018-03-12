<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="login.css">-->
<link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>	
<div id="includeHTML" w3-include-html="header.php"></div>
 <script>
  w3.includeHTML();
  </script> 
<br><br>
<div style="text-align: center;">
<?php

function user_doesnt_exist($page_source){
die("<br>That user does't exist! <a href = '$page_source'>Return to login page</a>");
}
function empty_fields($page_source){
die("<br> Please enter  username and Password! <br><br> <a href = '$page_source'>Return to login page</a>");
}
function successful_login($user_id,$username){
echo "<br>You're logged in succesfully! <br><a href='member.php?var=$user_id'>Click</a> here to enter the member page ";
			   $_SESSION['username']=$username;
}
function incorrect_data($page_source){
echo "<br><br> Data entered is Incorrect! <a href = '$page_source'>Return to login page</a>";
}
// function elevation_check(){}


session_start();

$username = @$_POST['username'];
$password = @$_POST['password'];
$login_offset=$_REQUEST['offset'];
//echo "<br><br>hello $login_offset";

if($username && $password){// FIELDS ARE NOT EMPTY

 $connect = mysqli_connect("localhost","root","","mdata");
 mysqli_select_db($connect,"mdata");

 $query= "SELECT * From user_data WHERE username='$username'";
 $result= mysqli_query($connect, $query);
 $numrows = mysqli_num_rows($result);
 //echo $numrows;
	if ($numrows!=0){ // USER EXISTS
	//code to login

	 while ($row = mysqli_fetch_assoc($result)){ // fetching appropriate data
        $dbusername = $row['username'];$dbpassword = $row['password'];
        $dboffset= $row['isAdmin']; $user_id=$row['user_id'];
		}

		if(isset($user_id)){$_SESSION['user_id']=$user_id;}
		if(($username==$dbusername)&&($password==$dbpassword)&&($dboffset==$login_offset)){
               successful_login($user_id,$username);
	    }
	    else{/*INCORRECT DATA ENTERED*/incorrect_data($login_offset==1?"alogin.php":"blogin.php");}
	}
	else{ /* USER DOESNT EXIST*/user_doesnt_exist($login_offset==1?"alogin.php":"blogin.php");}
 }
else{ /* EMPTY FIELDS*/ empty_fields($login_offset==1?"alogin.php":"blogin.php");}
?>
</div>
</body>
</html>