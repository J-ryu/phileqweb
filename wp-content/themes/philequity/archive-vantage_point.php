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
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/vantage-point-banners.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Vantage Point</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Vantage Point</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->
        
		  <section class="blog-with-sidebar-section blog-list section-padding">
            <div class="container">
			 <div class="row">

				  <div class="news-grids col  col-md-12 ">
		
					  	<?php
		if ( have_posts()) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
                the_post();
                

				?>  
                <div class="grid">
                        
                         <div class="entry-body">
                                <div class="entry-header">
                                    <span class="date"><?php the_time('M j, Y');?>  </span> 	
                                    <p>By: <?php the_author(); ?> </p>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="entry-details">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="entry-meta">
                                  
                                    <a  class="theme-btn-s2" href="<?php the_permalink(); ?>" >Read More </a>
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

				
        </section>
		<!-- end blog-with-sidebar-section -->    
		


<?php

get_footer();

?>