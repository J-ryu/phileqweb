<?php 



/**
 * Template part for displaying page content in slider
 *
 * 
 *
 * @package philequity
 */



// 5 SLIDERS SECTION

$header_image_1      = get_field('header_image_1');
$header_title_1      = get_field('header_title_1');
$header_subtitle_1   = get_field('header_subtitle_1');
$header_button_1a    = get_field('header_button_1a');
$header_button_1b    = get_field('header_button_1b');

$header_button_url_1a    = get_field('header_button_url_1a');
$header_button_url_2b    = get_field('header_button_url_1b');

$header_image_2      = get_field('header_image_2');
$header_title_2      = get_field('header_title_2');
$header_subtitle_2   = get_field('header_subtitle_2');
$header_button_2a     = get_field('header_button_2a');
$header_button_2b    = get_field('header_button_2b');

$header_button_url_2a    = get_field('header_button_url_2a');
$header_button_url_2b    = get_field('header_button_url_2b');

$header_image_3      = get_field('header_image_3');
$header_title_3      = get_field('header_title_3');
$header_subtitle_3   = get_field('header_subtitle_3');
$header_button_3a     = get_field('header_button_3a');
$header_button_3b    = get_field('header_button_3b');

$header_button_url_3a    = get_field('header_button_url_3a');
$header_button_url_3b    = get_field('header_button_url_3b');

$header_image_4      = get_field('header_image_4');
$header_title_4      = get_field('header_title_4');
$header_subtitle_4   = get_field('header_subtitle_4');
$header_button_4a     = get_field('header_button_4a');
$header_button_4b    = get_field('header_button_4b');


$header_button_url_4a    = get_field('header_button_url_4a');
$header_button_url_4b    = get_field('header_button_url_4b');

$header_image_5      = get_field('header_image_5');
$header_title_5      = get_field('header_title_5');
$header_subtitle_5   = get_field('header_subtitle_5');
$header_button_5a     = get_field('header_button_5a');
$header_button_5b    = get_field('header_button_5b');


$header_button_url_5a    = get_field('header_button_url_5a');
$header_button_url_5b    = get_field('header_button_url_5b');


$slider_navigation_title1 = get_field('slider_title1');
$slider_navigation_title2 = get_field('slider_title2');
$slider_navigation_title3 = get_field('slider_title3');
$slider_navigation_title4 = get_field('slider_title4');
$slider_navigation_title5 = get_field('slider_title5');



