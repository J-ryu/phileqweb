<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();
   
?>


 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/fund-returns-potential.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>CAGR Calculator</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Return Calculator</li>
                        </ol> -->
                    </div>
                <!--</div>--> 
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
			<p>
                            Wondering how much your investment has already earned?  You don’t need to do the math yourself.  
                            Find out your investment’s rate of return by using our Return Calculator.  Simply select the name of
                            the mutual fund and the date on which you invested your money.  The Return Calculator will tell you:
                        </p>
			
                        <p>
                            <ul class="investorEducationUL">
                            <li>How long you’ve been invested in the fund</li>
                            <li>What your actual return is and</li>
                            <li>If you’ve been invested for over a year, what your compounded annual growth rate is.</li>
                            </ul>
                        </p>

                        <hr>

                    </div>  <!-- end col -->

                
             </div>  <!-- end row -->




              <div class="row">
                    
                    <div class="col col-md-12">


                       <div id="fund_potential"> <!-- Potential -->

                            <h4 class="text-center">Potential of my  Fund return </h4>
                            <div style="margin-bottom:20px;" class="row">
                            <div class="col col-md-12">

                            <div id="return-funds-potential" 
                                    <?php  if (isset($_POST['computePotential'])) {?> style='display:none;' <?php  } else {  ?>  style='display:block; background-color: #f2f2f2; padding: 35px 25px; position: relative; border-radius: 5px;'<?php } ?>>


                                    
                                        <form action="<?php echo site_url("/return-calculator-results") ?>" method="POST"  name="formReturnPotential" id="formReturnPotential">
                                        <div class="col col-md-12">
                                            <label for="name">I Plan to invest in (PHP) </label>
                                            <input type="text" class="form-control number" id="invest_fund" name="invest_fund">
                                        </div>

                                        
                                        <div style="margin-top:15px;" class="form-group  col-md-12">
                                            <label class="control-label" >How many year/s do you plan to invest?</label><br>
                                            <select  style="background-color:#fff" required id="invest_years" name="invest_years" class="form-control">
                                                <option value="">-- Select year --</option>
                                                <option value="3">3 years</option>
                                                <option value="5">5 years</option>
                                                <option value="10">10 years</option>
                                            
                                            </select>
                                        </div> <!-- end form-group -->
                                            <div>
                                            <button class="btn btn-primary" name="computePotential"  id="computePotential" type="submit">Calculate</button>
                                            </div> 
                                        
                                        </form>  
                            </div>    <!-- return-funds-form -->

                        </div> <!-- end fund_potential -->


                       

                    </div>  <!-- end col -->
        
                    
                </div> <!-- end row -->


               
                

    </div> <!-- end container -->
     
        
</section>







<?php 
// if (isset($_POST['formreturncalc'])){
    
// }


get_footer();
?>








                    