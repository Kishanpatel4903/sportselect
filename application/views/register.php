<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('input[type=radio]').change(function() {
			jQuery('.code').attr('type','text');
		});
	});
</script>
<form method="post" name="register" action="<?php echo base_url(); ?>register/check/">
	<label>First Name</label>
	<input type="text" name="firstname">
	<label>Last Name</label>
	<input type="text" name="lastname">
	<label>Email</label>
	<input type="text" name="email">
	<label>Password</label>
	<input type="text" name="password">
	<?php if(isset($_GET['passkey']) && !empty($_GET['passkey'])){ ?>
		<label>Enter Passkey</label>
		<input type="text" name="passkey">
	<?php } ?>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>