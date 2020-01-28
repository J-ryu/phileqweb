<?php
/**
 * The template for Home Page
 *

 */


get_header();
?>
     
    <?php  get_template_part( 'template-parts/content','flashnews');?>
    <?php  get_template_part( 'template-parts/content','slider'); ?>
    <?php  get_template_part( 'template-parts/content','welcome'); ?>
    <?php  get_template_part( 'template-parts/content','mutual'); ?>
    <?php  get_template_part( 'template-parts/content','learn'); ?>
    <?php  get_template_part( 'template-parts/content','delivers'); ?>
    <?php  get_template_part( 'template-parts/content','countdown'); ?>
    <?php  get_template_part( 'template-parts/content','newsletters'); ?>\
    <?php  get_template_part( 'template-parts/content','contact'); ?>

<?php

get_footer();
    