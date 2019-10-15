<?php  //print_r($agents); exit;
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
  
} ?> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/style-agent.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>agent_css/jquery-jvectormap.css">


    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script> -->

    <script src="<?php echo base_url(); ?>assets/js/agent_js/jquery-jvectormap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/jquery-mousewheel.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/jvectormap.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/abstract-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/abstract-canvas-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/abstract-shape-element.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-group-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-canvas-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-shape-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-path-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-circle-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-image-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/svg-text-element.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-group-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-canvas-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-shape-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-path-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-circle-element.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vml-image-element.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/map-object.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/region.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/marker.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/vector-canvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/simple-scale.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/ordinal-scale.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/numeric-scale.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/color-scale.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/legend.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/data-series.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/proj.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/agent_js/src/map.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/agent_js/jquery-jvectormap-world-mill-en.js"></script>
<section class="backimg mt-3 agent-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="leftsideprofile agent-card-box">
                        <div class="maindiv">
                           <div class="nameandsearchbar">
                              <p class="playername"><span class="availability-dots" title="Available"></span>
                                 <?php echo $agents->_Firstname.' '.$agents->_Lastname; ?> 
                                 <span class="userunactive">(In Active)</span><a href="profile-edit.html#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a>
                              </p>
                              <div class="playercountry">
                                 <div class="right-side">
                                    <!-- <img src="images/flag.jpg"> -->
                                    <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                    <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                    <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                    <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                    </span>
                                    <span class="social-media">
                                    <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.facebook.com/"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="profilesec">
                              <div class="playerprofile">
                                 <img src="<?php echo base_url().'uploads/agent/user_profile/'.$agents->_Agency_logo; ?>">
                              </div>
                              <div class="countryclubday">
                                 <div class="commondthreepart">
                                    <div class="commonimage">
                                       <img src="<?php echo base_url().'uploads/agent/certificate/'.$agents->_Certificate; ?>">
                                    </div>
                                    <p class="first">Nationality</p>
                                    <p class="second">Spain</p>
                                 </div>
                                 <div class="commondthreepart">
                                    <div class="commonimage">
                                       <img src="<?php echo base_url(); ?>assets/images/club-img.jpg">
                                    </div>
                                    <p class="first">Agency</p>
                                    <p class="second"><?php echo $agents->_Agency; ?></p>
                                 </div>
                              </div>
                              <div class="clear-fix" style="clear:both;"></div>
                              <div class="playerinfo agent-card-info" style="width:100%;">
                                 <div class="maindivinfo">
                                    <div class="profileinfo">
                                       <table width="100%">
                                          <tbody>
                                             <tr>
                                                <td>Total Deals </td>
                                                <td><?php echo $agents->_Totaldeal; ?></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="background-info">
                                 <h3 class="section-title"> Agent Info </h3>
                                 <p><?php echo $agents->_Info; ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 agent-info-tabel">
                     <div class="rightsideprofile">
                        <div class="Leaguedetails">
                           <div class=" Leaguedetailsfirst">
                              <table>
                                 <tr>
                                    <th colspan="2">
                                       <h3 class="section-title">Agent Data <a href="profile-edit.html#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a></h3>
                                    </th>
                                 </tr>
                                 <tr>
                                    <td>languages</td>
                                    <td><?php echo $agents->_Spoken_language; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Education</td>
                                    <td><?php echo $agents->_Education; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Certificate</td>
                                    <td>Certificate 1<!-- <?php echo $agents->_Certificate; ?> --></td>
                                 </tr>
                                 <tr>
                                    <td>Experience</td>
                                    <td><?php echo $agents->_Experience; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Agency</td>
                                    <td><?php echo $agents->_Agency; ?> </td>
                                 </tr>
                              </table>
                           </div>
                           <div class=" Leaguedetailsfirst info-tow">
                              <table>
                                 <tr>
                                    <th colspan="2">
                                       <h3 class="section-title">&nbsp;</h3>
                                    </th>
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
                                    <td>Leading Agent </td>
                                 </tr>
                                 <tr>
                                    <td>Scope </td>
                                    <td>Africa, Europe, Asia </td>
                                 </tr>
                                 <tr>
                                    <td>Based out of </td>
                                    <td>England </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                        <!-- End List Of Details -->
                        <div class="Leaguedetails mt-4">
                           <div id="map1" style="width: 100%; height: 310px"></div>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
























<script type="text/javascript">
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

        //  Jquery MAP Script
        jQuery.noConflict();
        jQuery(function() {
            var $ = jQuery;

            jQuery('#focus-single').click(function() {
                jQuery('#map1').vectorMap('set', 'focus', {
                    region: 'AU',
                    animate: true
                });
            });
            jQuery('#focus-multiple').click(function() {
                jQuery('#map1').vectorMap('set', 'focus', {
                    regions: ['AU', 'JP'],
                    animate: true
                });
            });
            jQuery('#focus-coords').click(function() {
                jQuery('#map1').vectorMap('set', 'focus', {
                    scale: 7,
                    lat: 35,
                    lng: 33,
                    animate: true
                });
            });
            jQuery('#focus-init').click(function() {
                jQuery('#map1').vectorMap('set', 'focus', {
                    scale: 1,
                    x: 0.5,
                    y: 0.5,
                    animate: true
                });
            });


            jQuery('#map1').vectorMap({
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
 
       