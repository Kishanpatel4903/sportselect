<div class="container-fluid">
	<div class="profiledetailbox">
		<div class="row">
			<div class="col-sm-12">
			<?php //echo "<pre>"; print_r($accepted); echo "</pre>";
				if(!empty($this->session->flashdata('user_msg'))){
				?>
				   <div class="alert alert-success">
				     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
				   </div>
			<?php } ?>
				<div class="user-profile compact">
					<!-- <div class="up-head-w" style="background-image:url(images/profile_bg1.jpg)">
						<div class="up-social">
							<a href="#">
								<img src="images/icon/facebook.png">
							</a>
							<a href="#">
								<img src="images/icon/twitter.png">
							</a>
						</div>
						<div class="up-main-info">
							<h2 class="up-header">Giannis Fifazidids</h2>
							<h6 class="up-sub-header">Lorem ipsum</h6>
						</div>
						<svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
								<path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path>
							</g>
						</svg>
					</div> -->
					<div class="up-controls">
						<div class="row">
							<div class="col-sm-3">
								<div class="value-pair">
									<div class="label">Status:</div>
									<div class="value badge badge-pill badge-success">Available</div>
								</div>
							</div>
							<div class="col-sm-9 text-right addfriends">
								
								<!--<a class="btn btn-primary btn-sm" href="#">
									<i class="ti-printer"></i>
									<span>Print CV</span>
								</a>
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fa fa-eye"></i>
									<span>Show statistics</span>
								</a> 
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fa fa-home"></i>
									<span>Show </span>
								</a>
								<a class="btn btn-primary btn-sm" href="#">
									<i class="fa fa-home"></i>
									<span>Connect</span>
								</a> -->
							</div>
							<div class="col-sm-12 mt-3">
							</div>
							
							<div class="col-sm-3">
								<div class="contryandclubname">
									<?php $ap=$agents->_Photo!=''?base_url().'uploads/agent/user_profile/'.$agents->_Photo:base_url().'assets/images/nouser.jpg'; ?>
									<img src="<?php echo $ap; ?>">
									<p class="titletag"></p>
									<p class="titlename"> <?php echo $agents->_Firstname.' '.$agents->_Lastname; ?></p>
									<i class="fa fa-user-plus connections"> 123 Connections</i>
									<?php
			                           if($this->session->userdata('usertype') != '2'){
			                             ?>
			                           <a class="connectbtn" href="#">
			                              <span>Connect</span>
			                           </a>
			                             <?php 
			                           }
			                            ?>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="contryandclubname">
									<?php $flag = 'https://www.countryflags.io/'.$agents->_CountryCode.'/flat/64.png'; ?>
									<img src="<?php echo $flag; ?>">
									<p class="titletag">Nationality</p>
									<p class="titlename"><?php echo $agents->_Country; ?></p>
									
								</div>
							</div>
							<div class="col-sm-3">
								<div class="contryandclubname">
									<img src="<?php echo base_url(); ?>assets/images/club-img.jpg">
									<p class="titletag">Agency</p>
									<p class="titlename"><?php echo $agents->_Agency!=''?$agents->_Agency:'-'; ?></p>
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
								<div class="col-lg-12">
									<p><?php echo $agents->_Info!=''?$agents->_Info:'-'; ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="up-contents">
						<div class="row">
						
						<div class="col-sm-12 mt-2">
							<h6 class="element-header">Agent Data</h6>
							<!-- <a href="profile-edit.html#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a> -->
	                        <table class="playeraboutinfotable">
	                           	<tbody>
		                           <tr>
		                              <td>Languages</td>
		                              <td><?php echo $agents->_Spoken_language?$agents->_Spoken_language:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Education</td>
		                              <td><?php echo $agents->_Education!=''?$agents->_Education:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Certificate</td>
		                              <td><?php echo $agents->_Certificate_name!=''?$agents->_Certificate_name:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Experience</td>
		                              <td><?php echo $agents->_Experience!=''?$agents->_Experience:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Status</td>
		                              <td><?php echo $agents->_Status!=''?$agents->_Status:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Agency</td>
		                              <td><?php echo $agents->_Agency!=''?$agents->_Agency:'-'; ?></td>
		                           </tr>
								   <tr>
		                              <td>Age</td>
		                              <td><?php
		                              
                                    $dateOfBirth = date('d-m-Y',strtotime($agents->_Age));// "17-10-1985";
                                    $today = date("Y-m-d");
                                    $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                     
                                    echo $diff->format('%y'); ?></td>
		                           </tr>
		                           <tr>
		                              <td>Type Agent</td>
		                              <td><?php echo $agents->_Agent_type!=''?$agents->_Agent_type:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Scope</td>
		                              <td><?php echo $agents->_Scope!=''?$agents->_Scope:'-'; ?></td>
		                           </tr>
		                           <tr>
		                              <td>Based Out Of</td>
		                              <td><?php echo $agents->_Country; ?></td>
		                           </tr>
		                          
		                        </tbody>
		                    </table>
						</div>
						
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 mt-5">
				
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









<?php //include('footer-link.php'); ?>


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

<?php //include('footer.php'); ?>





