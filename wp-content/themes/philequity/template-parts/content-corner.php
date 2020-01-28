<?php
/**
 * The template for PHILEQUITY-CORNER
 *

 */
?>

 <section class="cta"  style="
 
    background-attachment: fixed;
    text-align: center;
    padding: 60px 0;
    position: relative; 
    background-image: url(<?php echo get_theme_file_uri('/assets/images/bg/vantage.jpg'); ?>)"
    >
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Philequity Corner</h2>
                    </div>
                </div>
            </div> <!-- end container -->
</section>



<section class="testimonials-section section-padding "style="background-color: #f5f5f5;">
            <div class="container">
                
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="testimonials-slider testimonials-grids">

                    <?php 
                    $homePageVantage = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post_type' => 'philequity_corner'

                    )); 

                    while($homePageVantage->have_posts()) {
                        $homePageVantage->the_post();
                        ?>
                         <div class="grid">
                                
                                <div class="details">
                                   <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                                   
                                    <p><?php the_time('M j, Y');?></p>
                                    <a target="_blank" href="<?php the_field('pdf_file'); ?>" >Learn More.</a>
                                    
                                </div>
                            </div>

                        <?php
                    }
                    wp_reset_postdata();
                    ?>      
                            
                        </div>
                    </div>
                </div>

                  <div class="row">
                    <div class="col col-md-12 " style="text-align:center;">
                        <a style="margin-top: 30px;" href="<?php echo get_post_type_archive_link('philequity_corner')?>" class="theme-btn-s2"> View All Philequity Corner</a>
                    </div>
                </div>    

            </div> <!-- end container -->
        </section>