?>


 <!-- start of hero -->   
 <section>


 
 <div class="row">
            <div id="slider">
                
                    <div id="carousel-bounding-box">
                        <div id="myCarousel" class="carousel slide">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                               
                            <?php 
                         if( !empty($header_image_1)) : ?>

                <div class="new-carousel-item active item" data-slide-number="1"  style="background-image: url('<?php echo $header_image_1['url']; ?>');">
             <?php endif; ?>
                    <div class="container container-new">
                        <div class="row-new row">
                            <div class="col col-md-8 col-sm-9 slide-caption" >

                             <?php 
                                     if( !empty($header_title_1)) : ?>
                                               <h2 style="color:#fff !important; font-size: 60px;"><?php echo $header_title_1; ?></h2>
                               <?php endif; ?>

                              <?php 
                                     if( !empty($header_subtitle_1)) : ?>
                                            <p style="color:#fff;"><?php echo $header_subtitle_1; ?></p>
                              <?php endif; ?>


                                 <div class="btns">
                                     <!-- if user add text on button_1a -->


                                         <?php 
                                       if( !empty($header_button_1a)) : ?>
                                      <a href="<?php echo $header_button_url_1a ?>" class="theme-btn"><?php echo $header_button_1a; ?></a>
                                     <?php endif; ?>


                                        <!-- if user add text on button_2a -->
                                      <?php 
                                       if( !empty($header_button_1b)) : ?>
                                      <a href="<?php echo $header_button_url_1b ?>" class="theme-btn-s2"><?php echo $header_button_1b; ?></a>
                                     <?php endif; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                                
                            
                <!-- slide 2 -->



                     <?php 
                         if( !empty($header_image_2)) : ?>

                <div class="new-carousel-item item" data-slide-number="2"  style="background-image: url('<?php echo $header_image_2['url']; ?>');">
             <?php endif; ?>
                    <div class="container container-new">
                        <div class="row-new row">
                            <div class="col col-md-8 col-sm-9 slide-caption">

                             <?php 
                                     if( !empty($header_title_2)) : ?>
                                               <h2  style="color:#fff !important; font-size: 60px;"><?php echo $header_title_2; ?></h2>
                               <?php endif; ?>

                              <?php 
                                     if( !empty($header_subtitle_2)) : ?>
                                              <p><?php echo $header_subtitle_2; ?></p>
                              <?php endif; ?>


                                 <div class="btns">
                                     <!-- if user add text on button_1a -->


                                         <?php 
                                       if( !empty($header_button_2a)) : ?>
                                      <a href="<?php echo $header_button_url_2a ?>" class="theme-btn"><?php echo $header_button_2a; ?></a>
                                     <?php endif; ?>


                                        <!-- if user add text on button_2a -->
                                      <?php 
                                       if( !empty($header_button_2b)) : ?>
                                      <a href="<?php echo $header_button_url_2b ?>" class="theme-btn-s2"><?php echo $header_button_2b; ?></a>
                                     <?php endif; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>






                              
                <!-- slide 3 -->



                     <?php 
                         if( !empty($header_image_3)) : ?>

                <div class="new-carousel-item item" data-slide-number="3"  style="background-image: url('<?php echo $header_image_3['url']; ?>');">
             <?php endif; ?>
                    <div class="container container-new">
                        <div class="row-new row">
                            <div class="col col-md-8 col-sm-9 slide-caption" >

                             <?php 
                                     if( !empty($header_title_3)) : ?>
                                               <h2 style="color:#fff !important; font-size: 60px;"><?php echo $header_title_3; ?></h2>
                               <?php endif; ?>

                              <?php 
                                     if( !empty($header_subtitle_3)) : ?>
                                              <p><?php echo $header_subtitle_3; ?></p>
                              <?php endif; ?>


                                 <div class="btns">
                                     <!-- if user add text on button_1a -->


                                         <?php 
                                       if( !empty($header_button_3a)) : ?>
                                      <a href="<?php echo $header_button_url_3a ?>" class="theme-btn"><?php echo $header_button_3a; ?></a>
                                     <?php endif; ?>


                                        <!-- if user add text on button_2a -->
                                      <?php 
                                       if( !empty($header_button_3b)) : ?>
                                      <a href="<?php echo $header_button_url_3b ?>" class="theme-btn-s2"><?php echo $header_button_3b; ?></a>
                                     <?php endif; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>




   <!-- slide 4 -->



                     <?php 
                         if( !empty($header_image_4)) : ?>

                <div class="new-carousel-item item" data-slide-number="4"  style="background-image: url('<?php echo $header_image_4['url']; ?>');">
             <?php endif; ?>
                    <div class="container container-new">
                        <div class="row-new row">
                            <div class="col col-md-8 col-sm-9 slide-caption" >

                             <?php 
                                     if( !empty($header_title_4)) : ?>
                                               <h2 style="color:#fff !important; font-size: 60px;"><?php echo $header_title_4;?></h2>
                               <?php endif; ?>

                              <?php 
                                     if( !empty($header_subtitle_4)) : ?>
                                              <p><?php echo $header_subtitle_4; ?></p>
                              <?php endif; ?>


                                 <div class="btns">
                                     <!-- if user add text on button_1a -->


                                         <?php 
                                       if( !empty($header_button_4a)) : ?>
                                      <a href="<?php echo $header_button_url_4a ?>" class="theme-btn"><?php echo $header_button_4a; ?></a>
                                     <?php endif; ?>


                                        <!-- if user add text on button_2a -->
                                      <?php 
                                       if( !empty($header_button_4b)) : ?>
                                      <a href="<?php echo $header_button_url_4b ?>" class="theme-btn-s2"><?php echo $header_button_4b; ?></a>
                                     <?php endif; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>



                
   <!-- slide 4 -->



                     <?php 
                         if( !empty($header_image_5)) : ?>

                <div class="new-carousel-item item" data-slide-number="5"  style="background-image: url('<?php echo $header_image_5['url']; ?>');">
             <?php endif; ?>
                    <div class="container container-new">
                        <div class="row-new row">
                            <div class="col col-md-8 col-sm-9 slide-caption" >

                             <?php 
                                     if( !empty($header_title_5)) : ?>
                                               <h2 style="color:#fff !important; font-size: 60px;"><?php echo $header_title_5;?></h2>
                               <?php endif; ?>

                              <?php 
                                     if( !empty($header_subtitle_5)) : ?>
                                              <p style="color:#fff"><?php echo $header_subtitle_5; ?></p>
                              <?php endif; ?>


                                 <div class="btns">
                                     <!-- if user add text on button_1a -->


                                         <?php 
                                       if( !empty($header_button_5a)) : ?>
                                      <a href="<?php echo $header_button_url_5a ?>" class="theme-btn"><?php echo $header_button_5a; ?></a>
                                     <?php endif; ?>


                                        <!-- if user add text on button_2a -->
                                      <?php 
                                       if( !empty($header_button_5b)) : ?>
                                      <a href="<?php echo $header_button_url_5b ?>" class="theme-btn-s2"><?php echo $header_button_5b; ?></a>
                                     <?php endif; ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>





                            </div>
                            <!-- main slider carousel nav controls --> 
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                        </div>
                    </div>
    
            </div>
    
    <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
              <!-- thumb navigation carousel items -->
              <ul class="list-inline">
              <li>
              <a id="carousel-selector-1" class="selected"  >
                <div class="slider-navigation">
                <?php if (!empty($slider_navigation_title1)) { ?> <?php echo $slider_navigation_title1; ?> <?php } else { ?> <?php echo "Enter Title"; ?> <?php } ?> 
                </div>

              </a></li>
              <li> <a id="carousel-selector-2">
                <div class="slider-navigation" style="background:  rgba(0,0,0,0.3); color:#fff">
                <?php if (!empty($slider_navigation_title2)) { ?> <?php echo $slider_navigation_title2; ?> <?php } else { ?><?php echo "Enter Title"; ?> <?php } ?> 
                </div>
              </a></li>

              <li> <a id="carousel-selector-3">
                <div class="slider-navigation"  style="background:  rgba(0,0,0,0.3); color:#fff">
                <?php if (!empty($slider_navigation_title3)) { ?> <?php echo $slider_navigation_title3; ?> <?php } else { ?> <?php echo "Enter Title"; ?> <?php } ?> 
                </div>
              </a>
            </li>

              <li> <a id="carousel-selector-4">
                <div class="slider-navigation"  style="background:  rgba(0,0,0,0.3); color:#fff">
                     <?php if (!empty($slider_navigation_title4)) { ?> <?php echo $slider_navigation_title4; ?> <?php } else { ?> <?php echo "Enter Title"; ?> <?php } ?> 
                </div>
              </a>
            </li>
            <li> <a id="carousel-selector-5">
                 <div class="slider-navigation"  style="background:  rgba(0,0,0,0.3); color:#fff">
                  <?php if (!empty($slider_navigation_title5)) { ?> <?php echo $slider_navigation_title5; ?> <?php } else { ?> <?php echo "Enter Title"; ?> <?php } ?> 
                </div>
              </a>
            </li>

                </ul>
        </div>
        </div>



 </section>
        <!-- end of hero slider -->  
        
       