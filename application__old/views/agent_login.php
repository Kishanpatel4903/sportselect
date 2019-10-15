<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>adminassets/css/login-style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>adminassets/css/font-awesome.min.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
	<style type="text/css">
		.left-content {
    background: url(<?php echo base_url(); ?>assets/images/images.jpg) no-repeat center;
    background-size: cover;
    
}
	</style>
</head>

<body>
	<div class="main-w3ls">
		<div class="left-content">
			<div class="w3ls-content">
				<!-- logo -->
				<h1>
					<a href="index.html"><span class="fa fa-magic"></span>Full Screen Enroll Form</a>
				</h1>
				<!-- //logo -->
				<h2>Sed do eiusmod tempor incidunut labore.</h2>
				<a href="#" class="button-w3ls">
					<span class="fa fa-long-arrow-right"></span>
				</a>
			<ul class="nav-w3ls">
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="login.html">Login</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>signup/">Signup</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="right-form-agile">
			<!-- content -->
			<div class="sub-main-w3">
				<h3>Login Now</h3>
				<h5>Signing an account is free..</h5>
				<p>and won't take longer than a couple os seconds</p>
				<form method="post" name="loginform" id="loginform" action="<?php echo base_url(); ?>Agent_controller/check/">
					<div class="form-style-agile">
						<label>User Name</label>
						<div class="pom-agile">
							<span class="fa fa-user"></span>
							<input placeholder="User Name" name="email" type="text" required="">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Password</label>
						<div class="pom-agile">
							<span class="fa fa-key"></span>
							<input placeholder="Password" name="password" type="password" id="password1" required="">
						</div>
					</div>
					<div class="sub-agile">
						<input type="checkbox" id="brand1" value="">
						<label for="brand1">
							<span></span>stay login</label>
					</div>
					<input type="submit" name="submit" value="Submit">
				</form>
				<!-- social icons -->
				<div class="w3ls-social">
					<h3>or Login with</h3>
					<ul class="social-nav model-3d-0 footer-social social two">
						<li>
							<a href="#" class="facebook">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<span class="fa fa-linkedin"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //content -->

</body>

</html>