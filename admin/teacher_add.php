<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>

<?php include"header.php" ?>
<div class="row admin-custom">
<div class="col-lg-12">
<table  border="1 px solid"  align="center"   class="table"  >
        
		<form class="form-horizontal" action="teacher_add_process.php" method="post" enctype="multipart/form-data">
		

<tr><td> Teacher Name </td><td>:</td><td><input type="text" class="form-control has-warning" name="teacher_name" placeholder="MURAD HOSEN" required ></td>

</tr>
 <tr><td> User Name </td><td>:</td><td><input type="text" name="teacher_username"  class="form-control"   placeholder="NAZRUL ISLAM" required></td></tr>

<tr><td> Teacher Password </td><td>:</td><td><input type="password" name="teacher_password" class="form-control"  placeholder="SHOHIDA BEGUM" required></td></tr>
<tr><td> Teacher Picture </td><td>:</td><td> 
   <span class="btn btn-default btn-file">  <input type="file"  class="form-control" name="image">    </span></td></tr>


<tr><td width="23%"> Teacher Department </td><td width="2%">:</td><td width="75%">

  <select name="teacher_department"  class="form-control" required>
<option value="cmt"  size="50px" >COMPUTER </option>    
<option value="cont"  size="50px"  >CONSTRUCTION </option>
    
    <option value="et"  size="50px"  >ELECTICAL</option>
    <option value="mt"  size="50px"  >MECHANICAL</option>
    <option value="cwt"  size="50px"  >CIVIL (WOOD) </option>
     <option value="at"  size="50px"  >AUTOMOBILE </option>
	 <option value="rs"  size="50px"  >RS</option>
  

    </select>
</td></tr>
<tr><td> Teacher Designation </td>



<td width="2%">:</td><td width="75%">

  <select name="teacher_designation"  class="form-control" required>
    <option value="Chief Instructor"  size="50px"  >Chief Instructor</option>
    <option value="Instructor"  size="50px" >Instructor</option>
    <option value="Junior Instructor"  size="50px"  >Junior Instructor</option>
    <option value="Craft Instructor"  size="50px"  >Craft Instructor</option>
    
	 <option value="rs"  size="50px"  >RS</option>
  

    </select>
</td>


</tr>


<tr><td> Contact Number </td><td>:</td><td><input type="text" name="teacher_contact" class="form-control" placeholder="714090" ></td></tr>
<tr><td> Teacher Details </td><td>:</td><td>
<textarea class="ckeditor" class="form-control"   id="editor1" placeholder="Present Address" name="teacher_details" rows="1"></textarea>
</td></tr>

<tr>
<td colspan="3"> <center> 
<input type="reset" class="btn btn-primary" name="submit" value="Reset" size="30%">
<button type="submit" name="submit" class="btn btn-success " style="width: 12%;">Submit</button> </td>
</tr>
</form>

</table>

</div>

</div>

<?php include("footer.php"); ?>