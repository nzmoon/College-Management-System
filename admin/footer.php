
</div> 
</div>


<!-- End Custom Cursol -->
		
	<section id="footer">
	<div class="container-fluid footer">
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
	
		<!-- Start Murad  Ckeditor -->
	
	<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
	
	<script src="../ckeditor/ckeditor.js"></script>
	<!-- End  Murad  Ckeditor -->
	
		<!-- Murad Custom Pagination -->

<script src="pagination/jquery.simplePagination.js"></script>

<!-- Start student Pagination -->
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $std_id;?>,
		hrefTextPrefix : 'student_view_pagi.php?std_id='
    });
	});
</script>
<!-- End Student Pagination -->

<!-- Start Teacher Pagination -->
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $breaking_id;?>,
		hrefTextPrefix : 'teacher_pagination.php?breaking_id='
    });
	});
</script>


<!-- End Teacher Pagination -->


<!-- Start Breaking News Pagination -->
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : <?php echo $breaking_id;?>,
		hrefTextPrefix : 'breaking_news_view_pagi.php?breaking_id='
    });
	});
</script>




<!-- End Breaking News Pagination -->

<!-- Delete Code -->


<script>
function confirmDelete(delUrl) {
  if (confirm(" Dear,Are you sure you want to Delete This Documents")) {
    document.location = delUrl;
  }
}
</script>
<!-- End Delete Code -->



<!-- End Murad Custom Pagination -->
	
	
		<div class="container wpf">
		
			<div class="row">
				<div class="copyright"></div>	
					<div class="col-md-8">
						<p class="copyright-text">Copyright © 2015 - Bangadesh Sweden Polytechnic institute.</p>
					</div>			
					<div class="col-md-4">
						<div class="social-button">
						<p>Stay Connected</p>
						<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</div>					
					</div>					
			</div>			
		</div>
</div>		
	</section>	


    
		<!-- start Cursol -->
		
<!-- Slider Carousel - END -->


		
    </body>
</html>
