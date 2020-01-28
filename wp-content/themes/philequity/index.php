<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package philequity
 */

get_header();
?>
 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/news-events-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>News & Articles</h2>
                        
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->
        
		  <section class="blog-with-sidebar-section blog-list section-padding">
            <div class="container">
			 <div class="row">

				  <div class="news-grids col col-md-12">
		
					  	<?php
		if ( have_posts()) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
                the_post();
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );

				?>  
                <div class="grid">
                        <div class="entry-media"  >
                                    <img src="<?php echo $thumbnail[0] ?>" alt="">
                            
                        </div>
                         <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date"><?php the_time('M j, Y');?>  </span> 	
                                    <!-- <span class="date">Posted by <?php the_author_posts_link(); ?> on <?php the_time('M j, Y');?> in News & Events </span> -->
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="entry-details">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="entry-meta">
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                    <!-- <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a> -->
                                </div>
                        </div>
                 </div>


                          
				<?php
			endwhile;
            ?>


            <div class="pagination-wrapper">
                    <?php philequity_paging_nav(); ?>
            </div>
                             
            <?php
		

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


			
				 
                 </div> <!-- end blog-content -->
                 <!-- <?php get_sidebar();?>  -->

			 </div>  <!-- end row -->
				
			</div> <!-- end container -->
        </section>
		<!-- end blog-with-sidebar-section -->  
		


<?php

get_footer();

?>