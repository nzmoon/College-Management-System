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
		$std_name  = $_POST['std_name']; 
		$std_fname  = $_POST['std_fname']; 
		$std_mname = $_POST['std_mname']; 
		$std_department = $_POST['std_department']; 
		$std_shift = $_POST['std_shift'];
		$std_semester = $_POST['std_semester'];  
		$std_roll = $_POST['std_roll']; 
		$std_reg = $_POST['std_reg'];
		$std_ses = $_POST['std_ses']; 
		$std_date_of_birth = $_POST['std_date_of_birth'];
		$std_nid = $_POST['std_nid'];
		$std_contact = $_POST['std_contact'];
		$std_present_address = $_POST['std_present_address']; 
		$std_permanent_address = $_POST['std_permanent_address'];
		$std_reference = $_POST['std_reference']; 
	
	    //For Error Checking
		
		if(trim($std_name) == "")
		{
			$error++;
			echo "Enter Your Name"."<br />";
		}
		if(trim($std_fname) == ""){
			$error++;
			echo "Enter Your Father Name"."<br />";
		}
		if(trim($std_mname) == ""){
			$error++;
			echo "Enter Your Mother Name"."<br />";
		}
		if(trim($std_department) == ""){
			$error++;
			echo "Enter Your Present Name"."<br />";
		}
		if($_FILES['image']['name']=="")
		{
		    $error++;
			echo "You have to upload ur picture"."<br />";
					
		}
		$checkStudentSQL = "select * from student where std_roll = '".$std_roll."' and std_department = '".$std_department."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another Student Account  Already Exists")';
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
				if($imageFileType !='png' && $imageFileType!='jpg' && $imageFileType!='pdf' && $imageFileType!='zip' && $imageFileType!='gif')
				{
					$fileOk = 0;
					echo 'File format not supported...';
				}
				if($fileOk==1)
				{
					move_uploaded_file($source,$destination);
				}
				
			}	
			$sql = "INSERT INTO student
					(
						std_name,
						std_fname,
						std_mname,
						std_department,
						std_shift,
						std_semester,
						std_roll,
						std_reg,
						std_ses,
						std_date_of_birth,
						std_nid,
						std_contact,
						image,
						std_present_address,
						std_permanent_address,
						std_reference									
					)
					VALUES 
					(
						'".$std_name."',
						'".$std_fname."',
						'".$std_mname."',
						'".$std_department."',
						'".$std_shift."',
						'".$std_semester."',
						'".$std_roll."',
						'".$std_reg."',
						'".$std_ses."',
						'".$std_date_of_birth."',
						'".$std_nid."',
						'".$std_contact."',
						'".$new_file_name."',
						'".$std_present_address."',
						'".$std_permanent_address."',
						'".$std_reference."'						
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


