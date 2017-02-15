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
			<h1 class="header-title">CHALLENGE REGISTRATION</h1>
		</div>
	</div>
</section>

<section class="train-reg padSec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center padB60 mrgB60 borderB"><img src="images/black-challenge-logo.png" alt="image" class="img-responsive" /></div>
		</div>
		<div class="row">
			<form action="trainer-registration-2.php" method="post">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-6">
						<input type="text" class="custom-input" placeholder="first name" required />
						<select class="select7" placeholder="gender" required>
							<option value="">gender</option>
							<option value="male">male</option>
							<option value="female">female</option>
						</select>
						<input type="password" class="custom-input" placeholder="password" required />
						<input type="text" class="custom-input" placeholder="age" required />
						<select class="select7" placeholder="height" required>
							<option value="">height</option>
							<option value="1">5' 0''</option>
							<option value="2">5' 1''</option>
							<option value="3">5' 2''</option>
						</select>
						<select class="select7" placeholder="starting waist" required>
							<option value="">starting waist</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="col-md-6">
						<input type="text" class="custom-input" placeholder="last name" required />
						<input type="email" class="custom-input" placeholder="email address" required />
						<input type="password" class="custom-input" placeholder="repeat password" required />
						<select class="select7" placeholder="starting weight" required>
							<option value="">starting weight</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
						<select class="select7" placeholder="starting arms" required>
							<option value="">starting arms</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
						<select class="select7" placeholder="starting thighs" required>
							<option value="">starting thighs</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>				
				</div>				
				<div class="col-md-12 text-center">
					<hr class="mrgT30 mrgB30">
					<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<select class="select7" placeholder="your favorite lagree studio?" required>
							<option value="">your favorite lagree studio?</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					</div>
					<hr class="mrgT30 mrgB30">
				</div>
				<div class="col-md-10 col-md-offset-1 text-center">
					<button type="submit" class="red-button big">CONTINUE TO STEP 2</button>
				</div>
				</form>
			</div>
		</div>
	</div>
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