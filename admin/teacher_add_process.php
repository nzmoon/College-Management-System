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
		$teacher_name  = $_POST['teacher_name']; 
		$teacher_username  = $_POST['teacher_username']; 
		$teacher_password = $_POST['teacher_password']; 
		$teacher_department = $_POST['teacher_department'];
		$teacher_designation = $_POST['teacher_designation'];  
		$teacher_contact = $_POST['teacher_contact']; 
		$teacher_details = $_POST['teacher_details'];
	
	
	    //For Error Checking
		
		if(trim($teacher_name) == "")
		{
			$error++;
			echo "Enter Your Name"."<br />";
		}
		if(trim($teacher_username) == ""){
			$error++;
			echo "Enter Your Usernme Name"."<br />";
		}
		if(trim($teacher_password) == ""){
			$error++;
			echo "Enter Your Password"."<br />";
		}
		if(trim($teacher_department) == ""){
			$error++;
			echo "Enter Your Department"."<br />";
		}
		if($_FILES['image']['name']=="")
		{
		    $error++;
			echo "You have to upload ur picture"."<br />";
					
		}
		$checkStudentSQL = "select * from teacher where teacher_username = '".$teacher_username."' and teacher_department = '".$teacher_department."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another Teacher Account  Already Exists")';
echo '</script>';
			
			
		}
		if($error==0)
		{
			
			if($_FILES['image']['name']!="")
			{
				$source = $_FILES['image']['tmp_name'];
				$destination  = "uploaded_image/";
				$old_name = $_FILES['image']['name'];
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
			$sql = "INSERT INTO teacher
					(
						teacher_name,
						teacher_username,
						teacher_password,
						image,
						teacher_department,
						teacher_designation,
						teacher_contact,
						teacher_details
														
					)
					VALUES 
					(
						'".$teacher_name."',
						'".$teacher_username."',
						'".$teacher_password."',
						'".$new_file_name."',
						'".$teacher_department."',
						'".$teacher_designation."',
						'".$teacher_contact."',
						'".$teacher_details."'						
												
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


