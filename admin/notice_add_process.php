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
		$notice_title  = $_POST['notice_title']; 
		$notice_date  = $_POST['notice_date'];
		
	
	    //For Error Checking
		
		if(trim($notice_title) == "")
		{
			$error++;
			echo "Enter Your Name"."<br />";
		}
		if(trim($notice_date) == "")
		{
			$error++;
			echo "Enter Notice Date"."<br />";
		}
		
		if($_FILES['notice_file']['name']=="")
		{
		    $error++;
			echo "You have to upload ur picture"."<br />";
					
		}
		$checkStudentSQL = "select * from notice where notice_title = '".$notice_title."'";
		$resultCheck = mysqli_query($con,$checkStudentSQL);
		if(mysqli_num_rows($resultCheck)>0)
		{
			$error++;
			
				echo '<script language="javascript">';		  
echo 'alert("Sory ! Another Notice name   Already Exists")';
echo '</script>';
			
			
		}
		if($error==0)
		{
			
			if($_FILES['notice_file']['name']!="")
			{
				$source = $_FILES['notice_file']['tmp_name'];
				$destination  = "uploaded_image/";
				$old_name = $_FILES['notice_file']['name'];
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
			$sql = "INSERT INTO notice
					(
						notice_title,
						notice_file,
						notice_date
					)
					VALUES 
					(
						'".$notice_title."',
						'".$new_file_name."',
						'".$notice_date."'						
					)";
			$result=mysqli_query($con,$sql);
			if($result>0)
			{
					echo '<script language="javascript">';		  
echo 'alert("Congratulation ! Notice Successfully Added")';
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


