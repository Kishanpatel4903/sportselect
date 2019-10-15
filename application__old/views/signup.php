<!DOCTYPE html>
<html>
<head>
    <title>Sportselect</title>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url() ?>assets/images/favicon.png" rel="shortcut icon" type="image/png" />
<link rel="stylesheet" type="text/css" href="font-icon/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/bootstrap-3/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login-style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signup-style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/country-picker-master/js/bootstrap-select.min.css">

<script src="<?php echo base_url() ?>assets/plugin/bootstrap-3/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/bootstrap-3/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/country-picker-master/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/country-picker-master/js/countrypicker.js"></script>
<script src="<?php echo base_url(); ?>adminassets/js/jquery.validate.min.js" type="text/javascript"></script>

<div class="main-w3ls signup">
    <div class="left-content">
        <div class="w3ls-content">
            <h1>
                <a href="index.php" class="logo"><i class="fa fa-cube" style="margin-right: 10px;"></i><b>Sportselect</b></a>
            </h1>
            <h2>Welcome to sportselect portal</h2>
            <!-- <a href="#" class="button-w3ls">
                <span class="fa fa-long-arrow-right"></span>
            </a> -->
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
                        <a href="<?php echo base_url('login') ?>">
                            <button class="active">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
                                </svg>
                                <span class="text" data-title="Login">Log in</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-form-agile">
            <!-- content -->

            <div class="sub-main-w3 signup">
                <h3>Sign Up</h3>
                <h5>Lorem Ipsum is simply dummy text....</h5>
                <form id="signupform" class="form-signup" enctype= "multipart/form-data" action="<?php echo base_url('Signup/newsignup') ?>" method="post">
                    <div class="row">
                        <div class="form-style-agile col-md-6" id="registeras">
                            <label>Register as</label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big">    
                                    <select id="usertype" name="type" class="form-control-selecter">
                                        <option value="">Select</option>
                                        <option value="1">Athletes </option>
                                        <option value="2">Agent</option>
                                        <option value="3">Club </option>
                                        <option value="4">Scout</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <!-- <div class=""> -->
                            <div class="namefield form-style-agile col-md-6">
                                <label>First Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="First Name" name="firstname" type="text" required="">
                                </div>
                            </div>
                            <div class="namefield form-style-agile col-md-6">
                                <label>Last Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="Last Name" name="lastname" type="text" required="">
                                </div>
                            </div>
                        <!-- </div> -->
                         
                            <div class="clubfield form-style-agile col-md-6"  style="display: none;">
                                <label>Club Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="Last Name" name="clubname" type="text" required="">
                                </div>
                            </div>
                         
                        <div class="form-style-agile col-md-6">
                            <label>Email <span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Email" name="email" type="text" required="">
                            </div>
                        </div>
                        <div class="form-style-agile col-md-6">
                            <label>Password <span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Password" name="password" type="password" required="">
                            </div>
                        </div>
                        <div class="form-style-agile col-md-6 " >
                            <label>Sports type</label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big">    
                                    <select name="sporttype" class="form-control-selecter">
                                        <option value="">Select Type</option>
                                        <option value="Football">Football </option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-style-agile col-md-6">
                            <label>Telephone<span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Telephone" name="telephone" type="text" required="">
                            </div>
                        </div>
                        <div class="form-style-agile  col-md-6">
                            <label>Country<span>*</span></label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big"> 
                                    <select name="country" class="selectpicker countrypicker" data-live-search="true" data-flag="true"></select>
                                </span>
                            </div>
                        </div>
                        <div class="form-style-agile col-md-6">
                            <label>Statistics Link</label>
                            <div class="pom-agile">
                                <input placeholder="Statistics Link" name="statistiklink" type="text" >
                            </div>
                            <label>
                              <input type="checkbox" id="nostst"> No Statistics Link
                            </label>
                        </div>
                        <div class="col-md-6 form-style-agile file-text cvupload" style="display: none;">
                            <div class="form-group">
                                <label>Upload Your CV </label>
                                <div class="file-upload-wrapper pom-agile" data-text="Select your file!">
                                    <input name="file-upload-field" type="file"  class="file-upload-field" value="">
                                </div> 
                                <label>
                              <input type="checkbox" id="nocv"> No available CV
                            </label>       
                            </div>
                        </div>
                        <div class="form-style-agile col-md-6 yourself" style="display: none;">
                            <label>Tell About Yourself</label>
                            <div class="pom-agile">
                                <input placeholder="Tell About Yourself" name="yourself" type="text"  >
                            </div>
                        </div>
                        <div class="col-md-4" style="clear: both;">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


<script>
jQuery(function() {
 jQuery("#signupform").validate({
    // Specify validation rules
    rules: {
      firstname: {required:true},
      lastname: {required:true}, 
      clubname: {required:true}, 
      email: {required:true, email:true,
             remote: {
                  url: "<?php echo base_url(); ?>Agent_controller/email_check",
                  type: "post"
              }},
      password: {required:true, minlength:5},
      sporttype: {required:true},
      type: {required:true},
      telephone: {required:true, number:true},
      country: {required:true},
        
    },
    // Specify validation error messages
    messages: {
      firstname: {required:"Please enter firstname."},
      lastname: {required:"Please enter lastname."},
      clubname: {required:"Please enter clubname."},

      email: {required:"Please enter email.", email:"Please enter valid email." , remote:"This email is already exists.",},
      password: {required:"Please enter password"},
      sporttype: {required:"Please select sport type."},
      type: {required:"Please select user's type."},
      telephone: {required:"Please enter telephone number.."},
      country: {required:"Please enter country."},
       
    },
    errorPlacement: function(error, element) {
        if(element.attr("name") == 'type'){
            element.parent().parent().after(error);
        }
        else if(element.attr("name") == 'sporttype'){
            element.parent().parent().after(error); 
        }
        else{
            element.parent().after(error);
        }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {

       
      form.submit();
     
    }
  });
});
//jQuery(".clubfield").hide();
jQuery("#usertype").change(function(){

    if(jQuery(this).val()=='3'){
        jQuery(".clubfield").show();
        jQuery(".namefield").hide();
    }else{
        jQuery(".namefield").show();
        jQuery(".clubfield").hide();
    }
})

$("form").on("change", "#nostst", function(){
    if($(this). prop("checked") == true){
        $('.cvupload').show();
    }else{
        $('.cvupload').hide();
    }
});  
$("form").on("change", "#nocv", function(){
    if($(this). prop("checked") == true){
        $('.yourself').show();
    }else{
        $('.yourself').hide();
    }
});  
 $("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, '') );
    var changeimagetext = $(this).parent(".custom-file").attr("data-text");
    $('.custom-file-label').html(changeimagetext);
 });
</script>

</html>





