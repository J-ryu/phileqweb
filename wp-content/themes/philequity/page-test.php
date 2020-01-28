<?php
/**
 * The template for Home Page
 *

 */

 

get_header();
?>
  

<section class="about-section-s2 section-padding">

 <div class="container">
              

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

<div class="row">
        <div class="col col-md-12">
            
            <div class="details" style="padding-top: 5px;">
                
                <?php the_content();?>
              
            </div>
        </div>
    </div>




<?php
endwhile; else: ?>

<?php endif; ?>





    
   
  




   </div> <!-- end container -->
    </section>


        <?php
get_footer();