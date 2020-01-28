
<?php
/**
 * The template for Home Page
 *

 */


get_header();
?>

<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/aboutus-img.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Investment Committee Team</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/about-us') ?>">About us</a></li>
                            <li>The Investment Committee Team</li>
                        </ol> -->
                    </div>
                <!--</div>--> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->


 <!-- start about-section -->
 <section class="section-padding about-section-with-bg">
            <div class="container">

                <?php 
                $args = array(
                    'p'         => 64, // ID of a page, post, or custom type
                    'post_type' => 'any'

                );
                $my_posts = new WP_Query($args);

                ?>

                <div class="row">   
                    <div class="col col-md-12">

                <?php while( $my_posts->have_posts() ): $my_posts->the_post(); ?>
                        <div class="about-chart img-responsive ">
                            <?php echo get_field('map_image_2'); ?>
                            </div>        
                    <?php endwhile; wp_reset_query();?>
                    </div>
                </div> <!-- end row -->



                        
             <div class="row">
                <div class="col col-xs-12">
                        <div class="section-title-s3" style="padding:60px;">
                            <!-- <h2>The Investment Committee Team</h2> -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac mi orci. Orci varius natoque penatibus et 
                                magnis dis parturient montes, nascetur ridiculus mus. Proin tristique egestas interdum. Vivamus tempus lobortis 
                                dolor vitae ultrices. Fusce euismod viverra metus, a faucibus odio pulvinar ac. Nunc quis massa dignissim.
                            </p>
                        </div>
                    </div>

                </div> <!-- end row -->

               

            </div> <!-- end container -->
        </section>
        <!-- end about-section -->
        
<section class="about-section-s2 section-padding">

 <div class="container">
<div class="row">
            <div class="col col-md-12">
		                <div class="details" style="padding-top: 5px;">

		    <div class="client-pic" style="text-align: center !important; ">
                        <img src="https://uat.philequity.net/wp-content/uploads/2018/06/Roberto-Lorayes-300x300-1.jpg" alt="" class="img-circle">
                    </div>

		     <div class="about-text" style="display:flex;">
                        <h3 style="margin:0.6em 0 0.2em !important">
                            <b>Roberto Z. Lorayes</b>
                        </h3>
                    </div>

		     <h4>
                       Chairman of the Board
                    </h4>

                    <p>Mr. Lorayes is the Chairman of the company. He is also the Director of Vantage Equities, Inc. and 
			ebusiness Services, Inc. In the past he served as Chairman of the Philippine Stock Exchange and 
			Investment Companies Association of the Philippines. He also served as President of Manila Stock Exchange, 
			UBP Securities, Citicorp, Scringeour, Vickers, and a Director of Philippine Central Depository. 
			He received his Bachelor of Science in Commerce degree and Bachelor of Liberal Arts degree in De La Salle University.
			 He holds a Masters degree in Business Management from Ateneo de Manila University.
                    </p>

			</div>
		</div><!--End of Col col-md-12 -->
            </div><!-- End of Row-->
<hr>
<div class="row">
            <div class="col col-md-12">
		 <div class="details" style="padding-top: 5px;">

		    <div class="client-pic" style="text-align: center !important; ">
                        <img src="https://uat.philequity.net/wp-content/uploads/2018/06/edmundo-marco-bunyi-3.jpg" alt="" class="img-circle">
                    </div>

		     <div class="about-text" style="display:flex;">
                        <h3 style="margin:0.6em 0 0.2em !important">
                            <b>Edmundo Marco P. Bunyi, Jr.</b>
                        </h3>
                    </div>

		     <h4>
                       President
                    </h4>

                    <p><font size="2"><strong>Mr. Bunyi</strong> is currently the President of the Company. He is also the <strong>President and chief Operating Officier of Vantage
			 Equities, Inc.</strong> and <strong>President and Chief Executive Officer of eBusiness Services, Inc</strong>. 
			At the same time, he is the Director of <strong>Yehey! Corporation</strong>. He is the former Senior Vice President and Treasurer of International Exchange Bank, Assistant Vice President and Head of FCDU & FX Sales of United 
			Coconut Planters Bank, Assistant Manager of Corporate Banking Group of Far East Bank and Trust Company, and Assistant Manager for the Corporate Banking Department of Union Bank of the Philippines. He holds a degree in Management Engineering from the Ateneo de Manila University.                    </p>
			</font></p>
			</div>
		</div><!--End of Col col-md-12 -->
            </div><!-- End of Row-->
