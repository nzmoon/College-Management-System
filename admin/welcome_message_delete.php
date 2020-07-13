<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
include("murad_db.php");
	if(isset($_REQUEST['welcome_id']))
	{
		$welcome_id = $_REQUEST['welcome_id'];
		$sql = "delete from welcome where welcome_id = '".$welcome_id."'";
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