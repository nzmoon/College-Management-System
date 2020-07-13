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
		$tech_title  = $_POST['tech_title']; 
		$tech_details  = $_POST['tech_details']; 
		
	
	    //For Error Checking
		
		if(trim($tech_title) == "")
		{
			$error++;
			echo "Enter Welcome Title"."<br />";
		}
		if(trim($tech_details) == ""){
			$error++;
			echo "Enter  tech_details"."<br />";
		}
		
		$checkStudentSQL = "select * from tech_news where tech_title = '".$tech_title."'";
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
				
			$sql = "INSERT INTO tech_news
					(
						tech_title,
						tech_details
											
					)
					VALUES 
					(
						'".$tech_title."',
						'".$tech_details."'				
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


