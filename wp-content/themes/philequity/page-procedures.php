<?php

/**
 * The template for Mutual Funds Page
 *

 */


 get_header(); ?>




  <!-- start page-title -->
  <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/prd-banners.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row">-->
                    <div class="col col-xs-12">
                       <h2>Procedures</h2>
                       <!--   <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/mutual-funds') ?>">About Us</a></li>
                            <li>Mutual Funds</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section> <!-- end page-title -->


 <?php 
 
 
 while(have_posts()){

    the_post();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );

    
 ?>

<section class="section-padding about-section-s3 career-section-s1">
            <div class="container">
                <div class="row">
                        <div class="col col-md-12">

                                <!-- <div class="section-title-s2" style="margin: 0px !important;">
                                        <div class="img-holder" style="text-align:center; margin-bottom:30px;">
                                            <img src="<?php echo $thumbnail[0] ?>" alt="" class="img-fluid d-block mx-auto"> 
                                        </div> 
                                    
                                </div>
                                  -->
                                <div class="col col-md-12">
                                        <div class="section-title-s3">
                                       
                                         <?php the_content(); ?>
                                        </div>
                                </div>


                              


                         
              
        
                         </div>  <!-- end row -->
        </div>  <!-- end container -->
    </section> <!-- end section -->


<?php
} wp_reset_query();

?>
   




<section class="services-pg-section">
          
          <div class="container">
              <div class="row">
                  <div class="col col-xs-12">

                       <div class="section-title-s3" style="margin-top:40px;">
                            <a href="<?php echo site_url('/transact')?>">
                                 <h2>Procedures</h2>
                            </a>
                        </div>


                      <div class="services-grid-s2">  
                      <div class="grid-transact" style="
                          height: 300px !important;
                          overflow: hidden !important;">
                          <a href="<?php echo site_url('/transact')?>">
                                 <div class="icon">
                                    <i class="fi icon-user-add"></i>
                                </div>
                         </a>
                          
                          
                              <div class="details">
                                <a href="<?php echo site_url('/transact')?>">
                                <h3>Account Opening</h3>       
                                </a>
                              </div>
                              
                        </div>

                          <div class="grid-transact" style="
                          height: 300px !important;
                          overflow: hidden !important;">
                          <a href="<?php echo site_url('/additional-investment')?>">
                              <div class="icon">
                                    <i class="fi icon-coins-stack-add"></i>
                                </div> 
                              
                         </a>   
                              <div class="details">
                              <a href="<?php echo site_url('/additional-investment')?>">
                                <h3>Additional Investment</h3>
                              </a>     
                              </div>
                             
                          </div>

                          <div class="grid-transact" style="
                          height: 300px !important;
                          overflow: hidden !important;">
                          <a href="<?php echo site_url('/redemption')?>">
                               <div class="icon">
                                  <i class="fi icon-coins-stack-substract"></i>
                              </div>
                         </a>  
                         
                            <div class="details">
                              <a href="<?php echo site_url('/redemption')?>">
                                <h3>Redemption</h3>
                              </a>     
                            </div>
                             
                          </div>

                        <div class="grid-transact" style="
                          height: 300px !important;
                          overflow: hidden !important;">
                            <a href="<?php echo site_url('/account-investment-program-enrollment')?>">
                                <div class="icon">
                                    <i class="fi icon-online-banking"></i>
                                </div>
                            </a>  

                            <div class="details">
                              <a href="<?php echo site_url('/account-investment-program-enrollment')?>">
                                <h3>Automatic Investment Program</h3>
                              </a>     
                            </div>

                             
                            
                        </div>

                        <div class="grid-transact" style="
                          height: 300px !important;
                          overflow: hidden !important;">
                          <a href="<?php echo site_url('/account-update-change-details')?>">
                                <div class="icon">
                                    <i class="fi icon-edit"></i>
                                </div>
                          </a>  


                            <div class="details">
                                <a href="<?php echo site_url('/account-update-change-details')?>">
                                    <h3>Account Update</h3>
                                </a>     
                            </div>

                        
                         
                        </div>

                            <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">

                                <a href="<?php echo site_url('/certification-request')?>">
                                        <div class="icon">
                                            <i class="fi icon-certificate"></i>
                                        </div>
                                </a>  

                                <div class="details">
                                        <a href="<?php echo site_url('/certification-request')?>">
                                            <h3>Request for Certification</h3>   
                                        </a>     
                                </div>  
                            </div>
                                                  
                      </div>
                  </div>
              </div>


                

          </div> <!-- end container -->
</section>

<!-- header -->
<div class="row">
    <div class="col col-md-12">
        <hr>
    </div>
</div>



                                
<?php

get_footer(); 

?>



