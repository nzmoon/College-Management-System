<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('login.php')</script>";
}
?>
<?php
include("murad_db.php");
	if(isset($_REQUEST['notice_id']))
	{
		$notice_id = $_REQUEST['notice_id'];
		$sql = "delete from notice where notice_id = '".$notice_id."'";
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