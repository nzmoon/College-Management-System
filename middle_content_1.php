			
	
	

			<!-- Start Custom Cursol  -->
		<section id="header-custom">
		<div class="container wbg">
			<div class="row">
			    <div class="col-md-4">

					
				
					
					
					
		 <div class="clearfix">			
	<div class="newstab">
						<ul class="nav nav-pills active tabtitle">
							<li class="active"><a data-toggle="pill" href="#home">Notice Board</a></li>
							<li><a data-toggle="pill" href="#menu1">Events</a></li>
						</ul>
					</div>
<div class="tab-content notice-content">
						<div id="home" class="tab-pane fade in active">

							<div class="notice">
								<ul>
									<li>
									
										<?php
	include("admin/murad_db.php");
	
	 $result = mysqli_query($con,"select * from tech_news order by  tech_id ASC limit 8 ");
		 
	 while($row = mysqli_fetch_array($result)){
		 ?>
		
		<li>	
		<img src="image/icon.jpg" class="img-responsive "  width="60" height="60" />&nbsp;
		<h1><a href="tech_news_external.php?tech_id=<?php echo $row['tech_id']?>"><?php echo $row['tech_title']?>
		 </a> </h1>

				 
		 <?php 
	 }


	?>
</li></ul>
								<div class="vieomore">
								<a href="tech_news_pagi.php">View all latest news</a>
								</div>
							</div>
						</div>

						<div id="menu1" class="tab-pane fade">
							<div class="notice">
											<ul>
									<li>
									
										<?php
	include("admin/murad_db.php");
	
	 $result = mysqli_query($con,"select * from special_events order by  special_id ASC limit 8 ");
		 
	 while($row = mysqli_fetch_array($result)){
		 ?>
		
		<li>	
		<img src="images/upcomming2.jpg" class="img-responsive "  width="60" height="60" />&nbsp;
		<h1><a href="special_event_external.php?special_id=<?php echo $row['special_id']?>"><?php echo $row['special_title']?>
		 </a> </h1>

				 
		 <?php 
	 }


	?>
</li></ul>
								<div class="vieomore">
								<a href="special_events_pagi.php">View all upcoming events</a>
								</div>
							</div>
						</div>
						</div>
						</div>
					
					
					
				</div>	
			<div class="col-md-8 clearfix">
			<div class="technology ">

			<div class="sidbar-title">WELCOME TO PCIU</div>
			<div><br></div>
										<?PHP
// include connection page
include("admin/murad_db.php");
// select data from student table in database
$str = "SELECT * FROM welcome";
if(isset($_GET['welcome_id'])){
	$welcome_id = $_GET['welcome_id'];
	$str.=" WHERE welcome_id=$welcome_id";
}
$pages_query = $con->query($str)or die(mysqli_error($con));

// fetch all data in an array
$pages_fetch = $pages_query->fetch_assoc();

// assign page data to $data variable
$data = $pages_fetch['welcome_details'];


	
	 $welcome_des=substr("$data", 0, 520) . '';

?>

				
						<div class="sidbar-text">
					<p>
					<?php echo $welcome_des; ?>
					</p>
								
				</div>
								
<div><br></div>
					<a href="welcome_message_details.php?welcome_id=<?php echo $pages_fetch['welcome_id'];?>"> <button type="button" class="btn readmore">Read More</button></a>
					
					<div><br></div>
			
			
				
				
				


					
				
				</div>
				

       </div>
	   
	

			 
			 </div>
	   
	   
	   </div>


</section>





	
		
			

	


