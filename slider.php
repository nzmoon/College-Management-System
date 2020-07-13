
<section id="header-custom">
		<div class="container wbg">
			<div class="row">	

		
	<div class="col-lg-4 clearfix">	
				
					<div class="sidbar-title">Message From The Vice Chancellor</div>
					<div class="principald">
						<img src="image/Vice-Chancellor.jpg" class="img-responsive" width="100" height="150" />
						
						<p>
						
						
							<?PHP
// include connection page
include("admin/murad_db.php");
// select data from student table in database
$str = "SELECT * FROM principal_message";
if(isset($_GET['message_id'])){
	$message_id = $_GET['message_id'];
	$str.=" WHERE message_id=$message_id";
}
$pages_query = $con->query($str)or die(mysqli_error($con));

// fetch all data in an array
$pages_fetch = $pages_query->fetch_assoc();

// assign page data to $data variable
$data = $pages_fetch['message_details'];


	
	 $welcome_des=substr("$data", 0, 245) . '';

?>

				
						<div class="sidbar-text">
					<p>
					<?php echo $welcome_des; ?>
					</p>
								
				</div>
								
<div><br></div>
					<a href="principal_message_details.php?message_id=<?php echo $pages_fetch['message_id'];?>"> <button type="button" class="btn readmore">Read More</button></a>
					
					<div><br></div>
						
					
						

			
						
					</div>
					
				</div>	

			

					
				
			

			<div class="col-lg-8 clearfix">		

			<div class="mainslider img-responsive center-block ">
				<div class="slides">

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 400px; overflow: hidden;">
           
			   <div data-b="0" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/1.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
             </div>
			  <div data-b="0" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/2.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
             </div>
			 
			 
			 
			 
			   <div data-b="1" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/3.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
           
               
               </div>
			    <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/4.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
           
               
               </div>
			     <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/5.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
           
               
               </div>
			     <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/6.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
               </div>
			      <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/7.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
               </div>
			   
			       <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/8.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"> </div>
               
               </div>
			       <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/9.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
               </div>
			   
			      <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/10.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
               </div>
			     <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="image/11.jpg" />
                <div data-u="caption" data-t="29" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px;"></div>
               
               </div>
			   
			   
			   
			   
			   
			   
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>

    <!-- #endregion Jssor Slider End -->
				
			</div>
			
			</div>
			
				
			</div>		
			</div>
			</div>
			
		
	</section>

			<!-- Start Custom Cursol  -->