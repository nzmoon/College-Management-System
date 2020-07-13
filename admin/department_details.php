<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['department_id']))
	{
		$department_id = $_REQUEST['department_id'];
		$sql = "select * from department where department_id= '".$department_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>

<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>department Information System</td> </center></tr>

<tr><td> Department Name </td><td>:</td><td><?php echo $row['department_name']?></td></tr>


<tr><td> department Picture </td><td>:</td>
    <?php 
	if(trim($row["department_pic"])!="")
	{
			$image_dir = 'uploaded_image/';
			$img_name = trim($row["department_pic"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'"  width="150" height="100"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'/uploaded_image/female.png" />';	
			}
			
	?>
<td>
	
	<?php echo $img_patd;?>



</td>
<?php 
	 }


	?>
   
   
   </tr>

<tr><td> Department Details </td><td>:</td><td><?php echo $row['department_details']?></td></tr>


 <?php 
	 }


	?>


</table>
	

</div>

</div>


<?php include("footer.php"); ?>