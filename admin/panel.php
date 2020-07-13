 <?php
include("murad_db.php");
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>
  <body>
<div class="container-fluid container_fluid_header"> <!-- Start Header Container-Fluid -->
<div class="container container_header"><!-- Start Header Container -->
<div class="row">
<div class="col-lg-6">
Logo
</div>
<div class="col-lg-6">
Banner
</div>
</div>
</div><!-- End Header Container -->

</div> <!-- End Header Container-fluid -->
<div class="container-fluid container_fluid_middle"> <!-- Start Header Container-Fluid Middle -->
<div class="container container_middle_view"><!-- Start Header Container -->
<div class="row">
<div class="col-lg-12">
<table  cellpadding="10" cellspacing="0" class="table">

<tr align="center" valign="top">

<td align="left" colspan="1" rowspan="1" bgcolor="64b1ff">
<h3> <center> Admin Panel </center> </h3>

<form method="POST" action="student_view.php">

<input type="submit" value=" Student List">
</form>


<form method="POST" action="student_add.php">

<input type="submit" value=" Add Student">
</form>
</td>
</tr>

</table>
</div>


</div>
</div><!-- End Header Container -->

</div> <!-- End Header Container-fluid Middle -->


<div class="container-fluid container_fluid_footer"> <!-- Start  Container-Fluid Footer -->
<div class="container container_footer"><!-- Start footer Container -->
<div class="row">
<div class="col-lg-6">
&copy; Copyright BsPI
</div>
<div class="col-lg-6">
Developed & Designed by SmartIT &trade;
</div>
</div>
</div><!-- End Header Container -->

</div> <!-- End Header Container-fluid Footer -->


  
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/m_b_start.jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/m_b_start.bootstrap.min.js"></script>
		<!-- Start Murad Calender Integration on Bootstrap -->
	 <script src="datepicker/bootstrap-datepicker.js"></script>
      <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#date').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
	<!-- End Murad Calender Integration on Bootstrap -->
	
	<!-- Murad Start Scroll UP -->
	<script src="scrollUp/jquery.scrollUp.js"></script>
	  <script type="text/javascript">
   $(function () {
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: 'Scroll to top', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
});
        </script>
	
	
	<!-- End Murad  Scroll UP -->
	
  </body>
</html>