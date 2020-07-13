$( document ).ready(function() {


// main slider
$(window).load(function() {
  $('.mainslider').flexslider({
    animation: "slide",
	directionNav:true,
    controlNav:false,
    customDirectionNav: $(".mainslider-navigation a"),
  });
});

// department slider
$(window).load(function() {
  $('.department').flexslider({
    animation: "slide",
	directionNav:true,
    controlNav:false,
    customDirectionNav: $(".department-navigation a"),
  });
});




});

$(function () {
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'slide', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-chevron-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
});


// student login

$(document).ready(function(){

	$(".btn-login").click(function(){
	 $("#stlogin").fadeOut(100);
	});	
	$(".btn-login").click(function(){
	 $("#strusult").fadeIn(3000);
	});
});



// print

function Print(el) {

            var objRestorePage = document.body.innerHTML;

            var objPrintContent = document.getElementById(el).innerHTML;

            document.body.innerHTML = objPrintContent;

            window.print();

            document.body.innerHTML = objRestorePage;

        }


