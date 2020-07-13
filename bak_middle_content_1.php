
			
	
	

			<!-- Start Custom Cursol  -->
		<section id="header-custom">
		<div class="container wbg">
			<div class="row">
			    <div class="col-md-4">
<div class="sidbar-title">Notice Board:</div>
					<div class="sid">
							<marquee style="width:100%;"  behavior="scroll" direction="up"  onmouseover="javascript:this.setAttribute('scrollamount','0');" onmouseout="javascript:this.setAttribute('scrollamount','2');" scrollamount="3" scrolldelay="30" truespeed="truespeed">
							<ul>
							
							
							
								
	<?php
	include("admin/murad_db.php");
	
	 $result = mysqli_query($con,"select * from notice order by  notice_id ASC ");
		 
	 while($row = mysqli_fetch_array($result)){
		 ?>
		
		<li>	
		<i class="fa fa-hand-o-right"></i>&nbsp;<a href="notice_external.php?notice_id=<?php echo $row['notice_id']?>"><?php echo $row['notice_title']?>
		<br><?php echo $row['notice_date']?> </a>

		</li>
				 
		 <?php 
	 }


	?>

							
							
				
							</ul>
						</marquee>
								</div>
				
					
					
					
		 <div class="clearfix">			
	<div class="newstab">
						<ul class="nav nav-pills active tabtitle">
							<li class="active"><a data-toggle="pill" href="#home">Latest News</a></li>
							<li><a data-toggle="pill" href="#menu1">Upcoming Events</a></li>
						</ul>
					</div>
<div class="tab-content notice-content">
						<div id="home" class="tab-pane fade in active">

							<div class="notice">
								<ul>
									<li>
									<img src="images/icon.jpg" class="img-responsive " />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
																<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive " />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
								</ul>
								<div class="vieomore">
								<a href="#">View all latest news</a>
								</div>
							</div>
						</div>

						<div id="menu1" class="tab-pane fade">
							<div class="notice">
								<ul>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Dummy Text</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
									<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
										<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
											<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
										<li>
									<img src="images/icon.jpg" class="img-responsive" />
									<h2><a href="#">Bangladesh Sweden Polytechnic Results</a></h2>
									<p>
									This is Photoshop's version  of Lorem Ipsum. 
									Proin gravida nibh vel velit auctor aliquet.e .
									</p>
									</li>
								</ul>
								<div class="vieomore">
								<a href="#">View all upcoming events</a>
								</div>
							</div>
						</div>
						</div>
						</div>
					
					
					
				</div>	
			<div class="col-md-8 clearfix">
			<div class="technology ">

			<div class="sidbar-title">WELCOME TO BSPI</div>
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
			
			
				
				
					<div class="sidbar-title">Study In BSPI</div>
<div><br></div>					
					<div class="feauture">
						<div class="feauture-img">
						
						<img src="images/cmtlabnet.JPG" class="img-thumbnail" alt="cmt">
						</div>
						<h1>Computer Technology</h1>
						<p>The job prospects for computer engineers are increasing rapidly both in Bangladesh ..... </p>
						<a href="computer_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>
					<div class="feauture">
						<div class="feauture-img">
						<img src="images/ElectrilCsRm.JPG" class="img-thumbnail" alt="Et">
						</div>
						<h1>Electrical Technology</h1>
						<p>A Diploma Engineer of Electrical Technology can serve in Govt. Non-Govt. and Private sector.....  </p>
							<a href="electical_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>
					<div class="feauture">
						<div class="feauture-img">
						<img src="images/mcncllab.JPG" class="img-thumbnail" alt="Mt">
						</div>
						<h1>Mechanical Technology</h1>
						<p>A Diploma Engineer of Mechanical Technology can get more employment opportunities than  .... </p>
							<a href="mechanical_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>
					<div class="feauture">
						<div class="feauture-img">
						<img src="images/cntlab.JPG" class="img-thumbnail" alt="Ct">
						</div>
						<h1>Construction Technology</h1>
						<p>A Diploma Engineer of Construction technology can serve in the several Govt. and private sectors like ... </p>
							<a href="construction_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>
					<div class="feauture">
						<div class="feauture-img">
						<img src="images/cvwoodcls.JPG" class="img-thumbnail" alt="Cwt">
						</div>
						<h1>Civil Wood Technology</h1>
						<p>Civil Wood Technology's strategy is based on involvement in the entire chain from forest raw... </p>
							<a href="civil_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>
					<div class="feauture">
						<div class="feauture-img">
						<img src="images/AoutoMLab.JPG" class="img-thumbnail" alt="At">
						</div>
						<h1>Automobile Technology</h1>
						<p>Diploma Engineers of Automobile Technology can take his job in vehicles related section of the Govt.....  </p>
							<a href="automobile_department_view.php"><button type="button" class="btn readmore">Read More</button></a>
					</div>	
					
				
				</div>
				

       </div>
	   
	

			 
			 </div>
	   
	   
	   </div>


</section>





	
		
			

	


