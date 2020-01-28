

<?php


/**
 * The template for Flash news section
 *

 */

$news_flash  = get_field('news_flash');
?>


<?php 
        if( !empty($news_flash)) : ?>
        <div class="simplebanner row">
            <marquee style="display: contents !important;" behavior="scroll" direction="left">
            <!-- if user add news flash -->
                <?php echo $news_flash; ?>
            </marquee>
        </div>
        <?php endif; ?>

