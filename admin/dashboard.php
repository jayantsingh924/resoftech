
  <?php 
  session_start();

  if (@$_SESSION['admin_login'] != '') 
  {
    $email = $_SESSION['email'];
     define('TITLE', 'Admin Dashboard');
     define('PAGE', 'dashboard');
     define('MENU', 'menu');
     include('../headers/connection.php');
     include('sidebar.php'); 
   
  }
  else
  {
      echo "<script> location.href='login.php';</script>";
  }
     
     

  ?>



<div style="padding-top: 35px;">

<div class="row" style="text-decoration-color: white;">

<div class="col">
<div class="card text-white ttt mb-3 shadow" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Request's</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="font-size: larger;">Add new</a>
</div>
<div class="col">
<a href="#"><h4 class="card-title" align="right">11</h4></a>
</div>
</div>
</div>
</div>
</div>

<div class="col">
<div class="card text-white bg-default mb-3 shadow" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Dicussion's</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col">
<a href="#"><h4 class="card-title" align="right" style="color: black;">22</h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col">
<div class="card text-white ttt mb-3 shadow" style="max-width: 20rem; color: black;">
<div class="card-header" style="font-size: larger;">Change's</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="font-size: larger;" >Add new</a>
</div>
<div class="col">
<a href="#"><h4 class="card-title" align="right">33</h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col">
<div class="card text-white bg-default mb-3 shadow" style="max-width: 20rem; color: black;">
<div class="card-header" style="font-size: larger; color: black;">Bug's</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="font-size: larger; color: black;">Add new</a>
</div>
<div class="col">
<a href="#"><h4 class="card-title" align="right"  style="color: black;">33</h4></a>
</div>
</div>
</div>
</div>
</div>






</div>

<div class="mx-5 mt-5 text-center">
<p class="ttt text-white p-2 shadow">List Of Requirement's</p>

<?php 

$sql = "SELECT subject, posted_date FROM requirement ORDER BY id ASC LIMIT 6";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = 0; 
if ($result->num_rows > 0) {

   ?> <table class="table table-stripd table-hover shadow-lg">
		<tr class="table-primary">
			<th>S.no</th>
			<th>Subject</th>
            <th>Posted Date</th>
        </tr> <?php
  


$sno = $count+1;
		while ($row = $result->fetch_assoc()) {

			 
      	
			echo "<tr>";
			echo "<td>".$sno." .</td>";
			echo "<td>".$row['subject']."</td>";
			
			echo "<td>".$row['posted_date']."</td>";
			echo "</tr>";

			
			$sno++;

		}
	
		?>
	</table>
<?php 

}

?>

  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>




</div>
</div>

<?php include('../headers/footer.php'); ?>