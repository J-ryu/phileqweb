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

<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/video-archives-1.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Video Archives</h2>
                       
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
                

				?>  
                <div class="grid">
                        
                         <div class="entry-body">   

                                       <!-- Grid column -->
          
              

              <div class="card">
                  <div class="card-block p-3">
                      <!--Title-->
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php the_excerpt(); ?></p>
                      
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe width="560" height="315" src="<?php the_field('url_link'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                      </div>
                  </div>
              </div>

     
          <!-- Grid column -->


              


                                
                              
                               
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
                 
                 <?php get_sidebar() ?>

			 </div>  <!-- end row -->
				
			</div> <!-- end container -->
        </section>
		<!-- end blog-with-sidebar-section -->  
		


<?php

get_footer();

?>