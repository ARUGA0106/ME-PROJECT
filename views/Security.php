<?php  
 include ('includes/connection.php'); 
if (isset($_POST['save'])) {  
 // name of the uploaded file
     $f_name = $_POST['f_name']; 
     $UserID = $_POST['UserID']; 
      $Cat = $_POST['Cat'];
     $Type = $_POST['Type']; 
     $filename = $_FILES['myfile']['name'];

     // FilePath of the file on the server
     $FilePath = 'forms/' . $filename;

     // get the file extension
     $extension = pathinfo($filename, PATHINFO_EXTENSION);

     // the physical file on a temporary uploads directory on the server
     $file = $_FILES['myfile']['tmp_name'];
     $size = $_FILES['myfile']['size'];
     if (!in_array($extension, ['zip', 'pdf', 'docx']))
      {
        ?>
         <script type="text/javascript">
             alert("You file extension must be .zip, .pdf or .docx");
         </script>
        <?php  
      } 
       elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than
       ?>
         <script type="text/javascript">
             alert("File too large!");
         </script>
        <?php   
       } 
       else {
         // move the uploaded (temporary) file to the specified FilePath
            if (move_uploaded_file($file, $FilePath)) {
                $sql = "INSERT INTO `resources`( `Description`, `name`,`Type`,`Cat`, `size`, `FilePath`, `UserID`) VALUES ('$f_name','$filename','$Type','$Cat','$size','$FilePath','$UserID' )"; 
                if (mysqli_query($conn, $sql)) {
                    ?>
                     <script type="text/javascript">
                         alert("File uploaded successfully thanks");
                     </script>
                    <?php  
                //header('location:tp_student.php');
              }
            } 
            else {
                ?>
                     <script type="text/javascript">
                         alert("Failed to upload file.");
                     </script>
                    <?php  
            }
         }
  }
?>
 <div class="content-wrapper"> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a><strong>Security Compliance Checklist Page</strong></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">IRP MODULE</a></li>
              <li class="breadcrumb-item active">Security Compliance Checklist</li>
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
              <div class="card-header p-2">
                <ul class="nav nav-pills ">
                  <li class="nav-item"><a class="nav-link active" href="#teacher" data-toggle="tab"><i class="fas fa-file"></i> Security Compliance Checklist Files</a></li> 
                  <li class="nav-item"><a class="nav-link" href="#add" data-toggle="tab"><i class="fas fa-user-plus mr-1"></i> Add File</a></li> 
                </ul>
              </div>
              <!-- /.card-header --> 
              <div class="card-body"> 
              <div class="tab-content">
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="teacher">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12">  
                    <div class="card"> 
                 <!-- /.card-header -->
                  <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped display table-bordered" >
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Discription</th> 
                            <th>Uploaded By</th> 
                            <th class="not-export-col"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            include ('includes/connection.php'); 
                            $i = 1;
                            $selected = mysqli_query($conn,"SELECT * FROM `resources`,`user` where resources.UserID=user.UserID AND resources.Type='Security Compliance '");
                             while($row = mysqli_fetch_array($selected)){ 
                        
                            ?>
                        <tr>
                          <td class="text-center"><?php echo $i++ ?></td>    
                          <td><?php echo $row['Cat']; ?></td>
                          <td><?php echo $row['Description']; ?></td>
                          <td><?php echo $row['FullName']; ?></td> 
                          <td>
                             <div class="btn-group"> 
                             <a href="delete_resource.php?del=<?php echo $row['ResourceID']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-flat delete_Resource">
                              <i class="fas fa-trash"></i>
                            </a>   
                        </div> </td>
                      </tr> 
                      <?php }?> 
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Discription</th> 
                            <th>Uploaded By</th> 
                            <th class="not-export-col"></th>
                        </tr>
                      </tfoot>
                    </table> 
                 </div>
               </div>
              </div> <!-- end card body-->
            </div> <!-- end card --> 
            </div>
            <!-- /.card -->
          </div>
          </div> 
           <div class="tab-pane" id="add">
               <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">Add File</h3> 
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button> 
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="" method="post" enctype="multipart/form-data" > 
                    <div class="card-body">
                      <div class="row">  
                        <?php 
                            include ('includes/connection.php'); 
                           $query= mysqli_query($conn,"select * from user where Email = '$session_id'")or die(mysqli_error());
                           $asse = mysqli_fetch_array($query);     
                           ?>
                           <input type="hidden" name="Type" value="Security Compliance">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>File Name</label>
                              <select class="form-control select2" name="Cat" data-dropdown-css-class="Select a Program" style="width: 100%;" required>
                                <option value="Standards">Standards</option>
                                <option value="International standards">International standards</option>
                                <option value="Checklist">Checklist</option> 
                                <option value="Other">Other</option> 
                              </select>  
                            </div>
                          </div> 
                          <input type="hidden" name="UserID" value="<?php echo $asse['UserID'] ?>">  
                        <div class="col-sm-6"> 
                            <label>Select File(PDF)</label>
                            <div class="fallback">
                            <input type="file" name="myfile"  required accept=".pdf"/>
                             </div>
                        </div> 
                        </div> 
                         <div class="row">
                           <div class="col-md-6">
                          <div class="form-group">
                            <label>Discription</label>
                            <textarea class="form-control" name="f_name" placeholder="Message" required></textarea>
                          </div>
                        </div>
                         </div>
                      <div class="modal-footer"> 
                          <button type="submit" name="save" class="btn btn-primary">Save </button>
                      </div>
                      <!-- /.row -->
                    </div> 
                   </form>
                   </div>
                  </div> 
             </div>
                <!-- /.tab-content -->
             </div><!-- /.card-body -->
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
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
 <script src="stp_con/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="stp_con/datatables/jquery.dataTables.min.js"></script>
<script src="stp_con/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="stp_con/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="stp_con/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="stp_con/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="stp_con/jszip/jszip.min.js"></script> 
<script src="stp_con/pdfmake/pdfmake.min.js"></script>
<script src="stp_con/pdfmake/vfs_fonts.js"></script> 
<script src="stp_con/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.print.min.js"></script>
<script src="stp_con/datatables-buttons/js/buttons.colVis.min.js"></script>  
<script src="assets/assets/js/adminlte.min.js"></script>
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); 
  });
</script>