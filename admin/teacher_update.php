									<?php
									session_start();

									if (!isset($_SESSION['user_id']))
									{
									echo "<script>window.location.assign('index.php')</script>";
									}
									?>
<?php
				include("murad_db.php");

				if(isset($_REQUEST['teacher_id'])){
				$teacher_id = $_REQUEST['teacher_id'];
				$sql = "select * from teacher where teacher_id='".$teacher_id."'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);

				$image = $row['image'];



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

if($_FILES['image']['size']>5000000)
									{
									echo '<script type="text/javascript">alert("File size too large (Required size is 500 KB)");</script>';
									$uploadOk = 0;
									}
if($imageFileType!= "jpeg" && $imageFileType!="jpg" && $imageFileType != "png")
			{
			echo '<script type="text/javascript">alert("Only jpg,jpeg And png format required");</script>';
			$uploadOk = 0;
			}
if($uploadOk == 0)
{
echo '<script>alert("Sorry, there was a problem when uploading")</script>';
}
else if(move_uploaded_file($source,$destination))
{
if(file_exists("uploaded_image/".$old_name))
{
unlink("uploaded_image/".$old_name);
}
}
}
else if($old_name!="")
{
$new_file_name = $old_name;
}


			if(
			!empty($teacher_name) && 
			!empty($teacher_username) && 
			!empty($teacher_password)  && 
			!empty($teacher_department) && 
			!empty($teacher_designation)&& 
			!empty($teacher_contact)&&
			!empty($teacher_details)
			)
{
$sql = "update teacher set
teacher_name='$teacher_name',
teacher_username='$teacher_username',
teacher_password='$teacher_password',
teacher_department='$teacher_department',
teacher_designation = '$teacher_designation',
teacher_contact = '$teacher_contact',
teacher_details = '$teacher_details',			
image = '$new_file_name'

where 

teacher_id=$teacher_id";

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
<td><input type="text" class="form-control has-warning" name="teacher_name"  value="<?php echo $row["teacher_name"];?>" ></td></tr>
<tr><td> User  Name </td><td>:</td> <td><input type="text" class="form-control has-warning" name="teacher_username"  value="<?php echo $row["teacher_username"];?>" ></td></tr>
<tr><td> Password Name </td><td>:</td> <td><input type="password" class="form-control has-warning" name="teacher_password"  value="<?php echo $row["teacher_password"];?>" ></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

<select name="teacher_department"  class="form-control" >
<option value="COMPUTER" <?php if(trim($row["teacher_department"]) =='COMPUTER') echo 'selected';?> size="50px" >COMPUTER </option>
<option value="CONSTRUCTION"  size="50px" <?php if(trim($row["teacher_department"]) =='CONSTRUCTION') echo 'selected';?>  >CONSTRUCTION </option>
<option value="ELECTICAL"  <?php if(trim($row["teacher_department"]) =='ELECTICAL') echo 'selected';?> size="50px"  >ELECTICAL</option>
<option value="MECHANICAL"  <?php if(trim($row["teacher_department"]) =='MECHANICAL') echo 'selected';?>size="50px"  >MECHANICAL</option>
<option value="CIVIL"  <?php if(trim($row["teacher_department"]) =='CIVIL') echo 'selected';?> size="50px"  >CIVIL (WOOD) </option>
<option value="AUTOMOBILE"  <?php if(trim($row["teacher_department"]) =='AUTOMOBILE') echo 'selected';?> size="50px"  >AUTOMOBILE </option>
</select></td>
</tr>
<tr><td> Teacher Designation </td><td>:</td><td><input type="text" name="teacher_designation" class="form-control" value="<?php echo $row["teacher_designation"];?>" ></td></tr>
<tr><td> Contact Number </td><td>:</td><td><input type="text" name="teacher_contact" class="form-control" value="<?php echo $row["teacher_contact"];?>" ></td></tr>
<tr><td> Student Picture </td><td>:</td>

<td>

<img src="uploaded_image/<?php echo $image;?>" width="150" height="100" alt="" />
<input type="file" name="image" class="" id="" />
<input type="hidden" name="old_name" value="<?php echo $row['image'];?>" id="" />


</td></tr>
<tr><td> Teacher Details </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1"  name="teacher_details" rows="1"><?php echo $row["teacher_details"];?></textarea></td></tr>





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