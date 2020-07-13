<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['department_id'])){
		$department_id = $_REQUEST['department_id'];
		$sql = "select * from department where department_id='".$department_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		echo $department_name = $row['department_name'];
		$department_details = $row['department_details'];	
		$department_pic = $row['department_pic'];
	
		
	}
	if(isset($_REQUEST['submit'])){
	extract($_POST);
	
			
		if($_FILES['department_pic']['name']!=""){
			$source = $_FILES['department_pic']['tmp_name'];
			$destination = "uploaded_image/";
			$time = time();
			$fileName = $_FILES['department_pic']['name'];
			$new_file_name = $time.'-'.$fileName;
			$destination.= $new_file_name;
			
			$imageFileType = pathinfo($destination,PATHINFO_EXTENSION);
			$uploadOk = 1;
		
		if($_FILES['department_pic']['size']>5000000){
			echo '<script type="text/javascript">alert("File size too large (Required size is 500 KB)");</script>';
			$uploadOk = 0;
		}
		if($imageFileType!= "jpeg" && $imageFileType!="jpg" && $imageFileType != "png"){
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
		!empty($department_name)&& 
		!empty($department_details)
		)
		{
			$sql = "update department set
			department_name='$department_name',
			department_details='$department_details',			
			department_pic = '$new_file_name'
			
			where 
			
			department_id=$department_id";
			
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
		<tr><td colspan="3"> <center><h1>Update Department Information </td> </center></tr>



<tr><td> Student Picture </td><td>:</td>

<td>

<img src="uploaded_image/<?php echo $department_pic;?>" width="150" height="100" alt="" />
<input type="file" name="department_pic" class="" id="" />
<input type="hidden" name="old_name" value="<?php echo $row['department_pic'];?>" id="" />


</td></tr>
<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

  <select name="department_name"  class="form-control" >
<option value="COMPUTER" <?php if(trim($row["department_name"]) =='COMPUTER') echo 'selected';?> size="50px" >COMPUTER</option>
<option value="CONSTRUCTION" <?php if(trim($row["department_name"]) =='CONSTRUCTION') echo 'selected';?>size="50px">CONSTRUCTION</option>
  <option value="ELECTICAL" <?php if(trim($row["department_name"]) =='ELECTICAL') echo 'selected';?>size="50px">ELECTICAL</option>
    <option value="MECHANICAL" <?php if(trim($row["department_name"]) =='MECHANICAL') echo 'selected';?>size="50px">MECHANICAL</option>
    <option value="CIVIL" <?php if(trim($row["department_name"]) =='CIVIL') echo 'selected';?>size="50px">CIVIL (WOOD)</option>
     <option value="AUTOMOBILE" <?php if(trim($row["department_name"]) =='AUTOMOBILE') echo 'selected';?>size="50px">AUTOMOBILE </option>
	 <option value="SWEDISH" <?php if(trim($row["department_name"]) =='SWEDISH') echo 'selected';?>size="50px">SWEDISH </option>
	 <option value="JAHANGIR" <?php if(trim($row["department_name"]) =='JAHANGIR') echo 'selected';?>size="50px">JAHANGIR </option>
	  <option value="LADISH_HOSTEL" <?php if(trim($row["department_name"]) =='LADISH_HOSTEL') echo 'selected';?>size="50px">LADISH HOSTEL</option>
	    <option value="SPORTS" <?php if(trim($row["department_name"]) =='SPORTS') echo 'selected';?>size="50px">SPORTS</option>
     <option value="TEACHERS_RESIDENCE" <?php if(trim($row["department_name"]) =='TEACHERS_RESIDENCE') echo 'selected';?>size="50px">TEACHERS RESIDENCE </option>
	 <option value="DAINING" <?php if(trim($row["department_name"]) =='DAINING') echo 'selected';?>size="50px">DAINING </option>
	 <option value="MOSQUE" <?php if(trim($row["department_name"]) =='MOSQUE') echo 'selected';?>size="50px">MOSQUE </option>
	 
  

</select></td>
 </tr>

<tr><td> Department Details </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="department_details" rows="1"><?php echo $row["department_details"];?></textarea></td></tr>





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