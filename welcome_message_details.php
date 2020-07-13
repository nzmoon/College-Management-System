<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">

<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['welcome_id']))
	{
		$welcome_id = $_REQUEST['welcome_id'];
		$sql = "select * from welcome where welcome_id= '".$welcome_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>


<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> Welcome Description  </td> </center></tr>


 <tr><td> Welcome Description </td><td>:</td><td><?php echo $row['welcome_details']?></td></tr>

<?php
}
?>

</table>
	

</div>

</div>
</div>


<?php include("footer.php"); ?>