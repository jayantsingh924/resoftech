

 <?php
  session_start();

  if (@$_SESSION['is_login']) 
  {
    $email = $_SESSION['email'];
    define('TITLE', 'Profile');
    define('PAGE', 'profile');
    define('MENU', 'menu');
    include('../headers/connection.php'); 
    include('nav.php'); 
  }
  else
  {
      echo "<script> location.href='login.php';</script>";
  }

   $sql = "SELECT email, name FROM user WHERE email = '".$email."'";
   $result = $conn->query($sql);

   if ($result->num_rows == 1) 
     {
       $row = $result->fetch_assoc();
       $name = $row['name'];
     }

      if (isset($_REQUEST['update'])) 
     {

      if ($_REQUEST['username'] == '') 
         {
           $error = '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>Name field is required</h3></font></div>';
         }
      else
         {
          echo $_REQUEST['username']; 
           $uname = $_REQUEST['username'];
              
           $sql = "UPDATE user SET name = '$uname' WHERE email = '".$email."'";
            if ($conn->query($sql) == TRUE) 
               {
                 $error = '<div class="alert alert-success mt-2" roll="alert"><font color="Green"><h3>Username updated Sucessfully.</h3></font></div>';
               }
           else
               {
                 $error = '<div class="alert alert-success mt-2" roll="alert"><font color="Green"><h3>Error in Update.</h3></font></div>';
               }
          
         }
       }
     

?> 





<div> 
  <div class="col-sm-12">
   <form method="post" class="shadow-lg p-4 mx-5" action="#">
 

      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" readonly >
      </div>
    
      <div class="form-group">
      <label for="exampleInputPassword1">User Name</label>
      <input type="username" class="form-control" name="username" value="<?php echo $name; ?>" placeholder="Enter Your Username">
      </div>
      
   
       <button type="submit" name='update' 
               class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm">Update</button>
       <a href ="../user/test.php" 
          class="btn btn-outline-secondary mt-3 font-weight-bold btn-block shadow-sm">Back to Home</a> 
              
       <?php 
             if(isset($error))
               {
                echo $error;
               }
       ?>
       
     

    </form>
   </div>
 </div>
  







   

    <?php include('../headers/footer.php'); ?>

  <script type="text/javascript">
        
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        
  </script>