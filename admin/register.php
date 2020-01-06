
  <?php include('../headers/header.php'); ?>


  <?php include('../headers/connection.php'); ?>

  <?php 

  if (isset($_REQUEST['submit'])) 
     {

      if ($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['password'] == '' ) 
         {
           $error = '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>All fields are required</h3></font></div>';
         }
      else
         {
          $sql = "select email from admin where email = '".$_REQUEST['email']."'";
           $data = $conn->query($sql);
           if ($data->num_rows == 1) 
              {
                $error = '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>Email id is already registerd</h3></font></div>';
              }
          else{
                $uname = $_REQUEST['name'];
                $uemail = $_REQUEST['email'];
                $upass = $_REQUEST['password'];

           $sql = "INSERT INTO admin(name, email, password) VALUES('$uname','$uemail','$upass')";
         //  $conn->query($sql);
           
           if ($conn->query($sql) == TRUE) 
             {
                $result = '<div class="alert alert-success mt-2" roll="alert"><font color="Green"><h3>User Created Sucessfully.</h3></font></div>';
             }
        else
             {
               $result = '<div class="alert alert-success mt-2" roll="alert"><font color="Green"><h3>User Created Sucessfully.</h3></font></div>';
             }
          
         }
       }
     }

  ?>


<div class="container" style="padding-top: 220px; padding-bottom: 200px;">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
 <form method="post" class="shadow-lg p-4"  action="#">
 
      <div class="form-group">
      <label>Employee Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Your email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      
   
       <button type="submit" name='submit' class="btn btn-outline-primary mt-3 font-weight-bold btn-block">Submit</button>
       <button type="reset" class="btn btn-outline-secondary mt-3 font-weight-bold btn-block">Reset</button>
     

    </form>
      <?php 
          if (isset($error)) 
          {
             echo '</br>'; 
             echo $error; 
          }
            if (isset($result)) 
          {
             echo '</br>'; 
             echo $result; 
          }
         
        ?>

      </div>
      <div class="col-md-3">
      </div>
    </div>
</div>


 <?php include('../headers/footer.php'); ?>