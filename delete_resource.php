 
 <?php
   include('includes/connection.php'); 
   $id= $_GET['del'];

   $q ="DELETE FROM `resources` WHERE ResourceID = $id ";
   $del=mysqli_query($conn, $q);
    if($del){ 
         header("Location:admin.php?page=Protocal");
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Delete Failed Try Again");
        </script>
        <?php
    } 
  
?>