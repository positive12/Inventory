<?php require('page/login_exec.php');?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Inventory System</title>
  </head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <body>
    
    
<!------ Include the above in your HEAD tag ---------->

    <div class="container">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login</a>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form" action="index.php" method="post" role="form" style="display: block;">
                      <?php include('page/error.php');?>
                      
                      <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value= "">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="submit_user" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <a href="register.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- ----for javascript -->
      <script src="js/jquery.js"></script>
      <script src="js/javascript.js"></script>
      
        
    </body>
</html>