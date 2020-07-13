<?php include"header.php" ?>
<div class="container">
<div class="row admin-custom">
<div class="col-lg-12 ">
<?php
	include("admin/murad_db.php");
	
	if(isset($_REQUEST['notice_id']))
	{
		$notice_id = $_REQUEST['notice_id'];
		$sql = "select * from notice where notice_id= '".$notice_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>

<table  border="1 px solid"  align="center"   class="table"  >
 
		


<tr><td  colspan="3" ><?php echo $row['notice_title']?></td></tr>

 <tr >
    <?php 
	if(trim($row["notice_file"])!="")
	{
			$image_dir = 'admin/uploaded_image/';
			$img_name = trim($row["notice_file"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'"  width="150" height="100"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'admin/uploaded_image/female.png" />';	
			}
			}
			
	?>
<td colspan="3">
	
	
	
<a href="admin/uploaded_image/<?php echo $row['notice_file']?>"><img src="images/download.png" width="150" height="50"></a>
</a>


</td>

   
   </tr>
 



</table>
</div></div>
</div>

<?php
}
?>


<?php include"footer.php" ?>