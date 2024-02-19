<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Cybershield-Social Engineering</title>  
  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/assets/css/adminlte.min.css">       
  <link href="assets/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stp_con/parsley/parsley.css"/>
 
</head>

<body class="hold-transition login-page">
<div class="overlay-mf"></div>
<div class="login-box"> 
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user card-info card-outline">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header text-white"
           style="background: url('assets/img/back_1.jpg') center center;">
        <h3 class="widget-user-username text-right">CYBERSHIELD</h3>
        <h5 class="widget-user-desc text-right">Login</h5>
      </div> 
      <div class="widget-user-image">
        <img class="img-circle" src="assets/img/logo_3.jpg" alt="User Avatar">
     </div> 
     <br>
    <div class="card-body">  
    <?php 
     include ('includes/connection.php'); 
     session_start(); 

     if (isset($_POST['login'])) {
            $Username = $_POST['Username'];
            $PasswordHash = md5($_POST['PasswordHash']);
            $sql1 = "SELECT * FROM user WHERE Email='$Username' AND PasswordHash='$PasswordHash' LIMIT 1";
            $query1 = mysqli_query($conn, $sql1);
 
            if ($query1) {
                if (mysqli_num_rows($query1) > 0) {
                    $row = mysqli_fetch_array($query1);
                     //session creation to support AUTHORIZATION process

                     $_SESSION['Email']=$row['Email'];
                     $_SESSION['Role']=$row['Role']; 
                     $_SESSION['FullName']=$row['FullName'];   
                    // AUTHORIZAION SUPPORTED BY SESSION AND REDIRECT TO DIFFERENT PAGES 
                if ($row['user_status']=='Enable') {
                   
                    //if the username is === to admin then go to....... 
                    if ($_SESSION['Role'] === 'admin') {
                        header("location:admin.php?page=dashboad");
                    } 
                    //if the username is === to user then go to....... 
                    else if ($_SESSION['Role'] === 'user') {
                        header('location:admin.php?page=dashboad');
                    }
                }else {
                     ?> 
                      <div class="col-md-12">  
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <h5><i class="icon fas fa-ban"></i> Blocked!</h5>
                           Your Not Authorized To use This Site Please Contuct To CyberShield Coder...
                          </div>
                      </div>
                        <?php
                    }
                } 
                else {
                     ?>  
                     <div class="col-md-12">  
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                           Username and Password are incorrect Try Again
                          </div>
                      </div> 
                        <?php
                    }
                } 
             else {
                die(mysqli_error($conn));
            }
        }
   ?>    
      <form action="" method="post" id="login_form"> 
        <div class="form-group">
        
          <input type="text" id="Username" name="Username" class="form-control"  required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address...">
        
        </div>
        <div class="form-group">
        
            <input type="password" id="PasswordHash" name="PasswordHash" class="form-control"  required  data-parsley-trigger="keyup" placeholder="Password..." >
          
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" value="Login"  name="login" class="btn btn-info btn-block">Log In </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
       <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
         
      </div>  
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>  
      <hr>
        <center><span style="font-size: 18px;">&copy;</span><?php echo date('Y'); ?></center>
    </div> 
  </div>
</div>
</div>
</div> 
</div>
<hr>  
<script src="stp_con/jquery/jquery.min.js"></script>
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script type="text/javascript" src="stp_con/parsley/dist/parsley.min.js"></script>
<script src="assets/assets/js/adminlte.min.js"></script>
</body>
</html>
<script>

$(document).ready(function(){

    $('#login_form').parsley();
 
});

</script>