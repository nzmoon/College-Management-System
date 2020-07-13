<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
 
 
 <?php
include("murad_db.php");
?>
<?php
	include("header.php");
	?>
<div class="row admin-custom">
<div class="col-lg-12 ">
 <table  border="2 px solid"  align="center"   class="table"  >
       
	   <tr>
		<th >Serial</th>
		<th>Name</th>
		<th>Father</th>
		<th>Department</th>
		
		<th>Contact Number</th>
		
		
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	
	<?php

	 $result = mysqli_query($con,"select * from student");
	 $i=1;
	 
	 while($row = mysqli_fetch_array($result)){
		 ?>
			<tr>
			<td ><?php echo $i++; ?></td>
			<td width="20%"><?php echo $row['std_name']?></td>
			<td width="20%"><?php echo $row['std_fname']?></td>
			<td width="40%"><?php echo $row['std_department']?></td>
			<td width="20%"><?php echo $row['std_contact']?></td>
			  
		
		
			<td width="20%"><a href="student_details.php?std_id=<?php echo $row['std_id']?>">DETAILS</a></td>
			<td width="20%"><a href="student_update.php?std_id=<?php echo $row['std_id']?>">UPDATE</a></td>
			<td width="20%"><a href="student_delete.php?std_id=<?php echo $row['std_id']?>">DELETE</a></td>
			</tr>
				 
		 <?php 
	 }


	?>

	
	   
	   
</table>


</div>

</div>
<?php
	include("footer.php");
	?>
