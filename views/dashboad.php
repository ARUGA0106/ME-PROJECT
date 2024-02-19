 
 <div class="content-wrapper">
    <section class="content-header"> 
      <div class="container-fluid"> 
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><strong>Admin Panel</strong></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid --> 
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
               
                <h3> </h3> 
                <p>Total Student</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>  
              <a href="admin.php?page=february" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner"> 
                <h3> </h3> 
                <p>Total Sponser</p>
              </div>
              <div class="icon">
                <i class="fas fa-edit"></i>
              </div> 
              <a href="admin.php?page=exam" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3> </h3> 
                <p>Donating Information</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div> 
                <a href="admin.php?page=donate" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-secondary">
              <div class="inner">
                
                <h3> </h3> 
                <p>Total Facilitator</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>  
                <a href="admin.php?page=facilitator" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> 
            </div>
          </div>   
        </div> 

        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <div class="time-label">
                <span class="bg-green"><?php echo date('d-m-Y'); ?></span>
              </div> 
              <div>
                <i class="fas fa-video bg-maroon"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                  <h3 class="timeline-header"><a href="#">Davic</a> shared a video</h3>

                  <div class="timeline-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="forms/Personal Security Practices.mp4" allowfullscreen></iframe>
                    </div>
                  </div> 
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red"><?php echo date('d-m-Y'); ?></span>
              </div> 
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">INCIDENT RESPONSE PLAN</a></h3>

                  <div class="timeline-body">
                    include neccesary documents to help in assurence of It BUSINESS CONTINUITY.
                  </div>
                  <div class="timeline-footer">
                    <a href="" class="btn btn-primary btn-sm">See more</a> 
                  </div>
                </div>
              </div>  
              <div>
                <i class="fas fa-envelope bg-secondary"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">IT TOOLS</a></h3>

                  <div class="timeline-body">
                   This will cover several tools APIs attached to the platform not limited to (attention to patent rights 
                    and APIs policy.
                  </div>
                  <div class="timeline-footer">
                    <a href="" class="btn btn-secondary btn-sm">See more</a> 
                  </div>
                </div>
              </div>   
              <div>
                <i class="fas fa-clock bg-success"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
    </section> 
     <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div> 
<script src="stp_con/jquery/jquery.min.js"></script> 
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="assets/assets/js/adminlte.min.js"></script>   
<script src="stp_con/opace-progress/pace.min.js"></script>
</body>
</html> 
 