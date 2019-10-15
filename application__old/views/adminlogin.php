<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>adminassets/images/favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="<?php echo base_url(); ?>adminassets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>adminassets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url(); ?>adminassets/js/modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index-2.html" class="text-success">
                                            <span><img src="<?php echo base_url(); ?>adminassets/images/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>login/check/">
                                        <input type="hidden" name="flag" value="1">
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" name="email" type="text" required="" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>adminassets/js/jquery.app.js"></script>

    </body>

</html>