
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['tech_id']))
	{
		$tech_id = $_REQUEST['tech_id'];
		$sql = "select * from tech_news where tech_id= '".$tech_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> Tech News  </td> </center></tr>

<tr><td>  Title </td><td><?php echo $row['tech_title']?></td></tr>
 <tr><td>  Details </td><td><?php echo $row['tech_details']?></td></tr>

<?php
}
?>

</table>
	

</div>

</div>
</div>

<?php include("footer.php"); ?>