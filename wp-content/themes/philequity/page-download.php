<?php
/**
 * The template for Download Page
 *

 */
require_once("template-parts/content-dbconn.php");

$download_pdf_individuals  = get_field('pdf_individuals');
$download_pdf_institution = get_field('pdf_institution'); 
$download_pdf_account_update = get_field('pdf_account_update'); 
$download_pdf_additional_investment  = get_field('pdf_additional_investment');
$download_pdf_redemption = get_field('pdf_redemption'); 
$download_pdf_certification_request  = get_field('pdf_certification_request');
$download_pdf_auto_investment_form_bdo = get_field('pdf_auto_investment_form_bdo'); 
$download_pdf_signature_card  = get_field('pdf_signature_card');






get_header();
?>



<!-- a -->
   <!-- start page-title -->
   <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/download-banner.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
              <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Download</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Download</li>
                        </ol> -->
                    </div>
              <!---</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

     

        

      




            
<section class="case-study-single-content ">
            <div class="container">
                <div class="row">
                    
                    <div class="col col-md-12">
                        <div class="case-details">

                     <div class="case-single-tab">
                         <div class="col col-md-12" style="display: flex;justify-content: center; margin-bottom:20px;">
                                <ul class="nav">
                                     <li class="active">
                                    <a  href="#forms" data-toggle="tab">Forms</a>
                                    </li>
                                    <li>
                                        <a href="#fundfact" data-toggle="tab">Latest Fund Fact Sheets</a>  

                                    </li>
                                    <li>
                                        <a href="#prospectus" data-toggle="tab">Prospectus</a>
                                    </li>
                                </ul>
                          </div>
                             
                                <div class="tab-content">
                               
            <div class="tab-pane fade in active" id="forms">   <!-- forms -->    
                    <!-- <h3 class="text-center">Philequity Forms </h3> -->
	<section class="services-pg-section" style="margin-top:60px; background-color:#fff ">
                     <div class="container">
                     	<div class="row">
                			  <div class="col col-xs-12">
                			  	<div class="services-grid-s2"> 

                			  		<div class="grid-transact" style="
                                   			 height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_individuals ?>" target="_blank" >
                                   
                                   			 <div class="icon"> <i class="fi icon-user-add mutual-funds-icon"></i> </div>
                                    			<div class="details">
                                    				<h3 style="font-weight:bolder">Account Opening Forms for Individuals</h3>
                                    
                                    			</div>
                                    		</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                   			 height: 300px !important;
                                    		overflow: hidden !important;">
                                   			 <a href="<?php echo $download_pdf_institution ?>" target="_blank" >
                                    		<div class="icon"> <i class="fi icon-users-1 mutual-funds-icon"></i> </div>
                                    			<div class="details">
                                    				<h3 style="font-weight:bolder" >Account Opening Forms for Institutions</h3>
                                    
                                    			</div>
                                   			</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                   			 height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_account_update ?>" target="_blank" >
                                    		<div class="icon"> <i class="fi icon-edit mutual-funds-icon"></i> </div>
                                    			<div class="details">
                                    				<h3 style="font-weight:bolder">Account Update</h3>
                                    
                                    			</div>
                                    		</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                   			 height: 300px !important;
                                    		overflow: hidden !important;">
                                   			 <a href="<?php echo $download_pdf_additional_investment ?>" target="_blank" >
                                   			 <div class="icon"> <i class="fi icon-coins-stack-add mutual-funds-icon"></i> </div>
                                   				 <div class="details">
                                    					<h3 style="font-weight:bolder">Additional Investment</h3>
                                    
                                    			</div>
                                    		</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                    		height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_redemption ?>" target="_blank" >
                                    		<div class="icon"> <i class="fi icon-coins-stack-substract mutual-funds-icon"></i> </div>
                                    			<div class="details">
                                    				<h3 style="font-weight:bolder">Redemption</h3>
                                    
                                    			</div>
                                   			</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                    		height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_certification_request ?>" target="_blank" >
                                    			<div class="icon"> <i class="fi icon-certificate mutual-funds-icon"></i> </div>
                                    				<div class="details">
                                    					<h3 style="font-weight:bolder">Certification Request</h3>
                                    
                                    				</div>
                                    		</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                    		height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_signature_card ?>" target="_blank" >
                                    		<div class="icon"> <i class="fi icon-online-banking mutual-funds-icon"></i> </div>
                                   				 <div class="details">
                                   	 				<h3 style="font-weight:bolder">Auto Investment Form BDO</h3>
                                    			</div>
                                    		</a>
                                
                                	</div>

                                	<div class="grid-transact" style="
                                    		height: 300px !important;
                                    		overflow: hidden !important;">
                                    		<a href="<?php echo $download_pdf_signature_card ?>" target="_blank" >
                                    		<div class="icon"> <i class="fi icon-id-card mutual-funds-icon"></i> </div>
                                    			<div class="details">
                                           			 <h3 style="font-weight:bolder">Signature Card</h3>
                                            	</div>
                                            </a>
                                	</div>

                			  	</div>
                			  </div>
                		</div>
                	</div>
	</section>
					</div>
              

                                    


                                     <!-- <div class="services-pg-section">

                                 <div class="services-grid-s2">  



                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_individuals ?>" target="_blank" >
                                   
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Account Opening Forms for Individuals</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>

                            
                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_institution ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder" >Account Opening Forms for Institutions</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>




                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_account_update ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Account Update</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>



                                    <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_additional_investment ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Additional Investment</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>
                                    

                                    <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_redemption ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Redemption</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>



                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_certification_request ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Certification Request</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>

                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_signature_card ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                
                                    <div class="details">
                                    <h3 style="font-weight:bolder">Auto Investment Form BDO</h3>
                                    
                                    </div>
                                    </a>
                                
                                </div>

                                <div class="grid-transact" style="
                                    height: 400px !important;
                                    overflow: hidden !important;">
                                    <a href="<?php echo $download_pdf_signature_card ?>" target="_blank" >
                                    <div class="icon"> <i class="fi flaticon-balance"></i> </div>
                                
                                    <div class="details">
                                            <h3 style="font-weight:bolder">Signature Card</h3>
                                            </div>
                                            </a>
                                
                                </div>
     

                           </div>
                    </div> 

                                
                                </div>-->    <!-- end tab pane -->


                                <div class="tab-pane fade" id="fundfact"> <!-- fund fact -->

                                
