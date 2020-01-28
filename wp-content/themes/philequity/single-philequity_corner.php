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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                            <div  class="post-body">
							
							
                           <!--  <a  class="theme-btn" target="_blank" href="<?php the_field('pdf_file'); ?>" >ViewPDF</a>
                          
							<?php the_content(); ?>     --> 

                            <!-- <iframe src="<?php the_field('pdf_file'); ?>" width="900" height="780" style="border: none;" setDisplayMode="fullpage" ></iframe> -->
                            
                                <embed src="<?php the_field('pdf_file'); ?>#toolbar=0&navpanes=0&scrollbar=0" width="900" height="780">
                      
                           


                            </div>


                        </div> <!-- end post -->

                        
                        
                    </div> <!-- end blog-content -->

                       
                        <?php get_sidebar(); ?>
             
                                     
                </div>
            </div> <!-- end container -->


 

        </section>


    
            
			<?php
            endwhile; // End of the loop.
                ?>

		</main><!-- #main -->
	</div><!-- #primary -->





<?php






get_footer();
