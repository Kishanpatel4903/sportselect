<!DOCTYPE html>
<html lang="en">

<head>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?php echo base_url(); ?>/assets/agent_css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/agent_css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/agent_css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/agent_css/signup-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/agent_css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/agent_css/style-agent.css" rel="stylesheet">
</head>

<body>
    <div class="image-container set-full-height" style="background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));">


        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card wizard-form-agent" data-color="orange" id="wizardProfile">
                            <form id="agent_form" action="<?php echo base_url('Agent_controller/sign_up') ?>" method="post" enctype="multipart/form-data">
                                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                                <div class="wizard-header text-center">
                                    <h3 class="wizard-title">Create your profile</h3>
                                </div>

                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="10" style="width: 21%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#about" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#account" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                Personal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#address" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-map"></i>
                                                </div>
                                                Bank Details
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <h5 class="info-text"> ABOUT YOURSELF </h5>
                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name <small>(required)</small></label>
                                                    <input type="text" name="firstname" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name <small>(required)</small></label>
                                                    <input name="lastname" type="text" class="form-control" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="text" class="form-control" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 file-text">
                                                <div class="form-group">
                                                    <label>Your Photo </label>

                                                    <div class="file-upload-wrapper photo" data-text="Select your file!">
                                                        <input name="photo" type="file" class="file-upload-field" value="" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password <small>(required)</small></label>
                                                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Confirm Password <small>(required)</small></label>
                                                    <input name="confirm_password" type="password" class="form-control" placeholder=" Password " required="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h5 class="info-text"> PERSONAL DETAILS </h5>
                                        <div class="row">
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="validationCustom01">Height</label>
                                                    <input type="number" class="form-control" id="validationCustom01" required="" min="50" max="80">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="validationCustom02">Weight</label>
                                                    <input type="number" class="form-control" id="validationCustom02" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="validationCustom02">Instead of age</label>
                                                    <input type="date" class="form-control" id="validationCustom02" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="validationCustom02">Injuries Age</label>
                                                    <input type="date" class="form-control" id="validationCustom02" required="">
                                                </div>
                                            </div> -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="age">Age</label>
                                                    <input type="date" name="age" class="form-control" id="age" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="total_deal">Total Deals </label>
                                                    <input type="number" name="total_deal" class="form-control" id="total_deal" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Education</label>
                                                    <input name="education" type="text" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Experience</label>
                                                    <input name="experience" type="text" class="form-control" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Spoken languages</label>
                                                    <input type="text" name="spoken_language" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control valid" name="status" aria-invalid="false" required="">
                                                        <option value="Private individual">Private individual</option>
                                                        <option value="Agency">Agency </option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Agency</label>
                                                    <input type="text" name="agency" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Agency fee</label>
                                                    <input type="text" name="agency_fee" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Name of private individual</label>
                                                    <input type="text" name="name_of_private" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group file-text">
                                                    <label>Agency Logo </label>
                                                    <div class="file-upload-wrapper alogo" data-text="Select your file!">
                                                        <input name="agency_logo" type="file" class="file-upload-field" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group file-text">
                                                    <label>Upload Certificate </label>
                                                    <div class="file-upload-wrapper certificate" data-text="Select your file!">
                                                        <input name="certificate" type="file" class="file-upload-field" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Info</label>
                                                    <textarea type="text" name="info" class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"> BANK DETAILS </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" name="bank_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>IBAN</label>
                                                    <input type="text" name="iban" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Registration No.</label>
                                                    <input type="text" name="register_no" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bank Address</label>
                                                    <textarea type="text" name="bank_add" class="form-control"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!--  big container -->
    </div>

</body>
<!-- <script src="https://use.fontawesome.com/8396afb745.js" type="text/javascript"></script> -->

    <script src="<?php echo base_url().'assets' ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/bootstrap-3.3.5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    
    <script src="<?php echo base_url().'assets' ?>/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>adminassets/js/jquery.validate.min.js" type="text/javascript"></script>
 

<!--  More information about jquery.validate here: https://jqueryvalidation.org/     -->

<script src="<?php echo base_url(); ?>adminassets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
  $("#agent_form").validate({
    // Specify validation rules
    rules: {
      firstname: {required:true},
      lastname: {required:true},
      email: {
        required: true,
        email: true,
        remote: {
                  url: "<?php echo base_url(); ?>Agent_controller/email_check",
                  type: "post"
              }
      },
      password: {
        required: true,
        minlength: 5
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      },
      age: {required:true},
      photo: {required:true,extension: "jpg|jpeg|png|gif" },
      total_deal: {required:true},
      education: {required:true},
      experience: {required:true},
      spoken_language: {required:true},
      status: {required:true},
      agency: {required:true},
      agency_fee: {required:true},
      name_of_private: {required:true },
      agency_logo: {required:true,extension: "jpg|jpeg|png|gif"},
      certificate: {required:true,extension: "jpg|jpeg|png|gif|pdf"},
      bank_name: {required:true},
      iban: {required:true},
      register_no: {required:true},
      bank_add: {required:true},
    },
    // Specify validation error messages
    messages: {
      firstname: {required:"Please enter first name."},
      lastname: {required:"Please enter las name."},
      email: {required:"Please enter email.", email:"Please enter valid email.",remote:"This email is already exists."},
      password: {required:"Please enter password.",minlength: "Your password must be at least 5 characters long"},
      confirm_password: {required:"Please enter confirm password.",equalTo:"Password and confirm password must be same.",minlength: "Your password must be at least 5 characters long"},
      age: {required:"Please select age."},
      photo: {required:"Please select your photo.",extension:"Please select valid extension."},
      total_deal: {required:"Please enter total deal."},
      education: {required:"Please enter education."},
      experience: {required:"Please enter experience."},
      spoken_language: {required:"Please enter spoken language."},
      status: {required:"Please select status."},
      agency: {required:"Please enter agency."},
      agency_fee: {required:"Please enter agency fee."},
      name_of_private: {required:"Please enter name of private individual."},
      agency_logo: {required:"Please select agency logo.",extension:"Please select valid extension."},
      certificate: {required:"Please enter club category."},
      bank_name: {required:"Please enter bank name."},
      iban: {required:"Please enter iban."},
      certificate: {required:"Please enter register number."},
      bank_add: {required:"Please enter bank address."},
       
    },
      errorPlacement: function(error, element) {
        if(element.attr("name") == 'photo'){
            error.insertAfter('.photo');
        }else if (element.attr("name") == 'agency_logo'){
          error.insertAfter('.alogo');
        }
        else if (element.attr("name") == 'certificate'){
          error.insertAfter('.certificate');
        }
        else{
            error.insertAfter(element);
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script> 
<script>
    $("form").on("change", ".file-upload-field", function() {
        $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
    });
</script>

</html>