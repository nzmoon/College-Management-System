<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>



<?php
include("murad_db.php");
  
$limit = 3;  
if (isset($_GET["std_id"])) { $std_id  = $_GET["std_id"]; } else { $std_id=1; };  
$start_from = ($std_id-1) * $limit;  

$sql = "SELECT * FROM student ORDER BY std_id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($con, $sql);  
?> 

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="pagination/simplePagination.css" />
<script src="pagination/jquery.simplePagination.js"></script>
<title></title>
<script>
</script>
</head>
<body>
<div class="container" style="padding-top:20px;">
<table class="table table-bordered">  
<thead>  
<tr>  
<th>Name</th>  
<th>Salary</th>
<th>Age</th>  

</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr>  
            <td><?php echo $row["std_name"]; ?></td>  
            <td><?php echo $row["std_roll"]; ?></td>  
			<td><?php echo $row["std_contact"]; ?></td>  
			<td width="20%"><a href="student_details.php?std_id=<?php echo $row['std_id']?>">DETAILS</a></td>
			<td width="20%"><a href="student_update.php?std_id=<?php echo $row['std_id']?>">UPDATE</a></td>
			<td width="20%"><a href="student_delete.php?std_id=<?php echo $row['std_id']?>">DELETE</a></td>
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>
  
<?php  
$sql = "SELECT COUNT(std_id) FROM student";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='std_pagination.php?std_id=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $std_id;?>,
		hrefTextPrefix : 'std_pagination.php?std_id='
    });
	});
</script>