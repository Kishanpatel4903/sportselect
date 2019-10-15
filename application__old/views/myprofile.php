<?php //echo "<pre>"; print_r($accepted); echo "</pre>";
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
  
} ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/> -->


<style type="text/css">
.mandate_details label{
   /*color: #0d196b;*/
   color: #2124E4;
   font-size: 18px;
   font-weight: 600;
}
.mandate_details{
   margin-bottom: 40px;
    border: 2px solid #0d196b;
    padding: 20px 10px;
    margin-left: 0px;
    margin-right: 0px;
}

center{
   font-size: 22px;
   color: #0d196b;
}
table{
   padding: 10px;
}
p.info-text {
    padding-left: 15px;
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    color: #0d196b;
}
p{
   font-size: 16px;
    font-weight: bold;
}

</style>
      <section class="backimg mt-3">
         <div class="container-fluid">
            <div class="row">
               <!-- <div class="col-md-12">
                  <p class="title">Profile</p>
                  </div> -->
               <div class="col-md-6">
                  <div class="leftsideprofile">
                     <div class="maindiv">
                        <div class="nameandsearchbar">
                           <p class="playername"><span class="availability-dots" title="Available"></span>
                              <?php echo $data->first_name.' '.$data->last_name; ?>
                              <span class="userunactive">(In Active)</span>
                            <?php if($editmode != 'no'){ ?>
                              <a href="<?php echo base_url(); ?>myprofile/editprofile/#tab-1"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a>
                               <?php } ?>
                           </p>
                           <div class="playercountry">
                              <!-- <img src="<?php echo base_url() ?>assets/images/flag.jpg"> -->
                              <span>
                              <i class="fa fa-star fillstar" aria-hidden="true"></i>
                              <i class="fa fa-star fillstar" aria-hidden="true"></i>
                              <i class="fa fa-star fillstar" aria-hidden="true"></i>
                              <i class="fa fa-star fillstar" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                              <span class="social-media">
                              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                              </span>
                           </div>
                           <!-- <div class="searchiconplayerinfo">
                              <div class="searchbar">
                                 <input class="search_input" type="text" name="" placeholder="Search...">
                                 <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                              </div>
                              </div> -->
                        </div>
                        <div class="clear"></div>
                        <div class="profilesec">
                           <div class="playerprofile">
                              <img src="<?php echo base_url() ?>assets/images/prof.jpg">
                           </div>
                           <div class="countryclubday">
                              <div class="commondthreepart">
                                 <div class="commonimage">
                                    <img src="<?php echo base_url() ?>assets/images/flag.jpg">
                                 </div>
                                 <p class="first">caneda</p>
                                 <p class="second">contry</p>
                              </div>
                              <div class="commondthreepart">
                                 <div class="commonimage">
                                    <img src="<?php echo base_url() ?>assets/images/liverpool-football-club.png">
                                 </div>
                                 <p class="first">fulham</p>
                                 <p class="second">club name</p>
                              </div>
                              <div class="commondthreepart">
                                 <div class="commonimage">
                                    <img src="<?php echo base_url() ?>assets/images/contract-icon.png">
                                 </div>
                                 <ul class="first countdown">
                                    <li>
                                       <span class="days">00</span><span><b> Days</b></span>
                                    </li>
                                 </ul>
                                 <p class="second">contract</p>
                              </div>
                           </div>
                           <div class="playerinfo">
                              <div class="maindivinfo">
                                 <div class="profileinfo">
                                    <table>
                                       <tr>
                                          <td>Signing rate</td>
                                          <td title="Signing rate">86.59%</td>
                                       </tr>
                                       <tr>
                                          <td>Reputation </td>
                                          <td>World class</td>
                                       </tr>
                                       <tr>
                                          <td>Agent name</td>
                                          <td><?php echo $agentdetail->_Firstname.' '.$agentdetail->_Lastname; ?></td>
                                       </tr>
                                       <tr>
                                          <td>Preferred side</td>
                                          <td><?php echo $data->prefer_side; ?></td>
                                       </tr>
                                       <tr>
                                          <td>Position(Primary)</td>
                                          <td><?php echo $data->first_position; ?></td>
                                       </tr>
                                       <tr>
                                          <td>Position(alternative)</td>
                                          <td><?php echo $data->second_position; ?></td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="videooverlaybox">
                                 <a href="#headerPopup" id="headerVideoLink" target="_blank" class="btn popup-modal"></a>
                                 <iframe width="100%" height="100px" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 240px;"></iframe>
                              </div>
                              <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
                                 <iframe class="embed-responsive-item" width="600" height="480" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Age</p>
                                          <p class="second">21</p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(124.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Weight</p>
                                          <p class="second"><?php echo $data->weight; ?><span class="subtext">Kg</span></p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(124.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Height</p>
                                          <p class="second"><?php echo $data->height; ?></p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(124.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Injuries</p>
                                          <p class="second"><i class="flaticon-accident-17" title="
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis augue, aliquam ac odio sed, lobortis congue tortor. Duis velit tortor, hendrerit vel viverra et, ultricies eu nibh. Nunc auctor, lacus at rutrum ultrices,"></i><?php echo $data->injuries; ?> </p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(124.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="agentplacingmaindiv">
                        <div class="row">
                           <div class="disinb">
                              <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen">
                                 <p><a href="<?= base_url().'myprofile/printcv/'.$data->_User_ID ?>">Print CV</a></p>
                                 <p></p>
                              </div>
                           </div>
                           <div class="disinb">
                              <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen">
                                 <p><a href="https://www.transfermarkt.co.uk/kristers-tobers/profil/spieler/448883" target="_blank">show statistics</a></p>
                                 <p></p>
                              </div>
                           </div>
                           <div class="disinb">
                              <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen" data-toggle="modal" data-target="#producingagentmodel">
                                 <p><a>Show producing agent</a></p>
                                 <p></p>
                              </div>
                           </div>
                           <div class="disinb">
                              <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen" data-toggle="modal" data-target="#placingagentsmodel">
                                 <p><a>Show placing agent</a></p>
                                 <p></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <div class="groundimg groundplayerpotion">
                     <img src="<?php echo base_url() ?>assets/images/ground.png">
                     <i class="fa fa-circle goalkeeper" aria-hidden="true"></i>
                     <i class="fa fa-circle centerback" aria-hidden="true"></i>
                     <i class="fa fa-circle leftback" aria-hidden="true"></i>
                     <i class="fa fa-circle rightback active" aria-hidden="true" title="Right back (Alternative Position)"></i>
                     <i class="fa fa-circle centermidfield1" aria-hidden="true"></i>
                     <i class="fa fa-circle centermidfield2 current" aria-hidden="true" title="center midfield B (Primary Position)"></i>
                     <i class="fa fa-circle leftwing" aria-hidden="true"></i>
                     <i class="fa fa-circle rightwing" aria-hidden="true"></i>
                     <i class="fa fa-circle centerforward" aria-hidden="true"></i>
                     <i class="fa fa-circle striker" aria-hidden="true"></i>
                     <i class="fa fa-circle centerattack" aria-hidden="true"></i>
                  </div>
                  <div class="rightsideprofile">
                     <div class="Leaguedetails Leaguedetailsfirst">
                        <table>
                           <tr>
                              <th>Player Data
                              <?php if($editmode != 'no'){ ?>    
                                  <a href="<?php echo base_url(); ?>myprofile/editprofile/#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a>
                                <?php } ?>
                             </th>
                              <th></th>
                           </tr>
                           <tr>
                              <td>Availability</td>
                              <td><span class="availability-dots" title="Available"></span></td>
                           </tr>
                           <tr>
                              <td>Living</td>
                              <td>Shared</td>
                           </tr>
                           <tr>
                              <td>Spoken languages</td>
                              <td><?php echo $data->user_language; ?></td>
                           </tr>
                           <tr>
                              <td>Family status</td>
                              <td><?php echo $data->family_status; ?> </td>
                           </tr>
                           <tr>
                              <td>jersey number</td>
                              <td><?php echo $data->jersey_number; ?> </td>
                           </tr>
                           <tr>
                              <td>Status</td>
                              <td><?php echo $data->status; ?></td>
                           </tr>
                           <tr>
                              <td>academy</td>
                              <td><?php echo $data->academy; ?></td>
                           </tr>
                           <tr class="last-towbtn">
                           </tr>
                        </table>
                        <table class="secondtable mt-5">
                           <tr>
                              <th colspan="2">Personal Data
                                <?php if($editmode != 'no'){ ?>
                                   <a href="<?php echo base_url(); ?>myprofile/editprofile/#tab-1"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a>
                                 <?php } ?>
                              </th>
                              <!-- <th><button class="signnow-player">Print CV</button></th> -->
                           </tr>
                           <tr>
                              <td>outfitter</td>
                              <td><?php echo $data->outfitter; ?></td>
                           </tr>
                           <tr>
                              <td>shoe size</td>
                              <td><?php echo $data->shoesize; ?></td>
                           </tr>
                           <tr>
                              <td>salary</td>
                              <td><span class="salary-amount" title="this is accepted salary"><?php echo $data->salary; ?> / yearly </span></td>
                           </tr>
                           <tr>
                              <td colspan="2">
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    
                     <!-- <li class="nav-item">
                        <a class="nav-link " id="contact-tab" data-toggle="tab" href="#mandate-old" role="tab" aria-controls="contact" aria-selected="false">Mandate</a>
                     </li> -->
					  <li class="nav-item">
                        <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#mandate" role="tab" aria-controls="contact" aria-selected="false">Mandate</a>
                     </li>
                     
                  </ul>
                  <?php
                   
                      // $readonly = ($editmode != 'yes' AND !empty($mandate_check) AND $mandate_check->_Status=='0')?'disabled':'';
                      // if(isset($mandate_check) AND ($mandate_check->_Status == '1' OR  $mandate_check->_Status == '2')){
                      //   $readonly = 'disabled';
                      // }
                     if(isset($mandate_check) ){ $readonly = 'disabled'; }else{ $readonly = ''; }
                   ?>
                  <div class="tab-content mb-5" id="myTabContent">
                     <!-- <div class="tab-pane fade" id="mandate-old" role="tabpanel" aria-labelledby="profile-tab"></div> -->
                     
					 
					  <div class="tab-pane fade show active" id="mandate" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container-fluid">
                        	  <!--
                        <button class="attributebtn" data-toggle="modal" data-target="#exampleModalCenter">Make Loan Bid </button>
                        <button class="attributebtn" data-toggle="modal" data-target="#exampleModalCenter">Make Transfer bid</button>
                        <button class="attributebtn" data-toggle="modal" data-target="#alertmessage">Add to shotlist </button>
                        <button class="attributebtn" data-toggle="modal" data-target="#exampleModalCenter">Scout player </button>
                        <button class="attributebtn disabledbtn" data-toggle="modal" data-target="#exampleModalCenter" disabled="">Sign now</button>
                        <button class="attributebtn" data-toggle="modal" data-target="#exampleModalCenter">Offer contract </button> -->
                         <button class="attributebtn" data-toggle="modal" data-target="#form-mandate">Mandate Offer </button>
                         <?php
                                 if($editmode == 'no'){
                                 ?>
                                    <a href="<?php echo base_url('agent-profile'); ?>" style="float: right;"><i class="fa fa-arrow-left mr-3"></i>Back to Profile</a>
                                 <?php
                                 } 
                                 ?>
                              </div>
                              <div class="col-md-12">
                                <?php
                                if(isset($mandate_check) AND $mandate_check->_Status== '1' AND $this->session->userdata('usertype') == '1'){

                                    if($mandate_check->_Createby == '1'){
                                    
                                        ?><p style="color:green;">Mandate confirmed with agent.</p><?php 
                                    
                                    }else{

                                    ?><p style="color:green;">Your mandate details accepted by agent.</p><?php  
                                    
                                    }
                                }
                                else if(isset($mandate_check) AND $mandate_check->_Status== '1' AND $this->session->userdata('usertype') == '2'){

                                    if($mandate_check->_Createby == '1'){
                                    
                                        ?><p style="color:green;">Your mandate details accepted by player.</p><?php  
                                    
                                    }else{

                                    ?><p style="color:green;">Mandate confirmed with player.</p><?php

                                    }
                                }

                                if(isset($mandate_check) AND $mandate_check->_Status== '2' AND $mandate_check->_Status== '2' ){
                                    ?><p style="color:green;">Mandate rejected.</p><?php  
                                }
                                else if(isset($mandate_check) AND $mandate_check->_Status== '2' AND $this->session->userdata('usertype') == '2'){
                                    ?><p style="color:green;">Mandate rejected.</p><?php
                                }
                                //print_r($mandate_histry->_Transfer_fee);
                                if(isset($mandate_histry) AND $mandate_check->_Status== '0'){
 
                                     ?>
                                    <p class="info-text">Negotiate details sent by agent</p>
                                <div class="row mandate_details">
                                <?php

                                    if($mandate_histry->_Territory!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Select Territory:</label>
                                          <p><?php echo $mandate_histry->_Territory; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Term_athlete!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Term of the Athlete's Mandate:</label>
                                          <p><?php echo $mandate_histry->_Term_athlete; ?></p>
                                       </div>
                                      <?php
                                    }
                                   /* if($mandate_histry->_Term_contract!='' ){
                                      ?>
                                      <div class="col-md-4">
                                         <label>Term of Contract with club:</label>
                                         <p><?php echo $mandate_histry->_Term_contract; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Expected_salary!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Expected Salary/ budget available:</label>
                                      <p><?php echo $mandate_histry->_Expected_salary; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Transfer_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Transfer Fee:</label>
                                      <p><?php echo $mandate_histry->_Transfer_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Try_outteam!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Try Out Term:</label>
                                      <p><?php echo $mandate_histry->_Try_outteam; ?></p>
                                   </div>
                                      <?php
                                    }*/

                                    if($mandate_histry->_Agency_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Agency fee %:</label>
                                      <p><?php echo $mandate_histry->_Agency_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Extension_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Contract Extension Fee:</label>
                                      <p><?php echo $mandate_histry->_Extension_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Club_termination!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Club termination:</label>
                                      <p><?php echo $mandate_histry->_Club_termination; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry->_Additional_terms!='' ){
                                      ?>
                                      <div class="col-md-4">
                                         <label>Additional Terms:</label>
                                         <p><?php echo $mandate_histry->_Additional_terms; ?></p>
                                     </div>
                                 <?php } ?>
                              </div>
                              <?php  
                                }

                                if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0'){
                                 ?>
                                 <p class="info-text">Negotiate details sent by player</p>
                                    <div class="row mandate_details">
                                <?php
 
                                    if($mandate_histry_agent->_Term_athlete!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Term of the Athlete's Mandate:</label>
                                          <p><?php echo $mandate_histry_agent->_Term_athlete; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Territory!='' ){
                                      ?>
                                      <div class="col-md-4">
                                         <label>Select Territory:</label>
                                         <p><?php echo $mandate_histry_agent->_Territory; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Expected_salary!='' ){
                                      ?>
                                      <div class="col-md-4">
                                         <label>Expected Salary/ budget available:</label>
                                         <p><?php echo $mandate_histry_agent->_Expected_salary; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Transfer_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Transfer Fee:</label>
                                      <p><?php echo $mandate_histry_agent->_Transfer_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Agency_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Agency fee %:</label>
                                      <p><?php echo $mandate_histry_agent->_Agency_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Extension_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Contract Extension Fee:</label>
                                      <p><?php echo $mandate_histry_agent->_Extension_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Try_outteam!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Try Out Term:</label>
                                      <p><?php echo $mandate_histry_agent->_Try_outteam; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Club_termination!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Club termination:</label>
                                      <p><?php echo $mandate_histry_agent->_Club_termination; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if($mandate_histry_agent->_Additional_terms!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Additional Terms:</label>
                                      <p><?php echo $mandate_histry_agent->_Additional_terms; ?></p>
                                   </div>
                                 <?php } ?>
                              </div>
                              <?php } ?> 


                              <?php if(isset($mandate_check)){

                                 if($mandate_check->_Createby == '0' AND $this->session->userdata("usertype") == '1'){
                                    ?><p class="info-text">Mandate details sent by you</p><?php
                                 }else if($mandate_check->_Createby == '0' AND $this->session->userdata("usertype") == '2'){
                                    ?><p class="info-text">Mandate details sent by player</p><?php
                                 }else if($mandate_check->_Createby == '1' AND $this->session->userdata("usertype") == '1'){
                                    ?><p class="info-text">Mandate details sent by agent</p><?php
                                 }else if($mandate_check->_Createby == '1' AND $this->session->userdata("usertype") == '2'){
                                    ?><p class="info-text">Mandate details sent by you</p><?php
                                 }

                               ?>
                                <div class="row mandate_details">
                                <?php
                                if(isset($mandate_check) AND $mandate_check->_Territory_sportclub!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Territory or sports clubs:</label>
                                          <p><?php echo $mandate_check->_Territory_sportclub; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Territory!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Select Territory:</label>
                                          <p><?php echo $mandate_check->_Territory; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Selectclub!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Select Club:</label>
                                          <p><?php echo $mandate_check->_Selectclub; ?></p>
                                       </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Term_athlete!='' ){
                                      ?>
                                       <div class="col-md-4">
                                          <label>Term of the Athlete's Mandate:</label>
                                          <p><?php echo $mandate_check->_Term_athlete; ?></p>
                                       </div>
                                      <?php
                                    }
                                   
                                    if(isset($mandate_check) AND $mandate_check->_Agency_fee != '' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Agency fee %:</label>
                                      <p><?php echo $mandate_check->_Agency_fee.'%'; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Extension_fee!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Contract Extension Fee:</label>
                                      <p><?php echo $mandate_check->_Extension_fee; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Type!='' ){
                                      ?>
                                      <div class="col-md-4">
                                      <label>Type:</label>
                                      <p><?php echo $mandate_check->_Type; ?></p>
                                   </div>
                                      <?php
                                    }
                                    if(isset($mandate_check) AND $mandate_check->_Athlete_termination!='' ){
                                      ?>
                                      <div class="col-md-4">
                                         <label>Additional Terms:</label>
                                         <p><?php echo $mandate_check->_Athlete_termination; ?></p>
                                     </div>
                                 <?php } ?>
                              </div>   
                           <?php } ?>
<!-- ---------------------------------------------start second buttons------------------------------------------------ -->

                              <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '1' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                                if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                     // if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                                   <?php //} ?>
                                             <?php } ?>
                                                         <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                                         <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                             if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                      //if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                                <?php //} ?>

                                                      <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                             <?php } ?>
                                                      <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Status=='0'){ ?>
                                        <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                             <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                        </form>
                                <?php } ?> 

                                <?php //if(isset($mandate_check) AND $mandate_check->_Agent_ID!= $this->session->userdata('currentuser') AND $this->session->userdata('usertype') == '2'){
                                if(isset($mandate_check) AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Createby == '1' AND $mandate_check->_Status=='0'){
                                       
                                       ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                       <?php
                                       if($mandate_check->_Update_by=='0'){
                                       ?>
                                       
                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                    <?php } ?>
                                             <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                        </form>
                                 <?php } ?>
                                
                                <?php if(isset($mandate_check) AND $this->session->userdata('usertype') == '1' AND ($mandate_check->_Status=='2' || $mandate_check->_Status=='1')){  ?>
                                         <button id="clear_mandate" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn">Clear</button> 
                                 <?php } ?>


