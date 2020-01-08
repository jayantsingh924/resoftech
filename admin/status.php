 <?php 
     
     define('TITLE', 'Status');
     define('PAGE', 'Status');
     define('MENU', 'menu');
     include('../headers/connection.php');
     include('sidebar.php'); 

  ?>

 <link href="../css/main.css" rel="stylesheet">
  <div>


<div class="s01" style="padding-top: 1px;">
      <form action="" method="post">
       
        <fieldset>
          <legend style="color: blue;">Discover For Your Request ID</legend>
        </fieldset>
        
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input type="text" name="id" value="<?php if (isset($_REQUEST['id'])) { echo $_REQUEST['id'];}?>"   
                   placeholder="Which request id you looking for?" />
          </div>
         
          <div class="input-field third-wrap"><button type="submit" name='submit' 
               class="btn-search">Search</button>
            <!-- <button type="submit" class="btn-search" name='submit'>Search</button> -->
          </div>

        </div>
      </form>
    </div> 



<?php 

if (isset($_REQUEST['submit'])) {
	
$sql = "SELECT * FROM assigned where id = {$_REQUEST['id']}";
      
         $result = $conn->query($sql);
         if ($result->num_rows == 1) 
            {
               $row = $result->fetch_assoc();
               echo "<table class='table'>

<tbody>
    <tr class='table-active'>
      <th scope='row'>Request ID: </th>
      <td><b>".$row['id']."</b></td>
     
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
      <th scope='row'>Assigned To: </th>
      <td>".$row['assign_emp']."</td>
     
    </tr>

    <tr class='table-primary'>
      <th scope='row'>Assigned Date: </th>
      <td>".$row['assign_date']."</td>
     
    </tr>

 
   
  </tbody>
</table>";
}
else 
   {
	 echo '<div class="alert alert-warning mt-2" role="alert"><font color="Red"><h3>Request is still Pending...</h3></font></div>';
   }
}



?>

  </div>

<?php include('../headers/footer.php'); ?>