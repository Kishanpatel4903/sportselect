<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>/fonts/injuries-icon/flaticon.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/header.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/profileedit.css">
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/club/style.css"> -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/commoncss.css"> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>/css/magnific-popup.css"> 
       
      <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/jquery-3.4.1.min.js"></script>
      <script src="<?php echo base_url().'assets' ?>/js/jquery.validate.min.js" type="text/javascript"></script>


      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->

      <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/bootstrap.min.js"></script> 
      <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/jquery.downCount.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>
   <body>
<?php  
if($this->session->userdata("usertype") == '1'){
   $cuser = $this->model->get_singlerow('users','user_id',$this->session->userdata("currentuser"));
   $cname = $cuser->first_name.' '.$cuser->last_name;
   $currentimg = base_url().'uploads/player/user_profile/'.$cuser->profile_img;
}else if($this->session->userdata("usertype") == '2'){
   $cuser = $this->model->get_singlerow('agent_users','_User_ID',$this->session->userdata("currentuser"));
   $cname = $cuser->_Firstname.' '.$cuser->_Lastname;
   $currentimg = base_url().'uploads/agent/user_profile/'.$cuser->_Photo;
}else if($this->session->userdata("usertype") =='3'){
   $cuser = $this->model->get_singlerow('club_users','_User_ID',$this->session->userdata("currentuser"));
   $cname = $cuser->_Club_name;
   $currentimg = base_url().'uploads/club/user_profile/'.$cuser->_Photo;
}
//print_r();

$arr = array();  
foreach ($users as $user) {
      
      if($user->_Type == '1'){

         $arr[]= $user->first_name.' '.$user->last_name.' -(Player)';  

      }else if($user->_Type == '2'){

         $arr[]= $user->_Firstname.' '.$user->_Lastname.' -(Agent)';  

      }else{

         $arr[]= $user->_Club_name.' -(Club)';  
      }
}
//print_r($arr);
 ?>
            <script>
jQuery( function() {

    var currenttype = '<?php echo $this->session->userdata("usertype") ?>';
     
    var availableTags = jQuery.parseJSON('<?php echo json_encode($arr) ?>');

    jQuery( "#search_box" ).autocomplete({
      source: availableTags,
      select: function (a, b) {
         //console.log(b);
        jQuery.ajax({
          url:'<?=base_url()?>/myprofile/username_ajax',
          type: "POST",
          dataType: "json",
          cache:false,
          data: {
            'name':b.item.label,
          },
          success: function (data) {
            console.log(data);
           // alert(currenttype);
            if(data.type == 'player' && currenttype == '2'){

               window.location = "<?php echo base_url().'player' ?>/"+data.id;;
            }
            // var newDoc = document.open("text/html", "replace");
            // newDoc.write(data);
            // newDoc.close();
                    //window.location = "inquiry?status=true";
                  }
                });
      }
    });
  });
