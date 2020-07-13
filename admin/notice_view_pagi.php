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

  
$limit = 3;  
if (isset($_GET["notice_id"])) { $notice_id  = $_GET["notice_id"]; } else { $notice_id=1; };  
$start_from = ($notice_id-1) * $limit;  

$sql = "SELECT * FROM notice ORDER BY notice_id ASC LIMIT $start_from, $limit";  
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
<th>Notice Title</th>  
<th>Notice Date</th>
 
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
			
			<td><?php echo $row["notice_id"]; ?></td>
            <td><?php echo $row["notice_title"]; ?></td>  
			 <td><?php echo $row["notice_date"]; ?></td>  

			<td><div class="btn btn-success"><a href="notice_details.php?notice_id=<?php echo $row['notice_id']?>">DETAILS</a></div></td>
					<td><div class="btn btn-info"><a href="notice_update.php?notice_id=<?php echo $row['notice_id']?>">UPDATE</a></div></td>
							<td class="btnlink"><div class="btn btn-danger">
		<a href="javascript:confirmDelete('notice_delete.php?notice_id=<?php echo $row['notice_id']?>')">Delete</a></td>

            </tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(notice_id) FROM notice";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='notice_view_pagi.php?notice_id=".$i."'>".$i."</a></li>";  
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
