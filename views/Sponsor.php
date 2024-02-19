 <div class="content-wrapper"> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a><strong>Sponsor Page</strong></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User Management</a></li>
              <li class="breadcrumb-item active">Sponsor</li>
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
                  <li class="nav-item"><a class="nav-link " href="#teacher" data-toggle="tab"><i class="fas fa-list"></i> Sponsor List</a></li> 
                  <li class="nav-item"><a class="nav-link" href="admin.php?page=tp_student"><i class="fas fa-user-plus mr-1"></i> Add Sponsor</a></li> 
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
                            <th>Image</th>
                            <th>Full Name</th>
                            <th>Reg No</th>
                            <th>Email</th>
                            <th>Depertment</th>
                            <th>Program</th>
                            <th>YOS</th>
                            <th>Gender</th>
                            <th>Ph. Number</th>
                            <th class="not-export-col"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            include ('includes/connection.php'); 
                            $i = 1;
                            $selected = mysqli_query($conn,"SELECT *  FROm  student");
                             while($row = mysqli_fetch_array($selected)){ 
                        
                            ?>
                        <tr>
                          <td class="text-center"><?php echo $i++ ?></td>
                          <td> 
                          <img src="../<?php echo $row['thumbnail']; ?>" class="img-thumbnail" width="75" height="75" /></td>
                          <td><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?></td>
                          <td><?php echo $row['reg_number']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['depertment']; ?></td>
                          <td><?php echo $row['program']; ?></td>
                          <td><?php echo $row['year_study']; ?></td> 
                          <td><?php echo $row['gender']; ?></td> 
                          <td><?php echo $row['mobile']; ?></td>
                          <td>
                             <div class="btn-group">
                            <a data-id='<?php echo $row['id'] ?>' href="admin.php?page=update_teacher&id=<?php echo $row['s_id']; ?>" class="btn btn-primary btn-flat manage_class">
                              <i class="fas fa-edit"></i>
                            </a>
                             <a href="delete_use.php?del=<?php echo $row['s_id']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-flat delete_student">
                              <i class="fas fa-trash"></i>
                            </a>   
                        </div> </td>
                      </tr> 
                      <?php }?> 
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                             <th>Image</th>
                            <th>Full Name</th>
                            <th>Reg No</th>
                            <th>Email</th>
                            <th>Depertment</th>
                            <th>Program</th>
                            <th>YOS</th>
                            <th>Gender</th>
                            <th>Ph. Number</th>
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