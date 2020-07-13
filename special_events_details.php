
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['special_id']))
	{
		$special_id = $_REQUEST['special_id'];
		$sql = "select * from special_events where special_id= '".$special_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>

<div class="container">
<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> Special Events </td> </center></tr>

<tr><td>  Title </td><td><?php echo $row['special_title']?></td></tr>
 <tr><td>  Details </td><td><?php echo $row['special_details']?></td></tr>

<?php
}
?>

</table>
	

</div>

</div>
</div>


<?php include("footer.php"); ?>