<hr>

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/wilson-sy.jpg" alt="" class="img-circle">      
          	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Wilson L. Sy</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Director
                    	</h4>

                    <p>Mr. Sy is a Director of the Company. He is the Vice Chairman of Asian Alliance Holdings, Corp. and Director of Vantage Equities, Inc.; 
			eBusiness Services, Inc., Yehey! Corporation, Xcell Property Ventures, Inc., and Monte Oro Resources & Energy, Inc. Mr. Sy is also an
			Independent Director of the reporting corporations: The Country Club at Tagaytay Highlands, Inc., Tagaytay Highlands International Golf
			Club, Inc., Tagaytay Midlands Golf Club, Inc., and The Spa and Lodge at Tagaytay Highlands. He was a former Chairman of the Philippine
			Stock Exchange, Inc. He holds a degree in Management Engineering from the Ateneo de Manila University.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr> 

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://52.220.108.162/wp-content/uploads/2019/12/Timothy-Sy-2.jpg" alt="" class="img-circle">     
               	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Timothy Sy</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Associate Director
                    	</h4>

                    <p>Timothy Sy is an Associate Director of Vantage Equities, Inc., Philequity Management’s parent company. 
			He is also the President of Vantage Financial Corporation. With over 15 years of experience in treasury, 
			fixed income and derivatives, Mr. Sy assists in developing investment policies and actively provides perspectives 
			to the objectives of each fund. Mr. Sy obtained his MBA from the Kellogg School of Management, Northwestern University.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://52.220.108.162/wp-content/uploads/2019/12/Angelica-Cabanit-2.jpg" alt="" class="img-circle">                    	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Ma. Angelica D. Cabanlit
</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Head of Operations and Compliance Officer
                    	</h4>

                    <p style="font-size:13px";>Ma. Angelica Cabanit is the Head of Operations and Compliance Officer at Philequity Management.
			 With over 30 years of experience in risk management and treasury operations, she ensures adherence the policies and guidelines
			 of the Committee’s charter as well as the compliance to regulations set by the governing bodies.
			 Ms. Cabanit is responsible for ensuring the funds do not exceed their risk and volatility limits. 
			Ms. Cabanit earned her degree in Accounting from St. Scholastica’s College.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>        

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://52.220.108.162/wp-content/uploads/2019/12/Jerome-Gonzalez-2.jpg" alt="" class="img-circle">          
         	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Jerome Gonzalez</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Head of Research
                    	</h4>

                    <p>Jerome Gonzalez is the Philequity Management’s Head of Research. He has accumulated over 20 years of trading and research experience
			in Philippine equities, foreign exchange markets, global equity indices, commodities, bonds and other financial instruments.
			 Mr. Gonzalez has a degree in Computer Science from the University of the Philippines Diliman.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>    
<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://52.220.108.162/wp-content/uploads/2019/12/Miguel-Agarao-2.jpg" alt="" class="img-circle">
                    	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Miguel Agarao</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Fund Manager
                    	</h4>

                    <p>Miguel Agarao is a Fund Manager at Philequity Mangement.  With over 10 years of experience in trading and research analysis, 
			Miguel utilizes financial statements and different models to find non-index stocks with large growth potentials. 
			He is also responsible for crafting and presenting Philequity’s strategy and outlook to various investors. 
			Miguel graduated Cum Laude in Business Administration at the University of the Philippines Diliman.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://52.220.108.162/wp-content/uploads/2019/12/Raymond-Ricafort-2.jpg" alt="" class="img-circle">                
  			</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Raymond Ricafort</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Fund Manager
                    	</h4>

                    <p>Raymond Ricafort is a Fund Manager at Philequity Management. With over 30 years of experience in trading, 
			research and analysis from both foreign and local institutions, Mr. Ricafort provides invaluable insights into fund management strategies
			and ensures that the objectives of the Funds meet their investment goals. Mr. Ricafort obtained his degree in Economics from the University
		 	of the Philippines Diliman.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>    



      
    		</div> <!-- end container -->
	</section>
</div> <!-- end directors list -->


        <?php
get_footer();



