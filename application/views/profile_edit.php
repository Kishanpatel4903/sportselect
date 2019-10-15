

 <?php //echo "<pre>"; print_r($data); echo "</pre>";
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
  
} ?>
      <section class="profileeditpage">
         <div class="container-fluid">
            <div class="row">
               <?php  if(isset($mess)){ print_r($mess); } ?>
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
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="pills-contact" aria-selected="false">Career</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="pills-contact" aria-selected="false">Status</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="profileeditbox">
                           <form class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                              <input type="hidden" name="tab" value="tab1">
                              <h3 class="mb-5">About</h3>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Your Photo </label>
                                    <img height="30px" width="60px" src="<?= site_url().'uploads/player/user_profile/'.$data->profile_img ?>">
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" name="profile_img" class="custom-file-input" id="validatedCustomFile" value="">
                                       <input type="hidden" name="oldimg" value="<?= $data->profile_img ?>">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <!-- <div class="file-upload-wrapper custom-file" data-text="Select your file!">
                                     <input name="file-upload-field" type="file" class="file-upload-field custom-file-input" value="">
                                  </div>  -->
                               </div>
                               <div class="col-md-6 mb-3">
                                 <label for="validationCustom01">First name</label>
                                 <input type="text" name="fname" class="form-control" id="validationCustom01" value="<?= $data->first_name ?>"  required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom02">Last name</label>
                                 <input type="text" name="lname" class="form-control" id="validationCustom02" value="<?= $data->last_name ?>"   required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom02">Your email</label>
                                 <input type="email" name="email" class="form-control" id="validationCustom02" value="<?= $data->email ?>" readonly required>
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
                        <form class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                           <input type="hidden" name="tab" value="tab2">
                           <h3 class="mb-4">Personal Details</h3>
                           <div class="form-row">

                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom01">Height</label>
                                 <input type="number" name="height" class="form-control" id="validationCustom01" value="<?= $data->height ?>" required >
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom02">Weight</label>
                                 <input type="number" name="weight" class="form-control" id="validationCustom02" value="<?= $data->weight ?>"  required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom02">Date of birth</label>
                                 <input type="date" name="age" class="form-control" id="validationCustom02" value="<?= $data->date ?>"  required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>


                              <div class="col-md-4 mb-3">
                                 <div class="form-group">
                                    <label for="validationCustom02">Living</label>
                                    <select name="service_location" class="custom-select" required>
                                       <option value="separate" <?php if($data->service_location == 'separate'){ echo "selected"; } ?>>Separate</option>
                                       <option value="share" <?php if($data->service_location == 'share'){ echo "selected"; } ?>>Share</option>
                                       <option value="none" <?php if($data->service_location == 'none'){ echo "selected"; } ?>>None</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                 </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom01">languages</label>
                                 <select class="custom-select" name="user_language" required>
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
                                 _SpokenLanguage
                                 
                                 <label for="validationCustom01">Spoken languages</label>
                                 <select class="custom-select" required>
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
                                 <label for="validationCustom02">Family status</label>
                                 <select name="family_status" class="custom-select" required>
                                    <option <?php if($data->family_status == 'single'){ echo "selected"; } ?>>single </option>
                                    <option <?php if($data->family_status == 'married'){ echo "selected"; } ?>>married</option>
                                    <option <?php if($data->family_status == 'travelwithpartner'){ echo "selected"; } ?>>travel with partner</option>
                                 </select>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom02">Outfitter</label>
                                 <input type="text" name="outfitter" class="form-control" id="validationCustom02" value="<?= $data->outfitter ?>"   required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label for="validationCustom02">Shoe Size</label>
                                 <input type="text" name="shoesize" class="form-control" id="validationCustom02" value="<?= $data->shoesize ?>"  required>
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
                        <form class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                           <input type="hidden" name="tab" value="tab3">
                           <h3 class="mb-4">Career</h3>
                           <div class="form-row">
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Preferred Side</label>
                                 <select name="prefer_side" class="custom-select" required>
                                    <option <?php if($data->prefer_side == 'right'){ echo "selected"; } ?>>right </option>
                                    <option <?php if($data->prefer_side == 'left'){ echo "selected"; } ?>>left</option>
                                    <option <?php if($data->prefer_side == 'both'){ echo "selected"; } ?>>both</option>
                                 </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom01">Position(Primary)</label>
                                 <select class="custom-select" name="first_position" required>
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
                                 <select class="custom-select" name="second_position" required>
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
                                 <!-- <input type="text" name="agentname" class="form-control" id="validationCustom01" value="<?= $data->agentname ?>" required> -->
                                 <select name="agentname" class="form-control">
                                      <option value="">Select Agent</option>
                                      <?php
                                      if(!empty($agents)){
                                          foreach ($agents as $agent) { //echo $data->agentname;
                                             if($agent->_User_ID == $data->agentname){$sel = "SELECTED";}else{$sel = ""; } 

                                              echo '<option value="'.$agent->_User_ID.'" '.$sel.'>'.$agent->_Firstname.' '.$agent->_Lastname.'</option>';
                                          }
                                      }
                                      ?>
                                  </select>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom01">desired salary</label>
                                 <input type="number" name="salary" class="form-control" id="validationCustom01" value="<?= $data->salary ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">jersey number</label>
                                 <input type="number" name="jersey_number" class="form-control" id="validationCustom02" value="<?= $data->jersey_number ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">contract end</label>
                                 <input type="date" class="form-control" name="contrcatend" id="contractend" value="<?= $data->contract_end ?>"   required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Youth academy</label>
                                 <input type="text" name="academy" class="form-control" id="validationCustom02" value="<?= $data->academy ?>"   required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">statistics link</label>
                                 <input type="text" name="statisticslink" class="form-control" id="validationCustom02" value="<?= $data->statisticslink ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom01">number of offer accepted</label>
                                 <input type="text" name="offeraccept" class="form-control" id="validationCustom02" value="<?= $data->offeraccept ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Injuries</label>
                                 <input type="text" name="injuries" class="form-control" id="validationCustom02" value="<?= $data->injuries ?>"  required>
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
                        <form class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                           <input type="hidden" name="tab" value="tab4">
                           <h3 class="mb-4">Status</h3>
                           <div class="form-row">
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Preferred Side</label>
                                 <select class="custom-select" required>
                                    <option value="">Availability</option>
                                    <option value="available" <?php echo $data->first_availability=='available'?'SELECTED':''; ?>>Available </option>
                                    <option value="hapwithcon" <?php echo $data->first_availability=='hapwithcon'?'SELECTED':''; ?>>happy with contract </option>
                                    <option value="unhwithcon" <?php echo $data->first_availability=='unhwithcon'?'SELECTED':''; ?>>unhappy with contract</option>
                                 </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Preferred Side</label>
                                 <select class="custom-select" required>
                                    <option value="">Availability</option>
                                      <option value="unhwithcoach" <?php echo $data->second_availability=='unhwithcoach'?'SELECTED':''; ?>>unhappy with coach</option>
                                      <option value="unhwithteam" <?php echo $data->second_availability=='unhwithteam'?'SELECTED':''; ?>>unhappy with team mates</option>
                                      <option value="unhwithclub" <?php echo $data->second_availability=='unhwithclub'?'SELECTED':''; ?>>unhappy with club</option>
                                      <option value="unhwithliv" <?php echo $data->second_availability=='unhwithliv'?'SELECTED':''; ?>>unhappy with living</option>
                                      <option value="other" <?php echo $data->second_availability=='other'?'SELECTED':''; ?>>other</option>
                                 </select>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom02">Other</label>
                                 <input type="text" name="other" class="form-control" id="validationCustom01" value="<?= $data->other ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div>
                              <!-- <div class="col-md-3 mb-3">
                                    <?php
                                 $arrr = array();  
                                 //print_r($userdata);
                                foreach ($userdata as $user) {
                                      
                                         if($user->_Type == '1'){

                                            $arrr[]= $user->first_name.' '.$user->last_name.' -(Player)';  

                                         }else if($user->_Type == '2'){

                                            $arrr[]= $user->_Firstname.' '.$user->_Lastname.' -(Agent)';  

                                         }else{

                                            $arrr[]= $user->_Club_name.' -(Club)';  
                                         }
                                } ?>
                               <input type="hidden" name="userdata" class="userdata" value='<?php echo json_encode($arrr); ?>'>
                               <input type="hidden" name="referenceid" class="referenceid" value="<?php echo $data->reference; ?>">
                                 <label for="validationCustom02">Reference ID</label>
                                 <input type="text" class="form-control reference" id="refid"  value="<?php echo $refusername; ?>" required>
                                 <div class="valid-feedback">
                                    Looks good!
                                 </div>
                              </div> -->
                           </div>
                           <button class="attributebtn" type="submit">Submit</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<script>
   jQuery( function() {
    var data = jQuery('.userdata').val();
    var availableTags = $.parseJSON(data);
    jQuery( ".reference" ).autocomplete({
      source: availableTags,
      select: function (a, b) {
        var res = b.item.label.split(" ");
        $.ajax({
          url: 'inquiryajax.php',
          url:'<?=base_url()?>/myprofile/username_ajax',
          type: "POST",
          cache:false,
          data: {
            // 'name':res[0],
            // 'signup':1
            'reference':b.item.label,
        },
        success: function (data) { //(data);
            jQuery('.referenceid').val(data);
        }
    });
    }
});
} );
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

        $(function(){
           var hash = window.location.hash;
           hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show'); 
           $('ul.nav.nav-pills a').click(function (e) {
              $(this).tab('show');
              var scrollmem = $('body').scrollTop();
              window.location.hash = this.hash;
           });
        });
        $("form").on("change", ".custom-file-input", function(){ 
         $(this).parent(".custom-file").attr("data-text", $(this).val().replace(/.*(\/|\\)/, '') );
         var changeimagetext = $(this).parent(".custom-file").attr("data-text");
         $('.custom-file-label').html(changeimagetext);
      });
   </script>
</body>
</html>