<?php
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php
  
} ?>
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
                           <p class="playername">
                              <?php echo $user->_Club_name; ?>
                              <a href="<?php echo base_url('edit-profile'); ?>"><i class="fa fa-pencil" title="edit playerdata" style="color: #064cc4;margin-left: 15px;"></i></a>
                           </p>
                           <div class="playercountry">
                              <!-- <img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"> -->
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
                              <?php

                                 if($user->_Photo != ''){

                                   $image_path = base_url('uploads/club/user_profile/' . $user->_Photo);
                                   $thumb_path = preg_replace('~\.(?!.*\.)~', '-141x130.', $image_path);

                                   ini_set('allow_url_fopen', true);

                                   if (getimagesize($thumb_path)) {
                                       $image_path = $thumb_path;
                                  }

                                 } else{
                                          $image_path = base_url().'assets/images/liverpool-football-club.png';
                                       } 
                              ?>
                              <img src="<?php echo $image_path; ?>">
                           </div>
                           <div class="countryclubday">
                              <div class="commondthreepart">
                                 <div class="commonimage">
                                    <img src="<?php echo base_url().'assets/' ?>/images/flag.jpg">
                                 </div>
                                 <p class="first">caneda</p>
                                 <p class="second">contry</p>
                              </div>
                              
                           </div>
                           <div class="playerinfo">
                              <div class="maindivinfo">
                                 <div class="profileinfo">
                                    <table>
                                       <tr>
                                          <td>senior</td>
                                          <td> <?php echo $user->_Senior; ?></td>
                                       </tr>
                                       <tr>
                                          <td>youth</td>
                                          <td> <?php echo $user->_Youth; ?></td>
                                       </tr>
                                       <tr>
                                          <td>independent academy </td>
                                          <td> <?php echo $user->_Independent_academy; ?></td>
                                       </tr>
                                       <tr>
                                          <td>address</td>
                                          <td><?php echo $user->_Address; ?></td>
                                       </tr>
                                       
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <table class="sametableall" width="100%">
                              <thead>
                                 <tr>
                                    <th>leagues name</th>
                                    <th>discription</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>EFL Championship</td>
                                    <td>English Football Leagues</td>
                                 </tr>
                                 <tr>
                                    <td>EFL Leagues one</td>
                                    <td>English Football Leagues</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-md-6">
                  
                  <div class="rightsideprofile">
                     <div class="Leaguedetails Leaguedetailsfirst">
                        <div style="color: #fff;background: #e48f3f;padding: 10px;font-size: 16px; font-weight: bold;">Stadium Data <a href="<?php echo base_url('edit-profile#tab-2'); ?>"><i class="fa fa-pencil" title="edit playerdata" style="color: #fff;margin-left: 15px;"></i></a></div>
                        <table>
                          
                           <tr>
                              <td>Stadium </td>
                              <td><?php echo $user->_Club_name; ?></td>
                           </tr>
                           <tr>
                              <td>date of construction</td>
                              <td><?php echo date('d-m-Y',strtotime($user->_Contruction_date)); ?></td>
                           </tr>
                           <tr>
                              <td>Capacity (seats) </td>
                              <td><?php echo $user->_Capacity; ?></td>
                           </tr>
                           <tr>
                              <td>Achievements</td>
                              <td><?php echo $user->_Achievements; ?></td>
                           </tr>
                           <tr>
                              <td>Website </td>
                              <td style="text-transform: none;"><a href="<?php echo $user->_Website; ?>" target="_blank"><?php echo $user->_Website; ?></a></td>
                           </tr>
                           <tr>
                              <td>Date of foundation </td>
                              <td><?php echo date('d-m-Y',strtotime($user->_Foundation_date)); ?></td>
                           </tr>
                           <tr>
                              <td>club category </td>
                              <td><?php echo $user->_Club_category; ?></td>
                           </tr>
                           <tr>
                              <td>club sponsors</td>
                              <td><?php echo $user->_Club_sponsors; ?></td>
                           </tr>
                        </table>
                     </div>
                 
                     
                  </div>
               </div>


               <div class="col-md-12">
                              <div class="row mt-3">
                                 <div class="col-md-3">
                                    <div class="playerdatabox" data-toggle="modal" data-target="#registeredfans">
                                       <div class="mainbox">
                                          <p class="first">Registered fans</p>
                                          <p class="second">21 </p>
                                          <span class="clickhere">click here</span>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(300px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Date of foundation</p>
                                          <p class="second"><?php echo date('d - m - Y' ,strtotime( $user->_Foundation_date2)); ?></span></p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(300px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Tier </p>
                                          <p class="second"><?php echo $user->_Tier; ?></p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(300px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="playerdatabox">
                                       <div class="mainbox">
                                          <p class="first">Club Type </p>
                                          <p class="second"><?php echo $user->_Club_type; ?></p>
                                          <div class="box-modern-circle box-modern-circle-1" style="transform: translateX(300px) translateY(-59.16821px) scale(2.85)"></div>
                                          <div class="box-modern-circle box-modern-circle-2" style="transform: scale(8.02832);left: -9px;top: 93% !important;"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
 
               <div class="col-md-12">
                  <ul class="nav nav-tabs clubpagetabnav" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="false">Staff</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#reference" role="tab" aria-controls="reference " aria-selected="false">Reference </a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#transfers1" role="tab" aria-controls="transfers1" aria-selected="false">Transfers</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#mandate" role="tab" aria-controls="mandate" aria-selected="false">Mandate</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#characteristics" role="tab" aria-controls="characteristics" aria-selected="false">Characteristics</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#financial" role="tab" aria-controls="financial" aria-selected="false">Financial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#facilities" role="tab" aria-controls="facilities" aria-selected="false">facilities </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#vacancies" role="tab" aria-controls="vacancies" aria-selected="false">vacancies</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " id="profile-tab" data-toggle="tab" href="#photosstadium" role="tab" aria-controls="photosstadium" aria-selected="false">Photos</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     
                     <div class="tab-pane fade show active subtabintab" id="staff" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                           <div class="col-md-12">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false">first team</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false">Reserve team</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false">17/18 years</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false"> 15/16 years </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false"> staff </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false"> team picture </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-5" role="tab" aria-controls="subtab-5" aria-selected="false"> administration </a>
                                 </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade" id="subtab-1" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                 </div>
                                 <div class="tab-pane fade" id="subtab-2" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                 </div>
                                 <div class="tab-pane fade" id="subtab-3" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                 </div>
                                 <div class="tab-pane fade" id="subtab-4" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                 </div>
                                 
                                 <div class="tab-pane fade show active" id="subtab-5" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                       <div class="col-md-2 tableheightfixed10record">
                                          <div class="sidefixedtableheight">
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>President</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>GM</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>head coach</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>head coach</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-10 tableheightfixed10record">
                                          <table width="100%" class="stafftable sametableall">
                                             <thead>
                                                <tr>
                                                   <th>name</th>
                                                   <th>nat</th>
                                                   <th>age</th>
                                                   <th>role</th>
                                                   <th>lev</th>
                                                   <th>talent</th>
                                                   <th>mot</th>
                                                   <th>salary</th>
                                                   <th>contract</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                               
                                                
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="subtab-6" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                 </div>
                                 <div class="tab-pane fade" id="subtab-7" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                       <div class="col-md-2 tableheightfixed10record">
                                          <div class="sidefixedtableheight">
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>President</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>GM</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>head coach</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                             <div class="mainstaff">
                                                <img src="<?php echo base_url().'assets/' ?>/images/media-img.png">
                                                <div class="staffdetails">
                                                   <p>head coach</p>
                                                   <p>Santa fabelo, A <span>(Lvl 9)</span></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-10 tableheightfixed10record">
                                          <table width="100%" class="stafftable sametableall">
                                             <thead>
                                                <tr>
                                                   <th>name</th>
                                                   <th>nat</th>
                                                   <th>age</th>
                                                   <th>role</th>
                                                   <th>lev</th>
                                                   <th>talent</th>
                                                   <th>mot</th>
                                                   <th>salary</th>
                                                   <th>contract</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
                                                </tr>
                                                <tr>
                                                   <td>abraham</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>40</td>
                                                   <td>fitness coach</td>
                                                   <td>60</td>
                                                   <td>
                                                      <span>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                      </span>
                                                   </td>
                                                   <td>100%</td>
                                                   <td>$1200</td>
                                                   <td>1/1/19</td>
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
                     
                     <div class="tab-pane fade" id="reference" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="referencepart">
                           
                           <div class="detailsbox">
                              <!--  -->
                              <div class="row">
                                 <div class="col-md-4">
                                    <table class="sametableall">
                                       <thead>
                                          <th>title</th>
                                          <th>discription</th>
                                       </thead>
                                       <tbody>
                                       <tr>
                                          <td>player name</td>
                                          <td>Kylian Mbappe</td>
                                       </tr>
                                       <tr>
                                          <td>player id</td>
                                          <td>152489655</td>
                                       </tr>
                                       <tr>
                                          <td>characteristics</td>
                                          <td>lorem ipsum...<a href="#">more</a></td>
                                       </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     


                     <div class="tab-pane fade transfersnewsignings subtabintab" id="transfers1" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                           <div class="col-md-12">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#transfers" role="tab" aria-controls="transfers" aria-selected="false">Transfers </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#transferssub" role="tab" aria-controls="transferssub" aria-selected="false">transfers</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bids" role="tab" aria-controls="bids" aria-selected="false">bids</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#financialcooperation" role="tab" aria-controls="financialcooperation" aria-selected="false">Financial cooperation </a>
                                 </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade show active" id="transfers" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="">
                                       <div class="row">
                                          <div class="col-12 col-sm-3">
                                             <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link subtabtitle active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">past</a>
                                                <a class="nav-link subtabtitle" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">preent</a>
                                                <a class="nav-link subtabtitle" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">future </a>
                                                <a class="nav-link subtabtitle" id="v-pills-offerplayer-tab" data-toggle="pill" href="#v-pills-offerplayer" role="tab" aria-controls="v-pills-offerplayer" aria-selected="false">offer player  </a>
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-9">
                                             <div class="tab-content subtab" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                   <table width="100%" class="stafftable sametableall">
                                                      <thead>
                                                         <tr>
                                                            <th>name</th>
                                                            <th>nat</th>
                                                            <th>age</th>
                                                            <th>role</th>
                                                            <th>lev</th>
                                                            <th>talent</th>
                                                            <th>mot</th>
                                                            <th>salary</th>
                                                            <th>contract</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                   <table width="100%" class="stafftable sametableall">
                                                      <thead>
                                                         <tr>
                                                            <th>name</th>
                                                            <th>nat</th>
                                                            <th>age</th>
                                                            <th>role</th>
                                                            <th>lev</th>
                                                            <th>talent</th>
                                                            <th>mot</th>
                                                            <th>salary</th>
                                                            <th>contract</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                   <table width="100%" class="stafftable sametableall">
                                                      <thead>
                                                         <tr>
                                                            <th>name</th>
                                                            <th>nat</th>
                                                            <th>age</th>
                                                            <th>role</th>
                                                            <th>lev</th>
                                                            <th>talent</th>
                                                            <th>mot</th>
                                                            <th>salary</th>
                                                            <th>contract</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-offerplayer" role="tabpanel" aria-labelledby="v-pills-offerplayer-tab">
                                                   <table width="100%" class="stafftable sametableall">
                                                      <thead>
                                                         <tr>
                                                            <th>name</th>
                                                            <th>nat</th>
                                                            <th>age</th>
                                                            <th>role</th>
                                                            <th>lev</th>
                                                            <th>talent</th>
                                                            <th>mot</th>
                                                            <th>salary</th>
                                                            <th>contract</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
                                                         </tr>
                                                         <tr>
                                                            <td>abraham</td>
                                                            <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                            <td>40</td>
                                                            <td>fitness coach</td>
                                                            <td>60</td>
                                                            <td>
                                                               <span>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                               </span>
                                                            </td>
                                                            <td>100%</td>
                                                            <td>$1200</td>
                                                            <td>1/1/19</td>
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
                                 <div class="tab-pane fade" id="transferssub" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                       <div class="col-md-7">
                                          <h5>New signings</h5>
                                          <table width="100%" class="sametableall">
                                             <thead>
                                                <th>name</th>
                                                <th>age</th>
                                                <th>pos</th>
                                                <th>lev</th>
                                                <th>cou</th>
                                                <th>previous club</th>
                                                <th>free</th>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                             </tbody>
                                          </table>

                                          <h5>Players who left</h5>
                                          <table width="100%" class="sametableall">
                                             <thead>
                                                <th>name</th>
                                                <th>age</th>
                                                <th>pos</th>
                                                <th>lev</th>
                                                <th>cou</th>
                                                <th>previous club</th>
                                                <th>free</th>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   <td>$3.1M</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="col-md-5">
                                          <h5>Leaving players</h5>
                                          <table width="100%" class="sametableall">
                                             <thead>
                                                <th>name</th>
                                                <th>age</th>
                                                <th>pos</th>
                                                <th>lev</th>
                                                <th>club</th>
                                                <th>L</th>
                                                
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                          <h5>intersted in...</h5>
                                          <table width="100%" class="sametableall">
                                             <thead>
                                                <th>name</th>
                                                <th>age</th>
                                                <th>pos</th>
                                                <th>lev</th>
                                                <th>club</th>
                                                <th>L</th>
                                                
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   
                                                </tr>
                                                <tr>
                                                   <td>deigo lopez</td>
                                                   <td>30</td>
                                                   <td>GK</td>
                                                   <td>76</td>
                                                   <td><img src="<?php echo base_url().'assets/' ?>/images/flag.jpg"></td>
                                                   <td>N/A</td>
                                                   
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="sametableall" width="100%">
                                       <thead>
                                          <th>Player</th>
                                          <th>Status</th>
                                          <th>Bid</th>
                                          <th>Expiry in</th>
                                       </thead>
                                       <tbody>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="tab-pane fade" id="financialcooperation" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mb-5">
                                       <div class="col-md-2">
                                       <div class="form-group">
                                          <label for="validationCustom02">Country</label>
                                          <select class="custom-select" required="">
                                             <option>Separate</option>
                                             <option>Share</option>
                                             <option>None</option>
                                          </select>
                                          <div class="invalid-feedback">Example invalid custom select feedback</div>
                                       </div>
                                    </div>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <label for="validationCustom02">leagues </label>
                                          <select class="custom-select" required="">
                                             <option>Separate</option>
                                             <option>Share</option>
                                             <option>None</option>
                                          </select>
                                          <div class="invalid-feedback">Example invalid custom select feedback</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-check mt-4" >
                                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                         <label class="form-check-label" for="exampleRadios1">
                                           Bigger clubs
                                         </label>
                                       </div>
                                       <div class="form-check">
                                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                         <label class="form-check-label" for="exampleRadios2">
                                           Smaller Clubs
                                         </label>
                                       </div>
                                       </div>
                                    </div>
                                    <table class="sametableall" width="100%">
                                       <thead>
                                          <th>Player</th>
                                          <th>Status</th>
                                          <th>Bid</th>
                                          <th>Expiry in</th>
                                       </thead>
                                       <tbody>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       <tr>
                                          <td>Rauf Tahan</td>
                                          <td>Losing</td>
                                          <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                                          <td>Expired</td>
                                       </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     
                     <div class="tab-pane fade" id="mandate" role="tabpanel" aria-labelledby="profile-tab">
                       
                     </div>

                     <div class="tab-pane fade" id="characteristics" role="tabpanel" aria-labelledby="profile-tab">
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
                                    <p><a>Individual technique</a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen"  data-toggle="modal" data-target="#tacticalabilities">
                                    <p><a>Tactical abilities</a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="characteristicsname buttontypeeffect btnPush btnBlueGreen"  data-toggle="modal" data-target="#physicalabilities">
                                    <p><a>Physical abilities </a></p>
                                    <p>2.8<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                     </div>
                     <div class="tab-pane fade subtabintab" id="financial" role="tabpanel" aria-labelledby="profile-tab">
                       <div class="row">
                           <div class="col-md-12">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#subtab-8" role="tab" aria-controls="subtab-8" aria-selected="false"> income </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#subtab-9" role="tab" aria-controls="subtab-9" aria-selected="false"> expedition </a>
                                 </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane fade show active" id="subtab-8" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                     
                                       <div class="col-md-12">
                                          <table width="100%" class="stafftable sametableall">
                                             <thead>
                                                <tr>
                                                   <th>Title</th>
                                                   <th>income</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>tickets</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>tv</td>
                                                   <td>$15,000.00</td>
                                                
                                                </tr>
                                                <tr>
                                                   <td>sponsores</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>merchandise</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>player</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="subtab-9" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                     
                                       <div class="col-md-12">
                                          <table width="100%" class="stafftable sametableall">
                                             <thead>
                                                <tr>
                                                   <th>Title</th>
                                                   <th>income</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>staff salary</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>Player salary</td>
                                                   <td>$15,000.00</td>
                                                
                                                </tr>
                                                <tr>
                                                   <td>infrastructure</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>administration</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>miscellaneous</td>
                                                   <td>$15,000.00</td>
                                                </tr>
                                                <tr>
                                                   <td>youth academy</td>
                                                   <td>$15,000.00</td>
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
                     <div class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="profile-tab">
                       <table class="sametableall" width="50%">
                          <tbody>
                             <tr>
                                <td>Youth Academy</td>
                                <td>4.5 <i class="fa fa-star fillstar" aria-hidden="true"></i></td>
                             </tr>
                             <tr>
                                <td>stadium</td>
                                <td>50,000</td>
                             </tr>
                          </tbody>
                       </table>
                     </div>
                     <div class="tab-pane fade" id="vacancies" role="tabpanel" aria-labelledby="profile-tab">
                       <table class="sametableall" width="100%">
                        <thead>
                           <th>post name</th>
                           <th>age</th>
                           <th>experience</th>
                           <th>type</th>
                           <th>salary</th>
                           <th>interest</th>
                           <th>Discription</th>
                        </thead>
                          <tbody>
                             <tr>
                                <td>goalkeeper</td>
                                <td>22 To 30</td>
                                <td>2 years</td>
                                <td>N/A</td>
                                <td>20M Yearly</td>
                                <td>future</td>
                                <td><a href="#" data-toggle="modal" data-target="#vacanciesmodal">more</a></td>
                             </tr>
                             <tr>
                                <td>goalkeeper</td>
                                <td>22 To 30</td>
                                <td>2 years</td>
                                <td>N/A</td>
                                <td>20M Yearly</td>
                                <td>future</td>
                                <td><a href="#" data-toggle="modal" data-target="#vacanciesmodal">more</a></td>
                             </tr>
                             <tr>
                                <td>goalkeeper</td>
                                <td>22 To 30</td>
                                <td>2 years</td>
                                <td>N/A</td>
                                <td>20M Yearly</td>
                                <td>future</td>
                                <td><a href="#" data-toggle="modal" data-target="#vacanciesmodal">more</a></td>
                             </tr>
                          </tbody>
                       </table>
                     </div>
                     <div class="tab-pane fade" id="photosstadium" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                           <div class="col-md-8">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="<?php echo base_url().'assets/' ?>/images/1.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="<?php echo base_url().'assets/' ?>/images/2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="<?php echo base_url().'assets/' ?>/images/3.png" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="validationCustom02">Select stadium</label>
                                 <select class="custom-select" required="">
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                 </select>
                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                              </div>
                              <h5>General</h5>
                              <table class="sametableall" width="100%">
                                 <thead>
                                    <th>first team</th>
                                    <th>stadium sevilla</th>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Average attendance</td>
                                       <td>34,399</td>
                                    </tr>
                                    <tr>
                                       <td>fill level in %</td>
                                       <td>81.62%</td>
                                    </tr>
                                    <tr>
                                       <td>season tickets</td>
                                       <td>20,688</td>
                                    </tr>
                                    <tr>
                                       <td>capacity</td>
                                       <td>42,144</td>
                                    </tr>
                                    <tr>
                                       <td>floodlights</td>
                                       <td>yes</td>
                                    </tr>
                                    <tr>
                                       <td>press area</td>
                                       <td>yes</td>
                                    </tr>
                                    <tr>
                                       <td>vip seats</td>
                                       <td>1000</td>
                                    </tr>
                                    <tr>
                                       <td>category</td>
                                       <td>
                                          <span>
                                             <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                             <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                             <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                             <i class="fa fa-star fillstar" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             </span>
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
         </div>
      </section>
     
     
     
    
     
      <div class="modal fade" id="vacanciesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">vacancies</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade producingagentmodelsame" id="registeredfans" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Registered fans</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table width="100%;" class="sametableall">
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
       