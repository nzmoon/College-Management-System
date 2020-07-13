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
		$message_title  = $_POST['message_title']; 
		$message_details  = $_POST['message_details']; 
		
	
	    //For Error Checking
		
		if(trim($message_title) == "")
		{
			$error++;
			echo "Enter Your Name"."<br />";
		}
		if(trim($message_details) == ""){
			$error++;
			echo "Enter Your message_details"."<br />";
		}
		
		$checkStudentSQL = "select * from principal_message where message_title = '".$message_title."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another News  Already Exists")';
echo '</script>';

			$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
 echo "<a href='$url'>Home</a>";
			
		}
		if($error==0)
		{
				
			$sql = "INSERT INTO principal_message
					(
						message_title,
						message_details
											
					)
					VALUES 
					(
						'".$message_title."',
						'".$message_details."'				
					)";
			$result=mysqli_query($con,$sql);
			if($result>0)
			{
					echo '<script language="javascript">';		  
echo 'alert("Congratulation ! You are Successfully Registered")';
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


