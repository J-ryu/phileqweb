<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();

?>


<!-- start page-title -->
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/post-dated-banners.jpg'); ?>) center center/cover no-repeat local;">
	<div class="container">
		<div class="row">
			<div class="col col-xs-12">
			<h2>Post Dated Checks</h2>
				<!-- 
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Transact</li>
                        </ol> -->
			</div>
		</div> <!-- end row -->
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
								Write the dates on your checks in the format of MMM/DD/YYYY
								</li>
								<li>Submit your post-dated checks to our  office 2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center, Pasig City 1605 Philippines
								</li>
								</ol>
							<br>
							<br>
								


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