<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>HRC CHAT RELAY</title>
<link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
<style type="text/css">
     body{background-color: rgba(213, 245, 227,1);
     font-family: "Comic Sans MS", cursive, sans-serif;}
    .header_body{
        background-color: rgba(213, 245, 227,1);
        font-family: "Comic Sans MS", cursive, sans-serif;
        margin-left: 0px;
        margin-top: 0px;
        position: fixed;
    }
	.header,.ip-header {
    margin-top: 0px;
    width: 100%;
    border: 500px;
    /*background-color: #ffd800;*/
    background-color: rgba(0, 0, 0  ,1);
    /*border-radius:20px 20px 20px 20px; */
    z-index: 10;
    position: fixed;
    display: inline;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing:inherit;
    text-align: center;
	}
	.header > div > p{
     display: inline-block;
     padding-left: 50px;
     padding-right: 50px;
     padding-top: 5px;
     padding-bottom:5px;
     /*font-weight: bold;*/
     font-size: 1.3rem;
     text-align: center;
	}
    
     .header a{
     padding-top: 5px;
     padding-bottom:5px;
     text-decoration: none;
     }
     .header #p3,#p4{
      /*float: right;*/
     }
     .header #p5{
      font-size: 1.6rem;
      background-color: white;
      margin-top: 6.5px;
      text-align: center;
     }

	.header a:link 
	{color: rgb(255,255,255);}

    .header a:visited 
    {color: rgb(133,193,233);}

    .header a:hover 
    {color: rgb(187,143,206);}

    .header a:active 
    {color: rgb(255,255,255);}
     /*margin-right: 10px;*/
     page-header{
     	display: block;
     }
     ip-header{

     }
</style>
</head>	

<body class="header_body">
  <div class="header">
	<div>
	 <p id="p1"><a href="main.php">HOME</a></p>	
	 <p id="p2"><a href="#">ABOUT</a></p>
     <p id="p5">HYPOTHETICAL RELAY CHAT</p>

     <p id="p3">
     <?php
     session_start();
     $page_source="";
     $logged_in=0;
     //$waar= ;
     //echo "[".@$_SESSION['username']."]";
     if(""!=(@$_SESSION['username'])){
     	$page_source= "logout.php";
     	$logged_in=1;
     } 
     else {$page_source="login.php";
     $logged_in=0;}
     echo "<a href=".$page_source.">" ;
     echo $logged_in==0?"LOGIN":"LOGOUT";
     ?>
     </a>
     </p>

	 <p id="p4"><a href="signup.php">SIGNUP</a></p>
	</div>
   </div>
</body>

</html>