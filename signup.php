 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/gif" href="larger_blinking_text_cursor_by_neripixu-d6lwrhn.gif" />
     <!--<link rel="stylesheet" href="login2.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <style type="text/css">.container{text-align: center;}</style>
  </head>

  <body background="abs.jpg" style="background-position:center;">
  <div id="includeHTML" w3-include-html="header.php"></div>
 <script>
  w3.includeHTML();
  </script> 
    <br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #00cccc">
                  <center>  <span class="glyphicon glyphicon-lock"></span><b>&nbsp SignUp</b><center></div>
                <div class="panel-body"   style="background-color:#99ffff">
                    <form action="login10.php" class="form-horizontal" role="form" method='POST'>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            *Enter Username</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">
                            Enter Email</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                           *Enter Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name='password' id="Password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4" class="col-sm-3 control-label">
                           *Enter Password Again</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name='repeatpassword' id="repeatpassword" placeholder="Password" required>
                        </div>
                    </div>
                   
                    <div class="form-group last">
                        <div class="col-sm-offset-2 col-sm-7">
                            <button type="submit" class="btn btn-success btn-sm">
                                SUBMIT</button>
                                 <button type="reset" class="btn btn-warning btn-sm">
                                RESET</button>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
