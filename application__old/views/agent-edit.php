 
<div class="container-fluid">
   <div class="profiledetailbox">
      <div class="row">
         <div class="col-sm-12">
            <div class="element-wrapper">
               <div class="element-box">
                  <!-- Tab Start -->
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade active show" id="about-tab" role="tabpanel" aria-labelledby="about-tab">
                        <form method="post" action="<?php echo base_url().'Agent_controller/update_agent' ?>" id="form1" enctype="multipart/form-data" />
                           <input type="hidden" name="tab1" value="yes">
                           <div class="element-info mt-3">
                              <div class="element-info-with-icon">
                                 <div class="element-info-text">
                                    <h5 class="element-inner-header">About Settings</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-2">
                                    <?php $dp = $data->_Photo!=''?base_url().'uploads/agent/user_profile/'.$data->_Photo:base_url().'assets/images/nouser.jpg';  ?>
                                    <img src="<?php echo $dp; ?>" width="80px;" height="auto">
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="">Your Photo</label>
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" class="custom-file-input" id="validatedCustomFile" name="profile"  value="">
                                       <input type="hidden" name="oldimg" value="<?php echo $data->_Photo; ?>">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">First Name</label>
                                    <input class="form-control" name="fname" value="<?php echo $data->_Firstname; ?>" data-minlength="Enter First Name" placeholder="Enter First Name" required="required" type="text">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input class="form-control" name="lname" value="<?php echo $data->_Firstname; ?>" data-minlength="Enter Last Name" placeholder="Enter Last Name" required="required" type="text">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Your Email</label>
                                    <input class="form-control" name="email" value="<?php echo $data->_Email; ?>" readonly data-match-error="Enter Your Email" placeholder="Enter Your Email" required="required" type="email">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                             
                           </div>
                           <div class="form-buttons-w">
                              <button class="btn btn-primary disabled" type="submit"> Submit</button>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade" id="personal-tab" role="tabpanel" aria-labelledby="personal-tab">
                        <form method="post" action="<?php echo base_url().'Agent_controller/update_agent' ?>" id="form2" enctype="multipart/form-data"/>
                           <input type="hidden" name="tab2" value="yes">
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
                                    <label for="">Age</label>
                                    <input class="form-control" name="age" data-minlength="Enter Age" placeholder="Enter Age" required="required" type="date" value="<?php echo date('Y-m-d',strtotime($data->_Age)); ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Total Deals</label>
                                    <input class="form-control" name="totaldeal"  data-minlength="Enter Total Deals" placeholder="Enter Total Deals" required="required" type="number" value="<?php echo $data->_Totaldeal; ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Education</label>
                                    <input class="form-control" name="education" data-minlength="Enter Education" placeholder="Enter Education" required="required" type="text" value="<?php echo $data->_Education; ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Experience</label>
                                    <input class="form-control" name="experience" data-match-error="Enter Experience" placeholder="Enter Experience" required="required" type="text" value="<?php echo $data->_Experience; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Agent Type</label>
                                    <select name="agenttype" class="form-control">
                                       <option value="Leading Agent" <?php if($data->_Agent_type=='Leading Agent'){echo "selected"; } ?>>Leading Agent</option>
                                       <option value="Team Member" <?php if($data->_Agent_type=='Team Member'){echo "selected"; } ?>>Team Member</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="">Spoken Languages</label>
                                   <select class="form-control" name="spoken_language">
                                   <option>Select</option>
                                   <option <?php if($data->_Spoken_language == 'Afrikanns'){ echo "selected"; } ?> value="Afrikanns">Afrikanns</option>
                                   <option <?php if($data->_Spoken_language == 'Albanian'){ echo "selected"; } ?> value="Albanian">Albanian</option>
                                   <option <?php if($data->_Spoken_language == 'Arabic'){ echo "selected"; } ?> value="Arabic">Arabic</option>
                                   <option <?php if($data->_Spoken_language == 'Armenian'){ echo "selected"; } ?> value="Armenian">Armenian</option>
                                   <option <?php if($data->_Spoken_language == 'Basque'){ echo "selected"; } ?> value="Basque">Basque</option>
                                   <option <?php if($data->_Spoken_language == 'Bengali'){ echo "selected"; } ?> value="Bengali">Bengali</option>
                                   <option <?php if($data->_Spoken_language == 'Bulgarian'){ echo "selected"; } ?> value="Bulgarian">Bulgarian</option>
                                   <option <?php if($data->_Spoken_language == 'Catalan'){ echo "selected"; } ?> value="Catalan">Catalan</option>
                                   <option <?php if($data->_Spoken_language == 'Cambodian'){ echo "selected"; } ?> value="Cambodian">Cambodian</option>
                                   <option <?php if($data->_Spoken_language == 'Chinese'){ echo "selected"; } ?> value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                   <option <?php if($data->_Spoken_language == 'Croation'){ echo "selected"; } ?> value="Croation">Croation</option>
                                   <option <?php if($data->_Spoken_language == 'Czech'){ echo "selected"; } ?> value="Czech">Czech</option>
                                   <option <?php if($data->_Spoken_language == 'Danish'){ echo "selected"; } ?> value="Danish">Danish</option>
                                   <option <?php if($data->_Spoken_language == 'Dutch'){ echo "selected"; } ?> value="Dutch">Dutch</option>
                                   <option <?php if($data->_Spoken_language == 'English'){ echo "selected"; } ?> value="English">English</option>
                                   <option <?php if($data->_Spoken_language == 'Estonian'){ echo "selected"; } ?> value="Estonian">Estonian</option>
                                   <option <?php if($data->_Spoken_language == 'Fiji'){ echo "selected"; } ?> value="Fiji">Fiji</option>
                                   <option <?php if($data->_Spoken_language == 'Finnish'){ echo "selected"; } ?> value="Finnish">Finnish</option>
                                   <option <?php if($data->_Spoken_language == 'French'){ echo "selected"; } ?> value="French">French</option>
                                   <option <?php if($data->_Spoken_language == 'Georgian'){ echo "selected"; } ?> value="Georgian">Georgian</option>
                                   <option <?php if($data->_Spoken_language == 'German'){ echo "selected"; } ?> value="German">German</option>
                                   <option <?php if($data->_Spoken_language == 'Greek'){ echo "selected"; } ?> value="Greek">Greek</option>
                                   <option <?php if($data->_Spoken_language == 'Gujarati'){ echo "selected"; } ?> value="Gujarati">Gujarati</option>
                                   <option <?php if($data->_Spoken_language == 'Hebrew'){ echo "selected"; } ?> value="Hebrew">Hebrew</option>
                                   <option <?php if($data->_Spoken_language == 'Hindi'){ echo "selected"; } ?> value="Hindi">Hindi</option>
                                   <option <?php if($data->_Spoken_language == 'Hungarian'){ echo "selected"; } ?> value="Hungarian">Hungarian</option>
                                   <option <?php if($data->_Spoken_language == 'Icelandic'){ echo "selected"; } ?> value="Icelandic">Icelandic</option>
                                   <option <?php if($data->_Spoken_language == 'Indonesian'){ echo "selected"; } ?> value="Indonesian">Indonesian</option>
                                   <option <?php if($data->_Spoken_language == 'Irish'){ echo "selected"; } ?> value="Irish">Irish</option>
                                   <option <?php if($data->_Spoken_language == 'Italian'){ echo "selected"; } ?> value="Italian">Italian</option>
                                   <option <?php if($data->_Spoken_language == 'Japanese'){ echo "selected"; } ?> value="Japanese">Japanese</option>
                                   <option <?php if($data->_Spoken_language == 'Javanese'){ echo "selected"; } ?> value="Javanese">Javanese</option>
                                   <option <?php if($data->_Spoken_language == 'Korean'){ echo "selected"; } ?> value="Korean">Korean</option>
                                   <option <?php if($data->_Spoken_language == 'Latin'){ echo "selected"; } ?> value="Latin">Latin</option>
                                   <option <?php if($data->_Spoken_language == 'Latvian'){ echo "selected"; } ?> value="Latvian">Latvian</option>
                                   <option <?php if($data->_Spoken_language == 'Lithuanian'){ echo "selected"; } ?> value="Lithuanian">Lithuanian</option>
                                   <option <?php if($data->_Spoken_language == 'Macedonian'){ echo "selected"; } ?> value="Macedonian">Macedonian</option>
                                   <option <?php if($data->_Spoken_language == 'Malay'){ echo "selected"; } ?> value="Malay">Malay</option>
                                   <option <?php if($data->_Spoken_language == 'Malayalam'){ echo "selected"; } ?> value="Malayalam">Malayalam</option>
                                   <option <?php if($data->_Spoken_language == 'Maltese'){ echo "selected"; } ?> value="Maltese">Maltese</option>
                                   <option <?php if($data->_Spoken_language == 'Maori'){ echo "selected"; } ?> value="Maori">Maori</option>
                                   <option <?php if($data->_Spoken_language == 'Marathi'){ echo "selected"; } ?> value="Marathi">Marathi</option>
                                   <option <?php if($data->_Spoken_language == 'Mongolian'){ echo "selected"; } ?> value="Mongolian">Mongolian</option>
                                   <option <?php if($data->_Spoken_language == 'Nepali'){ echo "selected"; } ?> value="Nepali">Nepali</option>
                                   <option <?php if($data->_Spoken_language == 'Norwegian'){ echo "selected"; } ?> value="Norwegian">Norwegian</option>
                                   <option <?php if($data->_Spoken_language == 'Persian'){ echo "selected"; } ?> value="Persian">Persian</option>
                                   <option <?php if($data->_Spoken_language == 'Polish'){ echo "selected"; } ?> value="Polish">Polish</option>
                                   <option <?php if($data->_Spoken_language == 'Portuguese'){ echo "selected"; } ?> value="Portuguese">Portuguese</option>
                                   <option <?php if($data->_Spoken_language == 'Punjabi'){ echo "selected"; } ?> value="Punjabi">Punjabi</option>
                                   <option <?php if($data->_Spoken_language == 'Quechua'){ echo "selected"; } ?> value="Quechua">Quechua</option>
                                   <option <?php if($data->_Spoken_language == 'Romanian'){ echo "selected"; } ?> value="Romanian">Romanian</option>
                                   <option <?php if($data->_Spoken_language == 'Russian'){ echo "selected"; } ?> value="Russian">Russian</option>
                                   <option <?php if($data->_Spoken_language == 'Samoan'){ echo "selected"; } ?> value="Samoan">Samoan</option>
                                   <option <?php if($data->_Spoken_language == 'Serbian'){ echo "selected"; } ?> value="Serbian">Serbian</option>
                                   <option <?php if($data->_Spoken_language == 'Slovak'){ echo "selected"; } ?> value="Slovak">Slovak</option>
                                   <option <?php if($data->_Spoken_language == 'Slovenian'){ echo "selected"; } ?> value="Slovenian">Slovenian</option>
                                   <option <?php if($data->_Spoken_language == 'Spanish'){ echo "selected"; } ?> value="Spanish">Spanish</option>
                                   <option <?php if($data->_Spoken_language == 'Swahili'){ echo "selected"; } ?> value="Swahili">Swahili</option>
                                   <option <?php if($data->_Spoken_language == 'Swedish'){ echo "selected"; } ?> value="Swedish">Swedish </option>
                                   <option <?php if($data->_Spoken_language == 'Tamil'){ echo "selected"; } ?> value="Tamil">Tamil</option>
                                   <option <?php if($data->_Spoken_language == 'Tatar'){ echo "selected"; } ?> value="Tatar">Tatar</option>
                                   <option <?php if($data->_Spoken_language == 'Telugu'){ echo "selected"; } ?> value="Telugu">Telugu</option>
                                   <option <?php if($data->_Spoken_language == 'Thai'){ echo "selected"; } ?> value="Thai">Thai</option>
                                   <option <?php if($data->_Spoken_language == 'Tibetan'){ echo "selected"; } ?> value="Tibetan">Tibetan</option>
                                   <option <?php if($data->_Spoken_language == 'Tonga'){ echo "selected"; } ?> value="Tonga">Tonga</option>
                                   <option <?php if($data->_Spoken_language == 'Turkish'){ echo "selected"; } ?> value="Turkish">Turkish</option>
                                   <option <?php if($data->_Spoken_language == 'Ukranian'){ echo "selected"; } ?> value="Ukranian">Ukranian</option>
                                   <option <?php if($data->_Spoken_language == 'Urdu'){ echo "selected"; } ?> value="Urdu">Urdu</option>
                                   <option <?php if($data->_Spoken_language == 'Uzbek'){ echo "selected"; } ?> value="Uzbek">Uzbek</option>
                                   <option <?php if($data->_Spoken_language == 'Vietnamese'){ echo "selected"; } ?> value="Vietnamese">Vietnamese</option>
                                   <option <?php if($data->_Spoken_language == 'Welsh'){ echo "selected"; } ?> value="Welsh">Welsh</option>
                                   <option <?php if($data->_Spoken_language == 'Xhosa'){ echo "selected"; } ?> value="Xhosa">Xhosa</option>
                                 </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control">
                                       <option <?php if($data->_Status == 'Private Individual'){ echo "selected"; } ?> value="Private Individual">Private Individual</option>
                                       <option <?php if($data->_Status == 'Agency'){ echo "selected"; } ?> value="Agency">Agency</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Agency Name</label>
                                    <input class="form-control" name="agency_name" data-match-error="Enter Agency Name" placeholder="Enter Agency Name" required="required" type="text" value="<?php echo $data->_Agency;  ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Agency Fee</label>
                                    <input class="form-control" name="agencyfee" data-match-error="Enter Agency fee" placeholder="Enter Agency fee" required="required" type="text" value="<?php echo $data->_Agency_fee;  ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Name Of Private Individual</label>
                                    <input class="form-control" name="nameofprivate" data-match-error="Enter Name of private individual" placeholder="Enter Name of private individual" required="required" type="text" value="<?php echo $data->_Nameof_private; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-2">
                                 <?php $alogo = !empty($data->_Agency_logo)?base_url().'uploads/agent/agency_logo/'.$data->_Agency_logo:base_url().'assets/images/nouser.jpg'; ?>
                                 <img width="80px" height="auto" src="<?php echo $alogo; ?>">
                                 <input type="hidden"  name="agencyhidden" value="<?php echo $data->_Agency_logo; ?>">
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="">Upload Agency Logo</label>
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" name="agencylogo" class="custom-file-input" id="validatedCustomFile"  value="">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>                                    
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>

                              <div class="col-sm-2">
                                 <?php $certi = !empty($data->_Certificate)?base_url().'uploads/agent/agency_logo/'.$data->_Certificate:base_url().'assets/images/nouser.jpg'; ?>
                                 <img width="80px" height="auto" src="<?php echo $certi; ?>">
                                 <input type="hidden" name="certificatehidden" value="<?php echo $data->_Agency_logo; ?>">                                 
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="">Upload Certificate</label>
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" name="certificatelogo" class="custom-file-input" id="validatedCustomFile" value="">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>                              
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Certificate Name</label>
                                    <input class="form-control" name="certificatename" data-match-error="Enter Name of certificate" placeholder="Enter Name of private individual" required="required" type="text" value="<?php echo $data->_Certificate_name; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Scope</label>
                                    <input class="form-control" name="scope" data-match-error="Enter Name Scopes" placeholder="Enter Scope" required="required" type="text" value="<?php echo $data->_Scope; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>   
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="">Info</label>
                                    <textarea name="agentinfo" class="form-control" rows="3"><?php echo $data->_Info; ?></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="form-buttons-w">
                              <button class="btn btn-primary disabled" type="submit"> Submit</button>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade" id="bank-tab" role="tabpanel" aria-labelledby="bank-tab">
                     <form method="post" action="<?php echo base_url().'Agent_controller/update_agent' ?>" id="form3" enctype="multipart/form-data"/>
                           <input type="hidden" name="tab3" value="yes">
                           <div class="element-info mt-3">
                              <div class="element-info-with-icon">
                                 <div class="element-info-text">
                                    <h5 class="element-inner-header">Bank Details</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <input name="bankname" class="form-control" data-minlength="Enter Bank Name" placeholder="Enter Bank Name" required="required" type="text" value="<?php echo $data->_Bankname; ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">IBAN</label>
                                    <input class="form-control" name="iban" data-minlength="Enter IBAN" placeholder="Enter IBAN" required="required" type="text" value="<?php echo $data->_Iban; ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Registration No.</label>
                                    <input name="registerno" class="form-control" data-minlength="Enter Registration No." placeholder="Enter Registration No." required="required" type="text" value="<?php echo $data->_Register_no; ?>">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="">Bank Address</label>
                                    <textarea name="bankadd" class="form-control" rows="3"><?php echo $data->_Bank_address; ?></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="form-buttons-w">
                              <button class="btn btn-primary disabled" type="submit"> Submit</button>
                           </div>
                        </form>
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
                           <a class="btn btn-white btn-md"  id="about-tab" data-toggle="tab" href="#about-tab" role="tab" aria-controls="about" aria-selected="true"><i class="fa fa-file-text-o"></i><span>About</span></a>
                        </li>
                        <li>
                           <a class="btn btn-white btn-md"  id="personal-tab" data-toggle="tab" href="#personal-tab" role="tab" aria-controls="personal" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Personal Details</span></a>
                        </li>
                        <li>
                           <a class="btn btn-white btn-md"  id="bank-tab" data-toggle="tab" href="#bank-tab" role="tab" aria-controls="bank" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Bank Details</span></a>
                        </li>
                     <ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row row-eq-height">
      </div>
      <!-- <div class="row row-eq-height">
         <div class="col-sm-12 mt-5">
         	<h6 class="element-header">Producing Agent</h6>	
         </div>
         <div class="col-sm-12 users-list-w">
         	<div class="user-w with-status status-green">
         		<div class="user-avatar-w">
         			<div class="user-avatar">
         				<img alt="" src="images/user.png">
         			</div>
         		</div>
         		<div class="user-name">
         			<h6 class="user-title">John Mayers</h6>
         			<div class="user-role">Producing Agent</div>
         		</div>
         		<div class="user-action">
         			<div class="ti-email"></div>
         		</div>
         	</div>
         </div>
         </div>
         <div class="row row-eq-height">
         <div class="col-sm-12 mt-5">
         	<h6 class="element-header">Placing Agent</h6>	
         </div>
         <div class="col-sm-12 users-list-w">
         	<div class="user-w with-status status-green">
         		<div class="user-avatar-w">
         			<div class="user-avatar">
         				<img alt="" src="images/user.png">
         			</div>
         		</div>
         		<div class="user-name">
         			<h6 class="user-title">John Mayers</h6>
         			<div class="user-role">Producing Agent</div>
         		</div>
         		<div class="user-action">
         			<div class="ti-email"></div>
         		</div>
         	</div>
         	<div class="user-w with-status status-green">
         		<div class="user-avatar-w">
         			<div class="user-avatar">
         				<img alt="" src="images/user.png">
         			</div>
         		</div>
         		<div class="user-name">
         			<h6 class="user-title">John Mayers</h6>
         			<div class="user-role">Producing Agent</div>
         		</div>
         		<div class="user-action">
         			<div class="ti-email"></div>
         		</div>
         	</div>
         	<div class="user-w with-status status-green">
         		<div class="user-avatar-w">
         			<div class="user-avatar">
         				<img alt="" src="images/user.png">
         			</div>
         		</div>
         		<div class="user-name">
         			<h6 class="user-title">John Mayers</h6>
         			<div class="user-role">Account Manager</div>
         		</div>
         		<div class="user-action">
         			<div class="ti-email"></div>
         		</div>
         	</div>
         </div>
         </div>-->
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

