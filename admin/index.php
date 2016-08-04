<?php
session_start();
?>
<?php include("./include/header.php");
if(!isset($_SESSION['login-user-id']))
{
	header('location:login.php');
	exit();
}

?>
<!doctype html>
<html lang="en">
<head>

<?php include(FILENAME_LINK);?>	
<!-- jQuery-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>




</head>

<body class="animated-all">


<?php include(FILENAME_HOMEMENU);?>	


<?php include(FILENAME_CENTER);?>

<?php include(FILENAME_FOOTER);?>	
</body>
<!-- AlLL SCRIPTS & PLUGINS --> 

<!-- SWITCHER --> 
 
<script type="text/javascript" src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="plugins/switcher/js/dmss.js"></script> 
<!-- MAIN SCRIPTS--> 

<!--Blazy image--> 
<script type="text/javascript" src="js/blazy.min.js"></script> 
<!-- User Agent --> 
<script type="text/javascript" src="js/cssua.js"></script> 

<!--Waypoint--> 
<script type="text/javascript" src="js/waypoints.min.js"></script> 
<!--Ios Fix--> 
<script type="text/javascript" src="js/ios-orientationchange-fix.js"></script> 
<!--Element form Styled--> 
<script type="text/javascript" src="plugins/selectbox/jquery.selectbox-0.2.js"></script> 

<!--Sly Slider--> 
<script type="text/javascript" src="plugins/sly/sly.min.js"></script> 
<!--Bx Slider--> 
<script type="text/javascript" src="plugins/bxslider/jquery.bxslider.min.js"></script> 
<!--Flex Slider--> 
<script type="text/javascript" src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<!-- Flickr--> 
<script type="text/javascript" src="plugins/jflickrfeed/jflickrfeed.min.js" ></script> 
<!-- Catalog Price--> 
<script type="text/javascript" src="plugins/nouislider/jquery.nouislider.min.js"></script> 
<!-- Magnific--> 
<script type="text/javascript" src="plugins/magnific/jquery.magnific-popup.js"></script> 
<!-- Pretty Photo --> 
<script type="text/javascript" src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<!-- SMart Menu --> 
<script type="text/javascript" src="plugins/smart-menu/smart-menu.js"></script> 
<!-- User agent --> 
<script type="text/javascript" src="js/cssua.min.js"></script> 




<!--SHOP SCRIPTS --> 

<!--Catalog Points--> 
<script type="text/javascript" src="plugins/points/points.js" ></script> 

<!--HOME SCRIPTS--> 

<!--Isotope filter--> 
<script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script> 
<!--Contact form--> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<!-- SMart Grid--> 
<script type="text/javascript" src="plugins/events/masonry.pkgd.min.js"></script> 
<!-- Events --> 
<script type="text/javascript" src="plugins/events/events.js"></script> 
<!--Count Down--> 
<script type="text/javascript" src="plugins/countdown/jquery.countdown.min.js" ></script> 
<!-- Newsletter --> 
<script type="text/javascript" src="plugins/newsletter/main.js" ></script> 
<!-- Bio --> 
<script type="text/javascript" src="plugins/bio/js/bio.js"></script> 
<!--IVIEW--> 
<script type="text/javascript" src="plugins/iview/js/iview.js"></script> 
<!--Scripts--> 
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="plugins/switcher/js/bootstrap-select.js"></script>
<script type="text/javascript" >

$('#a1').on('click',function()
{
	$('li').toggleClass('open');
	
});
$('#a2').on('click',function()
{
	$('li').toggleClass('open');
	
});
$('#a3').on('click',function()
{
	$('li').toggleClass('open');
	
});
</script>
</html>
