
<?php 

            define('PAGE', 'Changes');
            define('TITLE', 'Changes');
            define('MENU', 'menu');
            include('nav.php'); 





include('../headers/connection.php'); 
    
 

  if (isset($_REQUEST['submit'])) 
     {

      if ($_REQUEST['subject'] == '' || $_REQUEST['summary'] == '' || $_REQUEST['info'] == '' ) 
         {
           $error = '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>All fields are required</h3></font></div>';
         }
     else
        {
                $subject = $_REQUEST['subject'];
                $summary = $_REQUEST['summary'];
                $info = $_REQUEST['info'];

    $sql = "INSERT INTO changes(subject, summary, file_desc) VALUES('$subject','$summary','$info')";
            
            if ($conn->query($sql) == TRUE) 
                  {
                    $result = '<div class="alert alert-success mt-2" roll="alert">
                    <font color="Green"><h3>Change Added Sucessfully.</h3></font></div>';
                    $genid = mysqlI_insert_id($conn); 
               
                    $_SESSION['id'] = $genid;
                    $_SESSION['table'] = 'changes';
                    echo "<script> window.open('srsucess.php', '_blank')</script>";
                   //  echo "<script> location.href='srsucess.php' target='_blank';</script>";
                    //print_r($_SESSION); die('in requirement page');
                    
                  }
                else
                  {
                    $result = '<div class="alert alert-danger mt-2" roll="alert">
                    <font color="Green"><h3>Unable to Submit your Change.</h3></font></div>';
                  }
          
          }
       
         }
 

  ?>



<div> 
  <div class="col-sm-12">
  <form method="post" class="shadow-lg p-4 mx-5" action="#" enctype="multipart/form-data">
 

      <div class="form-group">
      <label>Subject</label>
      <input type="text" class="form-control" name="subject" value="">
      </div>
    
      <div class="form-group">
      <label>Summary</label>
       <!-- <input type="textarea" name="summ" id="summary">  -->
      <textarea class="form-control" name="summary"  id="summary" rows="6"></textarea> 
      </div>

<div class="row ">

      <div class="form-group col">
      <label for="attachment">Attachment 1</label>
      <input type="file" class="form-control-file" id="attachment" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">(Maximum file size 25MB.)</small>
      </div>

      <div class="form-group col">
      <label>information</label>
      <input type="text" class="form-control" name="info" value="">
      </div>


  </div>
      
   
       <button type="submit" name="submit" 
               class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm">Submit</button>
               
        <a href ="test.php" class="btn btn-outline-secondary mt-3 font-weight-bold btn-block shadow-sm">Back to Home</a> 
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
            // echo "<script> location.href='srsucess.php'; </script>";
          }
         
        ?>

   </div>
 </div>
  






   

    <?php include('../headers/footer.php'); ?>

  <script type="text/javascript">
        
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        CKEDITOR.replace('summary',
                  {
                    toolbar : 'MyToolbar',
                    width:'auto',
                    height:'auto',
                    filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                   });

      document.getElementById('msgBlog').value = editor.getData();

  </script>