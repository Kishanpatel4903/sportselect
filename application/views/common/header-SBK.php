<!DOCTYPE html>
<html> 
<head>
  <title>Sportselect</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="images/favicon.png" rel="shortcut icon" type="image/png" />
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/fonts/arial/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/fonts/avenir/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/fonts/helvetica/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/fonts/roboto/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/fonts/rubik/font.css">


<!-- icon link -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/font-icon/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/new/font-icon/themify-icons-font/themify-icons.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/new/font-icon/injuries-icon/flaticon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/font-icon/flaticon/font/flaticon.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/plugin/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/plugin/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/commoncss.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/onlyiconmenu.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/responsive.css">
<link rel="stylesheet" media="all" href="<?php echo base_url() ?>assets/new/plugin/jvectormap/jquery-jvectormap.css" />

<!-- players -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/player-report.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/player-financial.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/player-characterstics.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/player-mandate.css">



<!-- agents -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/new/css/agent/agent-style.css">

<!-- <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/jquery-3.4.1.min.js"></script> -->
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/new/plugin/jquery/jquery-3.3.1.slim.min.js"></script>  -->
 
<!-- <script type="text/javascript" src="<?php echo base_url().'assets' ?>/js/jquery-3.4.1.min.js"></script> -->

<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/js/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<script src="<?php echo base_url().'assets' ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/new/plugin/bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/new/plugin/bootstrap/js/bootstrap.min.js"></script>

 

  <script type="text/javascript" src="<?php echo base_url() ?>assets/new/plugin/select2/js/select2.full.min.js"></script>  



      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->

       
      <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<!-- map --> 

<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/jquery-jvectormap.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/jquery-mousewheel.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/jvectormap.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/abstract-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/abstract-canvas-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/abstract-shape-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-group-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-canvas-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-shape-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-path-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-circle-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-image-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/svg-text-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-group-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-canvas-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-shape-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-path-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-circle-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vml-image-element.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/map-object.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/region.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/marker.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/vector-canvas.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/simple-scale.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/ordinal-scale.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/numeric-scale.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/color-scale.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/legend.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/data-series.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/proj.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/src/map.js"></script>
<script src="<?php echo base_url() ?>assets/new/plugin/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/new/js/custom.js"></script>   -->

<script type="text/javascript">
if ($('.select2').length) {
    $('.select2').select2();
}
</script>
  

      
</head>
<body>
<?php 
 
$currenttype = $this->session->userdata("usertype");
$noticount = $this->model->get_notificationcount($this->session->userdata('currentuser'));
$notifications = $this->model->get_notification($this->session->userdata('currentuser'),5);    
$users = $this->model->getAllUserData();  
 
if($this->session->userdata("usertype") == '1'){ 
   $cuser = $this->model->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',array("ss_signup._ID"=>$this->session->userdata("currentuser")));
   //print_r($cuser); exit;
   $cname = $cuser->_Firstname.' '.$cuser->_Lastname;
   $currentimg = $cuser->_Photo!=''?base_url().'uploads/player/user_profile/'.$cuser->_Photo:base_url().'assets/images/nouser.jpg';
}else if($this->session->userdata("usertype") == '2'){
   $cuser = $this->model->customjoinrow('ss_signup','ss_agents','_ID','_AgentID',array("ss_signup._ID"=>$this->session->userdata("currentuser")));
  // print_r($cuser);
   $cname = $cuser->_Firstname.' '.$cuser->_Lastname;
   $currentimg = $cuser->_Photo!=''?base_url().'uploads/agent/user_profile/'.$cuser->_Photo:base_url().'assets/images/nouser.jpg';
}else if($this->session->userdata("usertype") =='3'){

   $cuser = $this->model->customjoinrow('ss_signup','ss_clubs','_ID','_ClubID',array("ss_signup._ID"=>$this->session->userdata("currentuser")));
   
   //print_r($cuser); exit;
   
   $cname = $cuser->_Firstname;
   $currentimg = $cuser->_Photo!=''?base_url().'uploads/club/user_profile/'.$cuser->_Photo: base_url().'assets/images/nouser.jpg';
}

