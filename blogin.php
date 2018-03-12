<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <style type="text/css">.container{text-align: center;}</style>
</head>
<body>
<div id="includeHTML" w3-include-html="header.php"></div>
 <script>
  w3.includeHTML();
  </script> 
    <br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #00cccc">
                  <center>  <span class="glyphicon glyphicon-lock"></span><b>&nbsp Basic User Login</b><center></div>
                <div class="panel-body"   style="background-color:#99ffff">
                    <form action="login9.php?offset=0" class="form-horizontal" role="form" method='POST'>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Username" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Password3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name='password' id="Password" placeholder="Password" required>
                        </div>
                    </div>
              
                    <div class="form-group last">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-warning btn-sm">
                                Reset</button>

                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<!--go back-->

                    <form class="form-horizontal" role="form" method='POST'>
                    <div class="form-group last">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button type="submit" class="btn btn-success btn-sm" formaction="login.php">
                                GO BACK </button>
                        </div>
                    </div>
                    </form>


</body>
</html>
