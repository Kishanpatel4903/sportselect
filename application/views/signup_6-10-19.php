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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script> -->

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
                <!-- <h5>Lorem Ipsum is simply dummy text....</h5> -->
                <form id="signupform" class="form-signup" enctype= "multipart/form-data" action="<?php echo base_url('Signup/newsignup') ?>" method="post">
                    <div class="row">
                        <div class="form-style-agile col-md-4" id="registeras">
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
                            <label></label>
                        </div>
                        <!-- <div class=""> -->
                            <div class="namefield form-style-agile col-md-4">
                                <label>First Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="First Name" name="firstname" type="text" required="">
                                </div>
                                <label></label>
                            </div>
                            <div class="namefield form-style-agile col-md-4">
                                <label>Last Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="Last Name" name="lastname" type="text" required="">
                                </div>
                                <label></label>
                            </div>
                        <!-- </div> -->
                         
                            <div class="clubfield form-style-agile col-md-4"  style="display: none;">
                                <label>Club Name <span>*</span></label>
                                <div class="pom-agile">
                                    <input placeholder="Club Name" name="clubname" type="text" required="">
                                </div>
                                <label></label>
                            </div>
                         
                        <div class="form-style-agile col-md-4">
                            <label>Email <span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Email" name="email" type="text" required="">
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile col-md-4">
                            <label>Password <span>*</span></label>
                            <div class="pom-agile">
                                <input type="password" id="password_mirror" name="password_mirror"  placeholder="Password"  required="">
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile col-md-4">
                            <label>Confirm Password <span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Confirm Password" name="cpassword" type="password" required="">
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile col-md-4 " >
                            <label>Sports type</label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big">    
                                    <select name="sporttype" class="form-control-selecter">
                                        <option value="">Select Type</option>
                                        <option value="Football">Football </option>
                                    </select>
                                </span>
                            </div>
                            <label></label>
                        </div>
                        
                        <div class="form-style-agile col-md-4">
                            <label>Telephone<span>*</span></label>
                            <div class="pom-agile">
                                <input placeholder="Telephone" name="telephone" type="text" required="">
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile  col-md-4">
                            <label>Country<span>*</span></label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big"> 
                                    <select name="country" id="countrydropdown" class="selectpicker countrypicker" data-live-search="true" data-flag="true">
                                        <option value="">Select</option>
                                    </select>
                                    <input type="hidden" name="countrycode" id="countrycode" value="" />
                                </span>
                            </div>
                            <label style="height: 23px;"></label>
                        </div>
                        <div class="form-style-agile col-md-4 statistiklinkdiv"  >
                            <label class="statistiklinklbl">Statistics Link</label>
                            <div class="pom-agile">
                                <input placeholder="Statistics Link" name="statistiklink" id="statistiklink" type="text" >
                            </div>
                            <label>
                              <input type="checkbox" id="nostst" name="nostst"> No Statistics Link
                            </label>
                            <label></label>
                        </div>
                        <div class="col-md-4 form-style-agile file-text cvupload" style="display: none;">
                            <div class="form-group">
                                <label>Upload Your CV </label>
                                <div class="file-upload-wrapper pom-agile" data-text="Select your file!">
                                    <input name="cv" type="file" id="cv"  class="file-upload-field" value="">
                                </div> 
                                <label>
                              <input type="checkbox" id="nocv" name="nocv"> No available CV
                            </label>       
                            </div>
                        </div>
                        <div class="form-style-agile col-md-4 yourself" style="display: none;">
                            <label>Tell About Yourself</label>
                            <div class="pom-agile">
                                <input placeholder="Tell About Yourself" name="yourself" type="text"  >
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile  col-md-4 positiondiv" style="display: none;">
                            <label>Position<span>*</span></label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big"> 
                                    <select name="position" id="position" class="selectpickera">
                                        <option value="">Select</option>
                                        <option value="Manager">Manager</option>
                                        <option value="sports director">sports director</option>
                                        <option value="coach">coach</option>
                                    </select>
                                </span>
                            </div>
                            <label></label>
                        </div>
                        <div class="form-style-agile  col-md-4 tierdiv" style="display: none;">
                            <label>Tier<span>*</span></label>
                            <div class="pom-agile custom-dropdown-list-wrapp">
                                <span class="custom-dropdown-list big"> 
                                    <select name="tier" id="tier" class="selectpickera">
                                        <option value="">Select</option>
                                        <option value="1st tier">1st tier</option>
                                        <option value="2nd tier">2nd tier</option>
                                        <option value="3rd tier">3rd tier</option>
                                        <option value="independent academy">independent academy</option>
                                    </select>
                                </span>
                            </div>
                            <label></label>
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
    
     
    
    jQuery('#countrydropdown').change(function(){
        var option = jQuery('option:selected', this).attr('data-country-code');
        jQuery("#countrycode").val(option);
    });
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
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
      password_mirror: {required:true, minlength:5},
      cpassword:{required:true, equalTo: "#password_mirror" },
      sporttype: {required:true},
      type: {required:true},
      telephone: {required:true, number:true},
      country: {required:true},
      statistiklink:{url:true},
      cv:{extension: "jpg|jpeg|png|pdf|docx|doc" },

      position:{required:true },
      tier:{required:true },
        
    },
    // Specify validation error messages
    messages: {
      firstname: {required:"Please enter firstname."},
      lastname: {required:"Please enter lastname."},
      clubname: {required:"Please enter clubname."},

      email: {required:"Please enter email.", email:"Please enter valid email." , remote:"This email is already exists.",},
      password_mirror: {required:"Please enter password."},
      cpassword: {required:"Please enter confirm password.", equalTo:"Password and confirm password must be same."},
      sporttype: {required:"Please select sport type."},
      type: {required:"Please select user's type."},
      telephone: {required:"Please enter telephone number.."},
      country: {required:"Please enter country."},
      statistiklink:{url:"Please enter valid url."},
      cv:{extension:"Please select valid file."},
      position:{required:"Please select position."},
      tier:{required:"Please select tier."},
       
    },
    errorPlacement: function(error, element) {
        if(element.attr("name") == 'type'){
            element.parent().parent().after(error);
        }
        else if(element.attr("name") == 'sporttype'){
            element.parent().parent().after(error); 
        }
        else if(element.attr("name") == 'position'){
            element.parent().parent().after(error); 
        }
        else if(element.attr("name") == 'tier'){
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
        jQuery(".cvupload").hide();
        jQuery(".yourself").hide();
        

         jQuery(".positiondiv").show();
         jQuery(".tierdiv").show();
         jQuery(".statistiklinklbl").text('webpage');
         jQuery("#nostst").parent().hide();

    } 
    else if(jQuery(this).val()=='2'){

    }
    else{
        jQuery(".namefield").show();
        jQuery(".clubfield").hide();

            jQuery(".positiondiv").hide();
            jQuery(".tierdiv").hide();
            jQuery(".statistiklinklbl").text('Statistics Link');
            jQuery("#nostst").parent().show();
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





