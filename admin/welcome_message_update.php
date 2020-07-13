<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['welcome_id'])){
		$welcome_id = $_REQUEST['welcome_id'];
		$sql = "select * from welcome where welcome_id='".$welcome_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$welcome_title = $row['welcome_title'];
		$welcome_details = $row['welcome_details'];
		
		
	}
	if(isset($_REQUEST['submit']))
	{
	extract($_POST);	
	


		if(
		!empty($welcome_title)&& 
		!empty($welcome_details)
		)
		{
			$sql = "update welcome set
			welcome_title='$welcome_title',
			welcome_details='$welcome_details'
			
			where 
			
			welcome_id=$welcome_id";
			
			$result = mysqli_query($con,$sql);
			 echo '<script language="javascript">';
echo 'alert("Data Updated Successfully")';
echo '</script>';
		}else{
			echo "Please Enter Properly !";
		}
	}
?>

<?php
	include("header.php");
	?>
<div class="row admin-custom">
<div class="col-lg-12">
<table  border="1 px solstd_id"  align="center"   class="table"  >
        <form name="register" method="post" action="" enctype="multipart/form-data">
		<tr><td colspan="3"> <center><h1>Update Welcome Messages </td> </center></tr>



<tr><td> Welcome Title </td><td>:</td>
 <td><input type="text" class="form-control has-warning" name="welcome_title"  value="<?php echo $row["welcome_title"];?>" ></td></tr>
 
<tr><td> Welcome Description </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="welcome_details" rows="1"><?php echo $row["welcome_details"];?></textarea></td></tr>





<tr>
<td colspan="3"> <center> 
<input type="reset" class="btn btn-primary" name="submit" value="Reset" size="30%">
<input class="btn btn-success" type="submit" name="submit" value="Submit"> </center> </td>
</tr>
</form>

</table>


</div>

</div>
<?php
	include("footer.php");
	?>