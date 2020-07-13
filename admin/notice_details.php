<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['notice_id']))
	{
		$notice_id = $_REQUEST['notice_id'];
		$sql = "select * from notice where notice_id= '".$notice_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>

<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>Notice Details</td> </center></tr>

<tr><td> Notice Title </td><td>:</td><td><?php echo $row['notice_title']?></td></tr>
 <tr><td> Notice Date </td><td>:</td><td><?php echo $row['notice_date']?></td></tr>
<tr><td> Notice Content </td><td>:</td>
    <?php 
	if(trim($row["notice_file"])!="")
	{
			$image_dir = 'uploaded_image/';
			$img_name = trim($row["notice_file"]);
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


 <?php 
	 }


	?>


</table>
	

</div>

</div>


<?php include("footer.php"); ?>