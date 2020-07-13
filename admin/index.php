<?php
session_start();

	include("murad_db.php");
	$msg="";
	if(isset($_POST['submit']))
	{
		$user_id = $_POST['user_id'];
		$user_pass = $_POST['user_pass'];
		$sql = "select * from admin_user where user_id= '".$user_id."' && user_pass= '".md5($user_pass)."'";
		$dd = mysqli_query($con, $sql);
		if(mysqli_num_rows($dd)>0)
		{
			$result1=mysqli_fetch_array($dd); 						
			$_SESSION["user_id"] = $result1["user_id"];
			
			
			echo '<script>window.location="student_view_pagi.php";</script>';
		}
		else {
			$msg="Username or Password didn't match or available";		
		}
	
	
	}

	
	
	
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BsPI</title>
	<!-- Murad Custom External CSS -->
	
	<link rel="stylesheet" href="css/signin.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Start Murad Calender Integration on Bootstrap -->
	<link rel="stylesheet" href="datepicker/datepicker.css">
	
	<!-- End Murad Calender Integration on Bootstrap -->
	
	<!-- Murad Custom External CSS -->

	<!-- Start Murad Scroll UP Integration on Bootstrap -->
	<link rel="stylesheet" href="scrollUp/scrollUp.css">
	<!-- End Murad Scroll Up Integration on Bootstrap -->
	

	

    <!-- Bootstrap -->
    <link href="css/m_b_start.bootstrap.min.css" rel="stylesheet">
		 <!--<link rel="shortcut icon" href="favicon.ico" >-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">	
        <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../css/responsive.css">
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
	<section id="header">
		<div class="container-fluid">
		<div class="container header">
			<div class="row">
				<div class="logo">
					<div class="col-md-2">
						<div class="clglogo">
							<img src="../images/logo.jpg" class="img-responsive center-block img-rounded"  width="140" height="150" />
						</div>
					</div>
					<div class="col-md-8">
						<div class="bspitextlogo">
							
<h3>
							গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
<h1>বাংলাদেশ সুইডেন পলিটেকনিক ইনস্টিটিউট</h1><h2>
কাপ্তাই, রাঙ্গামাটি পার্বত্য জেলা।
</h2>
							
						</div>
					</div>
					<div class="col-md-2">
						<div class="govlogo">
						<img src="../images/govlogo.png" class="img-responsive center-block img-rounded"  width="120" height="130" />

	

						</div>
					</div>
				</div>
			</div>
			
			
			
			
			
			
			
			
			<div class="row">
				<nav class="navbar mainmenu">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#maintaslim">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../index.php"><i class="fa fa-home"></i></a>
				  </div>
				<div class="collapse navbar-collapse" id="maintaslim">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="../index.php">Home</a></li>
					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About us  <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">About BSPI</a></li>
						  <li><a href="#">Mission & Vision</a></li>
						  <li><a href="#">Principal’s Message</a></li>
						  <li><a href="#">Vice Principal’s Message</a></li>
						  <li><a href="#">Award & Achievements</a></li>
						  <li><a href="#">Teacher’s  & Staff Info</a></li>
						  <li><a href="#">Student Info</a></li>
						  <li><a href="#">Authority List</a></li>
						  <li><a href="#">Rules & regulations </a></li>
						  <li><a href="#">Projects</a></li>
						  <li><a href="#">hort Course  </a></li>
						 
						</ul>
					  </li>

					  					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admision <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Admission Eligibility</a></li>
						  <li><a href="#">Rules & Regulations</a></li>
						  <li><a href="#">Tuition Fees</a></li>
						  <li><a href="#">How to Apply</a></li>
						  <li><a href="#">Online Admission</a></li>
						  <li><a href="#">Admission Form</a></li>
						  <li><a href="#">Scholarships</a></li>
						 			 
						</ul>
					  </li>
					  					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Academic Council</a></li>
						  <li><a href="#">Function of Academic Council</a></li>
						  <li><a href="#">Academic Rules and Regulation</a></li>
						  <li><a href="#">Academic Calendar</a></li>
						  <li><a href="#">Examination Control</a></li>
						  <li><a href="#">Institute Result (Using Online Result Processing Application)</a></li>
						  <li><a href="#">Board Result</a></li>
						  <li><a href="#">Syllabus</a></li>
						  <li><a href="#">Semester Plan</a></li>
						  <li><a href="#">Probidhan</a></li>
						  <li><a href="#">Routine </a></li>
						  <li><a href="#">Scholarship</a></li>
						  
						  
						</ul>
					  </li>	
						
					  					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Department <b class="caret"></b></a>
						<ul class="dropdown-menu">
