<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['special_id'])){
		$special_id = $_REQUEST['special_id'];
		$sql = "select * from special_events where special_id='".$special_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$special_title = $row['special_title'];
		$special_details = $row['special_details'];
		
		
	}
	if(isset($_REQUEST['submit']))
	{
	extract($_POST);	
	


		if(
		!empty($special_title)&& 
		!empty($special_details)
		)
		{
			$sql = "update special_events set
			special_title='$special_title',
			special_details='$special_details'
			
			where 
			
			special_id=$special_id";
			
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
		<tr><td colspan="3"> <center><h1>Update Events </td> </center></tr>



<tr><td>  Title </td><td>:</td>
 <td><input type="text" class="form-control has-warning" name="special_title"  value="<?php echo $row["special_title"];?>" ></td></tr>
 
<tr><td>  Description </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="special_details" rows="1"><?php echo $row["special_details"];?></textarea></td></tr>





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