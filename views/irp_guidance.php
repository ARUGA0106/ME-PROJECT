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

  <div class="intro intro-single route bg-image" style="background-image: url(../assets/img/Incident_report/1_incident.png)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">INCIDENTS</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Incidents</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="paralax-mf bg-image" style="background-image: url(../assets/img/Incident_report/1_incident.png)">
                <div class="col-md-12" >
                  <h2 class="intro-title mb-4 text-center" style="color: white;">“Welcome to your Incident guidence hub </h2>
                 <p class="text-justify" style="color: white;">
                   A comprehensive resource pool designed to empower your organization to swiftly and effectively address IT security incidents.<br>
                  In this centralized space, you'll find valuable information and tools that fits your demand.
                  </p>
                 </div>
              </div>
              <div class="post-meta">
                <h1 class="article-title">Incident guidance </h1>
              </div>
              <div class="article-content text-justify">
                <p>
                

                </p>

                <blockquote class="blockquote">
                  <p class="mb-0"> Our goal is to equip you with the knowledge needed to respond effectively to each unique challenge, click the related link to explore
                  </p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Resources</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar text-justify">
				 <div class="row">
                   <div class="work-box">
				    
         
      <!-- new list item -->
     
    </ul>
                  <?php
                      include ('../includes/connection.php');
                      $selected = mysqli_query($conn,"SELECT * FROM `resources`,`user` where resources.UserID=user.UserID AND resources.Type='Incident Guidance'");
                       while($row = mysqli_fetch_array($selected)){
                  ?>
                  <li>
                    <a href="../forms/<?php echo $row['name']; ?>"><?php echo $row['Description']; ?></a>
                  </li>
                   <?php }?>
				  
                    </div>
                  </div>
                </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <strong>CyberShield Tanzania Inc</strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="">CyberShield Coder TM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/js/main.js"></script>


</body>

</html>