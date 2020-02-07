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
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/vantagepoint.jpg'); ?>) center center/cover no-repeat local;">
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <h2><span style="color: #fff">Vantage Point</span></h2>
      </div>
    </div>
    <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end page-title -->
<!-- start blog-with-sidebar-section -->
<section class="blog-with-sidebar-section blog-single-content section-padding">
  <div class="container">
    <div class="row">
      <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
        <div class="post">
          <div class="post-title-meta">
            <?  while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <ul class="meta-info">
              <li><a href="#">By: <?php the_author(); ?> </a></li>
              <li><a href="#"><i class="fa fa-clock-o"></i> <?php the_time('j M, Y');?> </a></li>
            </ul>
            <?php endwhile; ?>
          </div>
          <div class="tag-share" style="border-bottom: none !important;">
            <div>
              <ul class="share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div> <!-- end tag-share -->
          <div class="post-body">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); endwhile; ?>
          </div>
        </div> <!-- end post -->
      </div> <!-- end blog-content -->
      <?php get_sidebar() ?>
    </div>
  </div> <!-- end container -->
</section>
<!-- end blog-with-sidebar-section -->
<?php
get_footer();