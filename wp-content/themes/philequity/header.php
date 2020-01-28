<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PhilEquity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Philequity Management, Inc. </title>

    <!-- Favicon and Touch Icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flaticon.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/new-font/flaticon.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/mutual-fonts/css/mutual-funds.css" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-select.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">   


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script>
		jQuery(document).ready(function() {
			//jQuery(".panel-heading").click(function(){ jQuery(this).nextAll(".panel-collapse").slideToggle("fast"); });
			
			jQuery(".panel-heading").click(function(){ 
				jQuery('#accordion .panel-heading').not(this).removeClass('isOpen');
				jQuery(this).toggleClass('isOpen');
				jQuery(this).next(".panel-collapse").addClass('thePanel');
				jQuery('#accordion .panel-collapse').not('.thePanel').slideUp("fast"); 
		    	jQuery(".thePanel").slideToggle("fast").removeClass('thePanel'); 
			});
			
		});	
		
		
</script> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- HighCharts -->

    



<div id="page" class="site">
 <div class="page-wrapper">

        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">

        <div class="topbar">
                <div class="container">
                <div class="row top-items">

                    <!-- <div class="col col-sm-3">
                            <div class="site-logo">
                                <a href="http://philequity-dev.dvrse.net"><img src="http://philequity-dev.dvrse.net/wp-content/themes/philequity/assets/images/logo.png" alt="philequity_logo"></a>
                            </div>
                    </div> -->

                    <div class="col col-sm-9">
                        <ul class="contact-info" style="">
                            <li><i class="fa fa-phone-square"></i> Phone no: +63 (02) 689 8080 </li>
                            <li><i class="fa fa-mobile"></i> Mobile no: +63 917 865 7197 and +63 949 325 2712 </li>
                        
                            <li><i class="fa fa-clock-o"></i> Mon - Fri: 8:30 AM - 5:30 PM</li>
                        </ul>
                    </div>

                    <div class="col col-sm-2 text-center">
                        <div class="language">
                            <i class="fa fa-user" style="padding-right:7px !important"></i>Open an Account
                        </div>
                    </div>

                    <div class="col col-sm-1 text-center">
                        <div class="language">
                            <i class="fa fa-sign-in" style="padding-right:7px !important"></i>Login
                        </div>
                    </div>




                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->



      

           

            <nav class="navigation navbar navbar-default original">            
                <div class="container">
            	<div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="site-logo">
                        <a href="<?php echo site_url('') ?>"><img src="<?php  echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt="philequity_logo"></a>
                    </div>
                   
                       
				</div> <!-- end navbar-header -->
              
                <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                   <button class="close-navbar"><i class="fa fa-close"></i></button>
                     

					<?php
					wp_nav_menu( array (
						'theme_location'   => 'primary',
                        'container' 	   => false,
                        'menu_class'       => 'nav navbar-nav',
                     
					));

					?>
                </div>	<!-- end of nav-collapse -->
                
                <div id="sb-search" class="sb-search">
                   
                </div>


                  

                </div> <!-- end of container -->
            </nav>  <!-- end of nav -->
        
        

        </header> 
     
        <!-- end of header -->