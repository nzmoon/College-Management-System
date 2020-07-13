<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>



<?php
include("murad_db.php");
$i=1;
  
$limit = 10;  
if (isset($_GET["department_id"])) { $department_id  = $_GET["department_id"]; } else { $department_id=1; };  
$start_from = ($department_id-1) * $limit;  

$sql = "SELECT * FROM department ORDER BY department_id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($con, $sql);  
?>

<?php
	include("header.php");
?>
<div class="row admin-custom">
<div class="col-lg-12 "><div class="container" style="padding-top:20px;">
<table class="table table-bordered">  
<thead>  
<tr>  
<th>Serial</th>
<th>Name</th>  
<th>Details</th>  
<th>Update</th>
<th>Delete</th>  

</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
	<tr>  
		<td><?php echo $row["department_id"]; ?></td>
		<td><?php echo $row["department_name"]; ?></td>  
		  
		<td class="btnlink"><div class="btn btn-success"><a href="department_details.php?department_id=<?php echo $row['department_id']?>">DETAILS</a></div></td>
		<td class="btnlink"><div class="btn btn-info"><a href="department_update.php?department_id=<?php echo $row['department_id']?>">UPDATE</a></div></td>
		<td class="btnlink"><div class="btn btn-danger">
		<a href="javascript:confirmDelete('department_delete.php?department_id=<?php echo $row['department_id']?>')">Delete</a>
		
</div></td>
	
	</tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(department_id) FROM department";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='department_view_pagi.php?department_id=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
</div>

</div>

</div>
<script>
function confirmDelete(delUrl) {
  if (confirm(" Dear,Are you sure you want to Delete This Documents")) {
    document.location = delUrl;
  }
}
</script>
<?php
	include("footer.php");
	?>
