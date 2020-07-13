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
        
		<form class="form-horizontal" action="student_add_process.php" method="post" enctype="multipart/form-data">
		

<tr><td> Name </td><td>:</td><td><input type="text" class="form-control has-warning" name="std_name" placeholder="MURAD HOSEN" required ></td>

</tr>
 <tr><td> Father's Name </td><td>:</td><td><input type="text" name="std_fname"  class="form-control"   placeholder="NAZRUL ISLAM" required></td></tr>

<tr><td> Mother's Name </td><td>:</td><td><input type="text" name="std_mname" class="form-control"  placeholder="SHOHIDA BEGUM" required></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

  <select name="std_department"  class="form-control" required>
 <option value="COMPUTER"> COMPUTER </option>
 <option value="CONSTRUCTION"> CONSTRUCTION </option>
  <option value="ELECTICAL"> ELECTICAL </option>
    <option value="MECHANICAL"> MECHANICAL </option>
 <option value="CIVIL"> CIVIL </option>
  <option value="AUTOMOBILE"> AUTOMOBILE </option>

    </select>
</td></tr>

<tr><td width="23%"> SHIFT </td><td width="2%">:</td><td width="75%">

  <select name="std_shift" class="form-control" >
    <option value="FIRST"  size="50px"  >FIRST </option>
    <option value="SECOND"  size="50px" >SECOND </option>

  

    </select>
</td></tr>
<tr><td width="23%"> SEMESTER </td><td width="2%">:</td><td width="75%">

  <select name="std_semester" class="form-control" >

   <option value="FIRST"  size="50px" >FIRST </option>
    <option value="SECOND"  size="50px" >SECOND </option>
	 <option value="THIRD"  size="50px" >THIRD </option>
	  <option value="FOURTH"  size="50px" >FOURTH </option>
	   <option value="FIFTH"  size="50px" >FIFTH </option>
	   	 <option value="SIXTH"  size="50px" >SIXTH </option>
	  <option value="SEVEN"  size="50px" >SEVEN </option>
	   <option value="EIGHT"  size="50px" >EIGHT </option>
	     <option value="FORMER"  size="50px" >FORMER STUDENT </option>
	   
  
   

  

    </select>
</td></tr>


<tr><td> ROLL NO </td><td>:</td><td><input type="text" name="std_roll" class="form-control" placeholder="714090" ></td></tr>
<tr><td>REGISTRATION NO </td><td>:</td><td><input type="text"  class="form-control" name="std_reg" placeholder="680321" ></td></tr>
<tr><td> SESSION  </td><td>:</td><td><input type="text" name="std_ses" class="form-control" placeholder="2006-2007" ></td></tr>
<tr><td> DATE OF BIRTH  </td><td>:</td><td><input type="text" id="date" name="std_date_of_birth" class="form-control" placeholder="01-01-1992" ></td></tr>
<tr><td> NATIONAL ID </td><td>:</td><td><input type="text" name="std_nid" class="form-control" placeholder="714090" ></td></tr>
<tr><td> Contact Number </td><td>:</td><td><input type="text" name="std_contact" class="form-control" placeholder="714090" ></td></tr>
<tr><td> Student Picture </td><td>:</td><td> 
   <span class="btn btn-default btn-file">  <input type="file"  class="form-control" name="image">    </span></td></tr>

<tr><td> PRESENT ADDRESS </td><td>:</td><td>
<textarea class="ckeditor" class="form-control"   id="editor1" placeholder="Present Address" name="std_present_address" rows="1"></textarea>
</td></tr>
<tr><td> PERMANENT ADDRESS </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1" placeholder="Permanent Address" name="std_permanent_address" rows="1"></textarea></td></tr>
<tr><td> Reference </td><td>:</td><td><textarea name="std_reference"  class="ckeditor" class="form-control"   id="editor1"  placeholder="Reference"  rows="1"></textarea></td></tr>
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