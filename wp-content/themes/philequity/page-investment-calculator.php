<?php
/**
 * The template for Inflation Calculator Page
 *
 *
 */

get_header();
?>

 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/invest-calculator-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!--<div class="row">-->>
                    <div class="col col-xs-12">
                        <h2>Investment Calculator</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Inflation Calculator</li>
                        </ol> -->
                   <!-- </div> -->
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->


<section class="section-padding about-section-s3">
            <div class="container">


                <div class="col col-md-12" style="margin-bottom:10px;">
                    <p>
At <strong> Philequity </strong>, slow and steady wins the race. We advocate building your investments gradually through incremental subscriptions. Use this calculator to see the potential returns of continuously disciplined investments.
		<br>
		<br>                                        
</p>
                </div>

                <div class="row">
                    <div class="col col-md-12" style="margin-top:10px;>


                        <form id="submit_form">  
                     <label>How much is your initial investment?</label>  
                     <input type="text" name="inv_initial" id="inv_initial" class="form-control number">
                     <!-- <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2"> -->
                     <br />  
                    
                     

                     <div class="form-group">
                    <label class="control-label" >How often would you like to invest after your intial investment?</label><br>
                    <select required id="inv_contribution" name="inv_contribution" class="form-control">
                        <option value="">-- Select contribution option --</option>
                        <option value=12>Monthly</option>
                        <option value=4>Quarterly</option>
                        <option value=2>Semi Annually</option>
                        <option value=1>Yearly</option>
                       
                    </select>
                    </div> <!-- end form-group -->
                     <br />

                     <label>How much is your succeeding additional investment?</label>  
                     <input type="text"  name="inv_contribution_initial" id="inv_contribution_initial" class="form-control number"> 
                     <br />  


                     <label>How many year/s you plan to invest?</label>  
                     <input type="number" name="inv_years" id="inv_years" class="form-control" />  
                     <br />  
                     

    
                    
                     



                 <div class="btns text-center" style="margin-bottom:15px;">

                     <input type="button" name="submit_investment" id="submit_investment" class="btn btn-warning theme-btn" value="Calculate" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </div>
                   
                             
                </form>  


                 <div class="row">
                    <div class="col col-md-12">

                        <div id="result-investment" class="hidden">
                        </div> 
                    </div>

                    <div class="col col-md-12">
                 
                        <div id="table-investment" class="panel-body table-responsive hidden">
                        <table class='table table-bordered table-striped hidden'> 
                            <thead> 
                                <tr class="hidden"> 
                                    <th class='text-center'> Year </th> 
                                    <th class='text-center'> Value start of year </th> 
                                    <th class='text-center'> Value at end term </th> 
                                </tr> 
                            </thead> 
                            <tbody id="tbody-investment"> 

                            </tbody>  
                         </table>

                        </div> 
                    </div>

                     <div class="row">
                    <div class="col col-md-12">

                        <div id="result-investment-2" class="hidden">

                        

                        </div> 
                        
                    </div>


                 </div>






                    </div> <!-- col-md-12 -->

                    


            </div> <!-- end container -->
        </section>






<?php get_footer() ?>
