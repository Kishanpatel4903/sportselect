<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
<style type="text/css">
  .container {
    padding-left: 0px !important;
}
label.error {
  color:red;
}
</style>
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>adminassets/images/favicon.ico">
        <!-- App title -->
        <title>Link Demo</title>

        <!--Morris Chart CSS -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>adminassets/adminplugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>adminassets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/core.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url(); ?>adminassets/css/components.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo base_url(); ?>adminassets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>adminassets/adminplugins/switchery/switchery.min.css">

        <script src="<?php echo base_url(); ?>adminassets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">
<?php error_reporting(0); ?>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index-2.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="adminassets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="adminassets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="adminassets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, Admin</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                          <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="admin" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span>Generate Link</span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="">
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h1 class="m-t-0 m-b-30">Generate Link</h1>

                                    <?php
                                $message = $this->session->flashdata('mess');
                                //print_r($message);
if(isset($message) && !empty($message)){
?>
<script type="text/javascript">
    var mess = '<?php echo base_url()."signup?passkey=".$message['passkey']; ?>';
    alert(mess);
  </script>
<?php
$txt='<html>    
<div style="background:#fff;  font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; width:50%; margin:0 auto; padding:0;">
  <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
      <tr>
        <td style="padding:20px 0 20px 0" align="center" valign="top">
          <table style="border:1px solid #E0E0E0;"  cellpadding="10" cellspacing="0" width="650">
            <tbody>
              <tr>
                  <td align="center" style="border:1px solid #E0E0E0;" bgcolor="#FFF" valign="top">
<a href="https://mypreptime.com/keyur"><img src="https://mypreptime.com/keyur/adminassets/images/demo.jpeg" height="100px" width="300px"  alt="Demo" style="margin-bottom:5px;"  border="0" /></a>
              </td>
              </tr>
            <tr>
                <td style="text-align: center;border-top:1px solid #E0E0E0;border-bottom:1px solid #E0E0E0;background:#F3F3F3;"><span style="font-size: 26px; color:#333333;">Thank You</span></td>
              </tr>
            <tr>
         <td>
         <p style="font-size:14px;">&nbsp;Please registed your account with below URL. &nbsp;Demo.</p>
         <p style="font-size:14px;">&nbsp;'.base_url()."signup?passkey=".$message['passkey'].'</p>
         </td></tr>
            <tr><td align="center" bgcolor="#5495b5" style="border:1px solid #E0E0E0; color:#FFF; font-size:12px; font-family:Verdana, Geneva, sans-serif;text-align:center;">Thank You, <b>Demo</b></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
    </tbody>
  </table>
</div> 
</html>';

/*echo $txt;
die();*/

/****************Client Mail********************  */  
    /*$to = $_POST['txtemail'];*/
    $header = '';
    $to = $message['useremail'];
    $subject = "Registerd Link – Demo";
    $message = $txt;
    $from = "pkeyur181@gmail.com";
    $headers= "From:Demo<$from>\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $testmails =  mail($to,$subject,$message,$headers);

    ?>
  
<?php } ?>

<div class="container">
  <form method="post" name="linkgenerate" id="linkgenerate" action="<?php echo base_url(); ?>admin/generatelink/">
    <div class="radio checkbox-primary">
      <label><input type="radio" name="common" value="player">Player</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="common" value="club">Club</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="common" value="agent">Agent</label>
    </div>
    <div class="form-group hidediv" style="display: none;">
      <label for="pwd">Pass Key:</label>
      <input type="hidden" class="form-control code" id="code" placeholder="Enter code" name="code">
      <br>
      <label for="pwd">Enter Email:</label>
      <input type="hidden" class="form-control code" id="useremail" placeholder="Enter useremail" name="useremail">
    </div>
    <span class="error"></span>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © All Rights Reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/adminplugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="<?php echo base_url(); ?>adminassets/adminplugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/adminplugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
    <script src="<?php echo base_url(); ?>adminassets/adminplugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>adminassets/adminplugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url(); ?>adminassets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.app.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $('input[type=radio]').change(function() {
      $('.hidediv').show();
      $('.code').attr('type','text');
      $('.useremail').attr('type','text');
    });
  });
</script>
<script type="text/javascript">
     $("#linkgenerate").validate({
    rules: {
      common:{
        required:true,
      },
      code:{
        required:true,
      },
      useremail:{
        required:true,
        email:true,
      },
    },
    messages:{   
      common:{
        required: "Please select any option.",
      },
      code:{
        required: "Please enter passkey.",
      },
      useremail:{
        required: "Please enter email.",
        email:"Please enter valid email.",
      },
    },
     errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
              $('.error').html(error);
             
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
  });

</script>
    </body>
</html>