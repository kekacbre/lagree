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

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/challenge.css" rel="stylesheet">

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

<section class="video-about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="background: url(images/product2-1.jpg) no-repeat center center / cover; height: 90vh; display: flex; align-items: center; justify-content: center">
				<div class="mega-title text-center">
					<h1 class="coming-soon-title">coming soon</h1>
					<a href="#3" class="white-button mid mrgT30">BACK</a>
				</div>
			</div>
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
	var swiper3 = new Swiper('.prize-swiper', {
        slidesPerView: 4,
        spaceBetween: 0,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 0
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