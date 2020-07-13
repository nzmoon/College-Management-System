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
  
$limit = 1;  
if (isset($_GET["teacher_id"])) { $teacher_id  = $_GET["teacher_id"]; } else { $teacher_id=1; };  
$start_from = ($teacher_id-1) * $limit;  

$sql = "SELECT * FROM teacher ORDER BY teacher_id ASC LIMIT $start_from, $limit";  
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

<th>Contact</th>  
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
		<td><?php echo $row["teacher_id"]; ?></td>
		<td><?php echo $row["teacher_name"]; ?></td>  
		<td><?php echo $row["teacher_contact"]; ?></td>  
		<td class="btnlink"><div class="btn btn-success"><a href="teacher_details.php?teacher_id=<?php echo $row['teacher_id']?>">DETAILS</a></div></td>
		<td class="btnlink"><div class="btn btn-info"><a href="teacher_update.php?teacher_id=<?php echo $row['teacher_id']?>">UPDATE</a></div></td>
		<td class="btnlink"><div class="btn btn-danger">
		<a href="javascript:confirmDelete('teacher_delete.php?teacher_id=<?php echo $row['teacher_id']?>')">Delete</a>
		
</div></td>
	
	</tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(teacher_id) FROM teacher";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='teacher_view_pagi.php?teacher_id=".$i."'>".$i."</a></li>";  
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