<section class="services-pg-section" style="margin-top:60px; background-color:#fff ">
          
          <div class="container">
              <div class="row">
                  <div class="col col-xs-12">
                      <div class="services-grid-s2">  

                              <?php $loop = new WP_Query( array(
                                'post_type' => 'mutual_fund',
                                'orderby' => 'post_id',
                                'order' => 'ASC' ));
                            ?>
                            <?php while( $loop->have_posts() ): $loop->the_post(); ?>
                            
                            <div class="grid-transact" style="
                                height: 300px !important;
                                overflow: hidden !important;">
                                <a style="color: inherit;" target="_blank" href="<?php the_field("mutual_fund_latest_fund_pdf");?>">
                                <div class="icon">  <i class="<?php the_field('mutual_fund_icon'); ?> mutual-funds-icon"></i> </div>
                                  <div class="details">
                                     <h3 style="font-weight:bolder"> <?php echo the_field('mutual_nice_name'); ?></h3>
                                     
                                
                                  </div>
                                </a>

                            </div>


                            <?php endwhile; wp_reset_query();?>  
                      
                                                  
                      </div>
                  </div>
               

                   <!-- <div class="col col-md-12" style="margin-top:50px">
                                        <div class="section-title-s3">
                                       <a style="margin: 0 10px;" href="<?php echo site_url('/transact') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
                                        <a style="margin: 0 10px;" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" class="theme-btn"><span class="glyphicon glyphicon-education"></span>Learn more</a>
                                    
                          
                                        </div>
                                </div>-->
              </div>

              

                

          </div> <!-- end container -->
</section>
</div>


<!-- Prospectus -->

                                <div class="tab-pane fade" id="prospectus">


                                <section class="services-pg-section" style="margin-top:60px; background-color:#fff ">
          
          <div class="container">
              <div class="row">
                  <div class="col col-xs-12">
                      <div class="services-grid-s2">  

                              <?php $loop = new WP_Query( array(
                                'post_type' => 'mutual_fund',
                                'orderby' => 'post_id',
                                'order' => 'ASC' ));
                            ?>
                            <?php while( $loop->have_posts() ): $loop->the_post(); ?>
                            
                            <div class="grid-transact" style="
                                height: 300px !important;
                                overflow: hidden !important;">
                                <a style="color: inherit;" target="_blank" href="<?php the_field("mutual_fund_prospectus_pdf");?>">
                                <div class="icon">  <i class="<?php the_field('mutual_fund_icon'); ?> mutual-funds-icon"></i> </div>
                                  <div class="details">
                                     <h3 style="font-weight:bolder"> <?php echo the_field('mutual_nice_name'); ?></h3>
                                     
                                
                                  </div>
                                </a>

                            </div>


                            <?php endwhile; wp_reset_query();?>  
                      
                                                  
                      </div>
                  </div>
               

                  <!--  <div class="col col-md-12" style="margin-top:50px">
                                        <div class="section-title-s3">
                                       <a style="margin: 0 10px;"  href="<?php echo site_url('/transact') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Open an account</a>
                                        <a style="margin: 0 10px;" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" class="theme-btn"><span class="glyphicon glyphicon-education"></span>Learn more</a>
                                    
                          
                                        </div>
                                </div> -->
              </div>

              

                

          </div> <!-- end container -->
</section>



                              
                                </div>

                                

                                <div class="tab-pane fade" id="performance">
                                
                                </div>
                                                    
                                      
                            </div>
                         </div>
                        
                    </div>
        
                    
                </div> <!-- end row -->
                

            </div>
        </section>



        




<?php get_footer(); ?>



                    
                  
          