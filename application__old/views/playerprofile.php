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
                
               <div class="up-controls">
                  <div class="row">
                     <div class="col-sm-3">
                        <div class="value-pair">
                           <div class="label">Status:</div>
                           <div class="value badge badge-pill badge-success">Available</div>
                        </div>
                     </div>
                     <div class="col-sm-9 text-right addfriends">
                        <!-- <?= base_url().'myprofile/printcv/'.$profile->_PlayerID; ?> -->
                        <a class="btn btn-primary btn-sm" target="_blank" href="<?= base_url().'myprofile/printcv/'.$profile->_ID; ?>">
                           <i class="ti-printer"></i>
                           <span>Print CV</span>
                        </a>
                        <a class="btn btn-primary btn-sm" href="#">
                           <i class="fa fa-eye"></i>
                           <span>Show statistics</span>
                        </a><!-- 
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
                           <?php $dp = $profile->_Photo!=''?base_url().'uploads/player/user_profile/'.$profile->_Photo:base_url().'assets/images/nouser.jpg';  ?>
                           <img src="<?php echo $dp; ?>">
                           <p class="titletag"></p>
                           <p class="titlename"> <?php echo $profile->_Firstname.' '.$profile->_Lastname; ?></p>
                           <i class="fa fa-user-plus connections"> 123 Connections</i>
                           <a class="connectbtn" href="#">
                              <span>Connect</span>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="contryandclubname">
                           <?php $flag = 'https://www.countryflags.io/'.$profile->_CountryCode.'/flat/64.png'; ?>
                           <img src="<?php echo $flag; ?>">
                           <p class="titletag">Country</p>
                           <p class="titlename"><?php echo $profile->_Country!=''?$profile->_Country:'-'; ?></p>
                           
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="contryandclubname">
                           <img src="<?php echo base_url() ?>assets/new/images/liverpool-football-club.png">
                           <p class="titletag">Club Name</p>
                           <p class="titlename"><?php echo $profile->_ClubName!=''?$profile->_ClubName:'-'; ?></p>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="contryandclubname">
                           <img src="<?php echo base_url() ?>assets/new/images/contract-icon.png">
                           <p class="titletag">Contract</p>
                           <p class="titlename">
                              <?php
                              if($profile->_LastContractdate != ''){
                                 $date1 = strtotime(date('Y-m-d H:i:s'));  
                                 $date2 = strtotime($profile->_LastContractdate);
                                 $diff = abs($date2 - $date1);
                                 $years = floor($diff / (365*60*60*24));
                                 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
                                 echo $days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24));
                                 echo " Days";
                              }else{
                                 echo "-";                                 
                              }
                               ?>
                               
                           </p>
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
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-sm-6 b-r b-b b-t b-l">
                                 <div class="el-tablo centered padded">
                                    <div class="value"><?php echo $profile->_Age!=''?$profile->_Age:'-'; ?></div>
                                    <div class="label">age</div>
                                 </div>
                              </div>
                              <div class="col-sm-6 b-b b-r b-t">
                                 <div class="el-tablo centered padded">
                                    <div class="value"><?php echo $profile->_Weight!=''?$profile->_Weight.'<sub>KG</sub>':'-'; ?></div>
                                    <div class="label">weight</div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6 b-r b-b b-l">
                                 <div class="el-tablo centered padded">
                                    <div class="value"><?php echo $profile->_Heigth!=''?$profile->_Heigth.'<sub>CM</sub>':'-'; ?></div>
                                    <div class="label">Height</div>
                                 </div>
                              </div>
                              <div class="col-sm-6 b-r b-b">
                                 <div class="el-tablo centered padded">
                                    <div class="value"><i class="flaticon-accident-17"></i></div>
                                    <div class="label">injuries<p><?php echo $profile->_Ijuries!=''?$profile->_Ijuries:'-'; ?></p></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <iframe width="100%" height="100px" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 170px;"></iframe>
                        </div>
                     </div>
                     <!-- <div class="padded">
                        <div class="os-progress-bar primary">
                           <div class="bar-labels">
                              <div class="bar-label-left"><span>Profile Completion</span><span class="positive">+10</span></div>
                              <div class="bar-label-right"><span class="info">72/100</span></div>
                           </div>
                           <div class="bar-level-1" style="width: 100%">
                              <div class="bar-level-2" style="width: 80%">
                                 <div class="bar-level-3" style="width: 30%"></div>
                              </div>
                           </div>
                        </div>
                        <div class="os-progress-bar primary">
                           <div class="bar-labels">
                              <div class="bar-label-left"><span>Status Unlocked</span><span class="positive">+5</span></div>
                              <div class="bar-label-right"><span class="info">45/100</span></div>
                           </div>
                           <div class="bar-level-1" style="width: 100%">
                              <div class="bar-level-2" style="width: 30%">
                                 <div class="bar-level-3" style="width: 10%"></div>
                              </div>
                           </div>
                        </div>
                        <div class="os-progress-bar primary">
                           <div class="bar-labels">
                              <div class="bar-label-left"><span>Followers</span><span class="negative">-12</span></div>
                              <div class="bar-label-right"><span class="info">74/100</span></div>
                           </div>
                           <div class="bar-level-1" style="width: 100%">
                              <div class="bar-level-2" style="width: 80%">
                                 <div class="bar-level-3" style="width: 60%"></div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
               <div class="up-contents">
                  <div class="row">
                  <div class="col-sm-12">
                     <table class="playeraboutinfotable">
                              <tbody>
                                 <tr>
                                    <td>Signing rate</td>
                                    <td title="Signing rate">86.59%</td>
                                 </tr>
                                 <tr>
                                    <td>Reputation </td>
                                    <td><?php echo $profile->_Reputation!=''?$profile->_Reputation:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Agent name</td>
                                    <td><?php if(!empty($producingagent)){ echo  $producingagent->_Firstname.' '.$producingagent->_Lastname; }else{ echo '-'; } ?></td>
                                 </tr>
                                 <tr>
                                    <td>Preferred side</td>
                                    <td><?php echo $profile->_PreferedSide!=''?$profile->_PreferedSide:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Position(Primary)</td>
                                    <td><?php echo $profile->_PrimaryPosition!=''?$profile->_PrimaryPosition:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Position(alternative)</td>
                                    <td><?php echo $profile->_AlternatePosition!=''?$profile->_AlternatePosition:'-'; ?></td>
                                 </tr>
                              </tbody>
                          </table>
                  </div>
                  <div class="col-sm-12 mt-5">
                     <h6 class="element-header">Player Data</h6>
                     <!-- <a href="profile-edit.html#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a> -->
                           <table class="playeraboutinfotable">
                                 <tbody>
                                 <tr>
                                    <td>Living</td>
                                    <td><?php echo $profile->_Living!=''?$profile->_Living:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Spoken languages</td>
                                    <td><?php echo $profile->_SpokenLanguage!=''?$profile->_SpokenLanguage:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Family status</td>
                                    <td><?php echo $profile->_FamilyStatus!=''?$profile->_FamilyStatus:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>jersey number</td>
                                    <td><?php echo $profile->_JerseyNumber!=''?$profile->_JerseyNumber:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>Status</td>
                                    <td><?php echo $profile->_Status!=''?$profile->_Status:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>academy</td>
                                    <td><?php echo $profile->_Academy!=''?$profile->_Academy:'-'; ?></td>
                                 </tr>
                              </tbody>
                          </table>
                  </div>
                  <div class="col-sm-12 mt-5">
                     <h6 class="element-header">Personal Data</h6>
                     <!-- <a href="profile-edit.html#tab-2"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a> -->
                           <table class="playeraboutinfotable" width="100%">
                                 <tbody>
                                 <tr>
                                    <td>outfitter</td>
                                    <td><?php echo $profile->_Outfitter!=''?$profile->_Outfitter:'-'; ?></td>
                                 </tr>
                                 <tr>
                                    <td>shoe size</td>
                                    <td><?php echo $profile->_ShoesSize!=''?$profile->_ShoesSize.' UK':'-'; ?> UK</td>
                                 </tr>
                                 <tr>
                                    <td>salary</td>
                                    <td><?php echo $profile->_Salary!=''?"$".$profile->_Salary.' / yearly':'-';  ?></td>
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
            <div class="groundpart">
               <div class="groundimg groundplayerpotion">
                   
                        <img src="<?php echo base_url() ?>assets/new/images/ground.png">
                        <?php
                         $arr= explode(',', $profile->_AlternatePosition) ;
                         //print_r($arr); 
                         ?>
                        <i class="fa fa-circle goalkeeper <?php echo in_array('goalkeeper',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'goalkeeper'){echo "current";} ?>" <?php 
                        if($profile->_PrimaryPosition == 'goalkeeper'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; }
                        if(in_array('goalkeeper',$arr)){ echo " title='goalkeeper (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'goalkeeper'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; }  ?> aria-hidden="true"></i>
                        <i class="fa fa-circle centerback <?php echo in_array('centerback',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'centerback'){echo "current";} ?>" <?php
                        if($profile->_PrimaryPosition == 'centerback'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; }
                        if(in_array('centerback',$arr)){ echo " title='centerback (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'centerback'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; }  ?> aria-hidden="true"></i>
                        <i class="fa fa-circle leftback <?php echo in_array('leftback',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'leftback'){echo "current";} ?>" <?php 
                        if($profile->_PrimaryPosition == 'leftback'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('leftback',$arr)){ echo " title='leftback (Alternative Position)'";  }
                        
                        // if($profile->_AlternatePosition == 'leftback'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; }  ?> aria-hidden="true"></i>
                        <i class="fa fa-circle rightback <?php echo in_array('rightback',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'rightback'){ echo "current";  } ?>" <?php 
                        if($profile->_PrimaryPosition == 'rightback'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('rightback',$arr)){ echo " title='rightback (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'rightback'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?> aria-hidden="true" ></i>
                        <i class="fa fa-circle centermidfield1 <?php echo in_array('centermidfield1',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'centermidfield1'){echo "current";} ?>" <?php 
                        if($profile->_PrimaryPosition == 'centermidfield1'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('centermidfield1',$arr)){ echo " title='centermidfield1 (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'centermidfield1'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?> aria-hidden="true"></i>
                        <i class="fa fa-circle centermidfield2 <?php echo in_array('centermidfield2',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'centermidfield2'){echo "current";} ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'centermidfield2'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('centermidfield2',$arr)){ echo " title='centermidfield2 (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'centermidfield2'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?> ></i>
                        <i class="fa fa-circle leftwing <?php echo in_array('leftwing',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'leftwing'){ echo "current"; }  ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'leftwing'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('leftwing',$arr)){ echo " title='leftwing (Alternative Position)'";  }   
                        // if($profile->_AlternatePosition == 'leftwing'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?> ></i>
                        <i class="fa fa-circle rightwing <?php echo in_array('rightwing',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'rightwing'){echo "current";} ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'rightwing'){ echo " title='rightwing (Primary Position)'"; } 
                        //if($profile->_AlternatePosition == 'rightwing'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; }
                        if(in_array('rightwing',$arr)){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'";  } ?>></i>
                        <i class="fa fa-circle centerforward <?php echo in_array('centerforward',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'centerforward'){echo "current";} ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'centerforward'){ echo " title='centerforward (Primary Position)'"; } 
                        //if($profile->_AlternatePosition == 'centerforward'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; }
                        if(in_array('centerforward',$arr)){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'";  } ?>></i>
                        <i class="fa fa-circle striker <?php echo in_array('striker',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'striker'){echo "current";} ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'striker'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('striker',$arr)){ echo "title='striker (Alternative Position)'";  }
                        // if($profile->_AlternatePosition == 'striker'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?>></i>
                        <i class="fa fa-circle centerattack <?php echo in_array('centerattack',$arr)?'active':''; 
                        if($profile->_PrimaryPosition == 'centerattack'){echo "current";} ?>" aria-hidden="true" <?php 
                        if($profile->_PrimaryPosition == 'centerattack'){ echo " title='".$profile->_PrimaryPosition." (Primary Position)'"; } 
                        if(in_array('centerattack',$arr)){ echo " title='centerattack (Alternative Position)'";  }  
                        //if($profile->_AlternatePosition == 'centerattack'){ echo " title='".$profile->_AlternatePosition." (Alternative Position)'"; } ?>></i>
                   </div>
                   <div class="detailsofpotion">
                     <h6>Position (Primary) :<span><?php echo $profile->_PrimaryPosition!=''?$profile->_PrimaryPosition:'-'; ?> </span></h6>
                     <h6>Position (Alternative) : <span><?php echo $profile->_AlternatePosition!=''?$profile->_AlternatePosition:'-'; ?> </span></h6>
                   </div>
                </div>
         </div>
      </div>
      <div class="row row-eq-height">
         
      </div>
      <div class="row row-eq-height">
         <div class="col-sm-12 mt-5">
            <h6 class="element-header">Producing Agent</h6> 
         </div>
         <div class="col-sm-12 users-list-w">
         <?php if(!empty($producingagent)){ ?>
            <div class="user-w with-status status-green">
               <div class="user-avatar-w">
                  <div class="user-avatar">
                     <?php  $pp = !empty($producingagent->_Photo)?base_url().'uploads/agent/user_profile/'.$producingagent->_Photo:base_url().'assets/images/nouser.jpg'; ?>
                     <img alt="" src="<?php echo $pp; ?>">
                  </div>
               </div>
               <div class="user-name">
                  <h6 class="user-title">
                     <?php
                     if(!empty($producingagent)){

                     echo $producingagent->_Firstname.' '.$producingagent->_Lastname;  
                     } else{
                        echo '-';
                     } ?></h6>
                  <div class="user-role">Producing Agent</div>
               </div>
               <div class="user-action">
                  <div class="ti-email"></div>
               </div>
            </div>
      <?php }else{
         echo "<p>No producing agent found. </p>";
      } ?>
         </div>
      </div>
      <div class="row row-eq-height">
         <div class="col-sm-12 mt-5">
            <h6 class="element-header">Placing Agent</h6>   
         </div>
         <?php
         //echo "<pre>"; print_r($placingagent);
          ?>
         <div class="col-sm-12 users-list-w">
            
         <?php 
         if(!empty($placingagent)){
            foreach ($placingagent as $key => $value) {
               
            ?>
               <div class="user-w with-status status-green">
                  <div class="user-avatar-w">
                     <div class="user-avatar">
                        <?php  $pa = !empty($value->_Photo)?base_url().'uploads/agent/user_profile/'.$value->_Photo:base_url().'assets/images/nouser.jpg'; ?>
                        <img alt="" src="<?php echo $pa; ?>">
                     </div>
                  </div>
                  <div class="user-name">
                     <h6 class="user-title"><?php echo $value->_Firstname.' '.$value->_Lastname; ?></h6>
                     <div class="user-role">Producing Agent</div>
                  </div>
                  <div class="user-action">
                     <div class="ti-email"></div>
                  </div>
               </div>
         <?php }  
          }
          else{
            echo "<p>Placing agent not found.</p>";
          }  
         ?>   
             
         </div>
      </div>
   </div>
</div>