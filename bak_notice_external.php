<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['notice_id']))
	{
		$notice_id = $_REQUEST['notice_id'];
		$sql = "select * from notice where notice_id= '".$notice_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>Notice </td> </center></tr>

<tr><td> Notice Title </td><td><?php echo $row['notice_title']?></td></tr>
 <tr><td> Notice Details </td><td><?php echo $row['notice_details']?></td></tr>
 


<?php
}
?>

</table>
</div></div>
</div>


<?php include"footer.php" ?>