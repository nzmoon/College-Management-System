<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['tech_id']))
	{
		$tech_id = $_REQUEST['tech_id'];
		$sql = "select * from tech_news where tech_id= '".$tech_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>

<table  border="1 px solid"  align="center"   class="table"  >
 
		


<tr><td  colspan="3" ><?php echo $row['tech_title']?></td></tr>
<tr><td  colspan="3" ><?php echo $row['tech_details']?></td></tr>


 



</table>
</div></div>
</div>

<?php
}
?>


<?php include"footer.php" ?>