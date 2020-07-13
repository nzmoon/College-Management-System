<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('login.php')</script>";
}
?>
<?php
include("murad_db.php");
	if(isset($_REQUEST['department_id']))
	{
		$department_id = $_REQUEST['department_id'];
		$sql = "delete from department where department_id = '".$department_id."'";
		$result = mysqli_query($con,$sql);
		
		echo '<script language="javascript">';
		echo 'alert("Thanks !. Your Data Successfully Deleted ")';		
   		echo '</script>';
   $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
   echo "<a href='$url'>back</a>";
	
}
else {
	
			  
echo 'alert("Not Deleted")';
echo '</script>';
			 
		  }
	 
	

?>