<?php
/**
 * The template for Home Page
 *

 */


get_header();
?>
<!-- start page-title -->
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/aboutus-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                       <h2>Mission | Vision | Corporate Values</h2>
                        <!--  <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/about-us') ?>">About us</a></li>
                            <li>Mission | Vision | Corporate Values</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

        <!-- start about-section -->
        <section class="section-padding about-section-s5">
            <div class="container">
                
                <div class="row">
                    <div class="col col-md-7">
                            <div class="about-details">
                                <h3>Mission Statement</h3>
                                <p>We are an investment management company committed to helping investors achieve long-term financial goals.</p>
                            </div>

                         <div class="about-details">
                            <h3>Vision Statement</h3>
                            <p>We will be the preferred investment management company of our target customers seeking the best-managed funds and excellent customer service.</p>
                        </div>

                         <div class="about-details">
                            <h3>Corporate Values</h3>
                            <ul>
                                <li>Integrity</li> 
                                <li>Professionalism</li> 
                                <li>Commitment to Excellence</li> 
                                <li>Integrity</li>
                                <li>Leadership</li> 
                                <li>Teamwork</li> 
                                <li>Sense of Urgency/ Proactivity</li>
                                <li>Pride in one's work</li> 
                            <ul>
                        </div>



                    </div>

                    <div class="col col-md-5">
                        <div class="about-img">
                            <img src="<?php  bloginfo('stylesheet_directory');?>/assets/images/pg-title/about-s1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>        
        <!-- end about-section -->        




<?php
get_footer();