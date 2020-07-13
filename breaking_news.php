	<div class="row scrol">
				<div class="scrolnews">
					<div class="col-md-2 btn readmore">
						<p>Breaking News :</p>
					</div>
					<div class="col-md-10">
						<marquee style="width:100%;"  behavior="scroll" direction="left"  onmouseover="javascript:this.setAttribute('scrollamount','0');" onmouseout="javascript:this.setAttribute('scrollamount','2');" scrollamount="3" scrolldelay="30" truespeed="truespeed">
							<ul>
							
							
							
								
	<?php
	include("admin/murad_db.php");
	
	 $result = mysqli_query($con,"select * from notice order by  notice_id DESC limit 5");
		 
	 while($row = mysqli_fetch_array($result)){
		 ?>
		
		<li>	
		<i class="fa fa-hand-o-right"></i><a href="notice_external.php?notice_id=<?php echo $row['notice_id']?>"><?php echo $row['breaking_title']?></a>

		</li>
				 
		 <?php 
	 }


	?>

							
							
				
							</ul>
						</marquee>
					</div>
				</div>
			</div>