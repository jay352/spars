  <?php

session_start();

  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="css1/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Login </title>
      <style type="text/css">
    
      </style>
    </head>
    <body>
     
      <section class="login-content">
        <div>
          <h1 class="sp">Welcome To SPARS!!!</h1>
        </div>
         <div class="login-box" style="height: 550px;">
         
            <img src="img1/logo1.png" style="height: 150px; margin-left:150px;">
<br>
           <?php
       if(isset($_SESSION['spass'])){
        echo "<center><span style='color:red'>".$_SESSION['spass']."</span></center>";
        unset($_SESSION['spass']);
       }
   ?>
            
          <form class="login-form" method ="post" action="login_process.php">
            <br>
            <br>
            <br>
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            
            <?php
       if(isset($_SESSION['data'])){
        echo "<span style='color:red; margin-left:100px;' >".$_SESSION['data']."</span>";
        unset($_SESSION['data']);
       }
   ?>
            <div class="form-group">
              <label class="control-label">USERNAME</label>
              <input class="form-control" type="Email" placeholder="Email" autofocus name="username">
               <?php
       if(isset($_SESSION['un'])){
        echo "<span style='color:red'>".$_SESSION['un']."</span>";
        unset($_SESSION['un']);
       }
   ?>
            </div>
            <div class="form-group">
              <label class="control-label">PASSWORD</label>
              <input class="form-control" type="password" placeholder="Password" name="password">
                 <?php
       if(isset($_SESSION['ps'])){
        echo "<span style='color:red'>".$_SESSION['ps']."</span>";
        unset($_SESSION['ps']);
       }
   ?>
            </div>
            <div class="form-group">
              <div class="utility">
                
                <p class="semibold-text mb-2"><a href="forgot.php">Forgot Password ?</a></p>
              </div>
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
              <br>

              <a href="index.php"  class="btn btn-primary btn-block" >Go Back To Home Page</a>
              <br>

            </div>
        </form>

         
     <!--        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i><a href="forgot.php">
     Forgot Password ?</a></h3>
            <div class="form-group"> -->
            <!--   <label class="control-label">EMAIL</label>
              <input class="form-control" type="text" placeholder="Email" name="username">
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
              <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p> -->
          
        </div>
        </div>
      </section>
      <!-- Essential javascripts for application to work-->
      <script src="js1/jquery-3.2.1.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.min.js"></script>
      <script src="js1/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js1/plugins/pace.min.js"></script>
      <script type="text/javascript">
      
      </script>
    </body>
  </html>