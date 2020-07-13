<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['notice_id'])){
		$notice_id = $_REQUEST['notice_id'];
		$sql = "select * from notice where notice_id='".$notice_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		 $notice_title = $row['notice_title'];
		$notice_date = $row['notice_date'];	
		$notice_file = $row['notice_file'];
	
		
	}
	if(isset($_REQUEST['submit'])){
	extract($_POST);
	
			
		if($_FILES['notice_file']['name']!=""){
			$source = $_FILES['notice_file']['tmp_name'];
			$destination = "uploaded_image/";
			$time = time();
			$fileName = $_FILES['notice_file']['name'];
			$new_file_name = $time.'-'.$fileName;
			$destination.= $new_file_name;
			
			$imageFileType = pathinfo($destination,PATHINFO_EXTENSION);
			$uploadOk = 1;
		
		if($_FILES['notice_file']['size']>5000000){
			echo '<script type="text/javascript">alert("File size too large (Required size is 500 KB)");</script>';
			$uploadOk = 0;
		}
		if($imageFileType!= "jpeg" && $imageFileType!="jpg" && $imageFileType != "png" && $imageFileType!="pdf" && $imageFileType != "zip"){
			echo '<script type="text/javascript">alert("Only jpg,jpeg And png format required");</script>';
			$uploadOk = 0;
		}
		if($uploadOk == 0){
			echo '<script>alert("Sorry, there was a problem when uploading")</script>';
		}else if(move_uploaded_file($source,$destination)){
			if(file_exists("uploaded_image/".$old_name)){
				unlink("uploaded_image/".$old_name);
			}
		}
		}else if($old_name!=""){
			$new_file_name = $old_name;
		}


		if(
		!empty($notice_title)&& 
		!empty($notice_file)&& 
		!empty($notice_date)
		)
		{
			$sql = "update notice set
			notice_title='$notice_title',				
			notice_file = '$new_file_name',
			notice_date='$notice_date'
			
			where 
			
			notice_id=$notice_id";
			
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
		<tr><td colspan="3"> <center><h1>Update Notice  </td> </center></tr>

<tr><td> Notice Title </td><td>:</td><td><input type="text" name="notice_title" class="form-control" value="<?php echo $row["notice_title"];?>" ></td></tr>

<tr><td> </td><td>:</td>

<td>

<img src="uploaded_image/<?php echo $notice_file;?>" width="150" height="100" alt="" />
<input type="file" name="notice_file" class="" id="" />
<input type="hidden" name="old_name" value="<?php echo $row['notice_file'];?>" id="" />


</td></tr>




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