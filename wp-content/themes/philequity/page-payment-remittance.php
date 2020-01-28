<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();

?>


<!-- start page-title -->
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/remittance-banners.jpg'); ?>) center center/cover no-repeat local;">
	<div class="container">
		<!--<div class="row">-->
			<div class="col col-xs-12">
			<h2>Remittance</h2>
				<!-- 
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Transact</li>
                        </ol> -->
			</div>
		<!--</div>--> <!-- end row -->
	</div> <!-- end container -->
</section>
<!-- end page-title -->

<section class="case-study-single-content">
	<div class="container">
		<div class="row">
				<div class="case-details">

					<div class="case-single-tab">
							<div style="font-size:15px;">
								<!-- Individual -->
								<ol>
								<li> 
									<p>Write the name of the Fund:</p>
									<ul style="list-style: inside !important; line-height: 1.5;">
										<li>Philequity Dividend Yield Fund, Inc</li>
										<li>Philequity Fund, Inc</li>
										<li>Philequity MSCI Philippines Index Fund, Inc</li>
										<li>Philequity Peso Bond Fund, Inc</li>
										<li>Philequity PSE Index Fund, Inc</li>

									</ul>
								</li>

								<li>
								Write the name of the account number
								<br><br>

						
							<table style="width:700px;" class="table table-condensed table-bordered">
                            <thead>
							<tr>
							  <th class="">Eastwest Bank Account Name </th>	 
							  <th class="">Account Number</th>
							 
							</tr>
						  </thead>

							  <tbody>
								<tr class="edit" id="detail">
								  <td  > Philequity Dividend Yield Fund, Inc </td>
                                  <td > 2000-036-471-52 </td>
								</tr>

								<tr class="edit" id="detail">
								  <td  >Philequity Fund, Inc</td>
                                  <td > 2000-016-182-28 </td>
								</tr>

								<tr class="edit" id="detail">
								  <td >Philequity MSCI Philippines Index Fund, Inc</td>
                                  <td > </td>
								</tr>

								<tr class="edit" id="detail">
								  <td>Philequity Peso Bond Fund, Inc</td>
                                  <td > 2000-016-182-87 </td>
								</tr>

								<tr class="edit" id="detail">
								  <td>Philequity PSE Index Fund, Inc</td>
                                  <td> 2000-016-039-13 </td>
								</tr>

							  </tbody>
                             
							</table>
							</li>
								
								</ol>
							
						
								


								<div class="btns text-center " style="margin:20px 0px;">
											<a style="margin:10px;" href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>" target="_blank" class="theme-btn">Other Payment Options</a>
											<a href="<?php echo site_url('/contact-us')?>" target="_blank" class="theme-btn"></span>Sign up for online portal </a>
                				</div>

					</div>

				</div>


			</div> <!-- end row -->


		</div>
	</div>
</section>




















<?php 

get_footer();
?>