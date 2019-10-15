<?php /*include('header.php'); ?>
<?php include('head-link.php'); ?>
<?php include('club-left-sidebar.php'); ?>
<?php include('club-topbar.php');*/ 

?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/club/club-style.css">
<div class="container-fluid club">
  <div class="profiledetailbox">
    <div class="row">
      <div class="col-sm-12">
        <?php  //print_r($agents); exit;
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
  
} ?> 
        <div class="user-profile compact">
          <div class="up-controls">
            <div class="row">
              <div class="col-sm-12 mt-3">
              </div>
              <div class="col-sm-6 col-md-4 fourboxprofile">
                <div class="contryandclubname">
                  <?php $cp=$users->_Photo!=''?base_url().'uploads/club/user_profile/'.$users->_Photo:base_url().'assets/images/nouser.jpg'; ?>
                  <img src="<?php echo $cp; ?>">
                  <p class="titletag">Club Name</p>
                  <p class="titlename"><?php echo $users->_Club_name; ?></p>
                  <i class="fa fa-user-plus connections"> 123 Connections</i>
                  <a class="connectbtn" href="#">
                  <span>Connect</span>
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 fourboxprofile">
                <div class="contryandclubname">
                  <?php $flag = 'https://www.countryflags.io/'.$users->_CountryCode.'/flat/64.png'; ?>
                  <img src="<?php echo $flag; ?>">
                  <p class="titletag">Country</p>
                  <p class="titlename"><?php echo $users->_Country; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="up-contents">
            <div class="m-b mt-5">
              <div class="row m-b">
                <div class="col-sm-12">
                  <h6 class="element-header">Player Info</h6>
                </div>
                <div class="col-lg-6 personaldatafourbox">
                  <div class="row">
                    <div class="col-sm-6 personaldetasinglebox b-r b-b b-t b-l pointer" data-toggle="modal" data-target="#registeredfans">
                      <div class="el-tablo centered padded">
                        <div class="value">21</div>
                        <div class="label">Registered Fans</div>
						              <span class="clickhere">click here</span>
                      </div>
                    </div>
                    <div class="col-sm-6 personaldetasinglebox b-b b-r b-t">
                      <div class="el-tablo centered padded">
                        <div class="value">2</div>
                        <div class="label">Placing agents</div>
                      </div>
                    </div>
                    <div class="col-sm-12 personaldetasinglebox b-r b-b b-l">
                      <div class="el-tablo centered padded">
                        <div class="value"><?php echo $users->_ClubType!=''?$users->_ClubType:'-'; ?></div>
                        <div class="label">Club Type</div>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="col-lg-6">
                  <iframe width="100%" height="100px" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 170px;"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="up-contents">
            <div class="row">
              <div class="col-sm-12">
                <table class="playeraboutinfotable">
                  <tbody>
                    <tr>
                      <td>senior</td>
                      <td><?php echo $users->_Senior!=''?$users->_Senior:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Reserves</td>
                      <td><?php echo $users->_Reserved!=''?$users->_Reserved:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>youth (U18)</td>
                      <td><?php echo $users->_Youtheighteen!=''?$users->_Youtheighteen:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>youth (U16)</td>
                      <td><?php echo $users->_Youthsixteen!=''?$users->_Youthsixteen:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Achievements</td>
                      <td> <span>
                        <i class="fa fa-trophy cursorpointer" data-toggle="modal" data-target="#achievements"></i>
                        </span>
                        <span><?php echo $users->_Achievements!=''?$users->_Achievements:'-'; ?></span>
                      </td>
                    </tr>
                    <tr>
                      <td>address</td>
                      <td><?php echo $users->_Address!=''?$users->_Address:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Club Category</td>
                      <td><?php echo $users->_Category!=''?$users->_Category:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Website</td>
                      <td style="text-transform: none;"><a href="<?php echo $users->_Website; ?>" target="_blank"><?php echo $users->_Website!=''?$users->_Website:'-'; ?></a>
                      </td>
                    </tr>
                    <tr>
                      <td>farm club</td>
                      <td><?php echo $users->_FarmClub!=''?$users->_FarmClub:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Date of foundation</td>
                      <td><?php echo date('d/m/Y', strtotime($users->_FoundationDate)); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12 mt-5">
                <h6 class="element-header">Stadium Data</h6>
                <table class="playeraboutinfotable">
                  <tbody>
                    <tr>
                      <td>Stadium</td>
                      <td><?php echo $users->_Stadium!=''?$users->_Stadium:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Capacity (seats)</td>
                      <td><?php echo $users->_Capacity!=''?$users->_Capacity:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Date of Construction</td>
                      <td><?php echo date('d/m/Y', strtotime($users->_ContructionDate)); ?></td>
                    </tr>
                    <tr>
                      <td>Date of renovation</td>
                      <td><?php echo date('d/m/Y', strtotime($users->_RenovationDate)); ?></td>
                    </tr>
                    <tr>
                      <td>need investment</td>
                      <td><?php echo $users->_Investment!=''?$users->_Investment:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>club sponsors</td>
                      <td><span class="info" data-toggle="modal" data-target="#clubsponsors"><?php echo $users->_Sponsors!=''?$users->_Sponsors:'-'; ?> </span>
                      </td>
                    </tr>
                    <tr>
                      <td>Average Attendance</td>
                      <td><?php echo $users->_Attendance!=''?$users->_Attendance:'-'; ?></td>
                    </tr>
                    <tr>
                      <td>Fill Level In(%)</td>
                      <td>81.62%<?php //echo $users->_Level!=''?$users->_Level:'-'; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mt-5">
        <div class="element-wrapper">
          <div class="element-box">
            <h6 class="element-header">User Activity</h6>
            <div class="timed-activities compact">
               <?php
               if(!empty($activities)){ //echo "<pre>"; print_r($activities); exit;
                     ?>
                     <?php
                           foreach ($activities as $date) {
         
                                 //echo "<h2>".date('Y-m-d',strtotime($date->_Created))."<h2>";
                              ?>
                                 <div class="timed-activity">
                                    <div class="ta-date"><span><?php echo date('d M, Y',strtotime($date->_Created)) ?></span></div>
                                    <div class="ta-record-w">
                                       <?php
                                        $alldate = $this->model->get_allrecord("ss_useractivity",array("DATE(_Created)"=>date('Y-m-d',strtotime($date->_Created))));
                                          foreach ($alldate as $all) {
                                             //echo "<br/>-".$all->_Created;
                                             ?>
                                             <div class="ta-record">
                                                <div class="ta-timestamp"><strong><?php echo date('h:i',strtotime($all->_Created)); ?></strong> <?php echo date('a',strtotime($all->_Created)); ?></div>
                                                <div class="ta-activity"><?php echo $all->_Title; ?></div>
                                             </div>
                                           
                                       <?php } ?>
                                       <!-- <div class="ta-record">
                                          <div class="ta-timestamp"><strong>2:34</strong> pm</div>
                                          <div class="ta-activity">Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a> category</div>
                                       </div>
                                       <div class="ta-record">
                                          <div class="ta-timestamp"><strong>7:12</strong> pm</div>
                                          <div class="ta-activity">Added <a href="#">John Silver</a> as a friend</div>
                                       </div> -->
                                    </div>
                                 </div>
                              <?php
                              
                           }
                     }
                     else{
                        ?>
                        <p>No activities found.</p>
                  <?php }  ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="profiledetailboxright">
    <div class="row">
		<div class="col-sm-12">
			<!-- <h6 class="element-header">Position</h6> -->
			 <div class="Leaguedetails groundpart">
				<div id="map1" style="width: 100%; height: 410px"></div>
			</div>
		</div>
	</div>
    
    <div class="row row-eq-height">
      <div class="col-sm-12 mt-5">
        <h6 class="element-header">Competitions</h6>
      </div>
	  <div class="col-sm-12">
		<div class="element-box">
		   
		   <div class="table-responsive">
			  <table class="table table-lightborder">
				 <thead>
				  <tr class="text-center">
                      <td colspan="2"><img src="<?php echo base_url() ?>assets/new/images/logo1.png"></td>
                      
                    </tr>
					<tr class="text-center">
						   <td colspan="2"><strong>National</strong></td>						   
						</tr>
				 </thead>
				 <tbody>
					<tr>
					   <td colspan="2">EFL Cham...leagues<?php //echo $users->_NationalTitle!=''?$users->_NationalTitle:'-'; ?></td>
					   
					</tr>
					<tr>
					   <td>Tier: </td>
					   <td class="text-center">
						 First Tier
					   </td>
					</tr>
					<tr>
					   <td>Playing since: </td>
					   <td class="text-center">
						  12 years
					   </td>
					</tr>
					
				 </tbody>
			  </table>
		   </div>
		</div>
	  </div>
		
		 <div class="col-sm-12">
			<div class="element-box">
			  
			   <div class="table-responsive">
				  <table class="table table-lightborder">
					 <thead>
					  <tr class="text-center">
						  <td colspan="2"><img src="<?php echo base_url() ?>assets/new/images/logo2.png"></td>
						  
						</tr>
						<tr class="text-center">
						   <td colspan="2"><strong>International</strong></td>						   
						</tr>
					 </thead>
					 <tbody>
						<tr>
						   <td colspan="2">EFL Cham...leagues</td>
						   
						</tr>
						<tr>
						   <td>Tier: </td>
						   <td class="text-center">
							 First Tier
						   </td>
						</tr>
						<tr>
						   <td>Playing since: </td>
						   <td class="text-center">
							  12 years
						   </td>
						</tr>
						
					 </tbody>
				  </table>
			   </div>
			</div>
		 </div>
		
		
    </div>
   
  </div>
</div>


 <div class="modal  fade producingagentmodelsame" id="registeredfans" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Registered fans</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <table width="100%;" class="commontable">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>country</th>
                                <th>more</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>lorem ipsum</td>
                                <td>more</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>lorem ipsum</td>
                                <td>more</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
	  <div class="modal fade" id="clubsponsors" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Club Sponsors</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body subtabintab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#subtab-31" role="tab" aria-controls="subtab-31" aria-selected="false"> General sponsor  </a> </li>
                        <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-32" role="tab" aria-controls="subtab-32" aria-selected="false"> Partners </a> </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="subtab-31" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <table width="100%" class="commontable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>lorem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>lorem ipsum</td>
                                                <td>lorem</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="subtab-32" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <table width="100%" class="commontable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>lorem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>lorem ipsum</td>
                                                <td>lorem</td>
                                            </tr>
                                            <tr>
                                                <td>lorem ipsum</td>
                                                <td>lorem</td>
                                            </tr>
                                            <tr>
                                                <td>lorem ipsum</td>
                                                <td>lorem</td>
                                            </tr>
                                            <tr>
                                                <td>lorem ipsum</td>
                                                <td>lorem</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
