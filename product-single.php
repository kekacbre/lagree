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
<link href='css/simplelightbox.css' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.swiper-container {
	width: 100%;
	height: 300px;
	margin-left: auto;
	margin-right: auto;
}
.swiper-slide {
	background-size: cover;
	background-position: center;
}
.gallery-top {
	height: 600px;
	width: 100%;
}
.gallery-thumbs {
	height: 80px;
	box-sizing: border-box;
	padding: 10px 0;
}
.gallery-thumbs .swiper-slide {
	width: 100px;
	height: 100%;
	opacity: 0.4;
	border: 1px solid #d8d8d8;
	cursor: pointer;
}
.gallery-thumbs .swiper-slide-active {
	opacity: 1;
}
.gallery-thumbs .swiper-wrapper{
	height: 70px;
}
</style>
</head>
<body>

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="header-section">
	<div class="container">
		<div class="row">
			<h1 class="header-title">PRODUCTS</h1>
		</div>
	</div>
</section>

<section class="">
	<div class="container-fluid">
		<div class="row flexx">
			<div class="col-md-6 product-gallery">
				<div class="swiper-container gallery-top">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><a href="images/product1.jpg"><img src="images/product1.jpg" alt="image" class="img-responsive" /></a></div>
						<div class="swiper-slide"><a href="images/product1.jpg"><img src="images/product1.jpg" alt="image" class="img-responsive" /></a></div>
						<div class="swiper-slide"><a href="images/product1.jpg"><img src="images/product1.jpg" alt="image" class="img-responsive" /></a></div>
					</div>
				</div>
				<div class="swiper-container gallery-thumbs">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/product1.jpg" alt="image" class="img-responsive" /></div>
						<div class="swiper-slide"><img src="images/product1.jpg" alt="image" class="img-responsive" /></div>
						<div class="swiper-slide"><img src="images/product1.jpg" alt="image" class="img-responsive" /></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-item-desc single-product">
					<h2>USED MEGAFORMER M3S</h2>
					<p class="single-product-price mrgB20">$840.00 <span>$910.00</span></p>
					<p class="condition">CONDITION: VERY GOOD</p>
					<p>
						The Megaformer™ M3S (patent pending) is the 5th version of the Megaformer™. The carriage and platforms have been enhanced for more functionality. Accessories attachments are available on all 4 corners of the carriage.
						<br><br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec consectetur sem. Donec pulvinar pulvinar varius. Mauris facilisis malesuada velit et mollis. Cras sagittis nunc at est dignissim mattis. Ut enim arcu, aliquet a quam eu, ultrices maximus nibh. Vivamus eu urna quis felis sagittis egestas at in urna.
						<br><br>
						Cras dignissim accumsan tellus sed iaculis. Quisque imperdiet egestas diam at feugiat. In vitae tellus massa. Phasellus at ultricies sem, vitae varius elit. Aliquam sit amet massa accumsan, pulvinar nisl in, pellentesque lectus. Curabitur turpis leo, finibus ut feugiat vitae, dictum eget ligula. Pellentesque vulputate sit amet lacus eu venenatis. Pellentesque quis sapien metus.
					</p>
					<form action="checkout.php" method="post">
						<button type="submit" class="red-border-button to-black">ADD TO CART</button>
					</form>
					<div class="article-share-buttons mrgT30">
						<div class="social-contact">
							<a href="#3"><img src="images/fb-contact.png" alt="fb contact icon" class="img-responsive" /></a>
							<a href="#3"><img src="images/tw-contact.png" alt="twitter contact icon" class="img-responsive" /></a>
							<a href="#3"><img src="images/insta-contact.png" alt="instagram contact icon" class="img-responsive" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gray-bg padB40 padT40">
	<div class="container-fluid">
		<div class="row" style="position: relative">
			<div class="col-md-12 text-center">
				<h2 class="bold white">2ND HAND EQUIPMENT FOR SALE</h2>
			</div>
			<div class="swiper-button-prev swiper-button-white used-prev"></div>
			<div class="swiper-button-next swiper-button-white used-next"></div>
		</div>
	</div>
</section>

<section class="used-products">
	<div class="container-fluid">
		<div class="row" style="position: relative">
			<div class="swiper-container-used used-product">
				<div class="swiper-wrapper">
					<div class="swiper-slide text-center">
						<div class="used-slide">
							<img src="images/used1.jpg" alt="image" class="img-responsive" />
							<h3 class="bold red">USED PROFORMER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitpo suere, urna ac dapibus convallis.</p>
							<p class="used-product-price">$840.00 <span>$910.00</span></p>
							<a href="product-single.php" class="round-button small">BUY NOW</a>
						</div>
					</div>
					<div class="swiper-slide text-center">
						<div class="user-slide">
							<img src="images/used1.jpg" alt="image" class="img-responsive" />
							<h3 class="bold red">USED PROFORMER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitpo suere, urna ac dapibus convallis.</p>
							<p class="used-product-price">$840.00 <span>$910.00</span></p>
							<a href="product-single.php" class="round-button small">BUY NOW</a>
						</div>
					</div>
					<div class="swiper-slide text-center">
						<div class="user-slide">
							<img src="images/used1.jpg" alt="image" class="img-responsive" />
							<h3 class="bold red">USED PROFORMER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitpo suere, urna ac dapibus convallis.</p>
							<p class="used-product-price">$840.00 <span>$910.00</span></p>
							<a href="product-single.php" class="round-button small">BUY NOW</a>
						</div>
					</div>
					<div class="swiper-slide text-center">
						<div class="user-slide">
							<img src="images/used1.jpg" alt="image" class="img-responsive" />
							<h3 class="bold red">USED PROFORMER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitpo suere, urna ac dapibus convallis.</p>
							<p class="used-product-price">$840.00 <span>$910.00</span></p>
							<a href="product-single.php" class="round-button small">BUY NOW</a>
						</div>
					</div>
					<div class="swiper-slide text-center">
						<div class="user-slide">
							<img src="images/used1.jpg" alt="image" class="img-responsive" />
							<h3 class="bold red">USED PROFORMER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitpo suere, urna ac dapibus convallis.</p>
							<p class="used-product-price">$840.00 <span>$910.00</span></p>
							<a href="product-single.php" class="round-button small">BUY NOW</a>
						</div>
					</div>
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
	var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 10,
	});
	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView: 'auto',
		touchRatio: 0.2,
		slideToClickedSlide: true,
        breakpoints: {
            1024: {
                slidesPerView: 3,
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
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
	});
	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

	var swiper3 = new Swiper('.used-product', {
		nextButton: '.used-next',
        prevButton: '.used-prev',
        slidesPerView: 3,
        spaceBetween: 0,
        breakpoints: {
            1024: {
                slidesPerView: 3,
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
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
	});
</script>
<script type="text/javascript" src="js/simple-lightbox.js"></script>
<script>
	$(function(){
		var $gallery = $('.gallery-top a').simpleLightbox();
	});
</script>

</body>
</html>