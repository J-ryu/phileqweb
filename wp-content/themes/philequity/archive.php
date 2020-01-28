<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package philequity
 */

get_header();
?>

	 <!-- start page-title -->
	 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/img-1.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 description" >
						<h2><?php the_archive_title(); ?></h2>
						<?php the_archive_description(); ?>
						

						<ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
							<li>
	
								<?php the_archive_title(); ?>
							</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->
        
		  <section class="blog-with-sidebar-section blog-list section-padding">
            <div class="container">
			 <div class="row">

				  <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
		
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
                                    <span class="date"><?php the_time('M j, Y');?> </span>
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

			
		

<?php
 get_sidebar();
get_footer();
