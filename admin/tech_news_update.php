<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['tech_id'])){
		$tech_id = $_REQUEST['tech_id'];
		$sql = "select * from tech_news where tech_id='".$tech_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$tech_title = $row['tech_title'];
		$tech_details = $row['tech_details'];
		
		
	}
	if(isset($_REQUEST['submit']))
	{
	extract($_POST);	
	


		if(
		!empty($tech_title)&& 
		!empty($tech_details)
		)
		{
			$sql = "update tech_news set
			tech_title='$tech_title',
			tech_details='$tech_details'
			
			where 
			
			tech_id=$tech_id";
			
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
		<tr><td colspan="3"> <center><h1>Update News </td> </center></tr>



<tr><td>  Title </td><td>:</td>
 <td><input type="text" class="form-control has-warning" name="tech_title"  value="<?php echo $row["tech_title"];?>" ></td></tr>
 
<tr><td>  Description </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="tech_details" rows="1"><?php echo $row["tech_details"];?></textarea></td></tr>





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