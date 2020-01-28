<?php

/**
 * The template for All Calculator  Page
 *

 */


 get_header(); ?>




  <!-- start page-title -->
  <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/calculator-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row"> -->
                    <div class="col col-xs-12">
                        <h2>Calculate</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/mutual-funds') ?>">About Us</a></li>
                            <li>All Calculator</li>
                        </ol> -->
                    </div>
                <!-- </div> -> <!-- end row -->
            </div> <!-- end container -->
 </section> <!-- end page-title -->


	<!--services-pg-section-->
        <section class="services-pg-section">
            <div class="container">
		<!--section-title-s3-->
                <div class="col col-md-12" style="margin-top:40px;">
                   <p> Whether your starting to build savings, thinking of starting your first investment, planning for retirement or just looking to be more financially responsible, our calculators are here to help. Use our calculators to bring you closer to financial freedom.</p>
                </div>

            
                <div class="row">
                    <div class="col col-xs-12">


                        <div class="services-grid-s2">  


                        <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/fund-returns')?>">
                                <div class="icon">
                                    <i class="fi icon-bar-chart"></i>
                                </div>
                                <div class="details">
                                <h3>Fund Returns</h3>
                                <p>Compute the gains from your investment.</p>   
                                </div>
                              </a>
                                
                        </div>


                          <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/investment-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-calculator-one"></i>
                                </div>
                                <div class="details">
                                <h3>Investment Calculator </h3>
                                <p>See the potential returns of a fund.</p> 
                            </div>
                            </a>
                            
                        </div>

                        <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/expense-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-wallet"></i>
                                </div>
                                <div class="details">
                                <h3>Expense Calculator</h3> 
                                <p>Analyze what you’ve been spending.</p>
                                </div>
                            </a>
                            
                         </div>


                        <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/retirement-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-rocking-chair"></i>
                                </div>
                                <div class="details">
                                <h3>Retirement Calculator</h3>
                                <p>Calculates a guide to retire comfortably.</p>
                                </div>
                            </a>
                            
                         </div>
                        


                         <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/goal-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-target-new"></i>
                                </div>
                                <div class="details">
                                <h3>Financial Goal Calculator </h3>
                                <p>Compute how much you need to save to reach your financial goal.</p>  
                            </div>
                            </a>
                            
                        </div>


                        <div class="grid-transact" style="
                            height: 350px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/inflation-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-money-bill-on-fire"></i>
                                </div>
                                <div class="details">
                                <h3>Inflation Calculator </h3>
                                <p>Compute the value of your money and its purchasing power.</p>    
                            </div>
                            </a>
                            
                        </div> 

                    
                                                    
                        </div>
                    </div>




                     </div> <!-- end row -->
                </div> <!-- end container -->
        </section>





                                
<?php

get_footer(); 

?>








        