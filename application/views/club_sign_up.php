<!DOCTYPE html>
<html lang="en">
<head>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?php echo base_url().'/assets/' ?>/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="<?php echo base_url().'/assets/' ?>/css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <link href="<?php echo base_url().'/assets/' ?>/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url().'/assets/' ?>/css/signup-style.css" rel="stylesheet" />
    <link href="<?php echo base_url().'/assets/' ?>/css/themify-icons.css" rel="stylesheet"> 
 
 <!--  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script> -->
 <script src="<?php echo base_url().'assets' ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/bootstrap-3.3.5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="<?php echo base_url().'assets' ?>/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets' ?>/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
    
<script type="text/javascript">
$(function() {
  $("#signup").validate({
    // Specify validation rules
    rules: {
      club_name: {required:true},
      stadium_name: {required:true},
      email: {
        required: true,
        email: true
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
      country: {required:true},
      photo: {required:true,extension: "jpg|jpeg|png|gif" },
      senior: {required:true},
      youth: {required:true},
      independent_academy: {required:true},
      address: {required:true},
      contruction_date: {required:true},
      capacity: {required:true},
      achivement: {required:true},
      website: {required:true, url:true},
      foundation_date: {required:true},
      club_category: {required:true},
      club_sponsor: {required:true},
      foundation_date2: {required:true},
      tier: {required:true},
      club_type: {required:true} 

    },
    // Specify validation error messages
    messages: {
      club_name: {required:"Please enter club name."},
      stadium_name: {required:"Please enter stadium name."},
      email: {required:"Please enter email.", email:"Please enter valid email."},
      password: {required:"Please enter password.",minlength: "Your password must be at least 5 characters long"},
      confirm_password: {required:"Please enter confirm password.",equalTo:"Password and confirm password must be same.",minlength: "Your password must be at least 5 characters long"},
      country: {required:"Please enter country."},
      photo: {required:"Please select club photo.",extension:"Please select valid extension."},
      senior: {required:"Please enter senior."},
      youth: {required:"Please enter youth."},
      independent_academy: {required:"Please enter independent academy."},
      address: {required:"Please enter address."},
      contruction_date: {required:"Please enter date of contruction."},
      capacity: {required:"Please enter address."},
      achivement: {required:"Please enter achivement."},
      website: {required:"Please enter website.",url:"Please enter valid website url."},
      foundation_date: {required:"Please enter date of Foundation."},
      address: {required:"Please enter address."},
      club_category: {required:"Please enter club category."},
      club_sponsor: {required:"Please enter club sponsors."},
      foundation_date2: {required:"Please enter date of foundation."},
      tier: {required:"Please enter tier."},
      club_type: {required:"Please enter club type."},
    },
    errorPlacement: function(error, element) {
        if(element.attr("name") == 'photo'){
            error.insertAfter('.photo');
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
    <div class="image-container set-full-height" style="background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));">
       
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form id="signup" action="<?php echo base_url('Club_controller/sign_up'); ?>" method="post" enctype="multipart/form-data">
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
                                        <!-- <li>
                                            <a href="#address" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-map"></i>
                                                </div>
                                                CAREER
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#availability" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-map"></i>
                                                </div>
                                                Status
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <h5 class="info-text"> Please tell us more about yourself.</h5>
                                        <div class="row">
                                            
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Club Name <small>(required)</small></label>
                                                    <input type="text" name="club_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Stadium Name <small>(required)</small></label>
                                                    <input name="stadium_name" type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 file-text">
                                                <div class="form-group">
                                                <label>Your Photo </label>
                                                <div class="file-upload-wrapper " data-text="Select your file!">
                                                    <input name="photo" type="file" class="file-upload-field" value="">
                                                  </div>        
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password <small>(required)</small></label>
                                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Confirm Password <small>(required)</small></label>
                                                    <input name="confirm_password" type="password" class="form-control" placeholder=" Password ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h5 class="info-text"> Club Details </h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                               <label>Contry</label>
                                               <select name="country" class="form-control">
                                                  <option value="AF">america</option>
                                                  <option value="SQ">caneda</option>
                                                  <option value="AR">australia</option>
                                                  <option value="HY">england</option>
                                               </select>
                                           </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Senior</label>
                                                    <input type="text" name="senior" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Youth</label>
                                                    <input type="text" name="youth" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Independent Academy</label>
                                                    <input type="text" name="independent_academy" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Address Of The</label>
                                                    <input type="text" name="address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Date Of Construction</label>
                                                    <input type="date" name="contruction_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Capacity (Seats)</label>
                                                    <input type="number" name="capacity" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Achievements</label>
                                                    <input type="number" name="achivement" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="url" name="website" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Date Of Foundation</label>
                                                    <input type="date" name="foundation_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Club Category</label>
                                                    <input type="number" name="club_category" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Club Sponsors</label>
                                                    <input type="text" name="club_sponsor" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Date of foundation</label>
                                                    <input type="date" name="foundation_date2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tier</label>
                                                    <input type="number" name="tier" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Club Type</label>
                                                    <input type="text" name="club_type" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"> CAREER INFO </h5>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Preferred Side</label>
                                                    <select class="form-control">
                                                      <option>right </option>
                                                      <option>left</option>
                                                      <option>both</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Position(Primary)</label>
                                                    <select class="form-control">
                                                      <option>goalkeeper </option>
                                                      <option>leftback</option>
                                                      <option>rightback</option>
                                                      <option>centermidfield1
                                                      <option>centermidfield2</option>
                                                      <option>leftwing</option>
                                                      <option>rightwing</option>
                                                      <option>centerforward</option>
                                                      <option>striker</option>
                                                      <option>centerattack</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Position(Alternative)</label>
                                                    <select class="form-control">
                                                      <option>goalkeeper </option>
                                                      <option>leftback</option>
                                                      <option>rightback</option>
                                                      <option>centermidfield1
                                                      <option>centermidfield2</option>
                                                      <option>leftwing</option>
                                                      <option>rightwing</option>
                                                      <option>centerforward</option>
                                                      <option>striker</option>
                                                      <option>centerattack</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>agent name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>desired salary</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>jersey number</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Youth academy</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>statistics link</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>number of offer accepted</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Injuries</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="availability">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"> CAREER INFO </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Availability</label>
                                                    <select class="form-control">
                                                      <option>Availability</option>
                                                     <option>Available </option>
                                                     <option>happy with contract </option>
                                                     <option>unhappy with contract</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>unhappy with contract</label>
                                                    <select class="form-control">
                                                      <option>Availability</option>
                                                         <option>unhappy with coach</option>
                                                         <option>unhappy with team mates</option>
                                                         <option>unhappy with club</option>
                                                         <option>unhappy with living</option>
                                                         <option>other</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>other</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Reference ID</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                    </div> -->
                                </div>
                                 
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish_btn' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </div>

 

    <!--   Core JS Files   -->
   
    <script>
$("form").on("change", ".file-upload-field", function(){ 
$(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, '') );
});
</script>

</html>
