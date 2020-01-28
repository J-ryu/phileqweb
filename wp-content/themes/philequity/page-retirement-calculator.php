<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();
?>

 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/retirement-calculator.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!--<div class="row"> -->
                    <div class="col col-xs-12">
                         <h2>Retirement Calculator</h2>
                       <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Retirement Calculator</li>
                        </ol> -->
                   <!--</div>-->
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->




<!-- account details -->
<section style="margin-top:20px;">
<div class="container"> 
<div class="col col-md-12" style="margin:20px;">
                    <p>
                    
                    Are you saving enough for retirement? Can your hard earned money fulfill your retirement dreams? 
                    This calculator takes inflation into account and helps you plan how much you need for those golden years.
                        <br>
                        <br>
                       
                        
                    </p>
            </div>

 

   <div class="row">
     <div class="col-md-12">
            
			<?php while ( have_posts() ) :
                the_post();
				?>  
            <?php the_content()?>

            	<?php
			endwhile;
            ?>

      </div> <!-- col-md-12 -->
    </div>  <!-- row -->








    <div class="row">
      <div class="col col-md-12">

              <div class="about-details">
                
                <div class="col col-md-12">  
            
                        <h3>Tips on your income:</h3>
                        <ul>
                            <li>Is your income sufficient for the expenses you currently have.</li> 
                            <li>Are there other means of income you can attain.</li>  
            
                        </ul>
                </div>
                        <div class="col col-md-12">  
                                <h3>Let Philequity assist you.</h3>
                                <div class="btns">
                                    <a style="margin:5px 0;" href="<?php echo site_url('/mutual-funds') ?>" class="theme-btn">Mutual Funds</a>
                                </div>
                        </div>
            
                </div>
                </div>

        </div> 


        
            

           
        </div>
    </div>
</div>  <!-- container -->

        </section>






<?php get_footer() ?>



