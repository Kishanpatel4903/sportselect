 
<div class="container-fluid">
   <div class="profiledetailbox">
      <div class="row">
         <div class="col-sm-12">
            <div class="element-wrapper">
               <div class="element-box">
                  <!-- Tab Start -->
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="about-tab" role="tabpanel" aria-labelledby="about-tab">
                        <form enctype="multipart/form-data" id="form1" action="<?php echo base_url().'Club_controller/profileupdate'; ?>" method="post" novalidate="true">
                           <input type="hidden" name="tab1" value="yes" />
                           <div class="element-info mt-3">
                              <div class="element-info-with-icon">
                                 <div class="element-info-text">
                                    <h5 class="element-inner-header">About</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-2">
                                    <?php $dp = $data->_Photo!=''?base_url().'uploads/club/user_profile/'.$data->_Photo:base_url().'assets/images/nouser.jpg';  ?>
                                    <img src="<?php echo $dp; ?>" width="80px;" height="auto">
                                    <input type="hidden" name="oldimg" value="<?php echo $data->_Photo; ?>">
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="">Club Photo</label>
                                    <div class="custom-file" data-text="Select your file!">
                                       <input type="file" class="custom-file-input" name="profile_img" id="validatedCustomFile" required="" value="">
                                       <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                       <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Club Name</label>
                                    <input class="form-control" name="clubname" value="<?php echo $data->_Club_name; ?>" data-minlength="Enter Club name" placeholder="Enter Club name" required="required" type="text">
                                    <div class="help-block form-text text-muted form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Stadium Name</label>
                                    <input class="form-control" name="stadiumname" value="<?php echo $data->_Stadium; ?>" data-match-error="Enter Stadium name" placeholder="Stadium name" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
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
                     <div class="tab-pane fade" id="clubdetail-tab" role="tabpanel" aria-labelledby="clubdetail-tab">
                        <form action="<?php echo base_url().'Club_controller/profileupdate'; ?>" method="post" novalidate="true">
                           <input type="hidden" name="tab2" value="yes" />
                           <div class="element-info mt-3">
                              <div class="element-info-with-icon">
                                 <div class="element-info-text">
                                    <h5 class="element-inner-header">Club Details</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                               
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Senior</label>
                                    <input class="form-control" name="senior" value="<?php echo $data->_Senior; ?>" data-match-error="Enter Senior" placeholder="Senior" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Reserves</label>
                                    <input class="form-control" name="reserves" value="<?php echo $data->_Reserved; ?>" data-match-error="Enter Senior" placeholder="Reserves" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Youth(18)</label>
                                    <input class="form-control" name="youtheighteen" value="<?php echo $data->_Youtheighteen; ?>" data-match-error="Enter Youth" placeholder="Enter Youth" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Youth(16)</label>
                                    <input class="form-control" name="youthsixteen" value="<?php echo $data->_Youthsixteen; ?>" data-match-error="Enter Youth" placeholder="Enter Youth" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                               
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Address Of The</label>
                                    <input class="form-control" name="address" value="<?php echo $data->_Address; ?>" data-match-error="Enter Address Of The" placeholder="Enter Address Of The" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Date Of Construction</label>
                                    <input class="form-control" name="contructiondate" value="<?php echo date('Y-m-d', strtotime($data->_ContructionDate)); ?>" data-match-error="Enter Date Of Construction" placeholder="Enter Date Of Construction" required="required" type="date">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Capacity (Seats)</label>
                                    <input class="form-control" name="capacity" value="<?php echo $data->_Capacity;  ?>" data-match-error="Enter Capacity (Seats)" placeholder="Enter Capacity (Seats)" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Achievements</label>
                                    <input class="form-control" name="achievements" value="<?php echo $data->_Achievements;  ?>" data-match-error="Enter Achievements" placeholder="Enter Achievements" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Website</label>
                                    <input class="form-control" name="website" value="<?php echo $data->_Website; ?>" data-match-error="Enter Website" placeholder="Enter Website" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Date Of Foundation</label>
                                    <input class="form-control" data-match-error="Enter Date Of Foundation" placeholder="Enter Date Of Foundation" required="required" type="date" name="foundationdate" value="<?php echo date('Y-m-d', strtotime($data->_FoundationDate)); ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Club Category</label>
                                    <input class="form-control" name="category" value="<?php echo $data->_Category; ?>" data-match-error="Enter Club Category" placeholder="Enter Club Category" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Club Sponsors</label>
                                    <input class="form-control" data-match-error="Enter Club Sponsors" placeholder="Enter Club Sponsors" required="required" type="text" name="sponsors" value="<?php echo $data->_Sponsors; ?>">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Date of RenovationDate</label>
                                    <input class="form-control" name="renovationndate" value="<?php echo date('Y-m-d', strtotime($data->_RenovationDate)); ?>" data-match-error="Enter Date of foundation" placeholder="Enter Date of foundation" required="required" type="date">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Need Investment</label>
                                    <input class="form-control" data-match-error="Enter Need Investment"  placeholder="Enter Tier" name="investmentrs" value="<?php echo $data->_Investment; ?>" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback" ></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Club Type</label>
                                    <input class="form-control" name="clubtype" value="<?php echo $data->_ClubType; ?>" data-match-error="Enter Club Type" placeholder="Enter Club Type" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>

                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Farm Club</label>
                                    <input class="form-control" name="farmclub" value="<?php echo $data->_FarmClub; ?>" data-match-error="Enter Farm Club" placeholder="Enter Club Type" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for=""></label>
                                    <input class="form-control" name="clubtype" value="<?php echo $data->_ClubType; ?>" data-match-error="Enter Club Type" placeholder="Enter Club Type" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>

                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="">Farm Club</label>
                                    <input class="form-control" name="farmclub" value="<?php echo $data->_FarmClub; ?>" data-match-error="Enter Farm Club" placeholder="Enter Club Type" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                 </div>
                              </div>
                           </div> -->
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
                           <a class="btn btn-white btn-md"  id="about-tab" data-toggle="tab" href="#about-tab" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-file-text-o"></i><span>About</span></a>
                        </li>
                        <li>
                           <a class="btn btn-white btn-md"  id="clubdetail-tab" data-toggle="tab" href="#clubdetail-tab" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-file-text-o"></i><span>Club Details</span></a>
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
<script>
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
   
   
</script>
