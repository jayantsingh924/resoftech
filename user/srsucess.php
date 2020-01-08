<?php 
    session_start();
    define('TITLE', 'Success');
    define('PAGE', 'success');
    ?>

<head>
  <meta charset="utf-8">
  <title><?php echo TITLE ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style2.css" rel="stylesheet">

    <style type="text/css">
          .nav-link-active
            {
              color: #fff; 
              background: #17a2b8;
            }
    </style>

  
</head>

    <?php

  
    include('../headers/connection.php'); 
  
      if ($_SESSION['is_login']) 
         { 
         	
           $id = $_SESSION['id'];
           
         }
      else
         {
         	
           echo "<script> location.href='login.php';</script>";
         }

         $sql = "SELECT * FROM {$_SESSION['table']} where id = {$_SESSION['id']}";
      
         $result = $conn->query($sql);
         if ($result->num_rows == 1) 
            {
               $row = $result->fetch_assoc();
               $data = "<table class='table'>
 
    
  <tbody>
    <tr class='table-active'>
      <th scope='row'>Request ID: </th>
      <td>".$row['id']."</td>
     
    </tr>
   
    <tr class='table-primary'>
      <th scope='row'>Subject: </th>
      <td>".$row['subject']."</td>
     
    </tr>

    <tr class='table-primary'>
      <th scope='row'>Discription: </th>
      <td>".$row['summary']."</td>
     
    </tr>

    <tr class='table-primary'>
      <th scope='row'>Posted Date: </th>
      <td>".$row['posted_date']."</td>
     
    </tr>

    <tr>
       <td>
          <form class='d-print-none'>
          <input class='btn btn-danger'ctype='submit' value='print' readonly onclick= 'window.print()'>
          </form>
       </td>
       
    </tr>
   
  </tbody>
</table> ";

         	
         	}
else {
	echo 'failed';
}
?>


<div style="padding-top: 80px;">
	
	<?php echo $data; ?>
</div>


  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/mobile-nav/mobile-nav.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../js/all.js"></script>
  <script src="../ckeditor/ckeditor.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

  <script type="text/javascript">
        
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

  </script>      