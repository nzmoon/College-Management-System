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
		$department_name  = $_POST['department_name']; 
		$department_details  = $_POST['department_details']; 
		
	
	    //For Error Checking
		
		if(trim($department_name) == "")
		{
			$error++;
			echo "Enter Your department_name "."<br />";
		}
		if(trim($department_details) == ""){
			$error++;
			echo "Enter Your department_details Name"."<br />";
		}
		
		if($_FILES['department_pic']['name']=="")
		{
		    $error++;
			echo "You have to upload ur picture"."<br />";
					
		}
		$checkStudentSQL = "select * from department where department_name = '".$department_name."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another Department   Already Exists")';
echo '</script>';
			
			
		}
		if($error==0)
		{
			
			if($_FILES['department_pic']['name']!="")
			{
				$source = $_FILES['department_pic']['tmp_name'];
				$destination  = "uploaded_image/";
				$old_name = $_FILES['department_pic']['name'];
				$time = time();
				$new_file_name = $time."-".$old_name;
				$destination.=$new_file_name;
				$imageFileType = pathinfo($destination,PATHINFO_EXTENSION); 
				$fileOk = 1;
				if($imageFileType !='png' && $imageFileType!='jpg' && $imageFileType!='gif')
				{
					$fileOk = 0;
					echo 'File format not supported...';
				}
				if($fileOk==1)
				{
					move_uploaded_file($source,$destination);
				}
				
			}	
			$sql = "INSERT INTO department
					(
						
						department_name,
						department_details,
						department_pic								
					)
					VALUES 
					(
						'".$department_name."',
						'".$department_details."',
						'".$new_file_name."'					
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


