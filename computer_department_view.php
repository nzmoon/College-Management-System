
 <?php
include("admin/murad_db.php");
?>
<?php
	include("header.php");
?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">
 <table  border="2 px solid"  align="center"   class="table"  >

	
	<?php

	 $result = mysqli_query($con,"select * from department where department_id='1'");
 
	 while($row = mysqli_fetch_array($result)){
		 ?>
			<tr>
			
			<td width="40%"><?php echo $row['department_details']?></td>

			</tr>
				 
		 <?php 
	 }


	?>

	
	   
	   
</table>


</div>

</div>
</div>
<?php
	include("footer.php");
	?>
