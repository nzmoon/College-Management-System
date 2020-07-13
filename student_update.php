<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("murad_db.php");
	
	if(isset($_REQUEST['std_id'])){
		$std_id = $_REQUEST['std_id'];
		$sql = "select * from student where std_id='".$std_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$std_name = $row['std_name'];
		$std_fname = $row['std_fname'];
		$std_mname = $row['std_mname'];
		$std_department = $row['std_department'];
		$std_shift = $row['std_shift'];
		$std_semester = $row['std_semester'];
		$std_roll = $row['std_roll'];
		$std_reg = $row['std_reg'];
		$std_ses = $row['std_ses'];
		$std_date_of_birth = $row['std_date_of_birth'];
		$std_nid = $row['std_nid'];
		$std_contact = $row['std_contact'];
		$image = $row['image'];
		$std_present_address = $row['std_present_address'];
		$std_permanent_address = $row['std_permanent_address'];
		$std_reference = $row['std_reference'];
		
	}
	if(isset($_REQUEST['submit'])){
	extract($_POST);
	
			
		if($_FILES['image']['name']!=""){
			$source = $_FILES['image']['tmp_name'];
			$destination = "uploaded_image/";
			$time = time();
			$fileName = $_FILES['image']['name'];
			$new_file_name = $time.'-'.$fileName;
			$destination.= $new_file_name;
			
			$imageFileType = pathinfo($destination,PATHINFO_EXTENSION);
			$uploadOk = 1;
		
		if($_FILES['image']['size']>5000000){
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
		!empty($std_name)&& 
		!empty($std_fname)&& 
		!empty($std_mname)&& 
		!empty($std_department)&& 
		!empty($std_shift)&& 
		!empty($std_semester)&&
		!empty($std_roll)&& 
		!empty($std_reg)&& 
		!empty($std_ses)&& 
		!empty($std_date_of_birth)&& 
		!empty($std_nid)&& 
		!empty($std_contact)&& 
		!empty($std_present_address)&& 
		!empty($std_permanent_address)&& 
		!empty($std_reference)
		)
		{
			$sql = "update student set
			std_name='$std_name',
			std_fname='$std_fname',
			std_mname='$std_mname',
			std_department='$std_department',
			std_shift = '$std_shift',
			std_semester = '$std_semester',
			std_roll = '$std_roll',
			std_reg = '$std_reg',
			std_ses = '$std_ses',
			std_reg = '$std_reg',
			std_date_of_birth = '$std_date_of_birth',
			std_nid = '$std_nid',
			std_contact = '$std_contact',
			image = '$new_file_name',
			std_present_address = '$std_present_address',
			std_permanent_address = '$std_permanent_address',
			std_reference = '$std_reference'
			
			where 
			
			std_id=$std_id";
			
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
		<tr><td colspan="3"> <center><h1>Update Student Information </td> </center></tr>



<tr><td> Name </td><td>:</td>
 <td><input type="text" class="form-control has-warning" name="std_name"  value="<?php echo $row["std_name"];?>" ></td></tr>
 <tr><td> Father's Name </td><td>:</td> <td><input type="text" class="form-control has-warning" name="std_fname"  value="<?php echo $row["std_fname"];?>" ></td></tr>
<tr><td> Mother's Name </td><td>:</td> <td><input type="text" class="form-control has-warning" name="std_mname"  value="<?php echo $row["std_mname"];?>" ></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

  <select name="std_department"  class="form-control" >

 <option value="COMPUTER" <?php if(trim($row["std_department"]) =='COMPUTER') echo 'selected';?>> COMPUTER </option>
 <option value="CONSTRUCTION" <?php if(trim($row["std_department"]) =='CONSTRUCTION') echo 'selected';?>> CONSTRUCTION </option>
  <option value="ELECTICAL" <?php if(trim($row["std_department"]) =='ELECTICAL') echo 'selected';?>> ELECTICAL </option>
    <option value="MECHANICAL" <?php if(trim($row["std_department"]) =='MECHANICAL') echo 'selected';?>> MECHANICAL </option>
 <option value="CIVIL" <?php if(trim($row["std_department"]) =='CIVIL') echo 'selected';?>> CIVIL </option>
  <option value="AUTOMOBILE" <?php if(trim($row["std_department"]) =='AUTOMOBILE') echo 'selected';?>> AUTOMOBILE </option>

</select></td>
 </tr>
 <tr><td width="23%"> SHIFT </td><td width="2%">:</td><td width="75%">

  <select name="std_shift"  class="form-control" >
    <option value="FIRST" <?php if(trim($row["std_shift"]) =='FIRST') echo 'selected';?>> FIRST </option>
	 <option value="SECOND" <?php if(trim($row["std_shift"]) =='SECOND') echo 'selected';?>> SECOND </option>
	


</select></td>
 </tr>
 
  <tr><td width="23%"> SEMESTER </td><td width="2%">:</td><td width="75%">
  <select name="std_semester"  class="form-control" >
 <option value="FIRST"<?php if(trim($row["std_semester"]) =='FIRST') echo 'selected';?>size="50px">FIRST </option>
    <option value="SECOND"<?php if(trim($row["std_semester"]) =='SECOND') echo 'selected';?> size="50px">SECOND </option>
	<option value="THIRD"<?php if(trim($row["std_semester"]) =='THIRD') echo 'selected';?>size="50px">THIRD </option>
    <option value="FOURTH"<?php if(trim($row["std_semester"]) =='FOURTH') echo 'selected';?>size="50px">FOURTH </option>
	<option value="FIFTH"<?php if(trim($row["std_semester"]) =='FIFTH') echo 'selected';?>size="50px">FIFTH </option>
    <option value="SIXTH"<?php if(trim($row["std_semester"]) =='SIXTH') echo 'selected';?>size="50px">SIXTH </option>
	<option value="SEVEN"<?php if(trim($row["std_semester"]) =='SEVEN') echo 'selected';?>size="50px">SEVEN </option>
    <option value="EIGHT"<?php if(trim($row["std_semester"]) =='EIGHT') echo 'selected';?>size="50px">EIGHT </option>
	<option value="FORMER"<?php if(trim($row["std_semester"]) =='FORMER') echo 'selected';?>size="50px">FORMER STUDENT </option>
	</select></td>
 </tr>
 <tr><td> ROLL NO </td><td>:</td><td><input type="text" name="std_roll" class="form-control" value="<?php echo $row["std_roll"];?>" ></td></tr>
<tr><td>REGISTRATION NO </td><td>:</td><td><input type="text"  class="form-control" name="std_reg" value="<?php echo $row["std_reg"];?>" ></td></tr>
<tr><td> SESSION  </td><td>:</td><td><input type="text" name="std_ses" class="form-control" value="<?php echo $row["std_ses"];?>" ></td></tr>
<tr><td> DATE OF BIRTH  </td><td>:</td><td><input type="text" id="date" name="std_date_of_birth" class="form-control" value="<?php echo $row["std_date_of_birth"];?>" ></td></tr>
<tr><td> NATIONAL ID </td><td>:</td><td><input type="text" name="std_nid" class="form-control" value="<?php echo $row["std_nid"];?>" ></td></tr>
<tr><td> Contact Number </td><td>:</td><td><input type="text" name="std_contact" class="form-control" value="<?php echo $row["std_contact"];?>" ></td></tr>
<tr><td> Student Picture </td><td>:</td>

<td>

<img src="uploaded_image/<?php echo $image;?>" width="150" height="100" alt="" />
<input type="file" name="image" class="" id="" />
<input type="hidden" name="old_name" value="<?php echo $row['image'];?>" id="" />


</td></tr>

<tr><td> PRESENT ADDRESS </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="std_present_address" rows="1"><?php echo $row["std_present_address"];?></textarea></td></tr>
<tr><td> PERMANENT ADDRESS </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="std_permanent_address" rows="1"><?php echo $row["std_permanent_address"];?></textarea></td></tr>
<tr><td> Reference </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="std_reference" rows="1"><?php echo $row["std_reference"];?></textarea></td></tr>





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