<!-- ---------------------------------------------end second buttons------------------------------------------------ -->


                        <div class=" mt-5 backcolordark">
                           <div class="row">
                              <div class="col-12 col-sm-3 subtabtitlemenu">
                                 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link subtabtitle active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home-m" role="tab" aria-controls="v-pills-home" aria-selected="true">past</a>
                                    <a class="nav-link subtabtitle" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile-m" role="tab" aria-controls="v-pills-profile" aria-selected="false">Present</a>
                                    <a class="nav-link subtabtitle" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages-m" role="tab" aria-controls="v-pills-messages" aria-selected="false">future </a>
                                 </div>
                              </div>
                              <div class="col-12 col-sm-9">
                                 <div class="tab-content subtab" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home-m" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card">
                                             <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   Show rejected Offer
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                               <!--  <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedpast">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedpast">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedpast">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedpast">offer 4</a></li>
                                                   </ul>
                                                </div> -->
                                             </div>
                                          </div>
                                          <div class="card">
                                             <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                   transfer history
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <!-- <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 4</a></li>
                                                   </ul>
                                                </div> -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="playerdatabox">
                                          <div class="mainbox">
                                             <p class="first">Club Interested</p>
                                             <p class="second">21</p>
                                             <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(244.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                             <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile-m" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card">
                                             <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   Show rejected Offer
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <!-- <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedPresent">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedPresent">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedPresent">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejectedPresent">offer 4</a></li>
                                                   </ul>
                                                </div> -->

                                                <div class="card-body" style="overflow: auto;">
                                                   <table class="sametableall" width="100%">
                                                      <thead>
                                                         <tr>
                                                            <th>Reject By</th>
                                                            <th>Reject Reason</th>
                                                            <th>Rejection Date</th>
                                                            <th>Offer Date</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <?php
                                                         if(!empty($rejected)){
                                                            foreach ($rejected as $rej ) {
                                                               ?>
                                                            <tr>
                                                               <td>
                                                                  <?php
                                                                  if($rej->_Update_by == '0'){
                                                                   echo $rej->first_name.' '.$rej->last_name;
                                                                  }
                                                                  else{
                                                                     echo $rej->_Firstname.' '.$rej->_Lastname;
                                                                  } ?>
                                                                  </td>
                                                                  <td><?php echo $rej->_Content; ?></td>
                                                               <td><?php echo $rej->_Updated; ?></td>
                                                               <td><?php echo $rej->_Created; ?></td>
                                                                
                                                            </tr>
                                                               <?php
                                                            }
                                                         }
                                                          ?>
                                                          
                                                         
                                                      </tbody>
                                                   </table>
                                                </div>
                                              
                                          </div>
                                          <div class="card">
                                             <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">current offers 
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body" style="overflow: auto;">
                                                   <table class="sametableall" width="100%">
                                                      <thead>
                                                         <tr>
                                                            <th>Name</th>
                                                            <th>Nat</th>
                                                            <th>age</th>
                                                            <th>position</th>
                                                            <th>agent(placing)</th>
                                                            <th>agent(producing)</th>
                                                            <th>bids</th>
                                                            <th>status</th>
                                                            <th>expiry in</th>
                                                            <th>type</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <?php
                                                         if(!empty($accepted)){
                                                            foreach ($accepted as $acc ) {
                                                               ?>
                                                            <tr>
                                                               <td><?php echo $acc->first_name.' '.$acc->last_name; ?></td>
                                                               <td><?php echo $acc->country; ?></td>
                                                               <td><?php
                                                                
                                                                  $dateOfBirth = date('d-m-Y',strtotime($acc->_Age));// "17-10-1985";
                                                                  $today = date("Y-m-d");
                                                                  $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                  echo $diff->format('%y');
                                                                 ?></td>
                                                               <td><?php echo $acc->first_position; ?></td>
                                                               <td><?php echo $acc->_Firstname.' '.$acc->_Lastname; ?></td>
                                                               <td><?php echo $acc->agent; ?></td>
                                                               <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                                               <td>Losing</td>
                                                               <td>3</td>
                                                               <td>Revocable </td>
                                                            </tr>
                                                               <?php
                                                            }
                                                         }
                                                          ?>
                                                          
                                                         
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             
                                          </div>
										  <div class="card">
                                             <div class="card-header" id="headingthree">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">current contract
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseThree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                                <div class="card-body" style="overflow: auto;">
                                                   <table class="sametableall mt-5" width="100%">
                                                <thead>
                                                   <tr>
                                                      <th>club name</th>
													  <th>contract type</th>
													  <th>status </th>
                                                      <th>expiry date</th>
                                                      
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>Liver Pool </td>
													  <td>Types</td>
                                                      <td>transfer</td>
													  <td>1/1/2019</td>
                                                      
                                                   </tr>
                                                    <tr>
                                                      <td>Liver Pool </td>
													  <td>Types</td>
                                                      <td>transfer</td>
													  <td>1/1/2019</td>
                                                   </tr>
                                                    <tr>
                                                      <td>Liver Pool </td>
													  <td>Types</td>
                                                      <td>transfer</td>
													  <td>1/1/2019</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                                </div>
                                             </div>
                                             
                                          </div>
										  
										  
                                          
                                       </div>
                                       <div class="playerdatabox">
                                          <div class="mainbox">
                                             <p class="first">Club Interested</p>
                                             <p class="second">21</p>
                                             <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(244.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                             <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                          </div>
                                       </div>
									   
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages-m" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                       <div class="accordion" id="accordionExample">
                                          <div class="card">
                                             <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   Show rejected Offer
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 4</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- <div class="card">
                                             <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                   transfer history
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 4</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div> -->
                                          <div class="card">
                                             <div class="card-header" id="headingthree">
                                                <h2 class="mb-0">
                                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapseTwo">
                                                   pending offers
                                                   </button>
                                                </h2>
                                             </div>
                                             <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. 
                                                   <ul>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 1</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 2</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 3</a></li>
                                                      <li><a href="#" data-toggle="modal" data-target="#offerrejected">offer 4</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <h3 class="mt-5">Agents Interested</h3>
                                          <table class="sametableall" width="100%">
                                             <thead>
                                                <tr>
                                                   <th>Agents name</th>
                                                   <th>Country</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>Abraham</td>
                                                   <td><img src="images/flag.jpg" width="30px"></td>
                                                </tr>
                                                <tr>
                                                   <td>Abraham</td>
                                                   <td><img src="images/flag.jpg" width="30px"></td>
                                                </tr>
                                                <tr>
                                                   <td>Abraham</td>
                                                   <td><img src="images/flag.jpg" width="30px"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
									   <div class="playerdatabox-box">
										<div class="playerdatabox">
                                          <div class="mainbox">
                                             <p class="first">Club intrested</p>
                                             <p class="second">21</p>
                                             <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(244.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                             <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                          </div>
										   
                                       </div>
									   <div class="playerdatabox">
                                          <div class="mainbox">
                                             <p class="first">Agents Interested</p>
                                             <p class="second">21</p>
                                             <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(244.83179px) translateY(-59.16821px) scale(2.85)"></div>
                                             <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
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
					 
					

                     <div class="tab-pane fade characteristicspanelbody" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="technical">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen" data-toggle="modal" data-target="#personalcharacteristics">
                                    <p><a>Personal Characteristics</a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen"  data-toggle="modal" data-target="#individualtechnique">
                                    <p><a>Skills</a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen"  data-toggle="modal" data-target="#tacticalabilities">
                                    <p><a>Tactical</a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen"  data-toggle="modal" data-target="#physicalabilities">
                                    <p><a>Physical </a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="Financial" role="tabpanel" aria-labelledby="profile-tab">
                        <div class=" mt-5 backcolordark">
                           <div class="row">
                              <div class="col-12 col-sm-3 subtabtitlemenu">
                                 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link subtabtitle active" id="v-pills-home-tab" data-toggle="pill" href="#insurance" role="tab" aria-controls="insurance" aria-selected="true">insurance </a>
                                 </div>
                              </div>
                               <div class="col-12 col-sm-9">
                                 <div class="tab-content subtab" id="insurance">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                       <fieldset class="scheduler-border" style="width: 100%;">
                                          <legend class="scheduler-border">Loan</legend>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <table class="sametableall" width="100%">
                                                   <thead>
                                                      <tr><th>Club name</th>
                                                      <th>logo</th>
                                                      <th>club type</th>
                                                   </tr></thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>New Zealand</td>
                                                         <td>RedBlacks</td>
                                                         <td>Lorem ipsume</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div> 
                                          </div>
                                       </fieldset>
                                       <fieldset class="scheduler-border" style="width: 100%;">
                                          <legend class="scheduler-border">Ownership </legend>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <table class="sametableall" width="100%">
                                                   <thead>
                                                      <tr>
                                                         <th>sum</th>
                                                         <th>term</th>
                                                         <th>Ownership %</th>
                                                   </tr></thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>5000</td>
                                                         <td>12 months</td>
                                                         <td>Lorem ipsume</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div> 
                                          </div>
                                       </fieldset>
                                    </div>
                                    
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="modal fade" id="offerrejected" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content contractmodal">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <h4>offer detail</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. </p>
                  <h4>provide by</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed tristique felis. Mauris cursus laoreet nisi, eu maximus eros aliquam consequat. Pellentesque sit amet tellus elit. </p>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis augue, aliquam ac odio sed, lobortis congue tortor.</p>
                  <p>Duis velit tortor, hendrerit vel viverra et, ultricies eu nibh. Nunc auctor, lacus at rutrum ultrices, lacus nibh semper lacus, a laoreet dolor enim non eros. Cras ut viverra lectus, nec volutpat mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ut eros non ipsum tristique tempus sed sed tellus. Praesent tincidunt vitae sem sit amet tincidunt.</p>
                  <p> Vestibulum a varius leo. Praesent imperdiet faucibus quam sit amet maximus. Duis scelerisque lacus et est dictum auctor. Nunc nisl enim, ultricies quis purus vel, dignissim volutpat lectus. Ut orci orci, condimentum vitae maximus id, facilisis a mi.</p>
                  <!-- <button class="allbtnsame">Sign Player <span>$149</span></button> -->
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="alertmessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
                  <p class="mt-5 mb-5">are sure you want to add this player<br>  on your shortlis</p>
               </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Yes</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                 
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="tacticalabilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">TACTICAL</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table>
                     <tr>
                        <td>Coachability</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                        </tr>
                        <tr>
                        <td>Positioning</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                        </tr>
                        <tr>
                        <td>Transition</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                        </tr>
                        <tr>
                        <td>Football IQ</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                        </tr>
                        
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="personalcharacteristics" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Personal Characteristics</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table>
                     <tr>
                     <td>Leadership      </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Confidence   </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Discipline       </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Creativity     </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                    
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="individualtechnique" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">SKILLS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table>
                     <tr>
                        <td>Passing</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                        <td>Set pieces</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                        <td>Long shots</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                        <td>Ball control</td>
                        <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modeltablestar" id="physicalabilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">physical</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table>
                     <tr>
                     <td>Strength         </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Speed </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Jumping </td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     <tr>
                     <td>Tackling</td>
                     <td><span>2.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></span></td>
                     </tr>
                     
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade producingagentmodelsame" id="producingagentmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">producing agent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table  width="100%;" class="sametableall">
                     <thead>
                        <tr>
                        <th>country</th>
                        <th>name</th>
                        <th>date</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <td>india</td>
                        <td>john smith</td>
                        <td>02 apr 2019</td>
                     </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>


      <div class="modal fade producingagentmodelsame" id="mandatepopupagent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%">
            <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterTitle">placing agent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </div>
               <div class="modal-body">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                        <?php //if($upby == 'waitagent'){
                           ?>
                              <!-- <div class="row"> -->
                                <!--  <p style="text-align: center;">Please wait player's response</p>
                                 <style type="text/css">.chk1,#nego_submit{display: none;}</style> -->
                              <!-- </div>    -->
                           <?php
                        //}else{
                           ?>
                           <div class="row">
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk1">
                                <label class="form-check-label" for="chk1">
                                  Select Territory
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk2" >
                                <label class="form-check-label" for="chk2">
                                  Term of the Mandate
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk3">
                                <label class="form-check-label" for="chk3">
                                 Agency fee %
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk4">
                                <label class="form-check-label" for="chk4">
                                  Extension Fee
                                </label>
                              </div>
                              <!-- <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk5">
                                <label class="form-check-label" for="chk5">
                                  Type
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk6">
                                <label class="form-check-label" for="chk6">
                                Athlete termination
                                </label>
                              </div> -->
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk6">
                                <label class="form-check-label" for="chk6">
                                 Additional Terms
                                </label>
                              </div>



                           </div>
                        <?php //} ?>
                        </div>
                      
                        <div class="col-md-12 mt-5">
                         <form id="mandate_negotiable" action="<?php echo base_url('Myprofile/add_mandate_histry') ?>" method="post">
                        <input type="hidden" name="mandateid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>">
                        <input type="hidden" name="playerid" value="<?php echo isset($mandate_check)?$mandate_check->_Player_ID:''; ?>">
                        <input type="hidden" name="agentid" value="<?php echo isset($mandate_check)?$mandate_check->_Agent_ID:''; ?>">
                          
                           <div class="row">
                              <div class="col-md-4 chk1" style="display:none;">
                                 <label>Select Territory</label>
                                 <textarea name="select_territory" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk2" style="display:none;">
                                 <label>Term of the Mandate</label>
                                 <textarea name="term_of_athlete" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk3" style="display:none;">
                                 <label>Agency fee %</label>
                                 <textarea name="agency_fee" class="form-control "></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4 chk4" style="display:none;">
                                 <label>Extension Fee</label>
                                 <textarea name="contract_fee" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk5" style="display:none;">
                                 <label>Athlete Termination</label>
                                 <textarea name="athletes_terminatin" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk6" style="display:none;">
                                 <label>Additional Terms</label>
                                 <textarea name="additional_terms" class="form-control "></textarea>
                              </div>
                           </div>
                            
                           <div class="row">
                             <button type="submit" id="nego_submit" class="attributebtn">Send </button>
                           </div>
                      </form>
 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- <div class="modal fade producingagentmodelsame" id="mandatepopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%">
            <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterTitle">placing agent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </div>
               <div class="modal-body">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                       
                           <div class="row">
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk1" >
                                <label class="form-check-label" for="chk1">
                                  Term of the Mandate
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk2">
                                <label class="form-check-label" for="chk2">
                                  Term of Contract with club
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk3">
                                <label class="form-check-label" for="chk3">
                                  Expected Salary/ budget available
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk4">
                                <label class="form-check-label" for="chk4">
                                  Transfer Fee
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk5">
                                <label class="form-check-label" for="chk5">
                                 Agency fee %
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk6">
                                <label class="form-check-label" for="chk6">
                                  Contract Extension Fee
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk7">
                                <label class="form-check-label" for="chk7">
                                 Try Out Term
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk8">
                                <label class="form-check-label" for="chk8">
                                Club termination
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                                <input class="form-check-input chl_cls" type="checkbox" value="" id="chk9">
                                <label class="form-check-label" for="chk9">
                                 Additional Terms
                                </label>
                              </div>


                           </div>
                        <?php //} ?>
                        </div>
                      
                        <div class="col-md-12 mt-5">
                      <form id="mandate_negotiable" action="<?php echo base_url('Myprofile/add_mandate_histry') ?>" method="post">
                        <input type="hidden" name="mandateid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>">
                        <input type="hidden" name="playerid" value="<?php echo isset($mandate_check)?$mandate_check->_Player_ID:''; ?>">
                        <input type="hidden" name="agentid" value="<?php echo isset($mandate_check)?$mandate_check->_Agent_ID:''; ?>">
                          
                           <div class="row">
                              <div class="col-md-4 chk1" style="display:none;">
                                 <label>Term of the Athlete's Mandate</label>
                                 <textarea name="term_of_athlete" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk2" style="display:none;">
                                 <label>Term of Contract with club</label>
                                 <textarea name="term_of_contract" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk3" style="display:none;">
                                 <label>Expected Salary/ budget available</label>
                                 <textarea name="expected_salary" class="form-control "></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4 chk4" style="display:none;">
                                 <label>Transfer Fee</label>
                                 <textarea name="transfer_fee" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk5" style="display:none;">
                                 <label>Agency fee %</label>
                                 <textarea name="agency_fee" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk6" style="display:none;">
                                 <label>Contract Extension Fee</label>
                                 <textarea name="contract_fee" class="form-control "></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4 chk7" style="display:none;">
                                 <label>Try Out Team</label>
                                 <textarea name="tryout_team" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk8" style="display:none;">
                                 <label>Club termination</label>
                                 <textarea name="club_termination" class="form-control "></textarea>
                              </div>
                              <div class="col-md-4 chk9" style="display:none;">
                                 <label>Additional Terms</label>
                                 <textarea name="additional_terms" class="form-control "></textarea>
                              </div>
                           </div>
                           <div class="row">
                             <button type="submit" id="nego_submit" class="attributebtn">Send </button>
                           </div>
                      </form>
 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->

      <div class="modal fade producingagentmodelsame" id="placingagentsmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">placing agent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table width="100%;" class="sametableall">
                     <thead>
                        <tr>
                           <th>country</th>
                           <th>Name</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                     <tr>
                        <td>india</td>
                        <td>john smith</td>
                        <td>02 apr 2019</td>
                     </tr>
                     <tr>
                        <td>india</td>
                        <td>john smith</td>
                        <td>02 apr 2019</td>
                     </tr>
                     <tr>
                        <td>india</td>
                        <td>john smith</td>
                        <td>02 apr 2019</td>
                     </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </button></div></div></div></div>
 
 
 
 
 <!-- Mandate Form Start -->
 
  <div class="modal fade " id="form-mandate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    
                        <div class="modal-body">
                            <div class=" register">
                                <div class="row">
                                    <div class="col-md-3 register-left">
                                        <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
                                        <h3>Welcome</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                                        

                                    </div>
                                    <div class="col-md-9 register-right">
                                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                 <li class="nav-item">
                                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Agent</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">club</a>
                                 </li>
                             </ul> 
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <h3 class="register-heading">Mandate (Agent)</h3>
                                                <div class=" register-form needs-validation">
                                                    <!-- <form class="needs-validation" novalidate> -->
                                                      <?php if(isset($mandate_check) ){ $readonly = 'disabled'; }else{ $readonly = ''; } ?>
                                                      <form id="mandate_form" method="post" action="<?php echo base_url('Myprofile/add_mandate'); ?>" class="needs-validation">
                                                       <input type="hidden" name="player_id" value="<?php echo isset($playerid)?$playerid:''; ?>" />
                                                       <input type="hidden" name="mandate_editid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>" />
                                                        
														
														 <div class="row">
															  <div class="col-md-12 mb-5 text-right d-none">
																 
																 <input type="text" class="form-control" name="" style="width: 300px;display: inline-block;">
																 <button class="attributebtn"><i class="fa fa-plus"></i> Add Agent </button>
															  </div>
															  <div class="col-md-12">
																 
																 <div class="form-row">

                                                   <div class="col-md-4 mb-3">
                                                      <label for="territoryorsport">Territory or sports clubs</label>
                                                      <select id="territoryorsport" name="territoryorsport" class="custom-select" required>
                                                        <!-- <option value="AF">Worldwide </option> -->
                                                        <option value="territory" <?php if(isset($mandate_check) AND $mandate_check->_Territory == 'territory' ){ echo "SELECTED"; } ?>>Territory </option>
                                                         <option value="club" <?php if(isset($mandate_check) AND $mandate_check->_Territory == 'club' ){ echo "SELECTED"; } ?>>Club/clubs </option>
                                                          <option value="Worldwide">Worldwide </option>
                                                                     </select>                 
                                                   </div>
																	
																	<div class="col-md-4 mb-3 selectterritorydiv">
																	   <label for="selectterritory">Select Territory</label>
																	   <select id="selectterritory" name="territory[]" class="custom-select" multiple="" required>
																		  <option value="Afghanistan">Afghanistan</option>
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

																	 <div class="col-md-4 mb-3 selectclubdiv"  style="display: none;">
                                                      <label for="selectclub">Select clubs</label>
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
                                                   </div>
																	 
																	<div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Term of Mandate</label>
																	 <div class="input-group term-of-contract">
																		<select id="term_athlete" class="custom-select" required=""  name="term_athlete" <?php echo $readonly; ?>/>
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
																	   </span>
																	   </div>
																	   <div class="valid-feedback">
																		  Looks good!
																	   </div>
																	</div>
																	
																	<div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Agency Fee</label>
																		 <div class="input-group term-of-contract">
                                                         
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
																	   <span class="input-group-addon currency-addon">%</span>
																	   </div>
																	</div>
																	<div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Extension Fee</label>
																		 <div class="input-group term-of-contract">
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
																	   <span class="input-group-addon currency-addon">%</span>
																	   </div>
																	  
																	</div>
																	 <div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Type</label>
																	   <select name="type" class="custom-select" required <?php echo $readonly; ?>>
																		  <option value="Revocable" <?php if(isset($mandate_check) AND $mandate_check->_Type == "Revocable"){ echo "SELECTED"; } ?>>Revocable </option>
																		  <option value="Irrevocable" <?php if(isset($mandate_check) AND $mandate_check->_Type == "Irrevocable"){ echo "SELECTED"; } ?>>Irrevocable</option>
																	   </select>
																	</div>
																<div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Athlete Termination </label>
																	   <select name="athlete_termination" class="custom-select" required <?php echo $readonly; ?>>
                                                         <option value="Yes" <?php if(isset($mandate_check) AND $mandate_check->_Athlete_termination == 'Yes' ){ echo "selected"; } ?>>Yes </option>
                                                         <option value="No" <?php if(isset($mandate_check) AND $mandate_check->_Athlete_termination == 'No' ){ echo "selected"; } ?>>No</option>
                                                      </select>
																	</div>
																	
																	<div class="col-md-4 mb-3">
																	   <label for="validationCustom02">Additional Terms</label>
																	   <input type="text" name="additional_terms" class="form-control" id="" required <?php echo $readonly; ?> value="<?php echo isset($mandate_check)?$mandate_check->_Additional_terms:""; ?>">
																	   <div class="valid-feedback">
																		  Looks good!
																	   </div>
																	</div>
																 </div>
																 <!-- <button class="attributebtn" type="submit">Submit</button> -->

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
																 
															  </form>

															  </div>
														   </div>

                                         
                                                   <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '1' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                                if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                     // if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                                   <?php //} ?>
                                             <?php } ?>
                                                         <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                                         <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                             if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                      //if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                                <?php //} ?>

                                                      <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                             <?php } ?>
                                                      <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Status=='0'){ ?>
                                        <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                             <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                        </form>
                                <?php } ?> 

                                <?php //if(isset($mandate_check) AND $mandate_check->_Agent_ID!= $this->session->userdata('currentuser') AND $this->session->userdata('usertype') == '2'){
                                if(isset($mandate_check) AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Createby == '1' AND $mandate_check->_Status=='0'){
                                       
                                       ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                       <?php
                                       if($mandate_check->_Update_by=='0'){
                                       ?>
                                       
                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls">Reject </button>
                                    <?php } ?>
                                             <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent" onclick="return false;">Negotiations</button>
                                        </form>
                                 <?php } ?>
                                
                                <?php if(isset($mandate_check) AND $this->session->userdata('usertype') == '1' AND ($mandate_check->_Status=='2' || $mandate_check->_Status=='1')){  ?>
                                         <button id="clear_mandate" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn">Clear</button> 
                                 <?php } ?>

                                    
                                    </div>
                                </div>
                                       <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <h3 class="register-heading">Mandate (Club)</h3>
                                                <div class="row register-form">
													<div class="col-md-4 mb-3">
														   <label for="validationCustom01">Select Club</label>
														   <select class="custom-select" required="">
															  <option value="ManchesterUnited">Manchester United </option>
															  <option value="Arsenal">Arsenal </option>
															  <option value="Chelsea">Chelsea </option>
															  <option value="Liverpool">Liverpool </option>
															  <option value="OlympiqueLyonnais">Olympique Lyonnais </option>
															  <option value="OlympiquedeMarseille">Olympique de Marseille </option>
															  <option value="ASMonaco">AS Monaco </option>
															  <option value="ParisSaint-Germain">Paris Saint-Germain </option>
														   </select>
														  
														</div>
                                                 
													<div class="col-md-4 mb-3">
														<label for="contracttype">Contract Type </label>
														<select id="contracttype" class="custom-select" required>
															<option value="Professional" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'Professional' ){ echo "selected"; } ?>>Professional </option>
															<option value="amateur" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'amateur' ){ echo "selected"; } ?>>amateur </option>
														</select>
													</div>
													<div class="col-md-4 mb-3 expsalarydiv">
														<label class="" for="expectedsalary">Expected Salary</label>
															<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															  <div class="input-group-addon currency-symbol">$</div>
															  <input type="text" class="form-control currency-amount" id="expectedsalary" placeholder="0.00" size="8" required="" value="<?php echo isset($mandate_check)?$mandate_check->_Expected_salary:""; ?>">
															  <div class="input-group-addon currency-addon">

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
													   <div class="valid-feedback">
														  Looks good!
													   </div>
													</div>
													<div class="col-md-4 mb-3 tutionfeediv" style="display: none;">
														<label class="" for="tuitionfee">Athlets to Club</label>
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<div class="input-group-addon currency-symbol">$</div>
															<input type="text" class="form-control currency-amount" id="tuitionfee" placeholder="0.00" size="8" required="">
															<div class="input-group-addon currency-addon">

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
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="termofcontract">Term of Contract</label>
														<div class="input-group term-of-contract">
															<select id="termofcontract" class="custom-select" required>
																 <?php
															         for($i=1;  $i<60;  $i++) {
      																												?>
      																	<option value="<?php echo $i; ?>">
      																		<?php echo $i; ?>
      																	</option>
      																<?php } ?> 
															</select>
															<span class="input-group-addon currency-addon">Months</span>
														</div>
													</div>
													<!-- <div class="col-md-4 mb-3">
																														   <label for="validationCustom02">Tuition fee</label>
																														   <input type="text" class="form-control" id="validationCustom02"   required>
																														   <div class="valid-feedback">
																															  Looks good!
																														   </div>
																														</div> -->
													<div class="col-md-4 mb-3">
														<label for="monthlysalary">Monthly Salary</label>
														
														<input type="text" class="form-control" id="monthlysalary" readonly="" >
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													

													<!-- <div class="col-md-4 mb-3">
														<label for="validationCustom02">Sign on Fee Type</label>
														<select class="custom-select" required>
															<option value="AF">Team bonus </option>
															<option value="SQ">Individual bonus</option>
														</select>
													</div> -->
													<div class="col-md-4 mb-3">
														<label class="" for="inlineFormInputGroup">Sign on Fee</label>
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<div class="input-group-addon currency-symbol">$</div>
															<input type="text" class="form-control currency-amount" id="inlineFormInputGroup" placeholder="0.00" size="8">
															<div class="input-group-addon currency-addon">

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
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>

													<!--<div class="col-md-4 mb-3">
														<label for="validationCustom02">Transfer Fee</label>
														<input type="text" class="form-control" id="validationCustom02" value="/*<?php echo isset($mandate_check)?$mandate_check->_Transfer_fee:" "; ?>*/" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>-->
													<div class="col-md-4 mb-3">
														<label for="validationCustom02">Flights</label>
														<select class="custom-select" required>
															<option value="one way" <?php if(isset($mandate_check) AND $mandate_check->_Flights == 'one way' ){ echo "selected"; } ?>>One way </option>
															<option value="2 ways" <?php if(isset($mandate_check) AND $mandate_check->_Flights == '2 ways' ){ echo "selected"; } ?>>2 Ways </option>
															<option value="including/excluding" <?php if(isset($mandate_check) AND $mandate_check->_Flights == 'including/excluding' ){ echo "selected"; } ?>>Including/Excluding</option>
															<option value="family members" <?php if(isset($mandate_check) AND $mandate_check->_Flights == 'family members' ){ echo "selected"; } ?>>Family Members</option>
														</select>
													</div>
													<div class="col-md-4 mb-3">
														<label for="accommodation">Accommodation</label>
														<select id="accommodation" class="custom-select" required>
															<option value="provided" <?php if(isset($mandate_check) AND $mandate_check->_Accommodation == 'provided' ){ echo "selected"; } ?>>Provided </option>
															<option value="unprovided" <?php if(isset($mandate_check) AND $mandate_check->_Accommodation == 'unprovided' ){ echo "selected"; } ?>>Unprovided</option>
															<option value="Limited" <?php if(isset($mandate_check) AND $mandate_check->_Accommodation == 'Limited' ){ echo "selected"; } ?>>Limited</option>
														</select>

													</div>
													<!-- <div class="col-md-4 mb-3">
																														   <label for="validationCustom02">limited budget</label>
																														   <input type="text" class="form-control" id="validationCustom02"   required>
																														   <div class="valid-feedback">
																															  Looks good!
																														   </div>
																														</div> -->
													<div class="col-md-4 mb-3 limitedbudgetdiv" style="display: none;">
														<label class="" for="limitedbudget">Limited Budget</label>
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<div class="input-group-addon currency-symbol">$</div>
															<input type="text" class="form-control currency-amount" id="limitedbudget" placeholder="0.00" size="8" required="">
															<div class="input-group-addon currency-addon">

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
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="tryout">Try Out</label>
														<select id="tryout" class="custom-select" required>
															<option value="Yes">Yes </option>
															<option value="No">No</option>
														</select>
													</div>
													<div class="col-md-4 mb-3 tryouttermdiv">
														<label for="tryoutterm">Try Out Term</label>
														<select id="tryoutterm" class="custom-select" required>
															<option value="yes">Yes </option>
															<option value="no">No</option>
														</select>
													</div>
														
													<div class="col-md-4 mb-3">
													   <label for="validationCustom02">Type</label>
													   <select class="custom-select" required>
														  <option value="AF">revocable </option>
														  <option value="SQ">irrevocable</option>
													   </select>
													</div>
													<div class="col-md-4 mb-3">
														<label for="validationCustom02">Club Termination</label>
														<input type="text" class="form-control" id="validationCustom02" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													
														<div class="col-md-4 mb-3">
														   <label for="validationCustom02">Additional Terms</label>
														   <input type="text" class="form-control" id="validationCustom02"   required>
														   <div class="valid-feedback">
															  Looks good!
														   </div>
														</div>
                                                    <div class="col-md-12">
														<button class="attributebtn">Submit</button>
                                                        <button class="attributebtn">Accept </button>
																 <button class="attributebtn">Reject </button>
																 <button class="attributebtn" data-toggle="modal" data-target="#mandatepopupagent">Negotiations</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center pt-0 pb-0">

                        </div>
                     
                </div>
            </div>
        </div>
 
 <!-- Mandate Form End -->
 
 
<div id="success"></div>
      <!-- <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright &copy; 2019 by Sportselect</p>
               </div>
            </div>
         </div>
      </footer>
      </div>
      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="js/jquery.downCount.js"></script>  -->
<style type="text/css">
  .error{color:red;}
</style>
<script type="text/javascript">

jQuery(function() {

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

   jQuery("#territoryorsport").change(function(){ 

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

jQuery( document ).ready(function() {
    jQuery('#headerVideoLink').magnificPopup({
     type:'inline',
     midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
   });
     
   });
   
   jQuery('.countdown').downCount({
        date: '09/09/2020 12:00:00',
        offset: +10
});


var $select1 = $( '#select1' ),
		$select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script> 
<?php
if($scroll =='true'){  
?>
<script type="text/javascript">
jQuery( document ).ready(function() {
   jQuery('#contact-tab').trigger('click');
   
       jQuery('html, body').animate({
          scrollTop: jQuery("#contact-tab").offset().top + 50,
       }, 500);

});
</script>
<?php } ?>