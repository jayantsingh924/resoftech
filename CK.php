 <?php include('headers/header.php'); ?>


<div> 
	



<div class="col-sm-12">
	<form method="post" class="shadow-lg p-4 mx-5" action="#">
 

      <div class="form-group">
      <label>Subject</label>
      <input type="text" class="form-control" name="subject" value="">
      </div>
    
      <div class="form-group">
      <label>Summary</label>
      <input type="text" name="summ" id="summary">
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

      <input type="hidden" name="msgBlog" value="">

  </div>
      
   
       <button type="submit" name="submit" 
               class="btn btn-outline-primary mt-3 font-weight-bold btn-block shadow-sm">Submit</button>
               
        <a href ="index.php" class="btn btn-outline-secondary mt-3 font-weight-bold btn-block shadow-sm">Back to Home</a> 
     

    </form>
    <?php
 print_r($_REQUEST); 
?>
</div>
      
    </div>






     <?php include('headers/footer.php'); ?>

     <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
  
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
  
          
           </script>
  