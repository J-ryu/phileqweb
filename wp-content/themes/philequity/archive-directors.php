<?php
/**
 * The template for Home Page
 *

 */

get_header();
?>


<section class="about-section-with-bg section-padding">


    <div class="container">
        <div class="row">
            <div class="col col-xs-12 text-center" style="margin-bottom:30px">
                <a href="<?php echo site_url('/directors') ?>">
                    <h2>Our <span>Board of Directors</span></h2>
                </a>


            </div>
        </div>

        <?php 
$args = array(
    'p'         => 64, // ID of a page, post, or custom type
    'post_type' => 'any'

  );
  $my_posts = new WP_Query($args);

?>



        <div class="row">
            <div class="col col-md-12">

                <?php while( $my_posts->have_posts() ): $my_posts->the_post(); ?>


                <div class="about-chart img-responsive ">
                    <?php echo get_field('map_image'); ?>
                </div>
                <?php endwhile; wp_reset_query();?>
            </div>




        </div> <!-- end row -->

        <hr>


        <div class="col col-xs-12">
            <div class="section-title-s3" style="margin-top:30px">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque
                    penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus
                    tempus lobortis
                    dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa
                    dignissim.
                </p>
            </div>
        </div>


    </div>




</section>


<section class="about-section-s2 section-padding">

    <div class="container">


        <?php 
 
 
 while(have_posts()) {

    the_post();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );

    
 ?>

        <div class="row">
            <div class="col col-md-12">

                <div class="details" style="padding-top: 5px;">
                    <div class="client-pic" style="text-align: center !important; ">
                        <img src="<?php echo $thumbnail[0] ?>" alt="" class="img-circle">
                    </div>

                    <div class="about-text" style="display:flex;">
                        <h3 style="margin:0.6em 0 0.2em !important">
                            <?php echo get_the_title() ?>
                        </h3>
                    </div>
                    <h4>
                        <?php the_field('team_position'); ?>
                    </h4>
                    <p>
                        <?php echo get_the_content() ?>
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <?php
}

?>

    </div> <!-- end container -->
</section>


<?php
get_footer();