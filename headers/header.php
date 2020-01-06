

<!DOCTYPE html>
<html lang="en">
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

          .ttt
             {
              background: #004a99;
             }

   </style>


  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
         <h1 class="text-light"><a href="#header"><span>RESOFTECH</span></a></h1> 
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
        <li class="<?php if(PAGE == 'homepage'){ echo 'active'; }?>"><a href="../user/main.php">Home</a></li>
        <?php 
if (PAGE == 'homepage') {


        ?>
          <li class="<?php if(PAGE == 'aboutus'){ echo 'active'; }?>"><a href="#about">About Us</a></li>
          <li class="<?php if(PAGE == 'contact'){ echo 'active'; }?>"><a href="#contact">Contact Us</a></li>

   <?php  } elseif(@MENU == 'menu') {


?>

 <li class="nav-item <?php if(PAGE == 'aboutus'){ echo 'active'; }?>"><a class="nav-link" href="#">My Projects</a></li>
 <li class="nav-item <?php if(PAGE == 'aboutus'){ echo 'active'; }?>"><a class="nav-link" href="#">Holiday List</a></li>
 <li class="nav-item <?php if(PAGE == 'aboutus'){ echo 'active'; }?>"><a class="nav-link" href="#">Statics</a></li>
 <li class="nav-item <?php if(PAGE == 'aboutus'){ echo 'active'; }?>"><a class="nav-link" href="#">Help</a></li>

<?php



   } ?>       
         <li class="<?php if(PAGE == 'login'){ echo 'active'; }?>"><a href="../user/login.php">Log In <i class="fas fa-user"></i></a>
      
          </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

