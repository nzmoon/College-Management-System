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
        <form name="register" method="post" action="student_search_process.php">
		<tr><td colspan="2"> <center><h1>Student Identifications</td> </center></tr>

<tr><td> DEPARTMENT </td><td><input type="text" class="form-control has-warning" name="std_department" placeholder="Enter Department" ></td>

</tr>
 <tr><td> Roll Number </td><td><input type="text" name="std_roll"  class="form-control"   placeholder="Enter Your Roll Number" ></td></tr>

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