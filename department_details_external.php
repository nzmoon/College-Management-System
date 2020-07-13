<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['department_id']))
	{
		$department_id = $_REQUEST['department_id'];
		$sql = "select * from computer where department_id= '".$department_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> <?php echo $row['department_name']?> </h1> </td> </center></tr>

<tr><td> Department  </td><td><?php echo $row['department_name']?></td></tr>
 <tr><td> Department Details </td><td><?php echo $row['department_details']?></td></tr>
 


<?php
}
?>

</table>
</div></div>
</div>


<?php include"footer.php" ?>