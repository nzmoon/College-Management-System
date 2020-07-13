<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['teacher_id']))
	{
		$teacher_id = $_REQUEST['teacher_id'];
		$sql = "select * from teacher where teacher_id= '".$teacher_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>
<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>Student Information System</td> </center></tr>

<tr><td> Teacher Name </td><td>:</td><td><?php echo $row['teacher_name']?></td></tr>
 <tr><td> User Name </td><td>:</td><td><?php echo $row['teacher_username']?></td></tr>
<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

 <?php echo $row['teacher_department']?>
</td></tr>

<tr><td width="23%"> Teacher Designation </td><td width="2%">:</td><td width="75%">
<?php echo $row['teacher_designation']?>
</td></tr>
<tr><td> Contact Number </td><td>:</td><td><?php echo $row['teacher_contact']?></td></tr>
<tr><td> Teacher Picture </td><td>:</td>
    <?php 
	if(trim($row["image"])!="")
	{
			$image_dir = 'uploaded_image/';
			$img_name = trim($row["image"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'"  width="150" height="100"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'female.png" />';	
			}
			
	?>
<td>
	
	<?php echo $img_patd;?>



</td>
<?php 
	 }


	?>
   
   
   </tr>

<tr><td> Teacher Details  </td><td>:</td><td><?php echo $row['teacher_details']?></td></tr>


 <?php 
	 }


	?>


</table>
	

</div>

</div>


<?php include("footer.php"); ?>