<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package philequity
 */

$authorname = get_field('author');
$authorimg = get_field('author_image'); 
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
$image_author_thumb = wp_get_attachment_image_src( $authorimg, $size );

get_header();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php while ( have_posts() ) : the_post();
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );
    ?>
    <section class="blog-with-sidebar-section blog-single-content section-padding">
      <div class="container">
        <div class="row">
          <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
            <div class="post">
              <div class="post-title-meta">
              <div class="row" style="display:flex;">
                <div class=" col col-md-6 col-xs-6" style="bottom: 0px !important;height: auto;align-self: flex-end;width: 70%;"  >
                    <h2> <?php echo the_title(); ?></h2>
                </div>
                <div class="col col-md-6 col-xs-6" >
                    <img class="img-circle"src="<?php echo $image_author_thumb[0]; ?>"  alt="" >   
                </div>
                </div>
                <ul class="meta-info">
                  <li><a href="#">By: <?php  echo $authorname ?></a></li>
                  <li><a href="#"><i class="fa fa-clock-o"></i> <?php the_time('M j, Y');?></a></li>
                  <!-- <li><a href="#"><i class="fa fa-comments"></i> 26 comments</a></li> -->
                </ul>
              </div>
              <div class="post-body">
             
            <?php the_content(); ?>
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