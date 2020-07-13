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
        
		<form class="form-horizontal" action="special_events_add_process.php" method="post" >
		

<tr><td>  Title </td><td>:</td><td><input type="text" class="form-control has-warning" name="special_title" placeholder="Title" required ></td>
<tr><td>  Details </td><td>:</td><td><textarea name="special_details"  class="ckeditor" class="form-control"   id="editor1"  placeholder="Details"  rows="1"></textarea></td></tr>
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