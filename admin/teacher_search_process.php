<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['submit']))
	{
		$teacher_department = $_REQUEST['teacher_department'];
		$teacher_username = $_REQUEST['teacher_username'];
		$sql = "select * from teacher where teacher_department= '".$teacher_department."' && teacher_username= '".$teacher_username."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 

<?php include("header.php"); ?>
<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1> Welcome <b><?php echo $row['teacher_name']?> </b> Your Information is Here... <a href="logout.php">LogOut</a>|<form>
<input type="button" value="Print" onClick="window.print()" />
</form>
		

		
		</td> </center></tr>

<tr><td> Name </td><td>:</td><td><?php echo $row['teacher_name']?></td></tr>
 <tr><td> Teacher Department  </td><td>:</td><td><?php echo $row['teacher_department']?></td></tr>
<tr><td> Teacher Contact</td><td>:</td><td><?php echo $row['teacher_contact']?></td></tr>

<tr><td> Contact Number </td><td>:</td><td><?php echo $row['teacher_contact']?></td></tr>
<tr><td> Student Picture </td><td>:</td>
<td>

    <?php 
	if(trim($row["image"])!="")
	{
			$image_dir = 'uploaded_image/';
			$img_name = trim($row["image"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'" height="100" width="150"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'female.png" />';	
			}
			
	?>

	
	<?php echo $img_patd;?>



<?php 
	 }


	?>



</td>
   
   
   </tr>

<tr><td> Teacher Details </td><td>:</td><td><?php echo $row['teacher_details']?></td></tr>


 <?php 
	 }


	?>


</table>
	

</div>

</div>
<?php include("footer.php"); ?>