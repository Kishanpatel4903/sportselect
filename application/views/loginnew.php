<!DOCTYPE html>
<html>
<head>
	<title>Sportselect</title>
</head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-icon/font-awesome/css/font-awesome.css">
<link href="images/favicon.png" rel="shortcut icon" type="image/png" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login-style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signup-style.css" type="text/css" media="all" />
<script src="<?php echo base_url() ?>assets/plugin/bootstrap-3/jquery.min.js"></script>
<!--<script src="<?php echo base_url(); ?>adminassets/js/jquery.validate.min.js" type="text/javascript"></script>-->

<script src="<?php echo base_url().'assets' ?>/js/jquery.validate.min.js" type="text/javascript"></script>
	<div class="main-w3ls">
		<div class="left-content">
			<div class="w3ls-content">
				<!-- logo -->
				<h1>
				<a href="index.php" class="logo"><i class="fa fa-cube" style="margin-right: 10px;"></i><b>Sportselect</b></a>
				</h1>
				<!-- //logo -->
				<h2>Welcome to sportselect portal</h2>
				<!-- <a href="#" class="button-w3ls">
					<span class="fa fa-long-arrow-right"></span>
				</a> -->
			<!-- <ul class="nav-w3ls">
					<li>
						<a href="#">Home</a>
					</li>
				
					<li>
						<a href="signup.php">Signup</a>
					</li>
				
				</ul> -->
				<div class="nav">

				
				<div class="nav__item">
				<a href="index.php">
				<button class="active">
					<svg class="icon" viewBox="0 0 24 24">
						<path fill="#000000" d="M9,13H15V19H18V10L12,5.5L6,10V19H9V13M4,21V9L12,3L20,9V21H4Z" />
					</svg>
					<span class="text" data-title="Home">Home</span>
					</button>
					</a>
				</div>
				

				
				<div class="nav__item">
				<a href="<?php echo base_url('signup') ?>">
					<button class="active">
					<svg class="icon" viewBox="0 0 24 24">
						<path fill="#000000" d="M6,2A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2H6M6,4H13V9H18V20H6V4M8,12V14H16V12H8M8,16V18H13V16H8Z" />
					</svg>
					<span class="text" data-title="login"> signup </span>
					</button>
					</a>
				</div>
				

				
				</div>
			</div>
		</div>
		<div class="right-form-agile">
			<!-- content -->
			<div class="sub-main-w3">
				<h3>Login Now</h3>
				<h5>Lorem Ipsum is simply text....</h5>
				<p></p>

				<?php //echo "<pre>"; print_r($accepted); echo "</pre>";
				if(!empty($this->session->flashdata('error'))){
				?>
				   <div class="alert alert-danger" style="color:red; font-size: 18px;">
				      <?php echo $this->session->flashdata('error'); ?>
				   </div>
				<?php
				  
				} ?>
				<form id="signinform" method="post" name="loginform" id="loginform" action="<?php echo base_url(); ?>Login/check/">
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

 <script>
jQuery(function() {
 jQuery("#signinform").validate({
     
    rules: {
      email: {required:true},
      password: {required:true}, 
	},
 
    messages: {
      email: {required:"Please enter email."},
      password: {required:"Please enter password."},  
    },
     errorPlacement: function(error, element) {
        element.parent().after(error);
    } 
     
  });
});
</script>
</html>