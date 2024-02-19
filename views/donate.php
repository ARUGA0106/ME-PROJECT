<?php  
include ('../includes/connection.php');  

if (isset($_POST['submit'])){
$name = $_POST['name'];  
$email = $_POST['email']; 
$address = $_POST['address']; 
$mobile = $_POST['mobile']; 
$message_time = $_POST['message_time'];
$message_program = $_POST['message_program']; 
$Role = $_POST['Role'];
$industrycategory = $_POST['industrycategory'];    

$query=mysqli_query($conn,"INSERT INTO `donate`(`name`, `email`, `address`, `mobile`, `message_time`, `message_program`, `Role`, `industrycategory`) VALUES('$name','$email','$address','$mobile','$message_time','$message_program','$Role','$industrycategory')");
  
  if($query){ 
         ?>
         <script type="text/javascript">
             alert("Form Successed Submited");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Form not Submited Try Again");
        </script>
        <?php
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Cybershield-Social Engineering</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="../assets/img/logo.jpg" rel="icon">
  <link href="../assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet"> 
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">
        <div class="about-img">
          <img src="../assets/img/logo_1.jpg" alt="" class="avatar rounded-circle">   CYBERSHIELD
        </div>
        </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="../index.php">Home</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro intro-single route bg-image" style="background-image: url(../assets/img/back_1.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Donate</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Donate</li>
          </ol>
         
        </div>
      </div>
    </div>
  </div>

  <main id="main">
 
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="../assets/img/don_4.jpeg" class="img-fluid" alt="">
            <img src="../assets/img/back.jpeg" class="img-fluid" alt="">
            <img src="../assets/img/don_5.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Donate Here</h3>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                 Donate Now
                </button>
          </div>

        </div>

        <div class="portfolio-description">
            <h2> Why Donate?</h2>
           <p class="text-justify">
         
              Your contribution empowers individuals with the knowledge and skills to navigate the digital world securely. 

              </p>
          
        </div>
      </div>
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Donate Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" role="form">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required /> 
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" required="Address IS required" /> 
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email !" required="Please enter a valid email" /> 
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter at least 10 Number of Phone number"  required="Please enter at least 10 Number of Phone number" /> 
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <select class="form-control" name="industrycategory" id="industrycategory" placeholder="Industry" data-rule="minlen:4" data-msg="Please select required Industry" />
                        <option value="education">Education</option>
                        <option value="ecommerce">Ecommerce</option>
                        <option value="entrepreneur">Entrepreneur</option>
                        <option value="businessman">Business</option>
                        <option value="Other">Other</option> 
                      </select>  
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Time are you willing to donate e.g. less to this month, few days to come, etc./specify</label>
                      <input type="text" class="form-control" name="message_time" rows="5" data-rule="required"> 
                    </div>
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Donation target</label>
                      <textarea class="form-control" name="message_program" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    </div>
                  </div> 
                </div> 
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" name="submit" class="button button-a button-big button-rouded">Send Form</button>
            </div>
             </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <strong>CyberShield</strong>. All Rights Reserved</p>
            <div class="credits"> 
              Designed by <a href="">CyberShield Coder TM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body> 
</html>