//print_r($users); exit;
$arr = array();  
foreach ($users as $user) {
      
      if($user->_Type == '1'){

         $arr[]= $user->_Firstname.' '.$user->_Lastname.' -(Player)';  

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
 <section>
  <div class="maincontainer ">
    <div class="leftsidebar ">
      <div class="logopart">
        <?php
        if($this->session->userdata("usertype")=='1'){
            $link = base_url().'player-profile';
        }
        else if($this->session->userdata("usertype") == '2'){
            $link= base_url().'agent-profile';
        }
        else if($this->session->userdata("usertype") == '3'){
            $link= base_url().'club-profile';
        }
         ?>
        <a href="<?php echo $link; ?>"><i class="fa fa-cube"></i><b>Sportselect</b></a>
      </div>
      <div class="profilepart">
        <div class="profileimg">
          <img src="<?php echo $currentimg; ?>">
        </div>
        <div class="detailsofprofile">
          <!-- <a href="profile.php"> --><p class="first"><?php echo $cname; ?></p><!-- </a> -->
         <p class="second"><?php  echo $currenttype=='1' ?$cuser->_PrimaryPosition:'No position';   if(!isset($cuser) ){ echo "Position"; } ?> </p> 
         
        </div>
        <!-- <div class="profilemoreoption">
          <i class="fa fa-ellipsis-v"></i>
          
        </div> -->
      </div>
      <?php
      if($this->session->userdata("usertype") == '1'){

      ?>
         <nav class="navbar navbar-expand-sm">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto flex-column">
                     
                     <li class="nav-item">
                       <a class="nav-link" href="home.php">
                         <i class="flaticon-home-1"></i> <span class="menunamespan">Home</span>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="player-report.php">
                         <i class="flaticon-analyst"></i> <span class="menunamespan">report</span>
                       </a>
                     </li>
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="flaticon-contract"></i> <span class="menunamespan">contract</span>
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <p class="sub-menu-header">contract</p>
                         <a class="dropdown-item" href="#">Make Loan Bid</a>
                         <a class="dropdown-item" href="#">Make Transfer bid</a>
                         <a class="dropdown-item" href="#">Add to shotlist</a>
                         <a class="dropdown-item" href="#">Scout Player</a>
                         <a class="dropdown-item" href="#">Sign Now</a>
                         <a class="dropdown-item" href="#">Offer Contract</a>
                       </div>
                     </li>
                     <!-- <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url().'mandate'; ?>">
                         <i class="flaticon-analysing"></i> <span class="menunamespan">mandate</span>
                       </a>
                     </li> -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="flaticon-analysing"></i> <span class="menunamespan">mandate</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <p class="sub-menu-header">mandate</p>
                          <a class="dropdown-item" href="<?php echo base_url().'player-mandate'; ?>">mandate offer</a>
                          <a class="dropdown-item" href="player-mandate-history.php">mandate history</a>
                        </div>
                      </li>
                     <li class="nav-item">
                       <a class="nav-link" href="">
                         <i class="flaticon-checklist"></i> <span class="menunamespan">characterstics</span>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="player-financial.php">
                         <i class="flaticon-money"></i> <span class="menunamespan">financial</span>
                       </a>
                     </li>
                     <li class="nav-item ">
                       <a class="nav-link" href="#">
                         <i class="flaticon-home"></i> <span class="menunamespan">market</span>
                       </a>
                     </li>
                   </ul>
                 </div>
            </nav>
      <?php
      }
      else if($this->session->userdata("usertype") == '2'){
      ?>
         <nav class="navbar navbar-expand-sm">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto flex-column">
               
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-clientlist.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-file-text-o"></i> <span class="menunamespan">Client List </span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Client List </p>
                   <a class="dropdown-item" href="agent-clientlist-producing-agent.php">Producing Agent</a>
                 <a class="dropdown-item" href="agent-clientlist-placing-agent.php">Placing Agent</a>
                 </div>
               </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-agency.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-file-text-o"></i> <span class="menunamespan">Agency </span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Agency </p>
                   <a class="dropdown-item" href="agent-agency.php">Agents</a>
                 <a class="dropdown-item" href="agent-agency.php">Subagents</a>
                   <a class="dropdown-item" href="agent-agency.php">Scouts </a>
                   <a class="dropdown-item" href="agent-agency.php">Lawyers </a>
                 <a class="dropdown-item" href="agent-agency.php">Office </a>
                 </div>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-associate.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-file-text-o"></i><span class="menunamespan">Associates</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Associates</p>
                   <a class="dropdown-item" href="agent-associate.php">Placing </a>
                   <a class="dropdown-item" href="agent-associate.php">Producing </a>
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link " href="agent-reference.php">
                   <i class="fa fa-file-text-o"></i><span class="menunamespan">Reference </span>
                 </a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-partnership-agents.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-file-text-o"></i> <span class="menunamespan">Partnership Agents</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Partnership Agents</p>
                   <a class="dropdown-item" href="agent-partnership-agents.php">Mandate Based</a>
                   <a class="dropdown-item" href="agent-partnership-agents.php">Exclusive</a>
                 </div>
               </li>
               <li class="nav-item ">
                 <a class="nav-link " href="agent-transfers.php" >
                   <i class="fa fa-file-text-o"></i><span class="menunamespan">Transfers</span>
                 </a>
               </li>
               <li class="nav-item ">
                 <a class="nav-link" href="agent-client.php">
                   <i class="fa fa-file-text-o"></i> <span class="menunamespan">Clients </span>
                 </a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-financial.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-file-text-o"></i><span class="menunamespan"> Mandate</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header"> Mandate</p>
                   <a class="dropdown-item" href="<?php echo base_url().'agent-mandate'; ?>">Mandate Offer </a>
                   <a class="dropdown-item" href="agent-mandate-history.php">Mandate History</a>
                 </div>
               </li>
                
               <li class="nav-item ">
                 <a class="nav-link" href="agent-characterstics.php">
                   <i class="fa fa-file-text-o"></i><span class="menunamespan">Characteristics </span>
                 </a>
               </li>
              <li class="nav-item ">
                 <a class="nav-link" href="agent-agentdeals.php">
                  <i class="fa fa-file-text-o"></i> <span class="menunamespan">Agent Deals </span>
                 </a>
               </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-financial.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-file-text-o"></i><span class="menunamespan"> Finance</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header"> Finance</p>
                   <a class="dropdown-item" href="agent-financialagent.php">Agents </a>
                   <a class="dropdown-item" href="agent-financialcooperation.php">Financial Cooperation</a>
                 </div>
               </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="agent-investors.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-file-text-o"></i><span class="menunamespan">  Investors </span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">  Investors </p>
                   <a class="dropdown-item" href="agent-investors-associate.php">Associate  </a>
                   <a class="dropdown-item" href="agent-investors-sponsor.php">Sponsor</a>
                 </div>
               </li>
             </ul>
           </div>
         </nav>
      <?php }
      else if($this->session->userdata("usertype") == '3'){
      ?>
          <nav class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <i class="flaticon-home-1"></i> <span class="menunamespan">Home</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-contract"></i> <span class="menunamespan">club</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">contract</p>
                  <a class="dropdown-item" href="club-firstteam.php">first team</a>
                  <a class="dropdown-item" href="club-reserveteam.php">reserve team</a>
                  <a class="dropdown-item" href="club-under-eight.php">17/18 years</a>
                  <a class="dropdown-item" href="club-under-six.php">15/16 years</a>
                  <a class="dropdown-item" href="club-staff.php">staff</a>
                  <a class="dropdown-item" href="club-administration.php">administration</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="club-report.php">
                  <i class="flaticon-contract"></i> <span class="menunamespan">report</span>
                </a>
              </li>
              <!-- 
              <li class="nav-item">
                <a class="nav-link" href="player-mandate.php">
                  <i class="flaticon-analysing"></i> <span class="menunamespan">mandate</span>
                </a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="player-characterstics.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-checklist"></i> <span class="menunamespan">Transfers</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Transfers</p>
                  <a class="dropdown-item" href="club-transfers.php">Transfers</a>
                  <a class="dropdown-item" href="club-bids.php">bids</a>
                  <a class="dropdown-item" href="club-clubpartnership.php">club partnership</a>
                  <a class="dropdown-item" href="club-offerplayers.php">offer players</a>
                  <a class="dropdown-item" href="club-transferwindows.php">transfer windows</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-analysing"></i> <span class="menunamespan">mandate</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">mandate</p>
                  <a class="dropdown-item" href="club-mandate.php">mandate offer</a>
                  <a class="dropdown-item" href="club-mandate-history.php">mandate history</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="club-characterstics.php">
                  <i class="flaticon-checklist"></i> <span class="menunamespan">characterstics</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-money"></i> <span class="menunamespan">financial</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">financial</p>
                  <a class="dropdown-item" href="club-income.php">income</a>
                  <a class="dropdown-item" href="club-expenditure.php">expenditure</a>
                  <a class="dropdown-item" href="player-mandate-history.php">insurance</a>
                </div>
              </li>

              <li class="nav-item ">
                <a class="nav-link" href="club-vacancies.php">
                  <i class="flaticon-home"></i> <span class="menunamespan">Vacancies</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-home"></i> <span class="menunamespan">Facility</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="sub-menu-header">Facility</p>
                  <a class="dropdown-item" href="club-traininggrounds.php">training grounds</a>
                  <a class="dropdown-item" href="club-city.php">city</a>
                  <a class="dropdown-item" href="club-livingconditions.php">living conditions</a>
                  <a class="dropdown-item" href="club-stadium.php">stadium</a>
                  <a class="dropdown-item" href="#">cub office</a>
                  <a class="dropdown-item" href="#">medical center<center></center></a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-home"></i> <span class="menunamespan">Calendar</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <p class="sub-menu-header">Calendar</p>
                    <a class="dropdown-item" href="club-calender.php">Calendar</a>
                    <a class="dropdown-item" href="player-mandate-history.php">event</a>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="club-partnership.php">
                  <i class="flaticon-home"></i> <span class="menunamespan">partnership</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      <?php
      }

       ?>
      
    </div> 

    <div class="rightpart">
  <div class="topbarmain">
    <div class="topserchandnoti text-right">
      <div class="searchbar">
        <i class="fa fa-search"></i>
        <input id="search_box" class="topsearch" type="text" name="" placeholder="Search...">
      </div>
      <div class="notificationtop">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell"></i>
            <span class="notificationcount">15</span>
          </a>
          <ul class="dropdown-menu noti-boxmenu">

              <?php //echo "<h1>".$this->session->userdata('currentuser')."</h1>"; exit;
                 //print_r($notifications); exit;
                  if(!empty($notifications)){

                     $current = $this->session->userdata('currentuser');  
                     foreach ($notifications as $noti) {

                      if($noti->usertype == '1'){

                        //$not_user = $this->model->get_singlerow('users','user_id',$noti->_From_ID);
                        $cond = array('ss_signup._ID'=>$noti->_From_ID);
                        $not_user=$this->model->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);
                        //$not_user = $this->model->run_Select("SELECT * FROM ss_players as p LEFT JOIN ss_notifications as n on p._ID=n._Notification_ID  WHERE n._From_ID ='".$noti->_From_ID."' ");
                        
                        //print_r($not_user);  

                        $name = $not_user->_Firstname.' '.$not_user->_Lastname;
                        //echo $name; exit;
                        $img = $not_user->_Photo!=''?base_url().'uploads/player/user_profile/'.$not_user->_Photo:base_url().'assets/images/nouser.jpg';
                      }else if($noti->usertype == '2'){

                        //$not_user = $this->model->get_singlerow('agent_users','_User_ID',$noti->_From_ID);
                        $cond = array('ss_signup._ID'=>$noti->_From_ID);
                        $not_user=$this->model->customjoinrow('ss_signup','ss_agents','_ID','_AgentID',$cond);
                        //print_r($not_user);  
                        $name = $not_user->_Firstname.' '.$not_user->_Lastname;
                        $img = $not_user->_Photo!=''?base_url().'uploads/agent/user_profile/'.$not_user->_Photo:base_url().'assets/images/nouser.jpg';
                      } 
                      else if($noti->usertype == '3'){
                        //$not_user = $this->model->get_singlerow('club_users','_User_ID',$noti->_From_ID);
                        $cond = array('ss_signup._ID'=>$noti->_From_ID);
                        $not_user=$this->model->customjoinrow('ss_signup','ss_clubs','_ID','_ClubID',$cond);  
                        $name = $not_user->_Club_name;
                        $img = $not_user->_Photo!=''?base_url().'uploads/club/user_profile/'.$not_user->_Photo:base_url().'assets/images/nouser.jpg';
                      }
 
                    if($current == '1'){  
                        if($noti->_Type == '0'){
                          //$link = base_url().'myprofile/'.$noti->_From_ID.'?n='.$noti->_Notification_ID;
                          $link = base_url().'player-mandate/?n='.$noti->_Notification_ID;
                          $notititle = 'Mandate Request by '.$name;
                        }
                        else if($noti->_Type == '1'){
                          $link = base_url().'player-mandate?n='.$noti->_Notification_ID;
                          $notititle = 'Mandate Negotiate Request by '.$name;
                        }
                        else if($noti->_Type == '4'){
                          $link = base_url().'player-mandate?n='.$noti->_Notification_ID;
                          $notititle = 'Mandate Accepted by '.$name;
                        }
                        else if($noti->_Type == '5'){
                          $link = base_url().'player-mandate?n='.$noti->_Notification_ID;
                          $notititle = 'Mandate Rejected by '.$name.' <span style="color:red;">Reason:- '.$noti->_Content.'</span>';
                        }
                        else{
                          $link = base_url();
                          $notititle = 'Mandate Accepted by '.$name;
                        } 
                    }else if($current == '2'){

                        if($noti->_Type == '0'){
                              $link = base_url().'agent-mandate?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate details submitted by '.$name;
                            }
                             else if($noti->_Type == '1'){
                              $link = base_url().'agent-mandate?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate Negotiate Request by '.$name;
                            }
                            else if($noti->_Type == '3'){
                              $link = base_url().'agent-mandate?n='.$noti->_Notification_ID;
                              $notititle = 'Updated Mandate details by '.$name;
                            } 
                            else if($noti->_Type == '4'){
                              $link = base_url().'agent-mandate?n='.$noti->_Notification_ID;
                              $notititle = 'Mandate Accepted by '.$name;
                            }
                            else if($noti->_Type == '5'){
                            $link = base_url().'agent-mandate?n='.$noti->_Notification_ID;
                            $notititle = 'Mandate Rejected by '.$name.' <span style="color:red;">Reason:- '.$noti->_Content.'</span>';
                            }
                            else{
                              $link = '#';
                            } 
                    }
                      $readcls = $noti->_Status == '0'?'bg-gray':'';
                  ?>
                         
                        <div class="notificationboxsingle">
                          <div class="notitficationproimg text-center">
                            <img src="<?php echo $img; ?>" class="rounded-circle">
                          </div>    
                          <a href="<?php echo $link; ?>">
                            <div class="notitficationdetail">
                              <p class="nameofnotification"><?php echo $name; ?></p>
                              <div class="message">
                                <p><?php echo $notititle; ?></p>
                                <!-- <small class="text-warning"><?php  echo date('d/m/Y, h:i',strtotime($noti->_Created)); ?></small> -->
                              </div>
                            </div>
                          </a> 
                        </div>
                     <?php } ?>
                      <div class="notificationboxallview text-center">
                        <a href="" class="">View All</a>
                      </div>
                  <?php
                  }
                  else{
                     echo "<p style='text-align:center;'>Notifications not found.</p>";
                  }
                  ?> 
          </ul>
        </li>
      </div>
      <div class="meprofileimg">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo $currentimg; ?>" width="100%">
          </a>
          <ul class="dropdown-menu profi-boxmenu">
            <div class="icon-w"><i class="fa fa-home"></i></div>
            <li>
              <a href="<?php echo $link; ?>"><i class="ti-user"></i><span> Profile  </span></a>
            </li>
            <?php 
            if($currenttype == '1'){
            ?>
               <li>
                  <a href="<?php echo base_url('myprofile/editprofile'); ?>"><i class="ti-marker-alt"></i><span> Profile Edit </span></a>
               </li>
            <?php 
            }
            else if($currenttype == '2'){
            ?>
               <li>
                  <a href="<?php echo base_url('agent-edit-profile'); ?>"><i class="ti-marker-alt"></i><span> Profile Edit </span></a>
               </li>
            <?php 
            }
            else{
            ?>
               <li>
                  <a href="<?php echo base_url('club-edit-profile'); ?>"><i class="ti-marker-alt"></i><span> Profile Edit </span></a>
               </li>
            <?php } ?>
            
            <li>
              <a href="<?php echo base_url('signup/logout'); ?>"><i class="fa fa-sign-out"></i><span> Logout </span></a>
            </li>               
          </ul>
        </li>
      </div>
    </div>
  </div>