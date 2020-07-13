<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['message_id'])){
		$message_id = $_REQUEST['message_id'];
		$sql = "select * from principal_message where message_id='".$message_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$message_title = $row['message_title'];
		$message_details = $row['message_details'];
		
		
	}
	if(isset($_REQUEST['submit']))
	{
	extract($_POST);	
	


		if(
		!empty($message_title)&& 
		!empty($message_details)
		)
		{
			$sql = "update principal_message set
			message_title='$message_title',
			message_details='$message_details'
			
			where 
			
			message_id=$message_id";
			
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
		<tr><td colspan="3"> <center><h1>Update Messages </td> </center></tr>



<tr><td> Message Title </td><td>:</td>
 <td><input type="text" class="form-control has-warning" name="message_title"  value="<?php echo $row["message_title"];?>" ></td></tr>
 
<tr><td> Message Details </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="message_details" rows="1"><?php echo $row["message_details"];?></textarea></td></tr>





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