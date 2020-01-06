<?php 

   define('TITLE', 'Schedule');
   define('PAGE', 'schedule');
    define('MENU', 'menu');
   include('nav.php'); 

?>



   <?php
    include('../headers/connection.php'); 
  
   // @session_start();
      if ($_SESSION['is_login']) 
         { 
          
           @$id = $_SESSION['id'];
           
         }
      else
         {
          
           echo "<script> location.href='login.php';</script>";
         }

         $sql = "SELECT * FROM requirement";
     //    echo $sql; die();
        // $result = $conn->query($sql);

$result = mysqli_query($conn,$sql);

 if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
     $data =  "<div> 
  <div class='col-sm-12'>
  <table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>No.</th>
      <th scope='col'>Posting Date</th>
      <th scope='col'>Subject</th>
      <th scope='col'>Status</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class='table-active'>
      <th scope='row'>".$row['id']."</th>
      <td>".$row['posted_date']."</td>
      <td>".$row['subject']."</td>
      <td>working</td>
      <td>working</td>
    </tr>
   
    
   
  </tbody>
</table> 

   </div>
 </div>";
   }
   
?>



<?php echo $data; ?>





   <?php include('../headers/footer.php'); ?>

    <script type="text/javascript">
        
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

      </script>