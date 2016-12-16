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
<link rel="stylesheet" href="css/checkbox.css">

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
			<h1 class="header-title">TRAINER REGISTRATION</h1>
		</div>
	</div>
</section>

<section class="train-reg padSec">
	<div class="container">
		<div class="row">
			<form action="#" method="post">
				<div class="col-md-6">
					<input type="text" class="custom-input" placeholder="first name" required />
					<input type="text" class="custom-input" placeholder="address" required />
					<input type="text" class="custom-input" placeholder="state" required />
					<input type="text" class="custom-input" placeholder="phone #" required />
					<input type="password" class="custom-input" placeholder="password" required />
					<input type="text" class="custom-input" placeholder="registration code (optional)" />
				</div>
				<div class="col-md-6">
					<input type="text" class="custom-input" placeholder="last name" required />
					<input type="text" class="custom-input" placeholder="city" required />
					<input type="text" class="custom-input" placeholder="zip code" required />
					<input type="email" class="custom-input" placeholder="email address" required />
					<input type="password" class="custom-input" placeholder="repeat password" required />
					<button type="password" class="black-button" placeholder="repeat password">E-SIGNATURE</button>
				</div>				
				<div class="col-md-12 text-center">
					<hr class="mrgT30 mrgB30">
					<div id="check-box"><input id="offers" type="checkbox" name="offers"><label for="offers">I have agreed and signed the Terms of Services</label></div>
					<hr class="mrgT30 mrgB30">
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" class="red-button big">CONTINUE TO STEP 2</button>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		direction: 'vertical',
		speed: 800,
		autoplay: 4000,
        autoplayDisableOnInteraction: false
	});
	var swiper2 = new Swiper('.swiper-container-stories', {
		pagination: '.swiper-pagination-stories',
		paginationClickable: true,
		direction: 'vertical'
	});
	var swiper2 = new Swiper('.swiper-container-locations', {
        effect: 'flip',
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
	});
    var swiper = new Swiper('.swiper-container-references', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 6,
        centeredSlides: false,
        spaceBetween: 30,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
	});	
</script>
<script src="js/bootstrap.youtubepopup.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$(".youtube").YouTubeModal({autoplay:1, width:900, height:600});
});
</script>
</body>
</html>