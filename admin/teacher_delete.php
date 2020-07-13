<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
include("murad_db.php");
	if(isset($_REQUEST['teacher_id']))
	{
		$teacher_id = $_REQUEST['teacher_id'];
		$sql = "delete from teacher where teacher_id = '".$teacher_id."'";
		$result = mysqli_query($con,$sql);
		
		echo '<script language="javascript">';
		echo 'alert("Thanks !. Your Data Successfully Deleted ")';		
   		echo '</script>';
   $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
   echo "<a href='$url'>back</a>";
	
}
else {
	
echo '<script>';			  
echo 'alert("Not Deleted")';
echo '</script>';
			 
		  }
	 
	

?>