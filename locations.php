<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="ATAK Interactive" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<title>Lagree Fitness</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">

<meta name="Googlebot" content="index, follow">
<meta name="revisit-after" content="3">
<meta name="Robots" content="INDEX, FOLLOW">
	
<meta property="og:site_name" content="">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:description" content="">
<meta property="og:image" content="images/logo.png">
<meta property="og:title" content="">
<meta property="og:url" content="">

<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" href="css/swiper.css">

<link rel="stylesheet" type="text/css" href="css/storelocator.css" />

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="header-section">
	<div id="store">
		<div class="bh-sl-container">

			<div class="bh-sl-form-container">
				<form id="bh-sl-user-location" method="post" action="#">
					<div class="form-input">
						<div class="big-title2 red-text mrgB0" style="position: relative">
							<span class="fleft">enter a zip code/city and state to locate a studio</span>
							<div id="search-holder">
								<input type="text" id="bh-sl-address" name="bh-sl-address" class="custom-input fright" style="width: 210px; margin: -5px 0px 0px;" placeholder="Zip Or City, State..."/>
								<button id="bh-sl-submit" class="bh-sl-submit" type="submit" style="background: url(images/submit-strelica.png) no-repeat scroll center center transparent; position: absolute; border: medium none; right: 5px; top: 7px;"></button>
							</div>
						</div>
						<span class="line20"></span>
					</div>

				</form>
			</div>
			
			<div id="map-container" class="bh-sl-map-container" style="border:1px solid #3f3f3f">
				<div id="bh-sl-map" class="bh-sl-map"></div>
				<div id="inner-panel-title" class="no-border fleft uptext search-adress-result">search results for: <span style="font-size: 18px;"></span></div>
				<div class="bh-sl-loc-list" style="background: #171717; overflow-x: hidden" id="skrols">
					<ul class="list"></ul>
				</div>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p class="white font20">ENTER A ZIP CODE/CITY AND STATE TO LOCATE A STUDIO</p>
			</div>
			<div class="col-md-8">
				<form action="#" method="">
					<input type="text" name="name" value="" />
				</form>
			</div>
		</div>
	</div>
	
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyA18amMzLYu5Qqr6ACiJ4DG4CBnob3tYAo"></script>
<script src="js/jquery.storelocator.js"></script>
<script>
    $(function() {
        $('#map-container').storeLocator({
            'slideMap' : false,
            'defaultLoc': true,
            'defaultLat': '44.9207462',
            'defaultLng' : '-93.3935366',
            'saturation': '-100'
        });
    });
</script>

<script src="js/jquery.nicescroll.min.js"></script>
<script>
$(document).ready(function() {
	$(".other-videos").niceScroll({
		cursorborder: "",
		cursorcolor:"#EE1E24",
		background: "rgba(255,255,255,0.65)",
		// cursorwidth: "5px",
		// railpadding: {top:10,right:10,left:0,bottom:10}
	});
});
</script>
<script>
$(document).ready(function(){ 
	$('.bh-sl-submit').click(function(){
		$('#inner-panel-title span').html($('#bh-sl-address').val());
	});
});
</script>

</body>
</html>