<?php

/**
 * The template for Mutual Funds Page
 *

 */


 get_header(); ?>




  <!-- start page-title -->
  <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/aboutus-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
            <!--<div class="row">-->
                    <div class="col col-xs-12">
                       <h2>Our Products</h2>
                       <!--   <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/mutual-funds') ?>">About Us</a></li>
                            <li>Mutual Funds</li>
                        </ol> -->
                    </div>
            <!--</div>-->
 <!-- end row -->
            </div> <!-- end container -->
 </section> <!-- end page-title -->


 <?php 
 
 
 while(have_posts()){

    the_post();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );

    
 ?>

<section class="about-section-s3 career-section-s1">
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
                                        <div style="padding:20px 10px;">
                                       
                                         <?php the_content(); ?>
                                        </div>
                                </div>


                              


                         
              
        
                         </div>  <!-- end row -->
        </div>  <!-- end container -->
    </section> <!-- end section -->


<?php
} wp_reset_query();

?>
   






<section class="services-pg-section" style="margin-top:60px; background-color:#fff ">
          
          <div class="container">
              <div class="row">
                  <div class="col col-xs-12">
                      <div class="services-grid-s2">  

                              <?php $loop = new WP_Query( array(
                                'post_type' => 'mutual_fund',
                                'orderby' => 'post_title',
                                'order' => 'ASC' ));
                            ?>
                            <?php while( $loop->have_posts() ): $loop->the_post(); ?>
                            
                            <div class="grid-transact" style="
                                height: 650px !important;
                                overflow: hidden !important;">
                                <a style="color: inherit;" href="<?php the_field("mutual_fund_url");?>">
                                <div class="icon">  <i class="<?php the_field('mutual_fund_icon'); ?> mutual-funds-icon"></i> </div>
                                  <div class="details">
                                     <h3 style="font-weight:bolder"> <?php  echo the_field('mutual_nice_name'); ?></h3>
                                     <p> <?php  echo wp_trim_words(get_the_content(),150); ?></p>
                                
                                  </div>
                                </a>

                            </div>


                            <?php endwhile; wp_reset_query();?>  
                      
                                                  
                      </div>
                  </div>

                    <div class="col col-md-12" style="margin-top:50px">
                                        <div class="section-title-s3">
                                       <a href="<?php echo site_url('/transact')?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
                                        <a href="<?php echo site_url('/the-benefits-of-mutual-funds')?>" class="theme-btn"><span class="glyphicon glyphicon-education"></span>Learn more</a>
                                    
                          
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


<section class="section-padding" style="background-color:#fff !important">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col col-md-5">
                        <div class="about-chart">
                                 <img src="<?php  bloginfo('stylesheet_directory');?>/assets/images/mutualfunds/whichfund2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="about-details">
                            
                            <h1>Determine which fund is best for you.</h1>
                           
                            <p>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean est mi, dictum eu ipsum nec, vulputate tempor diam. 
                                Phasellus facilisis, enim et molestie mattis, diam felis sagittis libero, in semper nisi nunc sit amet leo. 
                                Praesent id odio gravida lacus hendrerit condimentum. Nunc aliquet aliquet faucibus. Mauris erat quam, bibendum vel quam non,
                                mollis sodales est. Duis vitae nisl rutrum, viverra quam cursus, posuere purus. Pellentesque mattis porta sem. Donec id pharetra justo.
                            </p>

                       
                            <div class="btns text-center">
                                        <div class="section-title-s3">
                                        <a  style="top:5px !important"  href="<?php echo site_url('/investor-profiling') ?>" class="theme-btn"><span class="glyphicon glyphicon-education"></span>Take Customer Suitability Test</a>
                                        <a  style="top:5px !important" href="<?php echo site_url('/understanding-mutual-fund-investing') ?>" class="theme-btn"><span class="glyphicon glyphicon-stats"></span>Understanding Mutual Fund Investing</a>

                          
                                        </div>
                                </div>

    
    
    
    
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


                                
<?php

get_footer(); 

?>



