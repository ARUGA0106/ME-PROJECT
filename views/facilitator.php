 <?php 
 include ('includes/connection.php'); 
 
if(isset($_GET['Id_3']))
{
$id=$_GET['Id_3'];
$status='Disable'; 
$sql =mysqli_query($conn,"update user set user_status='$status' WHERE UserID='$id'");
header('location:admin.php?page=facilitator"');
}

//code for active students
if(isset($_GET['Id_2']))
{
$id=$_GET['Id_2'];
$status='Enable'; 
$sql =mysqli_query($conn,"update user set user_status='$status' WHERE UserID='$id'");
header('location:admin.php?page=facilitator"');
} 

if(isset($_GET['Id_4']))
{
$id=$_GET['Id_4'];
$Role_id='user'; 
$sql =mysqli_query($conn,"update user set Role='$Role_id' WHERE UserID='$id'");
header('location:admin.php?page=facilitator"');
}

//code for active students
if(isset($_GET['Id_5']))
{
$id=$_GET['Id_5'];
$Role_id='admin'; 
$sql =mysqli_query($conn,"update user set Role='$Role_id' WHERE UserID='$id'");
header('location:admin.php?page=facilitator"');
}
?> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a><strong>Facilitator information</strong></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">USER MANAGEMENT</a></li>
              <li class="breadcrumb-item active">Facilitator</li>
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
                   <i class="fas fa-th-list"></i> Facilitator List  
              </div>
              <!-- /.card-header --> 
              <div class="card-body">    
                <div class="row">
                  <div class="col-sm-12">   
                  <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped display table-bordered" >
                      <thead>
                        <tr>
                            <th>#</th> 
                            <th>Roll No.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile</th> 
                            <th>Date of Birth</th>
                            <th>Team</th>
                            <th>Category</th>
                            <th>Role</th>
                            <th>Status</th>
							<th> portfolio </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $i = 1;
                            $selected = mysqli_query($conn,"SELECT * From user");
                             while($row = mysqli_fetch_array($selected)){ 
                        
                            ?> 
                        <tr>
                          <td class="text-center"><?php echo $i++ ?></td> 
                          <td><?php echo $row['UserID']; ?></td>
                          <td><?php echo $row['FullName']; ?></td>
                          <td><?php echo $row['Email']; ?></td>
                          <td><?php echo $row['mobile']; ?></td>
                          <td><?php echo $row['Age']; ?></td>
                          <td><?php echo $row['terms']; ?></td> 
                          <td><?php echo $row['IndustrialCategory']; ?></td>  
                          <td>
                            <?php
                              if($row["Role"] == 'admin')
                                 {?>
                                <a href="admin.php?page=facilitator&Id_4=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to Authorizy a user?');" >  <button class="btn btn-info"> Admin</button>
                                <?php } else if($row["Role"]=='user'){?>
                                  <a href="admin.php?page=facilitator&Id_5=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to Authorizy a Admin?');"><button class="btn btn-success"> User</button> 
                                 <?php } ?>

                             </td>  
                          <td>
                            <?php
                              if($row["user_status"] == 'Enable')
                                 {?>
                                <a href="admin.php?page=facilitator&Id_3=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to block a User?');" >  <button class="btn btn-secondary"> Enable</button>
                                <?php } else if($row["user_status"]=='Disable'){?>
                                  <a href="admin.php?page=facilitator&Id_2=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to active a User?');"><button class="btn btn-danger"> Disable</button> 
                                 <?php } ?>

                             </td>
                          <td>
                             <div class="btn-group">
                            <a data-id='<?php echo $row['UserID'] ?>' href="admin.php?page=update_user&id=<?php echo $row['UserID']; ?>" class="btn btn-primary btn-flat manage_class">
                              <i class="fas fa-edit"></i>
                            </a>
                             <a href="delete_user.php?del=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-flat">
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
                            <th>Roll No.</th>
                            <th>Student Name</th>
                            <th>Class Name</th>
                            <th>Parent Mobile</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Added By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </tfoot>
                </table> 
            </div>  
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