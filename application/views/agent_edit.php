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
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="pills-profile" aria-selected="false">Personal Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="pills-contact" aria-selected="false">Bank Details</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="profileeditbox">
                                <form action="<?php echo base_url().'Agent_controller/edit_profile' ?>" class="needs-validation" novalidate>
                                  <input type="hidden" name="hidden" value="yes">
                                    <h3 class="mb-5">About</h3>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Your Photo </label>
                                            <div class="custom-file">
                                              <?php
                                               ?>
                                               <img height="auto" width="80px" src="<?php echo base_url().'uploads/agent/user_profile/'.$user->_Photo ?>">
                                                <input type="file" name="photo" class="custom-file-input" id="validatedCustomFile">
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" name="firstname" class="form-control" id="fnm" value="<?php echo $user->_Firstname; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" name="lastname" class="form-control" id="validationCustom02" value="<?php echo $user->_Lastname; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Your email</label>
                                            <input type="email" name="email"  class="form-control" id="validationCustom02" value="<?php echo $user->_Email; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <button class="attributebtn" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="profileeditbox">
                                <form action="" class="needs-validation" novalidate>
                                  <input type="hidden" name="hidden" value="yes">
                                  <input type="hidden" name="form2" value="yes">
                                    <h3 class="mb-4">Personal Details</h3>
                                    <div class="form-row">

                                        <!-- <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Height</label>
                                            <input type="number" class="form-control" id="validationCustom01" required="" min="50" max="80">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Weight</label>
                                            <input type="number" class="form-control" id="validationCustom02" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Instead of age</label>
                                            <input type="date" class="form-control" id="validationCustom02" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Injuries Age</label>
                                            <input type="date" class="form-control" id="validationCustom02" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div> -->
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Age</label>
                                            <input type="date" name="date" class="form-control" id="validationCustom02" value="<?php date('d-m-Y', strtotime($user->_Age)) ?>" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Total Deals </label>
                                            <input type="number" name="totaldeals"  class="form-control" id="validationCustom01" required="" value="<?php echo $user->_Totaldeal; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Education</label>
                                            <input type="text" name="education" class="form-control" id="validationCustom01" value="<?php echo $user->_Education; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Experience</label>
                                            <input type="text" name="experience" class="form-control" id="validationCustom02" value="<?php echo $user->_Experience; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Agent Type</label>
                                            <select class="custom-select" required>
                                             <option value="Leading Agent">Leading Agent </option>
                                             <option value="Team Member">Team Member </option>
                                          </select>
                                        </div>



                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Spoken languages</label>
                                        <select name="spokenlanguage" class="custom-select" required>
                                          <option value="AF">Afrikanns</option>
                                          <option value="SQ">Albanian</option>
                                          <option value="AR">Arabic</option>
                                          <option value="HY">Armenian</option>
                                          <option value="EU">Basque</option>
                                          <option value="BN">Bengali</option>
                                          <option value="BG">Bulgarian</option>
                                          <option value="CA">Catalan</option>
                                          <option value="KM">Cambodian</option>
                                          <option value="ZH">Chinese (Mandarin)</option>
                                          <option value="HR">Croation</option>
                                          <option value="CS">Czech</option>
                                          <option value="DA">Danish</option>
                                          <option value="NL">Dutch</option>
                                          <option value="EN">English</option>
                                          <option value="ET">Estonian</option>
                                          <option value="FJ">Fiji</option>
                                          <option value="FI">Finnish</option>
                                          <option value="FR">French</option>
                                          <option value="KA">Georgian</option>
                                          <option value="DE">German</option>
                                          <option value="EL">Greek</option>
                                          <option value="GU">Gujarati</option>
                                          <option value="HE">Hebrew</option>
                                          <option value="HI">Hindi</option>
                                          <option value="HU">Hungarian</option>
                                          <option value="IS">Icelandic</option>
                                          <option value="ID">Indonesian</option>
                                          <option value="GA">Irish</option>
                                          <option value="IT">Italian</option>
                                          <option value="JA">Japanese</option>
                                          <option value="JW">Javanese</option>
                                          <option value="KO">Korean</option>
                                          <option value="LA">Latin</option>
                                          <option value="LV">Latvian</option>
                                          <option value="LT">Lithuanian</option>
                                          <option value="MK">Macedonian</option>
                                          <option value="MS">Malay</option>
                                          <option value="ML">Malayalam</option>
                                          <option value="MT">Maltese</option>
                                          <option value="MI">Maori</option>
                                          <option value="MR">Marathi</option>
                                          <option value="MN">Mongolian</option>
                                          <option value="NE">Nepali</option>
                                          <option value="NO">Norwegian</option>
                                          <option value="FA">Persian</option>
                                          <option value="PL">Polish</option>
                                          <option value="PT">Portuguese</option>
                                          <option value="PA">Punjabi</option>
                                          <option value="QU">Quechua</option>
                                          <option value="RO">Romanian</option>
                                          <option value="RU">Russian</option>
                                          <option value="SM">Samoan</option>
                                          <option value="SR">Serbian</option>
                                          <option value="SK">Slovak</option>
                                          <option value="SL">Slovenian</option>
                                          <option value="ES">Spanish</option>
                                          <option value="SW">Swahili</option>
                                          <option value="SV">Swedish </option>
                                          <option value="TA">Tamil</option>
                                          <option value="TT">Tatar</option>
                                          <option value="TE">Telugu</option>
                                          <option value="TH">Thai</option>
                                          <option value="BO">Tibetan</option>
                                          <option value="TO">Tonga</option>
                                          <option value="TR">Turkish</option>
                                          <option value="UK">Ukranian</option>
                                          <option value="UR">Urdu</option>
                                          <option value="UZ">Uzbek</option>
                                          <option value="VI">Vietnamese</option>
                                          <option value="CY">Welsh</option>
                                          <option value="XH">Xhosa</option>
                                       </select>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Status</label>
                                            <select name="status" class="custom-select" required>
                                          <option value="Private individual" <?php if($user->_Status == 'Private individual'){echo "SELECTED"; } ?>>Private individual </option>
                                          <option value="Agency" <?php if($user->_Status == 'Agency'){echo "SELECTED"; } ?>>Agency </option>
                                       </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Agency Name</label>
                                            <input type="text" name="agencyname" class="form-control" id="validationCustom02" value="<?php echo $user->_Agency ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Agency fee</label>
                                            <input type="text" name="agencyfee" class="form-control" id="validationCustom02" value="<?php echo $user->_Agency_fee ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Name of private individual</label>
                                            <input type="text" name="nameofprivate" class="form-control" id="validationCustom02" value="<?php echo $user->_Nameof_private; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Upload Agency Logo  </label>
                                            <div class="custom-file">
                                              <img height="auto" width="80px" src="<?php echo base_url().'uploads/agent/agency_logo/'.$user->_Agency_logo; ?>">
                                                <input type="hidden" name="hiddenagencylogo" value="<?php echo $user->_Agency_logo; ?>">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Upload Certificate  </label>
                                            <div class="custom-file">
                                              <img height="auto" width="80px" src="<?php echo base_url().'uploads/agent/certificate/'.$user->_Certificate; ?>">
                                                <input type="hidden" name="hiddencertificate" value="<?php echo $user->_Certificate; ?>">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">Info</label>
                                            <textarea type="text" name="info" class="form-control" id="validationCustom02" rows="4" required><?php echo $user->_Info; ?></textarea>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <button class="attributebtn" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="profileeditbox">
                                <form class="needs-validation" novalidate>
                                    <h3 class="mb-4">Bank Details</h3>
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Bank Name</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">IBAN</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Registration No.</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Bank Address</label>
                                            <textarea type="text" class="form-control" id="validationCustom02" required></textarea>
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
                                    <h3 class="mb-4">Reference</h3>
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
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom02">Reference ID</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <button class="attributebtn" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>