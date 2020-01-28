<?php
/**
 * Template part for displaying BLOG SECTIONS
 *
 * 
 *
 * @package philequity
 */
?>


<section class="services-pg-section all-equity-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grid-s2">
                        <!-- Philequity Corners -->
                        <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-idea"></i>
                                </div>
                                <div class="details">
                                    <h3>Philequity Corner</h3>
                                    <p>Get the latest trends and updates that will boost your knowledge. </p>
                                    <a href="<?php echo get_post_type_archive_link('philequity_corner')?>" class="read-more">Read More</a>
                                </div>
                                <div class="hover-grid-corners">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-chess"></i>
                                </div>
                                <div class="details">
                                    <h3>Vantage Point</h3>
                                    <p>Feed your mind with different Strategies and Techniques </p>
                                    <a href="<?php echo get_post_type_archive_link('vantage_point')?>" class="read-more">Read More</a>
                                </div>
                                <div class="hover-grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            

                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-time"></i>
                                </div>
                                <div class="details">
                                    <h3>Latest Events</h3>
                                    <p>Register and book ahead a seat in our latest Events.</p>
                                    <a href="<?php echo site_url('/events') ?>" class="read-more">Read More</a>
                                </div>
                                <div class="hover-grid-news">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>