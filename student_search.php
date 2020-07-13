<?php include("header.php"); ?>
	<div class="container">

<div class="row admin-custom">
<div class="col-lg-12">
<table    align="center"   class="table"  >
        <form name="register" method="post" action="student_info_print_v2.php">
		<tr><td colspan="2"> <center><h1>Academic Student Identification</td> </center></tr>

<tr><td > DEPARTMENT </td>
<td >

  <select name="std_department"  class="form-control" required>
 <option value="COMPUTER"> COMPUTER </option>
 <option value="CONSTRUCTION"> CONSTRUCTION </option>
  <option value="ELECTICAL"> ELECTICAL </option>
    <option value="MECHANICAL"> MECHANICAL </option>
 <option value="CIVIL"> CIVIL </option>
  <option value="AUTOMOBILE"> AUTOMOBILE </option>

    </select>
</td></tr>
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


</div>
<?php include("footer.php"); ?>