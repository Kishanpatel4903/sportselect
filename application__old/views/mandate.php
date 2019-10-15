
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mt-3">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mandate Offer </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mandate History</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="mandatetab">
                  <ul class="nav nav-tabs" id="agentandclubmandatetab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="agenttabmandat" data-toggle="tab" href="#clubtab" role="tab" aria-controls="clubtab" aria-selected="true">Agent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Club</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="clubtab" role="tabpanel" aria-labelledby="agenttabmandat">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="element-wrapper">
                              <div class="element-box">
                                <?php if(isset($mandate_check) ){ $readonly = 'disabled'; }else{ $readonly = ''; } ?>
                                <form id="mandate_form" method="post" action="<?php echo base_url('Myprofile/add_mandate'); ?>" class="needs-validation">
                                <input type="hidden" name="player_id" value="<?php echo isset($playerid)?$playerid:''; ?>" />
                                <input type="hidden" name="mandate_editid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>" />
                                  <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Territory or sports clubs</label>
                                        <select id="territoryorsport" name="territoryorsport" class="custom-select" required>
                                        <!-- <option value="AF">Worldwide </option> -->
                                        <option value="territory" <?php if(isset($mandate_check) AND $mandate_check->_Territory == 'territory' ){ echo "SELECTED"; } ?>>Territory </option>
                                         <option value="club" <?php if(isset($mandate_check) AND $mandate_check->_Territory == 'club' ){ echo "SELECTED"; } ?>>Club/clubs </option>
                                          <option value="Worldwide">Worldwide </option>
                                                     </select>                 
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 selectterritorydiv">
                                      <div class="form-group ">
                                        <label for=""> Select Territory</label>
                                        <select class="form-control select2" multiple="true">
                                          	<option selected="true" value="Afghanistan">Afghanistan</option>
											<option value="Åland Islands">Åland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-bissau">Guinea-bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macao">Macao</option>
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="Netherlands Antilles">Netherlands Antilles</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan, Province of China">Taiwan, Province of China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-leste">Timor-leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Viet Nam">Viet Nam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>

                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 selectclubdiv"  style="display: none;" >
                                      <div class="form-group ">
                                        <label for="">Select clubs</label>
                                        <select id="selectclub" name="selectclub" class="custom-select" required>
                                            <!-- <option value="AF">Worldwide </option> -->
                                            <option value="ManchesterUnited">Manchester United </option>
                                            <option value="Arsenal">Arsenal </option>
                                            <option value="Chelsea">Chelsea </option>
                                            <option value="Liverpool">Liverpool </option>
                                            <option value="OlympiqueLyonnais">Olympique Lyonnais </option>
                                            <option value="OlympiquedeMarseille">Olympique de Marseille </option>
                                            <option value="ASMonaco">AS Monaco </option>
                                            <option value="ParisSaint-Germain">Paris Saint-Germain </option>
                                          </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Term of Mandate</label>
                                        <div class="input-group">
                                          <select id="term_athlete" class="custom-select" required=""  name="term_athlete" <?php echo $readonly; ?> />
										<?php
		                                      for($i=1;  $i<30;  $i++) {
		                                        if(isset($mandate_check) AND $mandate_check->_Term_athlete == $i){
		                                                 $selectm = "SELECTED";
		                                        }else{
		                                           $selectm = "";
		                                        }
		                                        
		                                        ?><option value="<?php echo $i; ?>" <?php echo $selectm; ?>><?php echo $i; ?></option><?php
		                                      }
		                                    ?>
									   </select>
									   <span class="input-group-addon currency-addon dropdowon-box">
										<select id="termmandateday" name="termmandateday" class="custom-select" required="" name="select2" id="select2">
										<option value="0">Day</option>
										<option value="1">Month</option>
									   </select>
                                          </div>
                                        </div>
                                      </div>
                                     
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Agency Fee</label>
                                        <div class="input-group">
                                          <select id="Agency_fee" name="agency_fee" class="custom-select" required <?php echo $readonly; ?>>
											<?php
	                                          for($i=0;  $i<25;  $i++) {
	                                            if(isset($mandate_check) AND $mandate_check->_Agency_fee == $i){
	                                                     $select = "SELECTED";
	                                            }else{
	                                               $select = "";
	                                            }
	                                            
	                                            ?><option value="<?php echo $i; ?>" <?php echo $select; ?>><?php echo $i; ?></option><?php
	                                          }
	                                        ?>
														   </select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">%</div>
                                          </div>
                                          <!-- <input  placeholder="Twitter Username" type="text"> -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Extension Fee</label>
                                        <div class="input-group">
                                          <select name="extension_fee" id="extension_fee" class="custom-select" required <?php echo $readonly; ?>>
											<?php
	                                          for($i=0;  $i<25;  $i++) {
	                                            if(isset($mandate_check) AND $mandate_check->_Extension_fee == $i){
	                                                     $selectfee = "SELECTED";
	                                            }else{
	                                               $selectfee = "";
	                                            } 
	                                            ?><option value="<?php echo $i; ?>" <?php echo $selectfee; ?>><?php echo $i; ?></option><?php
	                                          }
	                                        ?>
											</select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">%</div>
                                          </div>
                                          <!-- <input  placeholder="Twitter Username" type="text"> -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="type" class="custom-select" required <?php echo $readonly; ?>>
											  <option value="Revocable" <?php if(isset($mandate_check) AND $mandate_check->_Type == "Revocable"){ echo "SELECTED"; } ?>>Revocable </option>
											  <option value="Irrevocable" <?php if(isset($mandate_check) AND $mandate_check->_Type == "Irrevocable"){ echo "SELECTED"; } ?>>Irrevocable</option>
										   </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Athlete Termination</label>
                                         
                                          <select name="athlete_termination" class="custom-select" required <?php echo $readonly; ?>>
                                             <option value="Yes" <?php if(isset($mandate_check) AND $mandate_check->_Athlete_termination == 'Yes' ){ echo "selected"; } ?>>Yes </option>
                                             <option value="No" <?php if(isset($mandate_check) AND $mandate_check->_Athlete_termination == 'No' ){ echo "selected"; } ?>>No</option>
                                          </select>
                                        
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Additional Terms</label>
                                        <input type="text" name="additional_terms" class="form-control" id="" required <?php echo $readonly; ?> value="<?php echo isset($mandate_check)?$mandate_check->_Additional_terms:""; ?>">
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                      <div class="form-buttons-w formmandatbtn">
                                        <?php
                                         $upby = '';

                                          if(isset($mandate_check) AND $mandate_check->_Update_by=='0' AND $this->session->userdata("usertype") == '1' ){


                                             $upby = 'waitplayer';

                                          }elseif(isset($mandate_check) AND $mandate_check->_Update_by=='1' AND $this->session->userdata("usertype") == '2'){

                                                $upby = 'waitagent';
                                          } ?>
                                       <input type="hidden" name="upby" id="upby" value="<?php echo $upby; ?>">
                                       <?php /*if($editmode == 'yes' AND (isset($mandate_check)?$mandate_check->_Status != '1':$editmode != 'no') AND (isset($mandate_check)?$mandate_check->_Status != '2':$editmode != 'no')){*/

                                          if(!isset($mandate_check)){
                                             ?>
                                          <input type="submit" name="btn_mandate" class="attributebtn" value="submit" />
        
                                       <?php } ?> 
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="agenttab" role="tabpanel" aria-labelledby="clubtabmandate">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="element-wrapper">
                              <div class="element-box">
                                <form>
                                  <div class="row">
                                  	<div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Select clubs</label>
                                        <select id="selectclub" name="selectclub" class="custom-select" required>
                                            <!-- <option value="AF">Worldwide </option> -->
                                            <option value="ManchesterUnited">Manchester United </option>
                                            <option value="Arsenal">Arsenal </option>
                                            <option value="Chelsea">Chelsea </option>
                                            <option value="Liverpool">Liverpool </option>
                                            <option value="OlympiqueLyonnais">Olympique Lyonnais </option>
                                            <option value="OlympiquedeMarseille">Olympique de Marseille </option>
                                            <option value="ASMonaco">AS Monaco </option>
                                            <option value="ParisSaint-Germain">Paris Saint-Germain </option>
                                          </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Contract Type</label>
                                        <select id="contracttype" class="custom-select" required>
											<option value="Professional" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'Professional' ){ echo "selected"; } ?>>Professional </option>
											<option value="amateur" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'amateur' ){ echo "selected"; } ?>>amateur </option>
										</select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Expected Salary</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text ">$</div>
                                          </div>
                                          <input type="text" class="form-control currency-amount" id="expectedsalary" placeholder="0.00" size="8" required="" value="<?php echo isset($mandate_check)?$mandate_check->_Expected_salary:""; ?>">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="currency-selector">
											  <option data-symbol="$" data-placeholder="0.00" selected>USD</option>
											  <option data-symbol="€" data-placeholder="0.00">EUR</option>
											  <option data-symbol="£" data-placeholder="0.00">GBP</option>
											  <option data-symbol="¥" data-placeholder="0">JPY</option>
											  <option data-symbol="$" data-placeholder="0.00">CAD</option>
											  <option data-symbol="$" data-placeholder="0.00">AUD</option>
											</select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 tutionfeediv" style="display: none;">
                                      <div class="form-group">
                                        <label for="">Athlets to Club</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text ">$</div>
                                          </div>
                                          <input type="text" class="form-control currency-amount" id="expectedsalary" placeholder="0.00" size="8" required="" value="<?php echo isset($mandate_check)?$mandate_check->_Expected_salary:""; ?>">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="currency-selector">
											  <option data-symbol="$" data-placeholder="0.00" selected>USD</option>
											  <option data-symbol="€" data-placeholder="0.00">EUR</option>
											  <option data-symbol="£" data-placeholder="0.00">GBP</option>
											  <option data-symbol="¥" data-placeholder="0">JPY</option>
											  <option data-symbol="$" data-placeholder="0.00">CAD</option>
											  <option data-symbol="$" data-placeholder="0.00">AUD</option>
											</select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Term of Contract</label>
                                        <div class="input-group">
                                          <select class="form-control">
                                            <option selected="">Choose...</option>
                                             <option value="1">1</option>
											 <option value="2">2</option>
											 <option value="3">3</option>
											 <option value="4">4</option>
											 <option value="5">5</option>
											 <option value="6">6</option>
											 <option value="7">7</option>
											 <option value="8">8</option>
											 <option value="9">9</option>
											 <option value="10">10</option>
                                          </select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">Month</div>
                                          </div>
                                          <!-- <input  placeholder="Twitter Username" type="text"> -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for=""> Monthly Salary</label>
                                        <input class="form-control" type="text" name="" readonly="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Sign on Fee</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text">$</div>
                                          </div>
                                          <input type="text" name="" class="form-control">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                                              	<option selected="">USD</option>
												<option>EUR</option>
												<option>GBP</option>
												<option>JPY</option>
												<option>CAD</option>
												<option>AUD</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Flights</label>
                                        <select class="form-control">
                                          	<option value="one way">One way </option>
											<option value="2 ways">2 Ways </option>
											<option value="including/excluding">Including/Excluding</option>
											<option value="family members">Family Members</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Accommodation</label>
                                        <select class="form-control">
                                          	<option value="provided">Provided </option>
											<option value="unprovided">Unprovided</option>
											<option value="Limited">Limited</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Try Out</label>
                                        <select class="form-control">
                                          	<option value="yes">Yes</option>
											<option value="no">No</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Try Out Term</label>
                                        <select class="form-control">
                                          	<option value="yes">Yes</option>
											<option value="no">No</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Type</label>
                                        <select class="form-control">
                                          	<option value="Revocable">Revocable </option>
											<option value="Irrevocable">Irrevocable</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Club Termination</label>
                                        <input class="form-control" type="text" name="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Additional Terms</label>
                                        <input class="form-control" type="text" name="">
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                      <div class="form-buttons-w formmandatbtn">
                                        <button class="btn btn-primary submitbtn" type="submit"> Submit</button>
                                        <button class="btn btn-success acceptbtn"> Accept </button>
                                        <button class="btn btn-danger rejectbtn"> Reject </button>
                                        <button class="btn btn-info negotiationsbtn"> Negotiations </button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        	<div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="mandatetab">
                  <ul class="nav nav-tabs" id="agentandclubmandatetab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="agenttabmandat" data-toggle="tab" href="#clubtab" role="tab" aria-controls="clubtab" aria-selected="true">Past</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Present</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Future</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="clubtab" role="tabpanel" aria-labelledby="agenttabmandat">
                      <div class="container-fluid">

                      </div>
                    </div>
                    <div class="tab-pane fade" id="agenttab" role="tabpanel" aria-labelledby="clubtabmandate">
                      <div class="container-fluid">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <table class="commontable mt-3">
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">

