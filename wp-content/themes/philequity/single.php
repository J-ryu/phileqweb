<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package philequity
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );


			// get_template_part( 'template-parts/content', get_post_type() );

			?>


			<section class="blog-with-sidebar-section blog-single-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
                        <div class="post">
                            <div class="post-title-meta">
                                <h2><?php the_title(); ?></h2>
                                <ul class="meta-info">
                                    <li><a href="#">By: <?php  the_author_posts_link(); ?></a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> <?php the_time('M j, Y');?></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-comments"></i> 26 comments</a></li> -->
                                </ul>
                            </div>
                            <div class="post-body">
								<?php 
								if ( !empty($thumbnail)) : ?>
								<div class="gallery-post">
                                      <div class="gallery">
                                        <div class="img-holder"  style="max-width: 100% !important;" >
										 
                                            <img src="<?php echo $thumbnail[0] ?> " alt="">
                                        </div>
                                       
                                    </div>
								</div>

							
							<?php endif; ?>
							
								
							<?php the_content(); ?>

                            

                                
                            </div>
                        </div> <!-- end post -->

                        <div class="tag-share">
                            <div>
                                <span>Tags: </span>
                                <ul class="tag">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Article</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Creative</a></li>
                                </ul>
                            </div>
                            <div>
                                <span>Share:</span>
                                <ul class="share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->

                        
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8 col-sm-5">
                        <div class="widget search-widget">
                            <form class="form">
                                <input type="text" class="form-control" placeholder="Search here..">
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="#">Food <span class="badge">12</span></a></li>
                                <li><a href="#">Water <span class="badge">20</span></a></li>
                                <li><a href="#">Education <span class="badge">8</span></a></li>
                                <li><a href="#">Africa <span class="badge">45</span></a></li>
                                <li><a href="#">India <span class="badge">33</span></a></li>
                                <li><a href="#">Event <span class="badge">12</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Recent post</h3>
                            <ul>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Integer suscipit sit amet</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-3.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget archive-widget">
                            <h3>Archive</h3>
                            <ul>
                                <li><a href="#">September 2015 <span class="badge">12</span></a></li>
                                <li><a href="#">August 2015 <span class="badge">20</span></a></li>
                                <li><a href="#">July 2015 <span class="badge">8</span></a></li>
                                <li><a href="#">October 2014 <span class="badge">45</span></a></li>
                                <li><a href="#">January 2014 <span class="badge">33</span></a></li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <div class="all-tags">
                                <a href="#" class="btn">Team</a>
                                <a href="#" class="btn">Charity</a>
                                <a href="#" class="btn">Volunteer</a>
                                <a href="#" class="btn">Web</a>
                                <a href="#" class="btn">Human</a>
                                <a href="#" class="btn">Education</a>
                                <a href="#" class="btn">UI</a>
                                <a href="#" class="btn">Speech</a>
                                <a href="#" class="btn">News</a>
                                <a href="#" class="btn">2016</a>
                                <a href="#" class="btn">Welfare</a>
                                <a href="#" class="btn">Design</a>
                                <a href="#" class="btn">Event</a>
                            </div>
                        </div>
                        <div class="widget instagram-widget">
                            <h3>Instagram</h3>
                            <ul>
                                <li><a href="#"><img src="assets/images/instagram/img-1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instagram/img-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instagram/img-3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instagram/img-4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instagram/img-5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/images/instagram/img-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>


			<?php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
