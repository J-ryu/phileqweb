<?php
/**
 * Template part for displaying BLOG SECTIONS
 *
 * 
 *
 * @package philequity
 */
?>
        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row news-grids">
                    <?php 
                    $newsPosts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'news',
                    ));

                    while ($newsPosts->have_posts()) {
                        $newsPosts->the_post();
                        $trimExcerpt = substr(get_the_excerpt(), 0,60);
                        ?>
                        
                        <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <!-- <div class="entry-media">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blog/img-1.jpg" alt>
                            </div> -->
                            <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date"><?php the_time('M j, Y');?></span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                </div>
                                <div class="entry-details">
                                    <p><?php echo wp_trim_words(get_the_content(),12); ?></p>
                                </div>
                                <div class="entry-meta">
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                    <!-- <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                     }
                       wp_reset_postdata();
                    ?>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-md-12 " style="text-align:center;">
                        <a style="margin-top: 30px;" href="<?php echo site_url('/news-events') ?>" class="theme-btn-s2">View All News Posts</a>
                    </div>
                </div>    
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->