<script type="text/javascript">
$(function() {
  $("#form1").validate({
    // Specify validation rules
    rules: {
      fname: {required:true},
      lname: {required:true},
      //stadium_name: {required:true}, 
      //profile: {extension: "jpg|jpeg|png|gif" },
    },
    // Specify validation error messages
    messages: {
      fname: {required:"Please enter first name."},
      lname: {required:"Please enter last name."},
      photo: {extension:"Please select valid extension."},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  /*$("#form_detail").validate({
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
  });*/
});
</script>
<?php
//include('footer-link.php'); ?>
<!-- <script>
   //  Jquery MAP Script
   jQuery.noConflict();
   jQuery(function() {
       var $ = jQuery;
   
       $('#focus-single').click(function() {
           $('#map1').vectorMap('set', 'focus', {
               region: 'AU',
               animate: true
           });
       });
       $('#focus-multiple').click(function() {
           $('#map1').vectorMap('set', 'focus', {
               regions: ['AU', 'JP'],
               animate: true
           });
       });
       $('#focus-coords').click(function() {
           $('#map1').vectorMap('set', 'focus', {
               scale: 7,
               lat: 35,
               lng: 33,
               animate: true
           });
       });
       $('#focus-init').click(function() {
           $('#map1').vectorMap('set', 'focus', {
               scale: 1,
               x: 0.5,
               y: 0.5,
               animate: true
           });
       });
   
   
       $('#map1').vectorMap({
           map: 'world_mill_en',
           scaleColors: ['#C8EEFF', '#0071A4'],
           normalizeFunction: 'polynomial',
           hoverOpacity: 0.7,
           hoverColor: false,
           markerStyle: {
               initial: {
                   fill: '#F8E23B',
                   stroke: '#383f47'
               }
           },
           backgroundColor: '#383f47',
           markers: [{
               latLng: [51.487319, -0.170243],
               name: 'Chelsea, London'
           }, {
               latLng: [53.474960, -2.239250],
               name: 'Manchester united, Manchester'
           }, {
               latLng: [40.414916, -3.713794],
               name: 'Real Madrid, Madrid, Spain'
           }, {
               latLng: [45.464074, 9.187371],
               name: 'Inter Milan, Milan, Italy'
           }, {
               latLng: [43.464074, 9.187371],
               name: 'Partnership Agency 1',
               style: {
                   r: 8,
                   fill: 'blue'
               }
           }, {
               latLng: [51.487319, -0.171243],
               name: 'Partnership Agency 2',
               style: {
                   r: 8,
                   fill: 'blue'
               }
           }],
   
           panOnDrag: true,
           focusOn: {
               x: 0.5,
               y: 0.5,
               scale: 2,
               animate: true
           },
           series: {
               regions: [{
                   scale: ['#C8EEFF', '#0071A4'],
                   normalizeFunction: 'polynomial',
                   values: {
                       "AF": 16.63,
                       "AL": 11.58,
                       "DZ": 158.97,
                       "AO": 85.81,
                       "AG": 1.1,
                       "AR": 351.02,
                       "AM": 8.83,
                       "AU": 1219.72,
                       "AT": 366.26,
                       "AZ": 52.17,
                       "BS": 7.54,
                       "BH": 21.73,
                       "BD": 105.4,
                       "BB": 3.96,
                       "BY": 52.89,
                       "BE": 461.33,
                       "BZ": 1.43,
                       "BJ": 6.49,
                       "BT": 1.4,
                       "BO": 19.18,
                       "BA": 16.2,
                       "BW": 12.5,
                       "BR": 2023.53,
                       "BN": 11.96,
                       "BG": 44.84,
                       "BF": 8.67,
                       "BI": 1.47,
                       "KH": 11.36,
                       "CM": 21.88,
                       "CA": 1563.66,
                       "CV": 1.57,
                       "CF": 2.11,
                       "TD": 7.59,
                       "CL": 199.18,
                       "CN": 5745.13,
                       "CO": 283.11,
                       "KM": 0.56,
                       "CD": 12.6,
                       "CG": 11.88,
                       "CR": 35.02,
                       "CI": 22.38,
                       "HR": 59.92,
                       "CY": 22.75,
                       "CZ": 195.23,
                       "DK": 304.56,
                       "DJ": 1.14,
                       "DM": 0.38,
                       "DO": 50.87,
                       "EC": 61.49,
                       "EG": 216.83,
                       "SV": 21.8,
                       "GQ": 14.55,
                       "ER": 2.25,
                       "EE": 19.22,
                       "ET": 30.94,
                       "FJ": 3.15,
                       "FI": 231.98,
                       "FR": 2555.44,
                       "GA": 12.56,
                       "GM": 1.04,
                       "GE": 11.23,
                       "DE": 3305.9,
                       "GH": 18.06,
                       "GR": 305.01,
                       "GD": 0.65,
                       "GT": 40.77,
                       "GN": 4.34,
                       "GW": 0.83,
                       "GY": 2.2,
                       "HT": 6.5,
                       "HN": 15.34,
                       "HK": 226.49,
                       "HU": 132.28,
                       "IS": 12.77,
                       "IN": 1430.02,
                       "ID": 695.06,
                       "IR": 337.9,
                       "IQ": 84.14,
                       "IE": 204.14,
                       "IL": 201.25,
                       "IT": 2036.69,
                       "JM": 13.74,
                       "JP": 5390.9,
                       "JO": 27.13,
                       "KZ": 129.76,
                       "KE": 32.42,
                       "KI": 0.15,
                       "KR": 986.26,
                       "KW": 117.32,
                       "KG": 4.44,
                       "LA": 6.34,
                       "LV": 23.39,
                       "LB": 39.15,
                       "LS": 1.8,
                       "LR": 0.98,
                       "LY": 77.91,
                       "LT": 35.73,
                       "LU": 52.43,
                       "MK": 9.58,
                       "MG": 8.33,
                       "MW": 5.04,
                       "MY": 218.95,
                       "MV": 1.43,
                       "ML": 9.08,
                       "MT": 7.8,
                       "MR": 3.49,
                       "MU": 9.43,
                       "MX": 1004.04,
                       "MD": 5.36,
                       "MN": 5.81,
                       "ME": 3.88,
                       "MA": 91.7,
                       "MZ": 10.21,
                       "MM": 35.65,
                       "NA": 11.45,
                       "NP": 15.11,
                       "NL": 770.31,
                       "NZ": 138,
                       "NI": 6.38,
                       "NE": 5.6,
                       "NG": 206.66,
                       "NO": 413.51,
                       "OM": 53.78,
                       "PK": 174.79,
                       "PA": 27.2,
                       "PG": 8.81,
                       "PY": 17.17,
                       "PE": 153.55,
                       "PH": 189.06,
                       "PL": 438.88,
                       "PT": 223.7,
                       "QA": 126.52,
                       "RO": 158.39,
                       "RU": 1476.91,
                       "RW": 5.69,
                       "WS": 0.55,
                       "ST": 0.19,
                       "SA": 434.44,
                       "SN": 12.66,
                       "RS": 38.92,
                       "SC": 0.92,
                       "SL": 1.9,
                       "SG": 217.38,
                       "SK": 86.26,
                       "SI": 46.44,
                       "SB": 0.67,
                       "ZA": 354.41,
                       "ES": 1374.78,
                       "LK": 48.24,
                       "KN": 0.56,
                       "LC": 1,
                       "VC": 0.58,
                       "SD": 65.93,
                       "SR": 3.3,
                       "SZ": 3.17,
                       "SE": 444.59,
                       "CH": 522.44,
                       "SY": 59.63,
                       "TW": 426.98,
                       "TJ": 5.58,
                       "TZ": 22.43,
                       "TH": 312.61,
                       "TL": 0.62,
                       "TG": 3.07,
                       "TO": 0.3,
                       "TT": 21.2,
                       "TN": 43.86,
                       "TR": 729.05,
                       "TM": 0,
                       "UG": 17.12,
                       "UA": 136.56,
                       "AE": 239.65,
                       "GB": 2258.57,
                       "US": 14624.18,
                       "UY": 40.71,
                       "UZ": 37.72,
                       "VU": 0.72,
                       "VE": 285.21,
                       "VN": 101.99,
                       "YE": 30.02,
                       "ZM": 15.69,
                       "ZW": 5.57
                   }
               }],
   
           }
       });
   })
   
   
</script> -->
<?php //include('footer.php'); ?>