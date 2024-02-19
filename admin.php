<?php session_start();

// Cek Active Link
function ActiveClass($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
        
        //check already index
        if (!isset($_SESSION['Role'])) {
            header ('Location:index.php');
            exit;
        }

        // Logout
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'logout') {
                session_destroy();
                header('Location:login.php');
            }
        }

     if (isset($_GET['page']) && $_GET['page'] == 'dashboad') {
            $page = 'dashboad';
        } else if (isset($_GET['page']) && $_GET['page'] == 'chats') {
            $page = "chats"; 
        }else if (isset($_GET['page']) && $_GET['page'] == 'facilitator') {
            $page = "facilitator";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Sponsor') {
            $page = "Sponsor";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Security') {
            $page = "Security";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Protocal') {
            $page = "Protocal";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Coarch') {
            $page = "Coarch";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Guidance') {
            $page = "Guidance";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Technical') {
            $page = "Technical";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'Donate_d') {
            $page = "Donate_d";
        } 
        else if (isset($_GET['page']) && $_GET['page'] == 'update_user') {
            $page = "update_user";
        }
        else {
            $page = 'dashboad';
        }
 
include('includes/head.php');  
//set global message notification
$msgBox ="";

if (file_exists('views/'.$page.'.php')) {
            // Load the Page
            include('views/'.$page.'.php');
        } else {
            // Else Display an Error
          
            echo '
                    <div class="wrapper">
                        <h3>Err</h3>
                        <div class="alertMsg default">
                            <i class="icon-warning-sign"></i> The page "'.$page.'" could not be found.
                        </div>
                    </div>
                ';
        }
    ?>
      </div>
    <?php include('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
 