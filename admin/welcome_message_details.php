<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['welcome_id']))
	{
		$welcome_id = $_REQUEST['welcome_id'];
		$sql = "select * from welcome where welcome_id= '".$welcome_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>

<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>Welcome Message </td> </center></tr>

<tr><td> Welcome Title </td><td><?php echo $row['welcome_title']?></td></tr>
 <tr><td> Welcome Details </td><td><?php echo $row['welcome_details']?></td></tr>

<?php
}
?>

</table>
	

</div>

</div>


<?php include("footer.php"); ?>