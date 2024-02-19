 
<?php

include ('includes/connection.php'); 
if (isset($_POST['update'])){
$id2= $_GET['id'];
$FullName = $_POST['FullName']; 
$Username = $_POST['Username'];
$Age = $_POST['Age'];
$CurrentLocation = $_POST['CurrentLocation'];
$IndustrialCategory = $_POST['IndustrialCategory'];
$mobile = $_POST['mobile'];
$Email = $_POST['Email'];  

  $update = mysqli_query($conn,"UPDATE `user` SET `FullName`='$FullName',`Username`='$Username',`Age`='$Age',`CurrentLocation`='$CurrentLocation',`IndustrialCategory`='$IndustrialCategory',`mobile`='$mobile',`Email`='$Email' WHERE UserID='$id2'"); 
   if($update){ 
         ?>
         <script type="text/javascript">
             alert("Your Success Fully update user");
         </script>
        <?php  
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry your Failed to update user Try Again");
        </script>
        <?php
    }
  } 
  ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a><strong>Facilitator</strong></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User Managemant</a></li>
              <li class="breadcrumb-item active">Fcilitator</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card"> 
              <!-- /.card-header --> 
              <div class="active tab-pane" id="timeline">
                   <div class="card card-default">
                    <div class="card-header">
                      <h3 class="card-title">Update Facilitator</h3> 
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button> 
                      </div>
                    </div>
                    <?php
                      $id= $_GET['id'];
                      include ('includes/connection.php'); 
                       
                      $selected = mysqli_query($conn,"SELECT * FROM user WHERE UserID=$id");
                      $del = mysqli_fetch_array($selected);

                      ?>
                    <form action="" method="post"> 
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Full Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="FullName" placeholder="Enter your First name" value="<?php echo $del['FullName']; ?>" required> 
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>User Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="Username" placeholder="Enter your First name" value="<?php echo $del['Username']; ?>" required> 
                          </div>
                        </div>  
                        </div>
                        <!-- /.col -->
                        <div class="row">  
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Phone Number <span style="color: red;">*</span></label>
                            <div class="input-group">
                               <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                             </div>
                           <input type="text" class="form-control" name="mobile" placeholder="Phone Number" value="<?php echo $del['mobile']; ?>" required>
                         </div>
                          </div>
                        </div> 
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Email <span style="color: red;">*</span></label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="Email" placeholder="Email" required value="<?php echo $del['Email']; ?>">
                          </div>
                          </div>
                        </div> 
                         <div class="col-sm-4">
                          <div class="form-group">
                            <label>Age<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="Age" placeholder="Enter your First name" value="<?php echo $del['Age']; ?>" required> 
                          </div>
                        </div> 
                          <!-- /.form-group -->
                        </div> 
                      <!-- /.row --> 
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Category <span style="color: red;">*</span></label>
                            <div class="select2-purple"> 
                              <select class="form-control select2" name="IndustrialCategory" data-dropdown-css-class="Select a Year of study"   style="width: 100%;" required>
                                 <option value="<?php echo $del['IndustrialCategory']; ?>"><?php echo $del['IndustrialCategory']; ?></option> 
                                  <option value="education">Education</option>
                                  <option value="ecommerce">Ecommerce</option>
                                  <option value="entrepreneur">Entrepreneur</option>
                                  <option value="businessman">Business</option>
                                  <option value="Other">Other</option> 
                            </select>
                            </div> 
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Location <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="CurrentLocation" placeholder="Enter your First name" value="<?php echo $del['CurrentLocation']; ?>" required> 
                          </div>
                        </div>     
                        <!-- /.col -->
                      </div> 
                      <div class="modal-footer"> 
                         <a href="admin.php?page=facilitator" class="btn btn-info" name="register">Back</a>
                          <button type="submit" class="btn btn-primary" name="update">Update </button>
                      </div>
                      <!-- /.row -->
                    </div> 
                  </form>
                  </div>
                  </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div> 
<script src="stp_con/jquery/jquery.min.js"></script> 
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="stp_con/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> 
<script src="assets/assets/js/adminlte.min.js"></script>   
<script src="stp_con/opace-progress/pace.min.js"></script>
 
 