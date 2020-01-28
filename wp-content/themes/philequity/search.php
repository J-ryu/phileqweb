<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package philequity
 */

get_header();
?>


<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/vantagepoint.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1  class="page-title" style="color: #fff !important; font-size: 40px;">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'philequity-financing' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
								


                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

        


	<section id="primary" class="content-area">
		<main id="main" class="site-main">

	

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
