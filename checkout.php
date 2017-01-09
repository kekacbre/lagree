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
<link rel="stylesheet" href="css/radio.css">
<link rel="stylesheet" href="css/jquery-select7.css">

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
			<h1 class="header-title">CHECKOUT</h1>
		</div>
	</div>
</section>

<section class="train-reg">
	<form action="#" method="post">
		<div class="container padT40 padB60">
			<div class="row">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="cart-qty bold btn-block">YOU HAVE 2 ITEM(S) IN CART</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="checkout-cart-item col-md-10 col-md-offset-1">
						<div class="reg-product-image"><img src="images/lagree101.jpg" alt="lagree 101" class="img-responsive" /></div>
						<div class="reg-product-info">
							<div class="reg-product-title">Megaformer M3S - Used</div>
							<div class="reg-product-price">$840.00 <span class="old-price">$910.00</span></div>
						</div>
						<a href="#3" class="reg-product-remove">REMOVE</a>
					</div>
					<div class="checkout-cart-item col-md-10 col-md-offset-1">
						<div class="reg-product-image"><img src="images/lagree101.jpg" alt="lagree 101" class="img-responsive" /></div>
						<div class="reg-product-info">
							<div class="reg-product-title">TRAINER REGISTRATION (COURSE 101)</div>
							<div class="reg-product-price">$490.00</div>
						</div>
						<a href="#3" class="reg-product-remove">REMOVE</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6 billing-address">
							<h3 class="mrgB30">BILLING ADDRESS:</h3>
							<input type="text" class="custom-input" placeholder="first name" required />
							<input type="text" class="custom-input" placeholder="last name" required />
							<input type="text" class="custom-input" placeholder="company (optional)" required />
							<input type="email" class="custom-input" placeholder="email address" required />
							<input type="text" class="custom-input" placeholder="address" required />
							<input type="text" class="custom-input" placeholder="city" required />
							<input type="text" class="custom-input" placeholder="zip/postal code" required />
							<select class="select7" placeholder="country">
								<option value="">country</option>
								<option value="Azerbeidzan">count 0</option>
								<option value="count 1">count 1</option>
								<option value="count 2">count 2</option>
								<option value="count 3">count 3</option>
								<option value="count 4">count 4</option>
							</select>
						</div>
						<div class="col-md-6 shipping-address">
							<h3 class="mrgB30">SHIPPING ADDRESS: <div id="check-box" style="margin: -7px 0 0 0; position: relative; float: right"><input id="offers" type="checkbox" name="offers" onClick="$('.shipping-mask').toggleClass('masking');"><label for="offers" style="padding-top: 3px;">Same as Billing</label></div></h3>
							<div class="shipping-mask">
								<input type="text" class="custom-input" placeholder="first name" required />
								<input type="text" class="custom-input" placeholder="last name" required />
								<input type="text" class="custom-input" placeholder="company (optional)" required />
								<input type="email" class="custom-input" placeholder="email address" required />
								<input type="text" class="custom-input" placeholder="address" required />
								<input type="text" class="custom-input" placeholder="city" required />
								<input type="text" class="custom-input" placeholder="zip/postal code" required />
								<select class="select7" placeholder="country">
									<option value="">country</option>
									<option value="Azerbeidzan">count 0</option>
									<option value="count 1">count 1</option>
									<option value="count 2">count 2</option>
									<option value="count 3">count 3</option>
									<option value="count 4">count 4</option>
								</select>
							</div>
						</div>				
					</div>				
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 padB20">
						<div class="col-md-12 billing-address">
							<h3 class="mrgB30">SHIPPING METHOD:</h3><br>
							<div id="check-box" class="btn-block" style="margin: -7px 0 20px 0; position: relative; float: right">
								<input id="shipping1" type="radio" name="shipping">
								<label for="shipping1" style="padding-top: 3px;">$0.00 - FREE Shipping (3-5 Business Days)</label>
							</div>
							<br>
							<div id="check-box" class="btn-block" style="margin: -7px 0 0 0; position: relative; float: right">
								<input id="shipping2" type="radio" name="shipping">
								<label for="shipping2" style="padding-top: 3px;">$9.00 - Express Shipping (1-2 Business Days)</label>
							</div>
						</div>									
					</div>				
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6 billing-address">
							<h3 class="mrgB30">PAYMENT:</h3>
							<input type="text" class="custom-input" placeholder="name on card" required />
							<input type="text" class="custom-input" placeholder="credit card type" required />
							<input type="text" class="custom-input" placeholder="credit card number" required />
						</div>
						<div class="col-md-6 shipping-address">
							<h3 class="mrgB30">&nbsp;</h3>
							<select class="select7" placeholder="expiration month" required>
								<option value="">country</option>
								<option value="Azerbeidzan">count 0</option>
								<option value="count 1">count 1</option>
								<option value="count 2">count 2</option>
								<option value="count 3">count 3</option>
								<option value="count 4">count 4</option>
							</select>
							<select class="select7" placeholder="expiration year" required>
								<option value="">country</option>
								<option value="Azerbeidzan">count 0</option>
								<option value="count 1">count 1</option>
								<option value="count 2">count 2</option>
								<option value="count 3">count 3</option>
								<option value="count 4">count 4</option>
							</select>
							<input type="text" class="custom-input" placeholder="card verification number" required />
						</div>				
					</div>				
				</div>
			</div>
		</div>
		<div class="header-section">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 flexx">
						<div class="col-md-6">
							<h1 class="order-title text-left">TOTAL: $1.560.00</h1>
							<p class="order-text text-left">
							Sub-Total: $1,560.00
							<br>
							Shipping: $0.00
							</p>
						</div>
						<div class="col-md-6 text-center">
							<button type="submit" class="red-button big mrgB0">PLACE ORDER</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

<script src="js/jquery-select7.js"></script>
<script>
	$(".select7").select7();
</script>
</body>
</html>