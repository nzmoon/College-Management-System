<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php

	$error=0;

	include("murad_db.php");
	
	if(isset($_POST["submit"]))
	{
		$special_title  = $_POST['special_title']; 
		$special_details  = $_POST['special_details']; 
		
	
	    //For Error Checking
		
		if(trim($special_title) == "")
		{
			$error++;
			echo "Enter Special Title"."<br />";
		}
		if(trim($special_details) == ""){
			$error++;
			echo "Enter  special_details"."<br />";
		}
		
		$checkStudentSQL = "select * from special_events where special_title = '".$special_title."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another Message  Already Exists")';
echo '</script>';

			$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
 echo "<a href='$url'>Home</a>";
			
		}
		if($error==0)
		{
				
			$sql = "INSERT INTO special_events
					(
						special_title,
						special_details
											
					)
					VALUES 
					(
						'".$special_title."',
						'".$special_details."'				
					)";
			$result=mysqli_query($con,$sql);
			if($result>0)
			{
					echo '<script language="javascript">';		  
echo 'alert("Congratulation")';
echo '</script>';
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
 echo "<a href='$url'>Home</a>";
			}
			else
			{
				echo "Not success";
			}
		}
	}
?>


