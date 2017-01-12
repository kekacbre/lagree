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

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="header-section">
	<div class="container">
		<div class="row">
			<h1 class="header-title">VIDEOS</h1>
		</div>
	</div>
</section>

<section class="padSec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<iframe width="80%" height="580" src="https://www.youtube.com/embed/Og5keQ7by34?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<div class="other-videos">
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
					<div class="video-thumb"><a href="#3"><img src="images/video-thumb1.jpg" alt="video thumb" class="img-responsive" /></a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

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

</body>
</html>