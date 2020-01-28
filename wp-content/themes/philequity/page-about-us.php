<?php
/**
 * The template for Home Page
 *

 */

$directorsImage = get_field('map_image'); 
$investosImage = get_field('map_image_2'); 


get_header();
?>
  
      
  
  


    <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/aboutus-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>About us</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>About us</li>
                        </ol> -->
                    </div>
             <!--</div>-->
 <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

        <!-- start about-section -->
        <section class="section-padding about-section-s5">
            <div class="container">
                
            <div class="col col-xs-12">   
                        <div class="section-title-s3" style="margin-top:5px" >
                           
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque penatibus et 
                                magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus tempus lobortis 
                                dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa dignissim.
                            </p>
                        </div>
            </div>


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
             
                    <div class="col col-xs-12">   
                        <div class="section-title-s3" style="margin-top:30px" >
                           
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque penatibus et 
                                magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus tempus lobortis 
                                dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa dignissim.
                            </p>
                        </div>
                    </div>

                </div> <!-- end row -->
            </div>
       
        </section>


       
    

      <!-- start about-section -->
      <section class="section-padding about-section-with-bg" style="margin-top:60px !important; background-color: #fff !important">
            <div class="container">
               

                <div class="row">

                    <div class="col col-xs-12">
                        <div class="section-title-s3" style="margin-top:40px;">
                            <a href="<?php echo site_url('/investment-committee') ?>" >
                                <h2>Investment Committee</h2>
                            </a>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque penatibus et 
                                magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus tempus lobortis 
                                dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa dignissim.
                            </p>
                        </div>
                    </div>

                    <div class="col col-md-12">
                        <div class="about-chart ">
                          <?php echo $investosImage ?>
                        </div>
                     </div>

              

                </div> <!-- end row -->

               

            </div> <!-- end container -->
        </section>

   <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <hr>

                </div>
             </div>
        </div>


        <!-- end about-section -->

        <section class="team-section section-padding">

          <div class="container">
               

               <div class="row">
                   <div class="col col-md-12 text-center">
                         <a href="<?php echo site_url('/awards') ?>" >
                              <h2 style="margin:20px 0px;">Our Awards </h2>
                         </a>

                         
                   <a href="<?php echo site_url('/awards') ?>" >
                       <div class="about-chart ">
                     
                            <img class="img-fluid d-block mx-auto" src="<?php  bloginfo('stylesheet_directory');?>/assets/images/about-s2/Awards-banner-1.jpg" alt>
                     
                       </div>
                       </a>
                    </div>

               <div class="col col-xs-12 text-center">
                       <div class="section-title-s3" style="padding:60px;">
                         

                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque penatibus et 
                               magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus tempus lobortis 
                               dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa dignissim.
                           </p>
                       </div>
                </div>

               </div> <!-- end row -->

              

           </div> <!-- end container -->

            
            
        </section>
 


      
<?php

get_footer();
    