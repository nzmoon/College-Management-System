<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>

<?php include"header.php" ?>

<div class="row admin-custom">
<div><br></div>
<div class="col-lg-12">
<table  border="1 px solid"  align="center"   class="table"  >
        
		<form class="form-horizontal" action="department_add_process.php" method="post" enctype="multipart/form-data">
		

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

		  
		    <select name="department_name"  class="form-control" >
 <option value="COMPUTER"> COMPUTER </option>
 <option value="CONSTRUCTION"> CONSTRUCTION </option>
  <option value="ELECTICAL"> ELECTICAL </option>
    <option value="MECHANICAL"> MECHANICAL </option>
 <option value="CIVIL"> CIVIL </option>
  <option value="AUTOMOBILE"> AUTOMOBILE </option>

  

    </select>
</td></tr>
</tr>


 <tr><td> Department Details </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1" placeholder="Permanent Address" name="department_details" rows="1"></textarea></td></tr>

 
 <tr><td> Department Picture </td><td>:</td><td> 
   <span class="btn btn-default btn-file">  <input type="file"  class="form-control" name="department_pic">    </span></td></tr>
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