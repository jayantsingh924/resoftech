
<?php 
  session_start();

  if (@$_SESSION['admin_login'] != '') 
  {
    $email = $_SESSION['email'];
     define('TITLE', 'Work Order');
     define('PAGE', 'workorder');
     define('MENU', 'menu');
     include('../headers/connection.php');
     include('sidebar.php');  
   
  }
  else
  {
      echo "<script> location.href='login.php';</script>";
  }


?>

  <div style="padding-top: 35px;">

  </div>

<?php include('../headers/footer.php'); ?>