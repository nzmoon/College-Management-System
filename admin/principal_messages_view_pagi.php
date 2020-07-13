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
if (isset($_GET["message_id"])) { $message_id  = $_GET["message_id"]; } else { $message_id=1; };  
$start_from = ($message_id-1) * $limit;  

$sql = "SELECT * FROM principal_message ORDER BY message_id ASC LIMIT $start_from, $limit";  
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
<th>Message Title</th>  
 
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
			
			<td><?php echo $row["message_id"]; ?></td>
            <td><?php echo $row["message_title"]; ?></td>  

			<td><div class="btn btn-success"><a href="principal_message_details.php?message_id=<?php echo $row['message_id']?>">DETAILS</a></div></td>
					<td><div class="btn btn-info"><a href="principal_message_update.php?message_id=<?php echo $row['message_id']?>">UPDATE</a></div></td>
							<td><div class="btn btn-danger"><a href="breaking_news_delete.php?message_id=<?php echo $row['message_id']?>">DELETE</a></div></td>

            </tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(message_id) FROM principal_message";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='breaking_news_view_pagi.php?message_id=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
</div>

</div>

</div>
<?php
	include("footer.php");
	?>
