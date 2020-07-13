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
        
		<form class="form-horizontal" action="notice_add_process.php" method="post" enctype="multipart/form-data" >
		

<tr><td> Notice Title </td><td>:</td><td><input type="text" class="form-control has-warning" name="notice_title" placeholder="Notice Title" required ></td></tr>
<tr>
<tr><td> Upload Notice </td><td>:</td><td> 
   <span class="btn btn-default btn-file">  <input type="file"  class="form-control" name="notice_file">    </span></td></tr>
   <tr><td> Notice Date </td><td>:</td><td><input type="text" class="form-control has-warning" id="date" name="notice_date" placeholder="01-01-1992" required ></td></tr>

<td colspan="3"> <center> 
<input type="reset" class="btn btn-primary" name="submit" value="Reset" size="30%">
<button type="submit" name="submit" class="btn btn-success " style="width: 12%;">Submit</button> </td>
</tr>
</form>

</table>

</div>

</div>

<?php include("footer.php"); ?>