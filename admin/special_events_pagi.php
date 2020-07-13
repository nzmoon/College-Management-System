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

  
$limit = 5;  
if (isset($_GET["special_id"])) { $special_id  = $_GET["special_id"]; } else { $special_id=1; };  
$start_from = ($special_id-1) * $limit;  

$sql = "SELECT * FROM special_events ORDER BY special_id ASC LIMIT $start_from, $limit";  
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
<th>Title</th>  
 
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
			
			<td><?php echo $row["special_id"]; ?></td>
            <td><?php echo $row["special_title"]; ?></td>  

			<td><div class="btn btn-success"><a href="special_events_details.php?special_id=<?php echo $row['special_id']?>">DETAILS</a></div></td>
					<td><div class="btn btn-info"><a href="special_events_update.php?special_id=<?php echo $row['special_id']?>">UPDATE</a></div></td>
							<td><div class="btn btn-danger">
							<a href="javascript:confirmDelete('special_events_delete.php?special_id=<?php echo $row['special_id']?>')">Delete</a>
						
							
							</div></td>

            </tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(special_id) FROM special_events";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='tech_news_pagi.php?special_id=".$i."'>".$i."</a></li>";  
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
