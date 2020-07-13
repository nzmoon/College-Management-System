<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">

<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['message_id']))
	{
		$message_id = $_REQUEST['message_id'];
		$sql = "select * from principal_message where message_id= '".$message_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>


<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> Principal Details  </td> </center></tr>


 <tr><td> Principal  Details </td><td>:</td><td><?php echo $row['message_details']?></td></tr>

<?php
}
?>

</table>
	

</div>

</div>
</div>


<?php include("footer.php"); ?>