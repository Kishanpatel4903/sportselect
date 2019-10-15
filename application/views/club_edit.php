<script type="text/javascript">
$(function() {
  $("#form1").validate({
    // Specify validation rules
    rules: {
      club_name: {required:true},
      stadium_name: {required:true}, 
      photo: {extension: "jpg|jpeg|png|gif" },
    },
    // Specify validation error messages
    messages: {
      club_name: {required:"Please enter club name."},
      stadium_name: {required:"Please enter stadium name."},
      photo: {required:"Please select club photo.",extension:"Please select valid extension."},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  $("#form_detail").validate({
    // Specify validation rules
    rules: {
      country: { required:true },
      senior: { required:true },
      youth: { required:true },
      independent_academy: { required:true },
      address: { required:true },
      contruction_date: { required:true },
      capacity: { required:true },
      achivement: { required:true },
      website: { required:true, url:true },
      foundation_date: { required:true },
      club_category: { required:true },
      club_sponsor: { required:true },
      foundation_date2: { required:true },
      tier: { required:true },
      club_type: { required:true } 

    },
    // Specify validation error messages
    messages: {
      country: {required:"Please enter country."},
      senior: {required:"Please enter senior."},
      youth: {required:"Please enter youth."},
      independent_academy: {required:"Please enter independent academy."},
      address: {required:"Please enter address."},
      contruction_date: {required:"Please enter date of contruction."},
      capacity: {required:"Please enter address."},
      achivement: {required:"Please enter achivement."},
      website: {required:"Please enter website.",url:"Please enter valid website url."},
      foundation_date: {required:"Please enter date of Foundation."},
      club_category: {required:"Please enter club category."},
      club_sponsor: {required:"Please enter club sponsors."},
      foundation_date2: {required:"Please enter date of foundation."},
      tier: {required:"Please enter tier."},
      club_type: {required:"Please enter club type."},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        form.submit();
    }
  });
});
</script>
<section class="profileeditpage">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2" style="background: #fff;">
                  <div class="sidebar">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="pills-home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="pills-profile" aria-selected="false">Club Details</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="pills-contact" aria-selected="false">Career</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="pills-contact" aria-selected="false">Status</a>
                        </li> -->
                     </ul>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="profileeditbox">
                           <form id="form1" action="<?php echo base_url('edit-profile'); ?>" method="post" enctype="multipart/form-data"  class="needs-validation edit_form" novalidate>
                              <h3 class="mb-5">About</h3>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Club Photo </label>
                                    <div>
                                       <?php
                                       if($user->_Photo != ''){

                                         $image_path = base_url('uploads/club/user_profile/' . $user->_Photo);
                                         $thumb_path = preg_replace('~\.(?!.*\.)~', '-141x130.', $image_path);

                                         ini_set('allow_url_fopen', true);

                                         if (getimagesize($thumb_path)) {
                                             $image_path = $thumb_path;
                                        }

                                       }else{
                                          $image_path = base_url().'assets/images/liverpool-football-club.png';
                                       } 
                                      ?>
                                       <img src="<?php echo $image_path; ?>" height="auto" width="90px" />
                                    </div>
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" name="photo" class="custom-file-input" id="validatedCustomFile" value="">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <!-- <div class="file-upload-wrapper custom-file" data-text="Select your file!">
                                     <input name="file-upload-field" type="file" class="file-upload-field custom-file-input" value="">
                                   </div>  -->
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Club name</label>
                                    <input type="text" class="form-control" name="club_name" id="validationCustom01" value="<?php echo $user->_Club_name; ?>"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Stadium name</label>
                                    <input type="text" class="form-control" name="stadium_name" id="validationCustom02" value="<?php echo $user->_Stadium_name; ?>"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Your email</label>
                                    <input type="email" class="form-control" name="email" id="validationCustom02" disabled value="<?php echo $user->_Email; ?>"   required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                              <button class="attributebtn" name="first_submit" type="submit">Submit</button>
                           </form>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="profileeditbox">
                              <form id="form_detail" action="<?php echo base_url('edit-profile'); ?>" method="post" enctype="multipart/form-data" class="needs-validation edit_form" novalidate>
                                 <h3 class="mb-4">Club Details</h3>
                                 <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Contry</label>
                                       <select name="country" class="custom-select" required>
                                          <option value="AF">america</option>
                                                  <option value="SQ" <?php if($user->_Country == 'SQ'){ echo "selected"; } ?>>caneda</option>
                                                  <option value="AR" <?php if($user->_Country == 'AR'){ echo "selected"; } ?>>australia</option>
                                                  <option value="HY" <?php if($user->_Country == 'HY'){ echo "selected"; } ?>>england</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Senior</label>
                                       <input type="text" name="senior" class="form-control" id="validationCustom01" value="<?php echo $user->_Senior; ?>"   required min="50" max="80">
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Youth</label>
                                       <input type="text" name="youth" class="form-control" id="validationCustom02" value="<?php echo $user->_Youth; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Independent Academy</label>
                                       <input type="text" name="independent_academy" class="form-control" id="validationCustom02" value="<?php echo $user->_Independent_academy; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-4 mb-3">
                                       <div class="form-group">
                                          <label for="validationCustom02">Address Of The</label>
                                          <input type="text" name="address" class="form-control" id="validationCustom02" value="<?php echo $user->_Address; ?>"   required>
                                          <div class="valid-feedback">
                                             Looks good!
                                          </div>
                                          
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Date Of Construction</label>
                                       <input type="date" name="contruction_date" class="form-control" id="validationCustom02" value="<?php echo $user->_Contruction_date; ?>"  required>
                                          <div class="valid-feedback">
                                             Looks good!
                                          </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Capacity (Seats)</label>
                                       <input type="text" name="capacity" class="form-control" id="validationCustom02" value="<?php echo $user->_Capacity; ?>"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Achievements</label>
                                       <input type="text" name="achivement" class="form-control" id="validationCustom02" value="<?php echo $user->_Achievements; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Website</label>
                                       <input type="url" name="website" class="form-control" id="validationCustom02" value="<?php echo $user->_Website; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Date Of Foundation</label>
                                       <input type="date" name="foundation_date" class="form-control" id="validationCustom02" value="<?php echo $user->_Foundation_date; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Club Category</label>
                                       <input type="text" name="club_category" class="form-control" id="validationCustom02" value="<?php echo $user->_Club_category; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Club Sponsors</label>
                                       <input type="text" name="club_sponsor" class="form-control" id="validationCustom02" value="<?php echo $user->_Club_sponsors; ?>"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Date of foundation</label>
                                       <input type="date" name="foundation_date2" class="form-control" id="validationCustom02" value="<?php echo $user->_Foundation_date2; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Tier</label>
                                       <input type="text" name="tier" class="form-control" id="validationCustom02" value="<?php echo $user->_Tier; ?>"  required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom02">Club Type</label>
                                       <input type="text" name="club_type" class="form-control" id="validationCustom02"  value="<?php echo $user->_Club_type; ?>" required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>

                                    
                                 </div>
                                 <input type="hidden" name="form1" value="yess">
                                 <button name="second_submit" class="attributebtn" type="submit">Submit</button>
                              </form>
                           </div>
                     </div>
                     <!-- <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="profileeditbox">
                              <form class="needs-validation" novalidate>
                                 <h3 class="mb-4">Career</h3>
                                 <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Preferred Side</label>
                                       <select class="custom-select" required>
                                          <option>right </option>
                                          <option>left</option>
                                          <option>both</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom01">Position(Primary)</label>
                                       <select class="custom-select" required>
                                          <option>goalkeeper </option>
                                          <option>leftback</option>
                                          <option>rightback</option>
                                          <option>centermidfield1</option>
                                          <option>centermidfield2</option>
                                          <option>leftwing</option>
                                          <option>rightwing</option>
                                          <option>centerforward</option>
                                          <option>striker</option>
                                          <option>centerattack</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom01">Position(Alternative)</label>
                                       <select class="custom-select" required>
                                          <option>goalkeeper </option>
                                          <option>leftback</option>
                                          <option>rightback</option>
                                          <option>centermidfield1</option>
                                          <option>centermidfield2</option>
                                          <option>leftwing</option>
                                          <option>rightwing</option>
                                          <option>centerforward</option>
                                          <option>striker</option>
                                          <option>centerattack</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom01">agent name</label>
                                       <input type="number" class="form-control" id="validationCustom01"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom01">desired salary</label>
                                       <input type="number" class="form-control" id="validationCustom01"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">jersey number</label>
                                       <input type="number" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">contract end</label>
                                       <input type="date" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Youth academy</label>
                                       <input type="text" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">statistics link</label>
                                       <input type="text" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom01">number of offer accepted</label>
                                       <input type="text" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Injuries</label>
                                       <input type="text" class="form-control" id="validationCustom02"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <button class="attributebtn" type="submit">Submit</button>
                              </form>
                           </div>
                     </div>
                     <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="profileeditbox">
                              <form class="needs-validation" novalidate>
                                 <h3 class="mb-4">Status</h3>
                                 <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Preferred Side</label>
                                       <select class="custom-select" required>
                                          <option>Availability</option>
                                          <option>Available </option>
                                          <option>happy with contract </option>
                                          <option>unhappy with contract</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Preferred Side</label>
                                       <select class="custom-select" required>
                                          <option>Availability</option>
                                          <option>unhappy with coach</option>
                                          <option>unhappy with team mates</option>
                                          <option>unhappy with club</option>
                                          <option>unhappy with living</option>
                                          <option>other</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Other</label>
                                       <input type="text" class="form-control" id="validationCustom01"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                       <label for="validationCustom02">Reference ID</label>
                                       <input type="text" class="form-control" id="validationCustom01"   required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                 </div>
                                 <button class="attributebtn" type="submit">Submit</button>
                              </form>
                           </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>