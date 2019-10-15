<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		label.error {
			color:red;
		}
	</style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<div class="container">
  <h2>Register Form</h2>

<?php  $message = $this->session->flashdata('mess'); ?>
<div class="<?php echo $message["class"]; ?>"> <?php echo $message["message"]; ?> </div>

  <form method="post" name="register" id="register" action="<?php echo base_url(); ?>register/check/">
  	<div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
	<?php if(isset($_GET['passkey']) && !empty($_GET['passkey'])){ ?>
	 <div class="form-group">
	 	<input type="hidden" name="oldpasskey" value="<?php echo $_GET['passkey']; ?>">
      <label for="pwd">Enter Passkey:</label>
      <input type="text" class="form-control" id="passkey" placeholder="Enter Passkey" name="passkey">
    </div>
	<?php } ?>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
	   jQuery("#register").validate({
    rules: {
      firstname:{
        required:true,
      },
      lastname:{
        required:true,
      },
      email:{
        required:true,
        email:true,
      },
      password:{
        required:true,
      },
      passkey:{
        required:true,
      },
    },
    messages:{   
      firstname:{
        required: "Please enter first name.",
      },
      lastname:{
        required: "Please enter last name.",
      },
      email:{
        required: "Please enter email.",
        email:"Please enter valid email address.",
      },
      password:{
        required: "Please enter password.",
      }, 
      passkey:{
        required: "Please enter passkey.",
      }, 
    },
  });

</script>


</body>
</html>