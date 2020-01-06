

   
<?php 
   session_start();
   define('TITLE', 'User Login');
   define('PAGE', 'login');
   include('../headers/header.php'); 
   include('../headers/connection.php'); ?>


  
<?php

if (!isset($_SESSION['is_login'])) {

if (isset($_REQUEST['email'])) {

$email = mysqli_real_escape_string($conn,trim($_REQUEST['email']));
$password = mysqli_real_escape_string($conn,trim($_REQUEST['password']));

$sql = "SELECT email , password FROM user WHERE email = '".$email."' AND password = '".$password."' LIMIT 1";

$result = $conn->query($sql);
if ($result->num_rows == 1) 
   {
    $_SESSION['is_login'] = true;
    $_SESSION['email'] = $email;
     echo "<script> location.href='test.php';</script>";
     exit;
   }
else 
   {
     $error = '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>Enter Valid Email and Password</h3></font></div>';
   }
  
 }

} 
 else
{
  echo "<script> location.href='test.php';</script>";
}


?>

<div class="container" style="padding-top: 220px; padding-bottom: 200px;">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
 <form method="post" class="shadow-lg p-4" action="#">
 

      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
      </div>
      
   
       <button type="submit" name='submit' 
               class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm">Submit</button>
       <a href ="../user/register.php" class="btn btn-outline-secondary mt-3 font-weight-bold btn-block shadow-sm">Register here</a>
     

    </form>

   <?php 
           if (isset($error)) 
               {
                 echo $error; 
               }
    ?>
     

      </div>
      <div class="col-md-3">
      </div>
    </div>
</div>


 <?php include('../headers/footer.php'); ?>


