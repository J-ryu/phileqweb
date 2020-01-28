<?php
/**
 * The template for Page All Transact Page
 *

 */


get_header();
?>

 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/payment-options-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2 style="margin:0px !important;">Payment Options</h2>
                       <!--  <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Transact</li>
                        </ol> -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->






        <section class="services-pg-section">
            <div class="container">

            
                <div class="row">
                    <div class="col col-xs-12">


                    <div class="services-grid-s2">  
                        <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                             <a href="<?php echo site_url('/payment-direct-deposit')?>">
                                <div class="icon">
                                    <i class="fi icon-bank"></i>
                                </div>
                                <div class="details">
                                <h3>Direct Bank Deposit</h3>       
                                </div>
                            </a>
                                
                        </div>

                            <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                             <a href="<?php echo site_url('/payment-check') ?>" >
                                <div class="icon">
                                    <i class="fi icon-check"></i>
                                </div>
                                <div class="details">
                                <h3>Check</h3>     
                                </div>
                            </a>
                            
                            </div>

                            <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/payment-post-dated-checks') ?>" >
                                <div class="icon">
                                    <i class="fi icon-post-dated-cheque"></i>
                                </div>
                                <div class="details">
                                <h3>Post Dated Checks</h3>
                                </div>
                            </a>
                            </div>

                        <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/payment-remittance')?>">
                                <div class="icon">
                                    <i class="fi icon-online-wallet"></i>
                                </div>
                                <div class="details">
                                <h3> Remittance </h3>       
                                 </div>
                             </a>
                            
                        </div>

                        <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/payment-online-fund-transfer')?>">
                            <div class="icon">
                                  <i class="fi icon-online-payment"></i> 
                            </div>
                            <div class="details">
                                 <h3>Online Fund Transfer</h3>
                            </div>
                            </a>
                        
                        </div>

                        <div class="grid-transact" style="
                            height: 300px !important;
                            overflow: hidden !important;">
                             <a href="<?php echo site_url('/payment-auto-debit-facility')?>">
                            <div class="icon"> 
                                 <i class="fi icon-clock"></i> 
                            </div>
                           
                            <div class="details">
                                <h3>Auto Debit Facility</h3>
                            </div>
                            </a>
                           
                            
                            
                            </div>
                                                    
                        </div>
                        </div>




                           </div> <!-- end col -->
                     </div> <!-- end row -->
                </div> <!-- end container -->
        </section>

        <section>

              <div class="container">
					<div class="panel panel-success">
					  <div class="panel-heading" style="background-color:#FEC325 !important">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-6">
						    <h3 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> <span class="glyphicon glyphicon-list-alt"> </span> SETTLEMENT BANK ACCOUNTS </h3>
						  </div>
						</div>
					  </div>

					  <div class="panel-body table-responsive">
						<table class="table table-hover">
						  <thead>
							<tr>
							  <th class="text-center"> Fund</th>
							  <th class="text-center"> Unionbank of the Phils. (any branch) </th>
							  <th class="text-center"> Eastwest Bank (any branch)</th>
							  <th class="text-center"> BDO (any branch) * </th>
							  <th class="text-center"> RCBC(any branch) </th>
							  <!-- <th class="text-center"> UBP</th> -->
							</tr>
						  </thead>

						  <tbody>
                            <tr>
							  <td class="text-center"> Philequity Fund </td>
							  <td class="text-center"> 006-03-0-00010-1 </td>
							  <td class="text-center"> 2000-016-182-28 </td>
							  <td class="text-center"> 00-343-0000-151 </td>
							  <td class="text-center"> 758-9707-081 </td>
							</tr>

                            <tr>
							  <td class="text-center"> Philequity Peso Bond Fund </td>
							  <td class="text-center"> 006-03-0-01080-8 </td>
							  <td class="text-center"> 2000-016-182-87 </td>
							  <td class="text-center"> 00-343-0152-121 </td>
							  <td class="text-center"> 758-9707-073 </td>
							
							</tr>

							<tr class="edit" id="detail">
							  <td class="text-center"> Philequity PSE Index Fund </td>
							  <td class="text-center"> 006-03-0-01019-0 </td>
							  <td class="text-center"> 2000-016-039-13 </td>
							  <td class="text-center"> 00-343-0152-148 </td>
							  <td class="text-center"> 758-9707-111 </td>
							</tr>

							<tr>
							  <td class="text-center"> Philequity Dollar Income Fund</td>
							  <td class="text-center"> 006-10-1-01130-5 </td>
							  <td class="text-center"> xxxx-xxx-xxx-xx </td>
							  <td class="text-center"> 10-343-0140-646 </td>
							  <td class="text-center"> xxx-xxxx-xxx</td>
							</tr>

							<tr>
							  <td class="text-center"> Philequity Dividend Yield Fund </td>
							  <td class="text-center"> 002-06002-626-5 </td>
							  <td class="text-center"> 2000-036-471-52 </td>
							  <td class="text-center"> 00-343-0247-769 </td>
							  <td class="text-center"> 759-0083-385 </td>
							</tr>


						  </tbody>
						</table>
					  </div>
								
						<div class="panel-footer" style="background-color:#FEC325 !important;border-top: 5px solid #ddd;">
								
							<div class="row">
							  <div class="col-xs-12 col-sm-12 col-md-3">
								<h3 class="text-center" >  For certification only </h3>
							  </div>
							</div>
					  	</div>

								
						<div>
							<table class="table table-hover">
                            <thead>
							<tr>
							  <th class="text-center"> Fund</th>
							  <th class="text-center"> BDO (any branch)</th>
							  <th class="text-center"> Eastwest Bank (any branch)</th>
							  <th class="text-center"> Unionbank of the Phils. (any branch) </th>
							 
							</tr>
						  </thead>

							  <tbody>
								<tr class="edit" id="detail">
								  <td class="text-center pull-left" style="padding-left: 100px; text-align: center;"> Philequity Management </td>
                                  <td class="text-center"> 00-343-0177-094 </td>
                                  <td class="text-center"> 2000-016-185-27 </td>
                                  <td class="text-center"> 006-03-000-5448 </td> 
								</tr>
                              
                                <tr>
                                    <td colspan="12"> *requires a deposit reference code. Kindly click here for detailed instructions</td>      
                                </tr>
                                <tr>
                                <td colspan="12">  **bills payment only</td>
                                </tr>

							  </tbody>
                             
							</table>

						</div>

					 
					  
					    <div class="panel-footer">
                                
                        
                        <div class="btns text-center">
                        <a style="margin:10px;" href="#" class="theme-btn">Share on social media</a>
                        <a style="margin:10px;" href="#" class="theme-btn">Procedures</a>
                        <a style="margin:10px;" href="#" class="theme-btn">Open an account</a>
                        </div>
					
                      </div>
                      
                        
					</div>
				  </div>

        </section>   

                    
                  





<?php get_footer() ?>