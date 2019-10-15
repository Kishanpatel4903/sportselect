 

 <?php //echo "<pre>"; print_r($data); echo "</pre>";
if($this->session->flashdata('user_msg') !=''){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
   
} ?>

 <div class="container-fluid">
  <div class="profiledetailbox">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <div class="element-box">
            <!-- Tab Start -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="persion-tab" role="tabpanel" aria-labelledby="home-tab">
                <form id="formValidate" novalidate="true">
                  <div class="pageheading">
                    <h5>Permission Settings</h5>
                    <a class="btn btn-primary btn-sm float-right" href=""><span>Add to New Permission</span></a>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Select User</label>
                        <select class="form-control">
                          <option value="Player">Player</option>
                          <option value="agent">agent</option>
                          <option value="club">club</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Select User Type </label>
                        <select class="form-control">
                          <option value="Player">All</option>
                          <option value="agent">Manually</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for=""> User Id</label>
                    <input class="form-control" data-error="Your email address is invalid" placeholder="Enter User Id" required="required" type="email">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                  </div>
                  <div class="form-group">
                    <label>Select Permission</label>
                    <label class="clickherepermission" data-toggle="modal" data-target="#vacanciesmodal"><b>Click here...</b></label>
                    
                  </div>
                  <div class="form-group">
                   
                      <button class="btn btn-primary disabled" type="submit"> Submit</button>
                    
                  </div>
                </form>
                <hr>
                <fieldset class="form-group mt-4 ">
                 
                  <div class="element-wrapper">
                    <h6 class="element-header">User Permissions</h6>
                    <div class="element-box-tp">
                      <div class="table-responsive">
                        <table id="datatables" class="table table-padded table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>User</th>
                              <th>User id</th>
                              <th>Permission fields</th>
                              <th>Can Read</th>
                              <th>Can Edit</th>
                              <th>None</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody> 
                            <tr>
                              <td>
                                Smith
                              </td>
                              <td>1234567</td>
                              <td>
                                <div class="user-with-avatar"><img alt="" src="images/user.png"><span>Date of birth</span></div>
                              </td>
                              <td>
                                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                  <div class="handle"></div>
                                </button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                  <div class="handle"></div>
                                </button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                  <div class="handle"></div>
                                </button>
                              </td>
                              <td class="row-actions">
                                <a href="#"><i class="ti-pencil-alt"></i></a>
                                <a href="#" class="danger"><i class="ti-trash "></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="tab-pane fade" id="about-tab" role="tabpanel" aria-labelledby="profile-tab">
                <form method="post" id="formValidate" enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" novalidate="true">
                    <input type="hidden" name="tab" value="tab1">
                  <div class="element-info mt-3">
                    <div class="element-info-with-icon">
                      <div class="element-info-text">
                        <h5 class="element-inner-header">About Settings</h5>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Enter First Name</label>
                        <input name="fname" class="form-control" data-minlength="Enter First Name" placeholder="Enter First Name" required="required" type="text" value="<?= $data->_Firstname; ?>">
                        <div class="help-block form-text text-muted form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Last Name</label>
                        <input name="lname" class="form-control" data-match-error="Enter Last Name" placeholder="Last Name" required="required" type="text" value="<?= $data->_Lastname; ?>">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Your Email</label>
                        <input class="form-control" data-match-error="Passwords don't match" placeholder="Confirm Password" required="required" type="email" value="<?= $data->_Email; ?>" name="email" readonly>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Your Photo</label>
                        <?php $p = $data->_Photo!=''?base_url().'uploads/player/user_profile/'.$data->_Photo:base_url().'assets/images/nouser.jpg'; ?>
                          <img height="30px" width="60px" src="<?= $p; ?>">
                        <div class="custom-file" data-text="Select your file!">
                          <input type="file" name="profile_img" class="custom-file-input" id="validatedCustomFile" >
                          <input type="hidden" name="oldimg" value="<?= $data->_Photo; ?>">
                          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                        <div class="help-block form-text text-muted form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-buttons-w">
                    <button class="btn btn-primary disabled" type="submit"> Submit</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="persional-tab" role="tabpanel" aria-labelledby="persional-tab">
                <form method="post" class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                <input type="hidden" name="tab" value="tab2">
                  <div class="element-info mt-3">
                    <div class="element-info-with-icon">
                      <div class="element-info-text">
                        <h5 class="element-inner-header">Personal Details</h5>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Height</label>
                        <input class="form-control" name="height" data-minlength="Enter Height" placeholder="Enter Height" required="required" type="number" value="<?= $data->_Heigth ?>">
                        <div class="help-block form-text text-muted form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Weight</label>
                        <input name="weight" class="form-control" data-minlength="Enter Weight" placeholder="Enter Weight" required="required" type="number" value="<?= $data->_Weight ?>"  required>
                        <div class="help-block form-text text-muted form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Living</label>
                        <select class="form-control" name="living" required>
                             <option value="separate" <?php if($data->_Living == 'separate'){ echo "selected"; } ?>>Separate</option>
                             <option value="share" <?php if($data->_Living == 'share'){ echo "selected"; } ?>>Share</option>
                             <option value="none" <?php if($data->_Living == 'none'){ echo "selected"; } ?>>None</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">languages</label>
                        <input class="form-control" name="user_language" value="<?php echo $data->_User_language; ?>"  data-match-error="Enter languages" placeholder="Enter Languages" required="required" type="text">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Spoken languages</label>
                        <select class="form-control" name="spoken_language">
                          <option <?php if($data->_SpokenLanguage == 'Afrikanns'){ echo "selected"; } ?> value="Afrikanns">Afrikanns</option>
                          <option <?php if($data->_SpokenLanguage == 'Albanian'){ echo "selected"; } ?> value="Albanian">Albanian</option>
                          <option <?php if($data->_SpokenLanguage == 'Arabic'){ echo "selected"; } ?> value="Arabic">Arabic</option>
                          <option <?php if($data->_SpokenLanguage == 'Armenian'){ echo "selected"; } ?> value="Armenian">Armenian</option>
                          <option <?php if($data->_SpokenLanguage == 'Basque'){ echo "selected"; } ?> value="Basque">Basque</option>
                          <option <?php if($data->_SpokenLanguage == 'Bengali'){ echo "selected"; } ?> value="Bengali">Bengali</option>
                          <option <?php if($data->_SpokenLanguage == 'Bulgarian'){ echo "selected"; } ?> value="Bulgarian">Bulgarian</option>
                          <option <?php if($data->_SpokenLanguage == 'Catalan'){ echo "selected"; } ?> value="Catalan">Catalan</option>
                          <option <?php if($data->_SpokenLanguage == 'Cambodian'){ echo "selected"; } ?> value="Cambodian">Cambodian</option>
                          <option <?php if($data->_SpokenLanguage == 'Chinese'){ echo "selected"; } ?> value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                          <option <?php if($data->_SpokenLanguage == 'Croation'){ echo "selected"; } ?> value="Croation">Croation</option>
                          <option <?php if($data->_SpokenLanguage == 'Czech'){ echo "selected"; } ?> value="Czech">Czech</option>
                          <option <?php if($data->_SpokenLanguage == 'Danish'){ echo "selected"; } ?> value="Danish">Danish</option>
                          <option <?php if($data->_SpokenLanguage == 'Dutch'){ echo "selected"; } ?> value="Dutch">Dutch</option>
                          <option <?php if($data->_SpokenLanguage == 'English'){ echo "selected"; } ?> value="English">English</option>
                          <option <?php if($data->_SpokenLanguage == 'Estonian'){ echo "selected"; } ?> value="Estonian">Estonian</option>
                          <option <?php if($data->_SpokenLanguage == 'Fiji'){ echo "selected"; } ?> value="Fiji">Fiji</option>
                          <option <?php if($data->_SpokenLanguage == 'Finnish'){ echo "selected"; } ?> value="Finnish">Finnish</option>
                          <option <?php if($data->_SpokenLanguage == 'French'){ echo "selected"; } ?> value="French">French</option>
                          <option <?php if($data->_SpokenLanguage == 'Georgian'){ echo "selected"; } ?> value="Georgian">Georgian</option>
                          <option <?php if($data->_SpokenLanguage == 'German'){ echo "selected"; } ?> value="German">German</option>
                          <option <?php if($data->_SpokenLanguage == 'Greek'){ echo "selected"; } ?> value="Greek">Greek</option>
                          <option <?php if($data->_SpokenLanguage == 'Gujarati'){ echo "selected"; } ?> value="Gujarati">Gujarati</option>
                          <option <?php if($data->_SpokenLanguage == 'Hebrew'){ echo "selected"; } ?> value="Hebrew">Hebrew</option>
                          <option <?php if($data->_SpokenLanguage == 'Hindi'){ echo "selected"; } ?> value="Hindi">Hindi</option>
                          <option <?php if($data->_SpokenLanguage == 'Hungarian'){ echo "selected"; } ?> value="Hungarian">Hungarian</option>
                          <option <?php if($data->_SpokenLanguage == 'Icelandic'){ echo "selected"; } ?> value="Icelandic">Icelandic</option>
                          <option <?php if($data->_SpokenLanguage == 'Indonesian'){ echo "selected"; } ?> value="Indonesian">Indonesian</option>
                          <option <?php if($data->_SpokenLanguage == 'Irish'){ echo "selected"; } ?> value="Irish">Irish</option>
                          <option <?php if($data->_SpokenLanguage == 'Italian'){ echo "selected"; } ?> value="Italian">Italian</option>
                          <option <?php if($data->_SpokenLanguage == 'Japanese'){ echo "selected"; } ?> value="Japanese">Japanese</option>
                          <option <?php if($data->_SpokenLanguage == 'Javanese'){ echo "selected"; } ?> value="Javanese">Javanese</option>
                          <option <?php if($data->_SpokenLanguage == 'Korean'){ echo "selected"; } ?> value="Korean">Korean</option>
                          <option <?php if($data->_SpokenLanguage == 'Latin'){ echo "selected"; } ?> value="Latin">Latin</option>
                          <option <?php if($data->_SpokenLanguage == 'Latvian'){ echo "selected"; } ?> value="Latvian">Latvian</option>
                          <option <?php if($data->_SpokenLanguage == 'Lithuanian'){ echo "selected"; } ?> value="Lithuanian">Lithuanian</option>
                          <option <?php if($data->_SpokenLanguage == 'Macedonian'){ echo "selected"; } ?> value="Macedonian">Macedonian</option>
                          <option <?php if($data->_SpokenLanguage == 'Malay'){ echo "selected"; } ?> value="Malay">Malay</option>
                          <option <?php if($data->_SpokenLanguage == 'Malayalam'){ echo "selected"; } ?> value="Malayalam">Malayalam</option>
                          <option <?php if($data->_SpokenLanguage == 'Maltese'){ echo "selected"; } ?> value="Maltese">Maltese</option>
                          <option <?php if($data->_SpokenLanguage == 'Maori'){ echo "selected"; } ?> value="Maori">Maori</option>
                          <option <?php if($data->_SpokenLanguage == 'Marathi'){ echo "selected"; } ?> value="Marathi">Marathi</option>
                          <option <?php if($data->_SpokenLanguage == 'Mongolian'){ echo "selected"; } ?> value="Mongolian">Mongolian</option>
                          <option <?php if($data->_SpokenLanguage == 'Nepali'){ echo "selected"; } ?> value="Nepali">Nepali</option>
                          <option <?php if($data->_SpokenLanguage == 'Norwegian'){ echo "selected"; } ?> value="Norwegian">Norwegian</option>
                          <option <?php if($data->_SpokenLanguage == 'Persian'){ echo "selected"; } ?> value="Persian">Persian</option>
                          <option <?php if($data->_SpokenLanguage == 'Polish'){ echo "selected"; } ?> value="Polish">Polish</option>
                          <option <?php if($data->_SpokenLanguage == 'Portuguese'){ echo "selected"; } ?> value="Portuguese">Portuguese</option>
                          <option <?php if($data->_SpokenLanguage == 'Punjabi'){ echo "selected"; } ?> value="Punjabi">Punjabi</option>
                          <option <?php if($data->_SpokenLanguage == 'Quechua'){ echo "selected"; } ?> value="Quechua">Quechua</option>
                          <option <?php if($data->_SpokenLanguage == 'Romanian'){ echo "selected"; } ?> value="Romanian">Romanian</option>
                          <option <?php if($data->_SpokenLanguage == 'Russian'){ echo "selected"; } ?> value="Russian">Russian</option>
                          <option <?php if($data->_SpokenLanguage == 'Samoan'){ echo "selected"; } ?> value="Samoan">Samoan</option>
                          <option <?php if($data->_SpokenLanguage == 'Serbian'){ echo "selected"; } ?> value="Serbian">Serbian</option>
                          <option <?php if($data->_SpokenLanguage == 'Slovak'){ echo "selected"; } ?> value="Slovak">Slovak</option>
                          <option <?php if($data->_SpokenLanguage == 'Slovenian'){ echo "selected"; } ?> value="Slovenian">Slovenian</option>
                          <option <?php if($data->_SpokenLanguage == 'Spanish'){ echo "selected"; } ?> value="Spanish">Spanish</option>
                          <option <?php if($data->_SpokenLanguage == 'Swahili'){ echo "selected"; } ?> value="Swahili">Swahili</option>
                          <option <?php if($data->_SpokenLanguage == 'Swedish'){ echo "selected"; } ?> value="Swedish">Swedish </option>
                          <option <?php if($data->_SpokenLanguage == 'Tamil'){ echo "selected"; } ?> value="Tamil">Tamil</option>
                          <option <?php if($data->_SpokenLanguage == 'Tatar'){ echo "selected"; } ?> value="Tatar">Tatar</option>
                          <option <?php if($data->_SpokenLanguage == 'Telugu'){ echo "selected"; } ?> value="Telugu">Telugu</option>
                          <option <?php if($data->_SpokenLanguage == 'Thai'){ echo "selected"; } ?> value="Thai">Thai</option>
                          <option <?php if($data->_SpokenLanguage == 'Tibetan'){ echo "selected"; } ?> value="Tibetan">Tibetan</option>
                          <option <?php if($data->_SpokenLanguage == 'Tonga'){ echo "selected"; } ?> value="Tonga">Tonga</option>
                          <option <?php if($data->_SpokenLanguage == 'Turkish'){ echo "selected"; } ?> value="Turkish">Turkish</option>
                          <option <?php if($data->_SpokenLanguage == 'Ukranian'){ echo "selected"; } ?> value="Ukranian">Ukranian</option>
                          <option <?php if($data->_SpokenLanguage == 'Urdu'){ echo "selected"; } ?> value="Urdu">Urdu</option>
                          <option <?php if($data->_SpokenLanguage == 'Uzbek'){ echo "selected"; } ?> value="Uzbek">Uzbek</option>
                          <option <?php if($data->_SpokenLanguage == 'Vietnamese'){ echo "selected"; } ?> value="Vietnamese">Vietnamese</option>
                          <option <?php if($data->_SpokenLanguage == 'Welsh'){ echo "selected"; } ?> value="Welsh">Welsh</option>
                          <option <?php if($data->_SpokenLanguage == 'Xhosa'){ echo "selected"; } ?> value="Xhosa">Xhosa</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Family status</label>
                        <select name="family_status" class="form-control">
                          <option <?php if($data->_FamilyStatus == 'single'){ echo "selected"; } ?>>single </option>
                          <option <?php if($data->_FamilyStatus == 'married'){ echo "selected"; } ?>>married</option>
                          <option <?php if($data->_FamilyStatus == 'travelwithpartner'){ echo "selected"; } ?>>travel with partner</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Outfitter</label>
                        <input class="form-control" name="outfitter" data-match-error="Enter Outfitter" placeholder="Enter Outfitter" required="required" type="text" value="<?= $data->_Outfitter ?>"   required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Shoe Size</label>
                        <input class="form-control" name="shoesize" data-match-error="Enter Shoe Size" placeholder="Enter Shoe Size" required="required" type="text" value="<?= $data->_ShoesSize ?>"  required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Date of birth</label>
                        <input class="form-control" name="dob" data-match-error="Enter Date of birth" placeholder="Enter Date of birth" required="required" type="date" value="<?= date('Y-m-d',strtotime($data->_Dob)); ?>">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-buttons-w">
                    <button class="btn btn-primary disabled" type="submit"> Submit</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="career-tab" role="tabpanel" aria-labelledby="career-tab">
                <form method="post" class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                <input type="hidden" name="tab" value="tab3">
                  <div class="element-info mt-3">
                    <div class="element-info-with-icon">
                      <div class="element-info-text">
                        <h5 class="element-inner-header">Career Details</h5>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Preferred Side</label>
                        <select class="form-control">
                            <option <?php if($data->_PreferedSide == 'right'){ echo "selected"; } ?>>right </option>
                            <option <?php if($data->_PreferedSide == 'left'){ echo "selected"; } ?>>left</option>
                            <option <?php if($data->_PreferedSide == 'both'){ echo "selected"; } ?>>both</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Position(Primary)</label>
                        <select class="form-control select2" multiple="true" name="first_position" required="">
                          <option value="">Select</option>
                          <option <?php if($data->_PrimaryPosition == 'goalkeeper'){ echo "selected"; } ?> value="goalkeeper">goalkeeper </option>
                          <option <?php if($data->_PrimaryPosition == 'leftback'){ echo "selected"; } ?> value="leftback">leftback</option>
                          <option <?php if($data->_PrimaryPosition == 'rightback'){ echo "selected"; } ?> value="rightback">rightback</option>
                          <option <?php if($data->_PrimaryPosition == 'centermidfield1'){ echo "selected"; } ?> value="centermidfield1">centermidfield1</option>
                          <option <?php if($data->_PrimaryPosition == 'centermidfield2'){ echo "selected"; } ?> value="centermidfield2">centermidfield2</option>
                          <option <?php if($data->_PrimaryPosition == 'leftwing'){ echo "selected"; } ?> value="leftwing">leftwing</option>
                          <option <?php if($data->_PrimaryPosition == 'rightwing'){ echo "selected"; } ?> value="rightwing">rightwing</option>
                          <option <?php if($data->_PrimaryPosition == 'centerforward'){ echo "selected"; } ?> value="centerforward">centerforward</option>
                          <option <?php if($data->_PrimaryPosition == 'striker'){ echo "selected"; } ?> value="striker">striker</option>
                          <option <?php if($data->_PrimaryPosition == 'centerattack'){ echo "selected"; } ?> value="centerattack">centerattack</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group" >
                        <label for="">Position(Alternative)</label>
                        <?php $aarr=explode(',', $data->_AlternatePosition); ?>
                        <select class="form-control select2" multiple name="second_position[]" required="">
                          <option value="">Select</option>
                          <option <?php if(in_array('goalkeeper',$aarr)){ echo "selected"; } ?> value="goalkeeper">goalkeeper </option>
                          <option <?php if(in_array('leftback',$aarr)){ echo "selected"; } ?> value="leftback">leftback</option>
                          <option <?php if(in_array('rightback',$aarr)){ echo "selected"; } ?> value="rightback">rightback</option>
                          <option <?php if(in_array('centermidfield1',$aarr)){ echo "selected"; } ?> value="centermidfield1">centermidfield1</option>
                          <option <?php if(in_array('centermidfield2',$aarr)) { echo "selected"; } ?> value="centermidfield2">centermidfield2</option>
                          <option <?php if(in_array('leftwing',$aarr)){ echo "selected"; } ?> value="leftwing">leftwing</option>
                          <option <?php if(in_array('rightwing',$aarr)){ echo "selected"; } ?> value="rightwing">rightwing</option>
                          <option <?php if(in_array('centerforward',$aarr)){ echo "selected"; } ?> value="centerforward">centerforward</option>
                          <option <?php if(in_array('striker',$aarr)){ echo "selected"; } ?> value="striker">striker</option>
                          <option <?php if(in_array('centerattack',$aarr)){ echo "selected"; } ?> value="centerattack">centerattack</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Producing Agent</label>
                        <!-- <input class="form-control" name="agentname" data-match-error="Enter Agent Name" placeholder="Enter Agent Name" required="required" type="text"> -->
 
                          <select name="agentname" class="form-control" required="">
                              <option value="">Select Agent</option>
                              <?php //print_r($agents);
                              if(!empty($agents)){
                                  foreach ($agents as $agent) { //echo $data->agentname;
                                     if($agent->_ID == $data->_AgentName){$sel = "SELECTED";}else{$sel = ""; } 

                                      echo '<option value="'.$agent->_ID.'" '.$sel.'>'.$agent->_Firstname.' '.$agent->_Lastname.'</option>';
                                  }
                              }
                              ?>
                          </select>

                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Placing agents</label>
                        <!-- <input class="form-control" name="agentname" data-match-error="Enter Agent Name" placeholder="Enter Agent Name" required="required" type="text"> -->
                        <?php //print_r($agents);
                              $agntarr = explode(', ', $data->_PlacingAgent);
                              //print_r($agntarr); ?>
                          <select name="placingagent[]" class="form-control select2" multiple="" required="">
                              <option value="">Select Agent</option>
                              <?php //print_r($agents);
                              if(!empty($agents)){


                                  foreach ($agents as $agent) { //echo $data->agentname;
                                    //if($agent->_ID == $data->_AgentName){$sel = "SELECTED";}else{$sel = ""; } 
                                    if(in_array($agent->_ID,$agntarr)){$sel = "SELECTED";}else{$sel = ""; } 
                                      echo '<option value="'.$agent->_ID.'" '.$sel.'>'.$agent->_Firstname.' '.$agent->_Lastname.'</option>';
                                  }
                              }
                              ?>
                          </select>

                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Desired Salary</label>
                        <input class="form-control" name="salary" data-match-error="Enter Outfitter" placeholder="Enter Outfitter" required="required" type="number" value="<?= $data->_Salary ?>" required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">jersey number</label>
                        <input class="form-control" name="jersey_number" data-match-error="Enter Shoe Size" placeholder="Enter Shoe Size" required="required" type="number" value="<?= $data->_JerseyNumber ?>" required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Contract End</label>
                        <input class="form-control" data-match-error="Enter Date of birth" placeholder="Enter Contract End" required="required" type="date" id="contractend" name="contractend" value="<?= date('Y-m-d', strtotime($data->_LastContractdate)); ?>"   required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Youth Academy</label>
                        <input name="academy" class="form-control" data-match-error="Enter Youth Academy" placeholder="Enter Youth Academy" required="required" type="text" value="<?= $data->_Academy; ?>"   required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Statistics Link</label>
                        <input class="form-control" name="statisticslink" data-match-error="Enter Statistics Link" placeholder="Enter Statistics Link" required="required" type="text" value="<?= $data->_StatisticsLink ?>" required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Total Offer</label>
                        <input name="offeraccept" class="form-control" data-match-error="Enter Number of Offer Accepted" placeholder="Enter Number of Offer Accepted" required="required" type="text"  value="<?= $data->_Offeraccept ?>" required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Injuries</label>
                        <input class="form-control" data-match-error="Enter Injuries" name="injuries" value="<?= $data->_Ijuries ?>" placeholder="Enter Injuries" required="required" type="text">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-buttons-w">
                    <button class="btn btn-primary disabled" type="submit"> Submit</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="status-tab" role="tabpanel" aria-labelledby="status-tab">
                  <form method="post" class="needs-validation" novalidate enctype='multipart/form-data' action="<?php echo base_url(); ?>myprofile/profileupdate/" method="post">
                    <input type="hidden" name="tab" value="tab4">
                  <div class="element-info mt-3">
                    <div class="element-info-with-icon">
                      <div class="element-info-text">
                        <h5 class="element-inner-header">Status Details</h5>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for=""> Preferred Side</label>
                        <select name="first_availability" class="form-control">
                          <option value="">Availability</option>
                            <option value="available" <?php echo $data->_First_availability=='available'?'SELECTED':''; ?>>Available </option>
                            <option value="hapwithcon" <?php echo $data->_First_availability=='hapwithcon'?'SELECTED':''; ?>>happy with contract </option>
                            <option value="unhwithcon" <?php echo $data->_First_availability=='unhwithcon'?'SELECTED':''; ?>>unhappy with contract</option>
                        <select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for=""> Preferred Side</label>
                    <select name="second_availability" class="form-control">
                    <option value="">Availability</option>
                          <option value="unhwithcoach" <?php echo $data->_Second_availability=='unhwithcoach'?'SELECTED':''; ?>>unhappy with coach</option>
                          <option value="unhwithteam" <?php echo $data->_Second_availability=='unhwithteam'?'SELECTED':''; ?>>unhappy with team mates</option>
                          <option value="unhwithclub" <?php echo $data->_Second_availability=='unhwithclub'?'SELECTED':''; ?>>unhappy with club</option>
                          <option value="unhwithliv" <?php echo $data->_Second_availability=='unhwithliv'?'SELECTED':''; ?>>unhappy with living</option>
                          <option value="other" <?php echo $data->_Second_availability=='other'?'SELECTED':''; ?>>other</option>
                    </select>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Other</label>
                        <input name="other" value="<?= $data->_Other; ?>" class="form-control" data-match-error="Enter Other" placeholder="Enter Other" required="required" type="text">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <?php
                                 $arrr = array();  
                                 //print_r($userdata);
                                foreach ($userdata as $user) {
                                      
                                         if($user->_Type == '1'){

                                            $arrr[]= $user->_Firstname.' '.$user->_Lastname.' -(Player)';  

                                         }else if($user->_Type == '2'){

                                            $arrr[]= $user->_Firstname.' '.$user->_Lastname.' -(Agent)';  

                                         }else{

                                            $arrr[]= $user->_Club_name.' -(Club)';  
                                         }
                                } ?>
                         <input type="hidden" name="userdata" class="userdata" value='<?php echo json_encode($arrr); ?>'>
                         <input type="hidden" name="referenceid" class="referenceid" value="<?php echo $data->_Reference; ?>">
                        <label for="">Reference</label>
                        <input class="form-control reference" data-match-error="Select Referanced User" placeholder="Enter Number of Offer Accepted" required="required" type="text"   id="refid"  value="<?php echo $refusername; ?>" required>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-buttons-w">
                    <button class="btn btn-primary disabled" type="submit"> Submit</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="characteristics-tab">
                <div class="element-info mt-3">
                  <div class="element-info-with-icon">
                    <div class="element-info-text">
                      <h5 class="element-inner-header">Characteristics Details</h5>
                    </div>
                  </div>
                </div>
                <div class="tabbable">
                  <ul class="nav nav-tabs" id="myTabSub" role="tablistsub">
                    <li class="nav-item">
                      <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal-sub-tab" role="tab" aria-controls="personal-sub-tab" aria-selected="true">Personal Characteristics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="individual-tab" data-toggle="tab" href="#individual-sub-tab" role="tab" aria-controls="individual-sub-tab" aria-selected="true">Individual Technique</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="tactical-tab" data-toggle="tab" href="#tactical-sub-tab" role="tab" aria-controls="tactical-sub-tab" aria-selected="true">Tactical Abilities</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="physical-tab" data-toggle="tab" href="#physical-sub-tab" role="tab" aria-controls="physical-sub-tab" aria-selected="true">Physical Abilities</a>
                    </li>
                  </ul>
                  <div class="tab-content mt-3">
                    <div class="tab-pane fade active show" id="personal-sub-tab" aria-labelledby="personal-tab">
                      <form method="post" id="formValidate" novalidate="true">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Leadership</label>
                              <input class="form-control" data-match-error="Enter Leadership" placeholder="Enter Leadership" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Confidence</label>
                              <input class="form-control" data-match-error="Enter Confidence in own abilities" placeholder="Enter Confidence in own abilities" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Discipline</label>
                              <input class="form-control" data-match-error="Enter Confidence in own abilities" placeholder="Enter Confidence in own abilities" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Creativity</label>
                              <input class="form-control" data-match-error="Enter Confidence in own abilities" placeholder="Enter Confidence in own abilities" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary disabled" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="individual-sub-tab" aria-labelledby="individual-tab">
                      <form method="post" id="formValidate" novalidate="true">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Passing</label>
                              <input class="form-control" data-match-error="Enter Ball control" placeholder="Enter Ball control" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Set Pieces</label>
                              <input class="form-control" data-match-error="Enter Movement with a ball in speed " placeholder="Enter Movement with a ball in speed" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Long Shots</label>
                              <input class="form-control" data-match-error="Enter Ball control" placeholder="Enter Ball control" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Ball Control</label>
                              <input class="form-control" data-match-error="Enter Movement with a ball in speed " placeholder="Enter Movement with a ball in speed" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary disabled" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="tactical-sub-tab" aria-labelledby="tactical-tab">
                      <form method="post" id="formValidate" novalidate="true">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Coachability</label>
                              <input class="form-control" data-match-error="Enter Selection of attacking position" placeholder="Enter Selection of attacking position" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Positioning</label>
                              <input class="form-control" data-match-error="Enter Selection of defending position " placeholder="Enter Selection of defending position " required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Transition</label>
                              <input class="form-control" data-match-error="Enter Selection of attacking position" placeholder="Enter Selection of attacking position" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Football IQ</label>
                              <input class="form-control" data-match-error="Enter Selection of defending position " placeholder="Enter Selection of defending position " required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary disabled" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="physical-sub-tab" aria-labelledby="physical-tab">
                      <form id="formValidate" novalidate="true">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Strength</label>
                              <input class="form-control" data-match-error="Enter Strength" placeholder="Enter Strength" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Speed</label>
                              <input class="form-control" data-match-error="Enter Strength" placeholder="Enter Strength" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Jumping</label>
                              <input class="form-control" data-match-error="Enter Strength" placeholder="Enter Strength" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Tackling</label>
                              <input class="form-control" data-match-error="Enter Strength" placeholder="Enter Strength" required="required" type="text">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary disabled" type="submit"> Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tab End -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="profiledetailboxright">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <h6 class="element-header">Setting Profile Menu </h6>
          <div class="element-box-tp">
            <div class="el-buttons-list full-width edit-menu-list">
              <ul class="nav d-block">
              <li>
                <a class="btn btn-white btn-md"  id="home-tab" data-toggle="tab" href="#persion-tab" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-file-text-o"></i><span>Permission</span></a>
              </li>
              <li>
                <a class="btn btn-white btn-md"  id="profile-tab" data-toggle="tab" href="#about-tab" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-file-text-o"></i><span>About</span></a>
              </li>
              <li>
                <a class="btn btn-white btn-md"  id="profile-tab" data-toggle="tab" href="#persional-tab" role="tab" aria-controls="persional" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Personal Details</span></a>
              </li>
              <li>
                <a class="btn btn-white btn-md"  id="profile-tab" data-toggle="tab" href="#career-tab" role="tab" aria-controls="career" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Career</span></a>
              </li>
              <li>
                <a class="btn btn-white btn-md"   id="profile-tab" data-toggle="tab" href="#status-tab" role="tab" aria-controls="status" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Status</span></a>
              </li>
              <li>
                <a class="btn btn-white btn-md" id="profile-tab" data-toggle="tab" href="#characteristics-tab" role="tab" aria-controls="characteristics" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Characteristics</span></a>
              </li>
              <ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-eq-height">
    </div>
  </div>
</div>
<!--  Modle HTML -->
<div class="modal fade" id="vacanciesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title " id="exampleModalCenterTitle">All Field</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <table width="100%" class="table table-hover responsive nowrap">
          <thead>
            <tr>
              <th>Field Name</th>
              <th>Read</th>
              <th>Edit</th>
              <th>None</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>First Name</td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
            </tr>
            <tr>
              <td>First name</td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-sm switch btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                  <div class="handle"></div>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="text-right">
          <button class="btn btn-primary">ok</button>
          <button class="btn btn-primary " data-dismiss="modal" aria-label="Close">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>adminassets/js/jquery-3.4.1.min.js"></script> --> 
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>adminassets/js/bootstrap.min.js"></script> -->

<script type="text/javascript"> 
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
 
</script>
<script type="text/javascript">
if ($('.select2').length) {
    $('.select2').select2({placeholder: "Select position" });
}
</script>