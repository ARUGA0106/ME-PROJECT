<?php  
include ('includes/connection.php');  

if (isset($_POST['submit'])){
$FullName =$_POST['FullName']; 
$Email =$_POST['Email'];    
$terms =$_POST['terms'];   
$user_status ="Disable";  
$Role ="user"; 
$PasswordHash = md5($_POST['PasswordHash']);
$retype_password = md5($_POST['retype_password']); 

 if  ($PasswordHash != $retype_password){
   ?>
   <script type="text/javascript">
       alert("Password does not match with your new password");
   </script>
  <?php  
}else if ($PasswordHash == $retype_password){

  $query=mysqli_query($conn,"INSERT INTO `user`(`FullName`, `Email`,`terms`, `PasswordHash`,`Role`, `user_status`) VALUES('$FullName','$Email','$terms','$PasswordHash','$Role','$user_status')");
  
  if($query){ 
         ?>
         <script type="text/javascript">
             alert("Your successfully Register");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Your not successfully Register");
        </script>
        <?php
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Cybershield-Social Engineering</title>  
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">  
  <link rel="stylesheet" href="stp_con/fontawesome-free/css/all.min.css"> 
  <link rel="stylesheet" href="stp_con/icheck-bootstrap/icheck-bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/assets/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
   <div class="card card-widget widget-user card-info card-outline">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header text-white"
           style="background: url('assets/img/back_1.jpg') center center;">
        <h3 class="widget-user-username text-right">CYBERSHIELD</h3>
        <h5 class="widget-user-desc text-right">Register</h5>
      </div> 
      <div class="widget-user-image">
        <img class="img-circle" src="assets/img/logo_3.jpg" alt="User Avatar">
     </div>  
     <br>
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post" id="quickForm">
        <div class="input-group mb-3">
          <input type="text" name="FullName" class="form-control" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="PasswordHash" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="retype_password" class="form-control" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="terms" id="agreeTerms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
         
      </div> 
      <a href="login.php" class="text-center">I already have a membership</a>
       <hr>
        <center><span style="font-size: 18px;">&copy;</span><?php echo date('Y'); ?></center>
  </div> 
</div> 
<script src="stp_con/jquery/jquery.min.js"></script> 
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="stp_con/jquery-validation/jquery.validate.min.js"></script>
<script src="stp_con/jquery-validation/additional-methods.min.js"></script>
<script src="assets/assets/js/adminlte.min.js"></script> 
</body>
<script>
$(function () { 
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</html>
