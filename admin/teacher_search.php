<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php include("header.php"); ?>
<div class="row admin-custom">
<div class="col-lg-12">
<table  border="1 px solid"  align="center"   class="table"  >
        <form name="register" method="post" action="teacher_search_process.php">
		<tr><td colspan="2"> <center><h1>Student Identifications</td> </center></tr>

<tr><td> Teacher Username </td><td><input type="text" class="form-control has-warning" name="teacher_username" placeholder="Enter Department" ></td>

</tr>
 <tr><td> Teacher Department </td><td><input type="text" name="teacher_department"  class="form-control"   placeholder="Enter Your Roll Number" ></td></tr>

<tr>
<td colspan="3"> <center> 
<input type="reset" class="btn btn-primary" name="submit" value="Reset" size="30%">
<input class="btn btn-success" type="submit" name="submit" value="submit"> </center> </td>
</tr>
</form>

</table>

</div>

</div>
<?php include("footer.php"); ?>