jQuery(function() {
//alert('a');
/*New mandate form jquery*/
 
   //jQuery(".tutionfeediv").hide();
   jQuery("#termmandateday").change(function(){
  
      jQuery("#term_athlete").empty();
      if(jQuery(this).val() == "0"){

         var option =  '';
         for(var i=1; i<30; i++){
            option +="<option value="+i+">"+i+"</option>";
         }
         //alert(option);
         jQuery("#term_athlete").prepend(option);         
      }
      else{
         var option =  '';
         for(var i=1; i<25; i++){
            option +="<option value="+i+">"+i+"</option>";
         }
         //alert(option);
         jQuery("#term_athlete").prepend(option);  
      }
   })

   jQuery("#contracttype").change(function(){ 
      jQuery("#monthlysalary").val('');   
      if(jQuery(this).val() == "amateur"){
         jQuery(".expsalarydiv").hide();
         jQuery(".tutionfeediv").show();
      }else{
         jQuery(".expsalarydiv").show();
         jQuery(".tutionfeediv").hide();
      }
   })

   jQuery("#territoryorsport").change(function(){  alert('ss');

      if(jQuery(this).val() == "club"){
         jQuery(".selectterritorydiv").hide();
         jQuery(".selectclubdiv").show();
      }
      else if(jQuery(this).val() == "Worldwide"){
         jQuery(".selectterritorydiv").hide();
         jQuery(".selectclubdiv").hide();
       
      }else{
         jQuery(".selectterritorydiv").show();
         jQuery(".selectclubdiv").hide();
      }
   })

   jQuery("#termofcontract").change(function(){

      if(jQuery("#contracttype").children("option:selected").val()=="Professional") {
      
         var v = parseInt(jQuery("#expectedsalary").val())/Math.round(parseInt(jQuery(this).val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
      else{
         var v = parseInt(jQuery("#tuitionfee").val())/Math.round(parseInt(jQuery(this).val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
   })
      jQuery("#expectedsalary").change(function(){

      if(jQuery("#contracttype").children("option:selected").val()=="Professional") {
      
         var v = parseInt(jQuery("#expectedsalary").val())/Math.round(parseInt(jQuery("#termofcontract").val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
      else{
         var v = parseInt(jQuery("#tuitionfee").val())/Math.round(parseInt(jQuery("#termofcontract").val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
   })

   

   jQuery("#accommodation").change(function(){
      if(jQuery(this).val()=="Limited")  {
       
         jQuery(".limitedbudgetdiv").show();
      }
      else{
         jQuery(".limitedbudgetdiv").hide();
      }
   })
   jQuery("#tryout").change(function(){

      if(jQuery(this).val()=="No")  {
       
         jQuery(".tryouttermdiv").hide();
      }
      else{
         jQuery(".tryouttermdiv").show();
      }
   })
 
 
/*End new form*/

jQuery('.rejectbtncls').click(function(event){ 
          
   
   var mid = jQuery(this).attr('data-id'); 

   $.confirm({
       title: 'Reject!',
       content: '' +
       '<form method="post" id="rejectform" action="<?php echo base_url() ?>myprofile/accept_mandate" class="formName">' +
       '<div class="form-group">' +
       '<label>Enter Your Reason</label>' +
       '<input type="hidden" name="hidden_mandate" value="'+mid+'" />'+
       '<input type="text" name="rejectreason" placeholder="Reject Reason" class="name form-control" required />' +
       // '<input type="submit" name="rejectreason" style="display:none;" />' +
       '</div>' +
       '</form>',
       buttons: {
           formSubmit: {
               text: 'Submit',
               btnClass: 'btn-blue',
               action: function () {
                   var name = this.$content.find('.name').val();
                   if(!name){
                       $.alert('provide a valid reason');
                       return false;
                   }else{ 
                     //event.preventDefault(); 
 
                     jQuery("#rejectform").submit();
                     //return false;
                   }

                   //$.alert('Your name is ' + name);
               }
           },
           cancel: function () {
               //close
           },
       },
       // onContentReady: function () {
       //     // bind to events
       //     var jc = this;
       //     this.$content.find('form').on('submit', function (e) {
       //         // if the user submits the form by pressing enter in the field.
       //         e.preventDefault();
       //         jc.$$formSubmit.trigger('click'); // reference the button and click it
       //     });
       // }
   }); return false;
})

jQuery("#clear_mandate").click(function(){
   if(confirm('Are you sure you want to clear mandate form?')){
      window.location = "<?php echo base_url().'Myprofile/clear_mandate' ?>/"+jQuery(this).attr('data-id');   
   }   
});
if(jQuery('input.chl_cls:checked').length == 0){
  jQuery("#nego_submit").attr("disabled", true);
}else{
  jQuery("#nego_submit").attr("disabled", false);
} 
jQuery(".chl_cls").click(function(){

if(jQuery('input.chl_cls:checked').length == 0){
  jQuery("#nego_submit").attr("disabled", true);
}else{
  jQuery("#nego_submit").attr("disabled", false);
} 
      var show = jQuery(this).attr('id');
      jQuery('.'+show).toggle();
});
  jQuery("#mandate_negotiable").validate({
    // Specify validation rules
    rules: {
      term_of_athlete: {required:true},
      term_of_contract: {required:true}, 
      expected_salary: {required:true},
      transfer_fee: {required:true},
      agency_fee: {required:true},
      contract_fee: {required:true},
      expected_salary: {required:true},
      tryout_team: {required:true},
      club_termination: {required:true},
      additional_terms: {required:true},
      select_territory: {required:true} ,
      athletes_terminatin: {required: true}, 
    },
    // Specify validation error messages
    messages: {
      term_of_athlete: {required:"Please enter term of the athlete's mandate."},
      term_of_contract: {required:"Please enter term of contract with club."},
      expected_salary: {required:"Please enter expected salary/ budget available."},

      transfer_fee: {required:"Please enter transfer fee."},
      agency_fee: {required:"Please enter agency fee %."},
      contract_fee: {required:"Please enter contract extension fee."},
      tryout_team: {required:"Please enter try out team."},
      club_termination: {required:"Please enter club termination."},
      additional_terms: {required:"Please enter additional terms."},
      select_territory: {required:"Please enter select territory."},
      athletes_terminatin: {required:"Please enter athlete termination."},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {

      //alert(jQuery('#upby').val());
      if(jQuery('#upby').val() == 'waitagent'){
           
           jQuery('#mandatepopup').modal('hide');

            jQuery.alert({
                title: "Alert!",
                content: "Please wait to player's response",
            });

      }else if(jQuery('#upby').val() == 'waitplayer'){

            jQuery('#mandatepopup').modal('hide');

            jQuery.alert({
                title: "Alert!",
                content: "Please wait to agent's response",
            });
      }
      else{

      form.submit();
      }
    }
  });



  jQuery("#mandate_form").validate({
    // Specify validation rules
    rules: {
      territory: { required:true },
      term_athlete: { required:true },
      contract_type: { required:true },
      term_contract: { required:true },
      expected_salary: { required:true },
      transfer_fee: { required:true },
      agency_fee: { required:true },
      extension_fee: { required:true },
      flights: { required:true},
      accommodation: { required:true },
      try_out: { required:true },
      try_outteam: { required:true },
      signon_fee: { required:true },
      athlete_termination: { required:true },
      club_termination: { required:true }, 
      additional_terms: { required:true } 

    },
    // Specify validation error messages
    messages: {
      territory: {required:"Please enter territory."},
      term_athlete: {required:"Please enter term of the athlete's mandate."},
      contract_type: {required:"Please enter contract type."},
      term_contract: {required:"Please enter term of contract with club."},
      expected_salary: {required:"Please enter expected Salary/ budget available."},
      transfer_fee: {required:"Please enter transfer fee."},
      agency_fee: {required:"Please enter agency fee."},
      extension_fee: {required:"Please enter extension fee."},
      flights: {required:"Please enter flights."},
      accommodation: {required:"Please enter accommodation."},
      try_out: {required:"Please enter club try out."},
      try_outteam: {required:"Please enter try out team."},
      signon_fee: {required:"Please enter signon fee."},
      athlete_termination: {required:"Please enter athlete termination."},
      club_termination: {required:"Please enter club termination."},
      additional_terms: {required:"Please enter additional terms."},
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {

         //alert(jQuery('#upby').val());
         if(jQuery('#upby').val() == 'waitplayer'){
           
           jQuery.alert({
                title: "Alert!",
                content: "Please wait for agent's response.",
            });
         }
         // else if(jQuery("#upby").val() == "waitplayer"){

         //       jQuery.alert({
         //          title: "Alert!",
         //          content: "Please wait for agent's response.",
         //       });

         // }
         else{
            form.submit();
         }
          
    }
  });
});
</script>

