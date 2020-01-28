
<?php
/**
 * The template for Getting started  section
 *

 */

get_header();

?>



<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/getting-started.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Getting Started on Investing</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/learn') ?>">Learn</a></li>
                            <li>Getting Started on Investing</li>
                        </ol> -->
                    </div>
             <!--   </div> --> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->



<section style="background-color:#f5f5f5; padding: 50px 0;">
<div class="container">  

   <div class="row">
     <div class="col-md-12">
                    
			<!--<center>-->
                     <p>
                        Have you ever dream of owning your own house? Have you ever wished you were driving a newer car? Have you ever worried 
                        about financing your kids’ education? If you have, then congratulations! 
                        You have just taken your first step towards understanding what investing is all about.<br><br>
                        Although the word “investing” may sound intimidating to some, it actually refers to a process that is very personal and
                        relevant to our lives. In order to achieve goals such as those mentioned above, we need to figure out how we are going 
                        finance them. That usually entails setting aside some of your funds. But we can’t just leave all our money in a savings 
                        account if we want to have enough in the future to pay for our financial goals. We want our savings to grow and that
                        entails investing.<br><br>
                        So, how do you go about investing?

                        <br><br>
                                    
                    </p>
			<!--</center>-->                        
                    <!-- <div class="row">
                    <div class="col-md-12">
                        <h4>Know Your Investment Objectives</h4>
                        <p>
                        The process of investing begins with articulating your financial goals. As with most things in life, knowing your objectives
                        is essential since this will help you determine what you need to do.<br>
                        So ask yourself these questions:<br>
                        <ol>
                            <li>What are you investing for?</li>
                            <li>Why are you investing? Be as concrete as possible.</li>
                            <li>Quantify your goals: how much do I need to buy that dream house? </li>
                            <li>Do I need regular cash inflows to sustain my living expenses? If so, how much? </li>
                            <li>And, finally, situate your objectives in time: when will I need the money?</li>
                        </ol>
                        <br>
                        <br> 
                        </p>
                    </div> -->


                </div>  <!-- end col -->
    </div>  <!-- end row -->
   
            <div class="row">

                <div style="text-align: center !important" class="col-sm-2 col-lg-4 col-lg-offset-0">
                    <a href="<?php echo site_url("/reached-milestones-with-mutual-funds") ?>">
                    <img style="
                    border-radius: !important;
                    display: -webkit-inline-box;
                    width: 250px !important;" src="<?php bloginfo('template_directory')?>/assets/images/learn/education.jpg" alt="Education" class="img-circle img-responsive">
                    <h4>Reach milestones with mutual funds</h4>
                    </a>
                </div>
                <div style="text-align: center !important" class="col-sm-2 col-lg-4 col-lg-offset-0">
                    <a href="<?php echo site_url("/investor-profiling") ?>">
                    <img style="
                    border-radius:!important;
                    display: -webkit-inline-box;
                    width: 250px !important;" src="<?php bloginfo('template_directory')?>/assets/images/learn/estate preservation2.png" alt="Education" class="img-circle img-responsive">
                    <h4>Which fund is best for me
                    </h4>
                    <p></p>
                    </a>
                </div>
                <div style="text-align: center !important" class="col-sm-2 col-lg-4 col-lg-offset-0">
                    <a href="<?php echo site_url("/understanding-investment-risks") ?>">
                    <img style="
                    border-radius: 100% !important;
                    display: -webkit-inline-box;
                    width: 250px !important;" src="<?php bloginfo('template_directory')?>/assets/images/learn/other-product.jpg" alt="Education" class="img-circle img-responsive">
                    <h4>Understanding investment risks</h4>
                    </a>
                </div>

            </div>						

</div>
</section>


<?php get_footer(); ?>