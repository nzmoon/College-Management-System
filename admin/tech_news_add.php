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
        
		<form class="form-horizontal" action="tech_news_add_process.php" method="post" >
		

<tr><td> News Title </td><td>:</td><td><input type="text" class="form-control has-warning" name="tech_title" placeholder="News Title" required ></td>
<tr><td> Details Details </td><td>:</td><td><textarea name="tech_details"  class="ckeditor" class="form-control"   id="editor1"  placeholder="Reference"  rows="1"></textarea></td></tr>
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