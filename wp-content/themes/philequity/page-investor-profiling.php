<?php

/**
 * The template for All Calculator  Page
 *

 */

 get_header(); ?>





<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/investor-profiling.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!--<div class="row">-->
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



<!-- account details -->
<section style="margin-top:20px;" class="service-single-section">



<div class="container">
                <div class="row">
			<div class="section-title-s3" style="padding:60px;">

                    <!--<div class="col col-md-12 text-center" style="font-size: 21px">-->
                        <p>

                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac malesuada urna. Maecenas volutpat mattis interdum. 
                       Fusce mattis tincidunt maximus. Aliquam tempor diam nec tellus aliquam, sed pharetra nisl luctus. Proin blandit 
                       lobortis nisl vel vulputate.
                        </p>

                        <hr>
                        <br>
                    </div>


                    <div class="col col-md-12">

        <div class="stepwizard">
			<div class="stepwizard-row setup-panel">
				<div class="stepwizard-step col-xs-3"> 
					<a href="#step-1" type="button" class="btn btn-lg  btn-warning  btn-success">1</a>
					<p><small>Step 1</small></p>
				</div>
				<div class="stepwizard-step col-xs-3"> 
					<a href="#step-2" type="button" class="btn btn-warning btn-lg " disabled="disabled">2</a>
					<p><small>Step 2</small></p>
				</div>
				<div class="stepwizard-step col-xs-3"> 
					<a href="#step-3" type="button" class="btn btn-warning btn-lg" disabled="disabled">3</a>
					<p><small>Step 3</small></p>
				</div>
				<div class="stepwizard-step col-xs-3"> 
					<a href="#step-4" type="button" class="btn btn-warning btn-lg" disabled="disabled">4</a>
					<p><small>Step 4</small></p>
				</div>
				<div class="stepwizard-step col-xs-3"> 
					<a href="#step-5" type="button" class="btn btn-warning btn-lg" disabled="disabled">5</a>
					<p><small>Step 5</small></p>
				</div>
			</div>
		</div>
		
		<form  id="investor_profiling_form" action="<?php echo site_url("/investor-profiling-results") ?>" method="post" role="form">
			<div class="panel panel-warning setup-content" id="step-1">
				<div class="panel-heading">
					 <h3 class="panel-title">Step 1</h3>
				</div>
				<div class="panel-body">
                
                <div class="form-group">
                    <label class="control-label" >1. What is your age? *</label><br>
                    <select required id="investor_age" name="investor_age" class="form-control">
                        <option value="">-- Select age --</option>
                        <option value="1">18 to 35</option>
                        <option value="2">36 to 50</option>
                        <option value="3">51 to 65</option>
                        <option value="4">above 65</option>
                    </select>
                </div> <!-- end form-group -->
                            
                <div class="form-group">
                    <label class="control-label">2. How much is your net worth in Philippine Pesos? *</label><br>
                    <select  required name="investor_net" id="investor_net" class="form-control">
                        <option value="">-- Select net worth --</option>
                        <option value="1">Below 1 million</option>
                        <option value="2">1 to 5 million</option>
                        <option value="3">5 to 20 million</option>
                        <option value="4">Above 20 million</option>
                    </select>
				</div> <!-- end form-group -->
                    

					<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
				</div>
			</div>
			
			<div class="panel panel-warning setup-content" id="step-2">
				<div class="panel-heading">
					 <h3 class="panel-title">Step 2</h3>
				</div>
				<div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">3. What percentage of your liquid assets do you plan to invest? *</label><br>
                        <select  required name="percentage_liquid" id="percentage_liquid" class="form-control">
                            <option value="">-- Select percentage --</option>
                            <option value="4">More than 75%</option>
                            <option value="3">50 - 75%</option>
                            <option value="2">25 - 50%</option>
                            <option value="1">Less than 25%</option>
                        </select>
                    </div> <!-- end form-group -->
                                
					<div class="form-group">
                        <label class="control-label">4. How would you rate your experience as an investor? *</label><br>
                        <select  required name="investor_rate" id="investor_rate" class="form-control">
                            <option value="">-- Select Investor rate --</option>
                            <option value="1">None</option>
                            <option value="2">Little knowledge</option>
                            <option value="3">Average</option>
                            <option value="4">Expert</option>
                        </select>
                    </div> <!-- end form-group -->
                                    

					<button class="btn btn-primary nextBtn-2 pull-right" type="button">Next</button>
				</div>
			</div>
			
			<div class="panel panel-warning setup-content" id="step-3">
				<div class="panel-heading">
					 <h3 class="panel-title">Step 3</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="pretty-margin">5. How stable are your finances? *</label><br>
						<select  required="required" name="investor_stability" id="investor_stability" class="form-control">
							<option value="">-- Select finances stability --</option>
							<option value="1">Not stable</option>
							<option value="2">Fairy stable</option>
							<option value="3">Stable but I expect major expenses within the next few years</option>
							<option value="4">Very stable, I can cover major expenses</option>
						</select>
					</div> <!-- end form-group -->

					<div class="form-group">
						<label class="pretty-margin">6. What is your primary goal for investing? *</label><br>
						<select  required="required" name="investor_goal" id="investor_goal" class="form-control">
							<option value="">-- Select goal for Investing --</option>
							<option value="1">Preserve the value of my investments. I want to minimize the risk of investments losing value.</option>
							<option value="2">Generate regular cash inflows. However, I would also like to build the value of my investments gradually over time, as a secondary objective</option>
							<option value="3">Have the value of my investments grow over time. However, I would also like to generate some regular cash inflows, as a secondary objective.</option>
							<option value="4">Have the value of my investments grow substantially over time. I do not need to generate regular cash inflows.</option>
						</select>
					</div> <!-- end form-group -->


					<button class="btn btn-primary nextBtn-3 pull-right" type="button">Next</button>
				</div>
			</div>
			
			<div class="panel panel-warning setup-content" id="step-4">
				<div class="panel-heading">
					 <h3 class="panel-title">Step 4</h3>
				</div>
				<div class="panel-body">
				<div class="form-group">
						<label class="pretty-margin">7. When is the earliest you anticipate needing all or a substantial portion of your investment assets? *</label><br>
						<select  required="required" required="required" name="investor_anticipate" id="investor_anticipate" class="form-control">
							<option value="">-- Select year --</option>
							<option value="4">More than 5 years.</option>
							<option value="3">2 to 5 years.</option>
							<option value="2">1 to 2 years.</option>
							<option value="1">Less than 1 year.</option>
						</select>
				</div> <!-- end form-group -->

				<div class="form-group">
						<label class="pretty-margin">8. Which of the following instruments do you currently invest in? * </label><br>
						<select  required="required" name="investor_instruments" id="investor_instruments" class="form-control">
							<option value="">-- Select Investment instrument --</option>
							<option value="1">I have no investments</option>
							<option value="2">Combination of time deposits / money market funds.</option>
							<option value="3">Combination of time deposits, money market funds, bonds and bond funds.</option>
							<option value="4">Combination of time deposits, money market funds, bonds and bond funds, equity and equity funds combination of time deposits, money market funds, bonds and bond funds, equity and equity funds.</option>
						</select>
				</div> <!-- end form-group -->

					<button class="btn btn-primary nextBtn-4 pull-right" type="button">Next</button>
				</div>
			</div>


			<div class="panel panel-warning setup-content" id="step-5">
				<div class="panel-heading">
					 <h3 class="panel-title">Step 5</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="pretty-margin">9. With how much investment volatility (fluctuations in the value of your investment) are you comfortable?*</label><br>
						<select required required="required" name="investor_comfortablity"  id="investor_comfortablity"  class="form-control">
							<option value="">-- Select option --</option>
							<option value="1">As little as possible. I want to focus on current income and stability of value even if it means that my total returns are relatively small.</option>
							<option value="2">Some. I am willing to accept occasional losses in value as long as my investments have some potential for growth over time.</option>
							<option value="3">Moderate. I am willing to take moderate risk as long as my investments have a greater potential for growth over time.</option>
							<option value="4">A considerable amount. I am willing to take substantial risk in pursuit of higher total returns.</option>
						</select>
					</div> <!-- end form-group -->

					<div class="form-group">
						<label class="pretty-margin">10. How large a drop in the value of your investment portfolio (unrealized or paper loss) would you be prepared to see before you start feeling very uncomfortable? * </label><br>
						<select required required="required" name="investor_portfolio" id="investor_portfolio"  class="form-control">
							<option value="">-- Select percentage --</option>
							<option value="4">More than 40%.</option>
							<option value="3">20% to 40%.</option>
							<option value="2">10% to 20%.</option>
							<option value="1">Less than 10%.</option>
						</select>
					</div> <!-- end form-group -->

					<button class="btn btn-success pull-right" type="submit">Submit!</button>
				</div>
			</div>


		</form>
                
                    </div>

                    
                </div> <!-- end row -->
            </div>

		</section>
		

<?php get_footer() ?>