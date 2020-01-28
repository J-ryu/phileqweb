
<?php
/**
 * The template for WE DELIVER section
 *

 */

// custom fields

$investor_title       =   get_field('investor_title');
$investor_body        =   get_field('investor_body');
$investor_image       =   get_field('investor_image');
$investor_cta         =   get_field('investor_cta');


?>



<section class="about-section-s4 section-padding">
            <div class="container">
            
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="about-text">
                            <?php if( !empty($investor_title)) : ?>
                            <h2 style="margin-bottom:30px;"><?php echo $investor_title; ?></h2>
                            <p><?php echo $investor_body?></p>
                            <a style="margin-top: 30px;" href="<?php echo site_url('/investor-profiling')?>" class="theme-btn"><?php echo $investor_cta; ?></a>

                            <?php endif; ?>
                             
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div>
                            <?php if(!empty($investor_image)) :  ?>
                            <img src="<?php echo $investor_image['url'] ?>" alt="<?php echo $investor_image['alt']; ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


       