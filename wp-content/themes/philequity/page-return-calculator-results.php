<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();




$invest_fund     = str_replace(array(',', ' '), '', $_POST["invest_fund"]);
$invest_years    = $_POST["invest_years"];


if ($invest_years == 3) {
$fund_percentage = -0.0136;
}

else if ($invest_years == 5) {
    $fund_percentage = 0.0108;
}

else {
    $fund_percentage = 0.1291;

}

$fund_percentage = 1 + $fund_percentage;
$fund_exponential = pow($fund_percentage, $invest_years);
$future_value = $invest_fund * $fund_exponential;
$future_value = round(($future_value),2);

// echo ' amount_investment_potential: ' .$invest_fund;
// echo ' invest_years: ' .$invest_years;
// echo ' fund_percentage: ' .$fund_percentage;
// echo ' fund_exponential: ' .$fund_exponential;
// echo ' future_value: ' .$future_value;


?>


 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/fund-returns-potential.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Fund Returns - Potential of my return</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Return Calculator</li>
                        </ol> -->
                    </div>
               <!-- </div>--> 
<!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

<!-- account details -->



  


<section class="case-study-single-content ">
            <div class="container">

            <div class="row" style="margin:20px 0;">
                    <div class="col-md-12">
                    <!-- <div class="section-title-s3">
                        <h2 class="returnCalculatorHeader">Return <span class="orangeText">Calculator</span></h2>              
                    </div> -->
			<center>
                    <p>
                        Wondering how much your investment has already earned?  You don’t need to do the math yourself.  
                        Find out your investment’s rate of return by using our Return Calculator.  Simply select the name of
                        the mutual fund and the date on which you invested your money.  The Return Calculator will tell you:
                    </p>
			</center>
                    <p>
                        <ul class="investorEducationUL">
                        <li>- How long you’ve been invested in the fund</li>
                        <li>- What your actual return is and</li>
                        <li>- If you’ve been invested for over a year, what your compounded annual growth rate is.</li>
                        </ul>
                    </p>

              <hr>

                </div>  <!-- end col -->     
            </div>  <!-- end row -->
            
            <div class="row">
                <div class="col col-md-12">

                     

                     <div class="panel panel-warning">
					  <div class="panel-heading" style="background-color:rgba(253, 212, 21, 0.9) !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12">
							<h4 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> 
                            Potential of my Fund return                  
						   </h4>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-bordered table-striped">
						  <thead>
						
						  </thead>

						  <tbody>

                          	<tr>
							  <td style="width: 50%; vertical-align: middle">I plan to invest PHP</td>
                              <td style="width: 50%; vertical-align: middle;" >PHP <?php echo number_format($invest_fund)?> </td>
							</tr>	

                            <tr>
                                <td style="width: 50%; vertical-align: middle">I plan to stay invested for __ years</td>
                                <td style="width: 50%; vertical-align: middle;"><?php echo $invest_years?> years</td>
                            </tr>


						  </tbody>
						</table>
					  </div>

					    <div class="panel-footer">
                          <div class="row">
							  <div class="col-md-12">
								<h4 class="text-center pull-left" style="padding-left: 5px;"> Future Value: ₱ <span><?php echo number_format($future_value) ?> </span> </h4>
							  </div>
							</div>
				        </div>
		</div>



                         

               </div> <!-- end col -->     
            <div> <!-- end row --> 

            
         </div> <!-- end container -->  
    
        
    </section> <!-- end  case-study-single-content -->  



<section style="margin-top:20px;" class="service-single-section">
    <div class="container">  
            <div class="row">
                   
                    <div class="col col-md-12">

                    <p style="text-align:center;border:solid 1px red;padding: 10px;">
                        <em>
                        Figures above are based on the historical performance of the fund for presentation purposes only.<br>
                        Above figures are not actual and in no way depict guarantees by Philequity Management Inc. <br>
                        Investing involves risk, consult us before investing.

                        </em>
                    </p>

                     <div style='display:block; text-align:center; margin:15px 0;' class="btns">
			<a style="margin: 0 5px" href="<?php echo site_url('/return-calculator-potential') ?>" class="theme-btn">Back</a> 
                        <a style="margin: 0 5px" href="<?php echo site_url('/contact-us') ?>" class="theme-btn">Talk to Us</a> 
                        <a style="margin: 0 5px" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>"class="theme-btn">Learn More</a>
                        <a style="margin: 0 5px" href="<?php echo site_url('/all-calculator')?>" class="theme-btn">Other Calculators</a>
                 

                    </div>

                    

                    </div>
            </div> <!-- end row --> 

    </div> <!-- end container -->  
</section> <!-- end section -->  




<?php 
// if (isset($_POST['formreturncalc'])){
    
// }


get_footer();
?>








                    