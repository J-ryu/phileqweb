<?php
/**
 * The template for Home Page
 *

 */

$directorsImage = get_field('map_image'); 


get_header();
?>
  


  <section class="about-section-with-bg section-padding">


<div class="container">
    <div class="row">
        <div class="col col-xs-12 text-center" style="margin-bottom:30px">
            <a href="<?php echo site_url('/directors') ?>" >
                  <h2>Our  <span>Board of Directors</span></h2>
             </a>

          
        </div>
    </div>


<div class="row">   
       <div class="col col-md-12">
            <div class="about-chart img-responsive ">
                     <?php echo $directorsImage ?>
            </div>
        </div>
 
     
    </div> <!-- end row -->
</div>


</section>


<!-- //  -->
<section class="about-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="video">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/about-s2/img-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="about-text">
                            <h3>How we work</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="#" class="theme-btn">Get Details</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="about-text">
                            <h3>2018 finance analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="#" class="theme-btn">View Case Study</a>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/about-s2/img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>



        <?php
get_footer();