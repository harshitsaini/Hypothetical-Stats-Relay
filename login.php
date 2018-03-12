
<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <style type="text/css">
    .container{text-align: center;}
    </style>
</head>

<body>
<div id="includeHTML" w3-include-html="header.php"></div>
 <script>
  w3.includeHTML();
  </script> 
    <br><br><br><br><br><br>
<!-- HERE STARTS THE LOGIN REQUEST -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                  <div class="panel-heading" style="background-color:  #00cccc">
                  <center>  <span class="glyphicon glyphicon-lock"></span><b>&nbsp; CHOOSE MEMBERSHIP </b></center>
                  </div>
                  <div class="panel-body"   style="background-color:#99ffff">
                    <form class="form-horizontal" role="form" method='POST'>
                    <div class="form-group last">
                        <div class="col-sm-offset-1 col-sm-10">
                          <button type="submit" class="btn btn-success btn-sm" formaction="alogin.php">
                                ADMINISTRATOR </button>
                          <button type="submit" class="btn btn-warning btn-sm" formaction="blogin.php">
                                BASIC USER </button>
                        </div>
                    </div>
                    </form>                
                </div>               
            </div>
        </div>
    </div>
</div>
<!-- HERE ENDS THE LOGIN REQUEST -->
<br><br><br><br><br><br>
<!-- HERE STARTS THE SIGNUP REQUEST -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                  <div class="panel-heading" style="background-color:  #00cccc">
                  <center>  <span class="glyphicon glyphicon-lock"></span><b>&nbsp; BECOME A MEMBER </b></center>
                  </div>
                <div class="panel-body"   style="background-color:#99ffff">
                    <form action="signup.php" class="form-horizontal" role="form" method='POST'>
                    <div class="form-group last">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success btn-sm">
                                SIGNUP </button>
                        </div>
                    </div>
                    </form>                
                </div>
         </div>
    </div>
    </div>
</div>
<!--HERE ENDS THE SIGNUP REQUEST-->
</body>
</html>
