<?php

/**
 * The template for All Calculator  Page
 *

 */


$investor_age           = $_POST["investor_age"];
$investor_net           = $_POST["investor_net"];
$percentage_liquid      = $_POST["percentage_liquid"];
$investor_rate          = $_POST["investor_rate"];

$investor_stability     = $_POST["investor_stability"];
$investor_goal          = $_POST["investor_goal"];

$investor_anticipate    = $_POST["investor_anticipate"];
$investor_portfolio     = $_POST["investor_portfolio"];
$investor_comfortablity = $_POST["investor_comfortablity"];
$investor_instruments   = $_POST["investor_instruments"];

$finalRes =	$investor_age  + $investor_net  + $percentage_liquid  + $investor_rate  + $investor_stability   
 +  $investor_goal   +  $investor_anticipate +  $investor_portfolio +  $investor_comfortablity + $investor_instruments;



 get_header(); ?>





<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/investor-profiling.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row"> -->
                    <div class="col col-xs-12">
                        <h2>Which Fund is Best for Me</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/Learn') ?>">Learn</a></li>
                            <li>Investor Profiling</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->


		<section class="section-padding about-section-s5">
			<div class="container">
				<div class="row">


					<div  id="results-1" <?php if ($finalRes < 13 ){ ?> style='display:block'<?php } else { ?>  style='display:none; '<?php } ?>  >
                <div class="row">
                    <div class="col col-md-12">
                        <div class="about-details">
                            <!-- <h3> Your score is: <?php echo $finalRes ?> <h3> -->
                            <h4>
                            You are a conservative investor. <br>
                            You investment horizon is short and you prefer to take minimal risk. <br>
                            Security is your most important concern. <br><br>
                            </h4>
                                <ul>
                               
                                <li> <a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Peso Bond Fund</a></li>
                                <li ><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Fund</a></li>
                                
						
                                    
                                   
                                </ul>
                        </div>
					</div>
					
					<div class="col col-md-12">
				
                         <div class="text-center">
							<div class="btns" style="margin:20px 0px !important">
							<a style="margin:5px 10px;" href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"  target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
                            <a style="margin:5px 10px;" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Learn more</a>
							
							</div> <!-- btns -->
                        </div>
                    </div>
				
                </div>
                </div> <!-- result1 -->



                <div id="results-2" <?php if ($finalRes >=14 && $finalRes <=26 ){?>style="display:block"<?php } else { ?>  style='display:none; '<?php } ?> >
                <div class="row">
                    <div class="col col-md-12">
                        <div class="about-details">
                            <!-- <h3> Your score is: <?php echo $finalRes ?> <h3> -->
                            <div class="about-details">
                            <h4>You are a balanced investor.  <br>
                            Your investment horizon is long enough to benefit from a balance between growth and security.<br>
                            You are willing to accept some risk for potentially higher returns over time. <br>
                            Recommended Fund a combination of these funds suits your needs <br><br></h4>
                             <ul>
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Peso Bond Fund</a></li>
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Dividend Yield Fund</a></li> 
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity PSE Index Fund</a></li> 
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity MSCI Philippines Index Fund</a></li> 
                            </ul>
                        </div>
					</div>
					
					<div class="col col-md-12">
				
						<div class="text-center">
							<div class="btns" style="margin:20px 0px !important">
								<a style="margin:5px 10px;" href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"  target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
								<a style="margin:5px 10px;" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Learn more</a>
							
							</div> <!-- btns -->
						</div>
				   </div>

                </div>
                </div> <!-- result2 -->



                <div id="results-3" <?php if ($finalRes > 26 ){?>style="display:block"<?php } else { ?>  style='display:none; '<?php } ?> >
                <div class="row">
                    <div class="col col-md-12">
                        <div class="about-details">
                            <!-- <h3> Your score is: <?php echo $finalRes ?> <h3> -->
                            <h4>
                                You are an aggressive investor. <br>
                                Your investment horizon is long enough to benefit from an aggressive growth orientation <br>
                                Your main concern is growth of money that will be invested for a long period of time.<br>
                                You are comfortable riding the ups and downs in the market for potentially higher long-term results.
                                <br>
                                <br>
                                </h4>

                                    <ul>
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Dividend Yield Fund</a></li>
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity PSE Index Fund</a></li> 
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity Fund</a></li>
                                <li><a style="font-size:20px; margin:5px 10px;" href="<?php echo site_url('/mutual-funds') ?>">Philequity MSCI Philippines Index Fund</a></li> 
                                </ul>
                        </div>
					</div>
					
					<div class="col col-md-12">
				
						<div class="text-center">
							<div class="btns" style="margin:20px 0px !important">
								<a style="margin:5px 10px;" href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"  target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
								<a style="margin:5px 10px;" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Learn more</a>
							
							</div> <!-- btns -->
						</div>
				    </div>
 

                </div>
                </div> <!-- result2 -->


				</div>
			</div>

		
		</section>


<!-- <script>
    $("#investor_profiling_form").validate();

</script> -->
<?php get_footer() ?>