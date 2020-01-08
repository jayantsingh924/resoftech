<?php 
     
     define('TITLE', 'Request');
     define('PAGE', 'requests');
     define('MENU', 'menu');
     include('../headers/connection.php');
     include('sidebar.php'); 

  ?>

  <div class='row mb-3'>
    <div class='col-md-4'>
  	

<?php

       $sql =  "SELECT * FROM requirement ORDER BY id DESC LIMIT 4";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) 
         {
	       while ( $row = $result->fetch_assoc()) 
	          {
		          echo "<div class='card text-white bg-default mb-3 shadow' style='max-width: 20rem;''>
                        <div class='card-header' 
                             style='font-size: medium; color: black;'>ID : ".$row['id']." 
                        </div>
                             <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-md-8'>
                                            <a href='#''><h4 class='card-title'align='left' 
                                            style='font-size: medium; color: black;'>".$row['subject']." </h4></a>
                                        </div>
                                        <div class='col-md-3' align='right' >
                                        
                  <form action='' method='post'>
                      <input type='hidden' name='id' value='".$row['id']."'>
                           <input type='submit' class='btn btn-link' style='color: #004a99;' 
                                  name='view' value='View'>
                              <input type='submit' class='btn btn-link' style='color: red;' 
                                     name='close' value='Close'>
                  </form>
                                        </div>
                                    </div>
                                </div>
                          </div>";
            }
        }

        if(isset($_REQUEST['view']))
          {
              $sql = "SELECT * FROM requirement WHERE id = '".$_REQUEST['id']."'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
            
          }
        if (isset($_REQUEST['close'])) 
          {
               $sql = "DELETE FROM requirement where id = '".$_REQUEST['id']."'";

               if($conn->query($sql) == TRUE)
                 {
                   echo '<meta http-equiv="refresh" content="0;  
                               url=http://localhost/bit/resoftech/admin/request.php">';
                 }
                else
                 {
                   echo '<div class="alert alert-danger mt-2" roll="alert">
                    <font color="red"><h3>Unable to Close.</h3></font></div>';
                 }
               
        }
        if (isset($_REQUEST['submit'])) {
               
                $subject = $_REQUEST['subject'];
                $summary = $_REQUEST['summary'];
                $info = $_REQUEST['info'];
                $assign_emp  = $_REQUEST['assign_emp'];
                $assign_id = $_POST['id'];

    $sql = "INSERT INTO assigned(id, subject, summary, file_desc, assign_emp) VALUES('$assign_id', '$subject',
    '$summary','$info', '$assign_emp')";
        // echo $sql; die();  
            if ($conn->query($sql) == TRUE) 
                  {
                    $result = '<div class="alert alert-success mt-2" roll="alert">
                    <font color="Green"><h3>Request Assigned Sucessfully.</h3></font></div>';
                   
                   echo '<meta http-equiv="refresh" content="5;  
                               url=http://localhost/bit/resoftech/admin/request.php">';
                  
                  }
                else
                  {
                    $result = '<div class="alert alert-danger mt-2" roll="alert">
                    <font color="red"><h3>Unable to Assign your request.</h3></font></div>';

                  }
        }
?>
     </div>
    
 <div class="col-md-8">
  <form method="post" class="shadow-lg p-4 mx-5" action="#" enctype="multipart/form-data">
 <h5 class="text-center"><strong>Assign Request To Employee</strong></h5>
<hr>
   <div class="row">   
      <div class="form-group col-md-4">
      <label>Request ID</label>
      <input type="number" class="form-control" name="id" 
             value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>" readonly>
      </div>

      <div class="form-group col-md-8">
      <label>Subject</label>
      <input type="text" class="form-control" name="subject" value="<?php echo @$row['subject']; ?>" readonly>
      </div>

       </div>
    
      <div class="form-group">
      <label>Summary</label>
      <textarea class="form-control" name="summary" 
                rows="6" readonly><?php  echo @$row['summary']; ?></textarea>
      </div>

      <div class="form-group">
      <label>File info.</label>
      <input type="text" class="form-control" name="info" value="<?php echo @$row['file_desc']; ?>" readonly>
      </div>



<div class="row ">

      <div class="form-group col">
      <label>Assign to Employee</label>
      <input type="text" class="form-control" name="assign_emp" value="">
      </div>
      

      <div class="form-group col">
      <label>Assign date</label>
      <input type="text" class="form-control" name="info" placeholder="<?php echo date("d-M-Y"); ?>" disabled>
      </div>


  </div>
      
   <div class="row">
      <div class="col">
       <button type="submit" name="submit" 
               class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm">Assign</button>
             </div><div class="col">  <a href="request.php" 
                  class="btn btn-outline-dark mt-3 font-weight-bold btn-block shadow-sm">Reset</a>
       
        </div>
      </div>
     </form>

   

     </div>



   </div>
<?php 

 if(isset($_REQUEST['submit'])){echo $result;} 

?>


 

<?php include('../headers/footer.php'); ?>

