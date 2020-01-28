<?php
/**
 * The template for Page Awards Page
 *

 */


get_header();
?>




   <!-- start page-title -->
   <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/awards-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Awards</h2> 
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">About us</a></li>
                            <li>Awards</li>
                        </ol> -->
                    </div>
               <!-- </div> --> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

        


        <!-- start team-pg-section -->
        <section class="team-pg-section section-padding">
            <div class="container">
             

                <div class="row">
                <div class="col col-md-12">
                        <div class="section-title-s3">
                            <h2>Philequity Awards</h2>
                           
                        </div>
                    </div>
              
                    
                    <?php while ( have_posts() ) :
                        the_post();
                        ?>  
                    <?php the_content()?>

                        <?php
                         endwhile;
                       ?>

    

                       
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end team-pg-section -->


<?php

get_footer();


?>