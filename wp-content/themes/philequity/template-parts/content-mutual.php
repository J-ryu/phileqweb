
<?php
/**
 * The template for MUTUAL FUNDS section
 *

 */


?>




 <!-- start cta -->
 <section class="cta">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <a href="<?php echo site_url('/mutual-funds') ?>" >
                        <h2>Our  <span>Mutual Funds</span></h2>
                        </a>

                    </div>
                </div>
            <!--</div>--> <!-- end container -->
        </section>
        <!-- end cta -->

    <!-- start services-section-s2 -->
    <section class="services-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="services-phone">
                            <div class="phone-bg"></div>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/phone.png" alt>
                            <div class="phone-inner">
                                <h3>Still have <span>confusion?</span></h3>
                                <p>Don’t worry. We don’t do rocket science</p>
                                <a href="<?php echo site_url('/contact-us') ?>" class="theme-btn-s2">Request a call Back</a>
                            </div>
                        </div>
                    </div>

                      <!-- //added by neil 05.27.19 -->
                    <div class="col col-md-8 col-md-offset-1">
                        <div class="services-s2-grids">
                            <?php $loop = new WP_Query( array(
                                'post_type' => 'mutual_fund',
                                'orderby' => 'post_title',
                                'order' => 'ASC' ));
                            ?>
                            <!-- end of sorting modified by neil -->

                            <?php while( $loop->have_posts() ): $loop->the_post(); ?>

                                <div class="grid">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="<?php the_field('mutual_fund_icon'); ?>"></i>
                                    </div>
                                    <div class="details">
                                        <h3><a href="<?php echo get_field("mutual_fund_url"); ?>"><?php echo the_field('mutual_nice_name'); ?></a></h3>
                                
                                        <p><?php echo wp_trim_words(get_field('mutual_description'),12); ?></p>
                                    </div>        
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query();?>

                          
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end services-section-s2 -->