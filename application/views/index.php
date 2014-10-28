<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ;?>css/bootstrap.min.css" rel="stylesheet" media="screen">		
        <!-- Main CSS -->
        <link href="<?php echo base_url() ;?>css/style.css" rel="stylesheet" media="screen">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ;?>font-awesome/css/font-awesome.min.css">

        <!-- Owl Carousel Assets -->
        <link href="<?php echo base_url() ;?>css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url() ;?>css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo base_url() ;?>css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url() ;?>css/style_jakat.css" rel="stylesheet">
    </head>
    <body>
		
        <!--- Header Area --->
        <div class="header-area">
           <header id="header">
              <div class="container">
                 <div class="row">
                       <div class="col-md-6">
                          <div class="logo">
                               <a href="<?php echo base_url();?>welcome/index.html"><h2>FundRaising For</h2>
                               <p>Non-profitable Organization</p></a>
                          </div>
                       </div>
                        <div class="col-md-2">
                            <div class="title"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="zakat-calc">
                                <h2><a href="<?php echo base_url();?>welcome/zakat.html">Zakat Calculator</a></h2>
                            </div>
                        </div>
                   </div>
              </div>
           </header>
            
        </div>
		


        <!--- Marque Area --->
        <div class="marque-area"></div>
		
       <!--- Navigation Area --->
        <div class="navigation-area">
           <div class="mainmenu">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-inverse " role="navigation">
                             <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                  </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                       <li><a href="<?php echo base_url();?>welcome/index.html">HOME</a></li>
                                       <li><a href="<?php echo base_url();?>welcome/fund_view.html">FUNDRAISING</a></li>
                                       <li><a href="<?php echo base_url();?>welcome/about_us.html" >ABOUT US</a></li>
                                       <li><a href="<?php echo base_url();?>welcome/events.html">FIND AN EVENTS</a></li>
				       <li><a href="<?php echo base_url();?>welcome/index.html" >RULES</a></li>
                                       <li><a href="<?php echo base_url();?>welcome/contact_us.html" >CONTACT US</a></li>
                                       <li class="dropdown">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                           <?php
                                                if($this->session->userdata('client_id')){
                                                ?>
                                                <?php echo $this->session->userdata('client_username'); ?>
                                                <?php
                                                }
                                                else
                                                    { 
                                                ?>
                                               <p>Please Login</p>
                                                <?php
                                                }
                                                ?>
                                               </a>
                                              <ul class="dropdown-menu" role="menu">
                                                  <?php if($this->session->userdata('client_id')){
                                                       
                                                   ?>
                                                  <li><a href="<?php echo base_url(); ?>client_login/logout">Logout</a></li>
                                                  <?php
                                                   }
                                                  else{
                                                   ?>
                                                   
                                                   <?php
                                                    }
                                                   ?>
                                             </ul> 
                                       </li> 
                                  </ul> 
                                </div><!-- /.navbar-collapse -->
                             </div><!-- /.container-fluid -->
                         </nav>
                      </div>
                </div>
              </div>   
           </div>
        </div>

       <!-- maincontent area -->
	<?php echo $maincontent ; ?>
		
<!--- Footer Area --->
<div class="footer-area">
    <div class="container footer">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">
                    <p>&copy; All rights reserved. </p>
                </div>
            </div>				   
            <div class="col-md-6">
                <div class="social-connect">
                    <ul>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/facebook.png"></a></li>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/feed.png"></a></li>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/twitter.png"></a></li>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/pinterest.png"></a></li>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/social1.png"></a></li>
                        <li><a href=""><img src="<?php echo base_url(); ?>images/in.png"></a></li>	
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/jakat.js"></script>
    <script>
        $(function() {
            $('#myTab a:last').tab('show')
        }) 
    </script>
</body>
</html>