<li class="dropdown-submenu">
<a href="#" tabindex="-1">Computer(CMT)</a>
<ul class="dropdown-menu">
						  <li><a href="#">Mission & Objective</a></li>
						  <li><a href="#">Head Message</a></li>
						  <li><a href="#">Teachers List</a></li>
						  <li><a href="#">Current Student’s</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="#">Dept. Notice</a></li>
</ul>
</li>						  
						  

<li class="dropdown-submenu">
<a href="#" tabindex="-1">Electrical Technology</a>
<ul class="dropdown-menu">
						  <li><a href="#">Student List</a></li>
						  <li><a href="#">Teachers</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="#">Dept. Notice</a></li>
</ul>
</li>						  
						  
						  
<li class="dropdown-submenu">
<a href="#" tabindex="-1">Mechanical Technology</a>
<ul class="dropdown-menu">
						  <li><a href="#">Student List</a></li>
						  <li><a href="#">Teachers</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="allnotice.html">Dept. Notice</a></li>
</ul>
</li>	
<li class="dropdown-submenu">
<a href="#" tabindex="-1">Construction Technology</a>
<ul class="dropdown-menu">
						  <li><a href="#">Student List</a></li>
						  <li><a href="#">Teachers</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="allnotice.html">Dept. Notice</a></li>
</ul>
</li>							  
<li class="dropdown-submenu">
<a href="#" tabindex="-1">Civil Wood Technology</a>
<ul class="dropdown-menu">
						  <li><a href="#">Student List</a></li>
						  <li><a href="#">Teachers</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="#">allnotice.html</a></li>
</ul>
</li>	
<li class="dropdown-submenu">
<a href="#" tabindex="-1">Automobile Technology</a>
<ul class="dropdown-menu">
						  <li><a href="#">Student List</a></li>
						  <li><a href="#">Teachers</a></li>
						  <li><a href="#">Class Room</a></li>
						  <li><a href="#">Lab / Workshop</a></li>
						  <li><a href="#">Routine</a></li>
						  <li><a href="#">Activities</a></li>
						  <li><a href="#">allnotice.html</a></li>
</ul>
</li>

						  
						</ul>
					  </li>
					  
					  
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Multimedia Class room</a></li>
						  <li><a href="#">Labs/Workshops</a></li>
						  <li><a href="library.html">Library</a></li>
						  <li><a href="#">Hostel</a></li>
						  <li><a href="#">Alternative Power Back up</a></li>
						  <li><a href="#">Auditorium</a></li>
						  <li><a href="#">Seminar Hall</a></li>
						  <li><a href="#">Canteen</a></li>
						  <li><a href="#">Play Ground</a></li>
						  <li><a href="#">Prayer Room</a></li>
						  <li><a href="#">Post office</a></li>
						  <li><a href="#">Guardian shed</a></li>
						 			 
						</ul>
					  </li>
					  
					  <li >
						<a href="../student_search.php" > Student Search</b></a>
					
					  </li>
					  <li><a href="index.php">Admin Login</a></li>
					  <li><a href="../contact.php">Contact Us</a></li>
					  
					</ul>
				  </div><!-- /.navbar-collapse -->
				  </div>
				</nav>			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			<div class="row">
<div class="col-lg-12">
<?php echo $msg; ?>
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading"> Admin Login</h2>
        <label for="inputEmail" class="sr-only">User ID </label>
        <input  name="user_id" class="form-control" placeholder="User ID" required="" autofocus="" >
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" name="user_pass" placeholder="Password" required="" type="password">
       
        <button class="btn btn-lg btn-primary btn-block"  type="submit" name="submit" value="Submit">Sign in</button>
      </form>
</div>

</div>







		</div>
	</section>
	
	</div>

			
			<!-- End Custom Cursol -->
		
	<?php include"../footer.php" ?>