</script>      
      <div class="<?php echo $class; ?>">
      <header>
         <nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
            <div class="navbar-header d-flex col">
               <a class="navbar-brand" href="index.html"><i class="fa fa-cube"></i><b>Sportselect</b></a>      
               <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
               <span class="navbar-toggler-icon"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <form class="navbar-form form-inline">
               <div class="input-group search-box">
               <input type="text" id="search_box" class="form-control" placeholder="Search here...">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
               </div>
            </form>

      <?php 
      $noticount = $this->model->get_notificationcount($this->session->userdata('currentuser'));
      $notifications = $this->model->get_notification($this->session->userdata('currentuser'),5);

      // print_r($noticount);
      // print_r($notifications);

         if($this->session->userdata('usertype')=='1'){
         ?>

            <ul class="nav navbar-nav navbar-right ml-auto">
               <li class="nav-item active"><a href="#" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
               <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-pie-chart"></i><span>Transfer Market</span></a></li>
               <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i><span>Messages</span></a></li>
               <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span>Notifications</span></a>
                   
                  <ul class="dropdown-menu noti-boxmenu">
                     <li class="head text-light orangebackcolor">
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-12">
                              <span class="colorwhite">Notifications (<?php echo $noticount; ?>)</span>
                              <a href="" class="float-right colorwhite">Mark all as read</a>
                           </div>
                     </li>
                  <?php
                  if(!empty($notifications)){

                     $current = $this->session->userdata('currentuser');
                     foreach ($notifications as $noti) {

                      if($noti->usertype == '1'){
                        $not_user = $this->model->get_singlerow('users','user_id',$noti->_From_ID);
                        $name = $not_user->first_name.' '.$not_user->last_name;
                        $img = base_url().'uploads/player/user_profile/'.$not_user->profile_img;
                      }else if($noti->usertype == '2'){

                        $not_user = $this->model->get_singlerow('agent_users','_User_ID',$noti->_From_ID);
                        $name = $not_user->_Firstname.' '.$not_user->_Lastname;
                        $img = base_url().'uploads/agent/user_profile/'.$not_user->_Photo;
                      } 
                      else if($noti->usertype == '3'){
                        $not_user = $this->model->get_singlerow('club_users','_User_ID',$noti->_From_ID);
                        $name = $not_user->_Club_name;
                        $img = base_url().'uploads/club/user_profile/'.$not_user->_Photo;
                      }

                      if($noti->_Type == '0'){
                        //$link = base_url().'myprofile/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                        $link = base_url().'myprofile/?n='.$noti->_Notification_ID;
                        $notititle = 'Mandate Request by '.$name;
                      }
                      else if($noti->_Type == '1'){
                        $link = base_url().'myprofile?n='.$noti->_Notification_ID;
                        $notititle = 'Mandate Negotiate Request by '.$name;
                      }
                      else if($noti->_Type == '4'){
                        $link = base_url().'myprofile?n='.$noti->_Notification_ID;
                        $notititle = 'Mandate Accepted by '.$name;
                      }
                      else if($noti->_Type == '5'){
                        $link = base_url().'myprofile?n='.$noti->_Notification_ID;
                        $notititle = 'Mandate Rejected by '.$name.' <span style="color:red;">Reason:- '.$noti->_Content.'</span>';
                      }
                      else{
                        $link = base_url();
                        $notititle = 'Mandate Accepted by '.$name;
                      } 
                      $readcls = $noti->_Status == '0'?'bg-gray':'';
                  ?>
                        <li class="notification-box <?php echo $readcls; ?>">
                           <div class="row">
                              <div class="col-lg-3 col-sm-3 col-3 text-center">
                                 <img src="<?php echo $img; ?>" class="w-50 rounded-circle">
                              </div> 
                              
                                 <div class="col-lg-8 col-sm-8 col-8">
                                  <a href="<?php echo $link; ?>">   
                                       <strong class="text-info"><?php echo $name; ?></strong>
                                    <div>
                                       <?php echo $notititle; ?>
                                    </div>
                                    <small class="text-warning"><?php  echo date('d/m/Y, h:i',strtotime($noti->_Created)); ?></small>
                                    </a>
                                 </div>    
                              
                           </div>
                        </li>
                     <?php } ?>
                     <li class="footer orangebackcolor text-center">
                        <a href="" class="text-light colorwhite">View All</a>
                     </li>
                  <?php
                  }else{
                     echo "<p style='text-align:center;'>Notifications not found.</p>";
                  }
                  ?>
                     
                  </ul>
               </li>
               <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?php echo $currentimg; ?>" class="avatar" alt="Avatar"> <?php echo $cname; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li>
                     <a href="<?php echo base_url('myprofile'); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
                  </li>
                  
                  <li class="divider dropdown-divider"></li>
   <?php if(!$this->session->userdata('currentuser')){ ?>
                  
                  <li>
                     <a href="<?php echo base_url('login'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> login</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url('register'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Register</a>
                  </li>
               <?php } ?>
   <?php if($this->session->userdata('currentuser') != ''){ ?>
                  <li>
                     <a href="<?php echo base_url('Signup/logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
               <?php } ?>
                  </ul>
               </li>
            </ul>
         <?php
         }else{
         ?>
            <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item active"><a href="agent-index.html" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
                        <li class="nav-item"><a href="agent-client-list.html" class="nav-link"><i class="fa fa-users"></i><span>Client List</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i><span>invite</span></a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span>Notifications</span></a>
                             
                            <ul class="dropdown-menu noti-boxmenu">
                                <li class="head text-light orangebackcolor">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <span class="colorwhite">Notifications (<?php echo $noticount; ?>)</span>
                                            <a href="" class="float-right colorwhite">Mark all as read</a>
                                        </div>
                                </li>
                                <?php
                                //print_r($notifications);
                        if(!empty($notifications)){

                           $current = $this->session->userdata('currentuser');
                           foreach ($notifications as $noti) {

                              if($noti->usertype == '1'){
                                 $not_user = $this->model->get_singlerow('users','user_id',$noti->_From_ID);
                                 $name = $not_user->first_name.' '.$not_user->last_name;
                                 $img = base_url().'uploads/player/user_profile/'.$not_user->profile_img;
                              }else if($noti->usertype == '2'){
                                 $not_user = $this->model->get_singlerow('agent_users','_User_ID',$noti->_From_ID);
                                 $name = $not_user->_Firstname.' '.$not_user->_Lastname;
                                 $img = base_url().'uploads/agent/user_profile/'.$not_user->_Photo;
                              } 
                               else if($noti->usertype == '3'){
                                 $not_user = $this->model->get_singlerow('club_users','_User_ID',$noti->_From_ID);
                                 $img = base_url().'uploads/club/user_profile/'.$not_user->_Photo;
                                 $name = $not_user->_Club_name;
                              }
                            if($noti->_Type == '0'){
                              $link = base_url().'player/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate details submitted by '.$name;
                            }
                             else if($noti->_Type == '1'){
                              $link = base_url().'player/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate Negotiate Request by '.$name;
                            }
                            else if($noti->_Type == '3'){
                              $link = base_url().'player/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                              $notititle = 'Updated Mandate details by '.$name;
                            } 
                            else if($noti->_Type == '4'){
                              $link = base_url().'player/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate Accepted by '.$name;
                            }
                             else if($noti->_Type == '5'){
                                 $link = base_url().'player/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                                 $notititle = 'Mandate Rejected by '.$name.' <span style="color:red;">Reason:- '.$noti->_Content.'</span>';
                               }
                            else{
                              $link = '#';
                            } 
                            $readcls = $noti->_Status == '0'?'bg-gray':'';
                        ?>
                              <li class="notification-box <?php echo $readcls; ?>">
                                 <div class="row">
                                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                                       <img src="<?php echo $img; ?>" class="w-50 rounded-circle">
                                    </div> 
                                    
                                       <div class="col-lg-8 col-sm-8 col-8">
                                         <a href="<?php echo $link; ?>">
                                          <strong class="text-info"><?php echo $name; ?></strong>
                                          <div>
                                              <?php echo $notititle; ?>
                                          </div>
                                          <small class="text-warning"><?php echo date('d/m/Y, h:i',strtotime($noti->_Created)); ?></small>
                                           </a>
                                       </div>    
                                   
                                 </div>
                              </li>
                           <?php } ?>
                           <li class="footer orangebackcolor text-center">
                              <a href="" class="text-light colorwhite">View All</a>
                           </li>
                        <?php
                        }else{
                           echo "<p style='text-align:center;'>Notifications not found.</p>";
                        }
                        ?> 
                            </ul>
                        </li>
                   <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-calendar"></i> More Menu <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="agent-finance.html"  class="dropdown-item" data-toggle="modal" data-target="#form-invite">invite</a></li>
                                <li><a href="#" data-toggle="modal"  class="dropdown-item" data-target="#form-mandate">Mandate Form</a></li>
                                <li><a href="#" data-toggle="modal"  class="dropdown-item" data-target="#placing-clubs-list">Placing clubs </a></li>
                            </ul>
                        </li>

                  <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?php echo $currentimg; ?>" class="avatar" alt="Avatar"> <?php echo $cname; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <?php
                              if($this->session->userdata('currentuser')=='2'){
                                ?>
                                <li><a href="<?php echo base_url('agent-profile'); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
                                <?php
                              }else{
                                ?>
                                <li><a href="<?php echo base_url('my-profile'); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
                                <?php
                              }
                               ?>
                                <li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></li>
                                <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                                <li class="divider dropdown-divider"></li>
                                <li><a href="<?php echo base_url(); ?>Agent_controller/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
            </ul>
         <?php
         } ?>
          
           
            </div>
         </nav>
      </header>