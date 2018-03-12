 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="login.css">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
</html>

 <?php
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $repeatpassword =@$_POST['repeatpassword'];
    $email_id=@$_POST['email_id'];    
    $connect = mysqli_connect("localhost","root","","mdata");
    mysqli_select_db($connect,"mdata");


        $namecheck = mysqli_query($connect,"SELECT username FROM user_data WHERE username ='$username'");
        $count=0;
        if($namecheck)$count = mysqli_num_rows($namecheck);
        
        if($count!=0)
            {
            die("<br><br>Username already taken! <a href = 'signup.php'>Return to Sign-Up page</a>" );
            }

        
        if($username && $password && $repeatpassword)

        {
            
            if($password == $repeatpassword)
            {
            
            
                //check char length of username and fullname
                if(strlen($username) >25)
                {
                echo "<br><br>Length of username or fullname is too long! <a href = 'signup.php'>Return to Sign-Up page</a>";
                }
                else
                    if(strlen($password) >25 || strlen ($password)<6)
                    {
                    echo "<br><br>Password must be between 6 and 25 characters <a href = 'signup.php'>Return to Sign-Up page</a>";


                    }
                    else
                    
                    {
                        //encrypt password
                        //$password = md5($password);
                      //  $repeatpassword = md5($repeatpassword);
                        
                        //open database
                    if(!$email_id){$email_id="N.A";}    
 $queryreg = mysqli_query($connect,"INSERT INTO user_data VALUES ('','$username','$password','$email_id',False)");


                   echo " <br><br>You have been registerd! <a href = 'login.php'>Return to login page</a> ";
                    }

            }
            else{echo "<br><br>Your passwords do not match! <a href = 'signup.php'>Return to Sign-Up page</a>";}
        }
        else{echo "<br><br>Please fill in <b>all</b> required fields!";}
    
    

    

    ?>

