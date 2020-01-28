<?php
/**
 * T template for TRANSACT PAGE
 *
 *
 */

get_header();

?>


 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/expense-calculator.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!-- <div class="row"> -->
                    <div class="col col-xs-12">
                         <h2>Expense Calculator </h2>
                      <!--  <ol class="breadcrumb">
                            <li><?php echo $totalAnnnualIncome; ?></li>
                            <li><?php echo $variable; ?></li>
                        </ol>   -->
                    </div>
              <!--  </div>  end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->




<!-- account details -->
<section style="margin-top:20px;" id="expense-stepper" class="service-single-section">







<div class="container">  

<div class="col col-md-12" style="margin:10px;">
                    <p>To  your current financial situation, it would be helpful to itemize what’s eating up your cash-flow.
                      Take a few minutes to fill out the fields below and find out how you can take charge and reduce your unnecessary spending habits.
                        <br>
                        <br>
                       
                        <br>
                        <br>
                    </p>
            </div>



   <div class="row">
     <div class="col-md-12">

     <div class="stepwizard">
			<div class="stepwizard-row setup-panel">
            
				<div class="stepwizard-step col-xs-6"> 
					<a href="#step-1-expense" type="button" class="btn btn-lg  btn-warning  btn-success">1</a>
					<p><small>Step 1</small></p>
				</div>
				<div class="stepwizard-step col-xs-6"> 
					<a href="#step-2-expense" type="button" class="btn btn-warning btn-lg " disabled="disabled">2</a>
					<p><small>Step 2</small></p>
				</div>
				
				
			</div>
		</div>
    
        <form  id="expense_calculator_form"  action="<?php echo site_url("/expense-calculator-results") ?>" method="post" role="form" >
       
        <div class="panel panel-warning setup-content-expense" id="step-1-expense">
            <div class="panel-heading">
				<h3 class="panel-title">Step 1 - Income Section</h3>
			</div> <!-- end panel-heading -->

            <div class="panel-body">

                <div class="form-group">
                    <label class="control-label"> Provide your Monthly net salary (after taxes) </label><br>
                    <input required id="expense_field1" name="expense_field1" class="number form-control" type="text" value=""> 
                </div> <!-- end form-group -->

                <div class="form-group">
                    <label class="control-label"> 13th month pay</label><br>
                    <input required id="expense_field2" name="expense_field2" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="form-group">
                    <label class="control-label"> Mid-year bonus (net)</label><br>
                    <input required id="expense_field3" name="expense_field3" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="form-group">
                    <label class="control-label"> Other Income</label><br>
                    <input required id="expense_field4" name="expense_field4" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

               <center> <button class="btn btn-primary nextBtn-expense pull-right" type="button">Next</button></center>

            </div>  <!-- end panel-body -->


        </div>
        <!-- end of step1 -->


        <div class="panel panel-warning setup-content-expense" id="step-2-expense">
            <div class="panel-heading">
				<h3 class="panel-title">Step 2 - Monthly Expenses</h3>
                <h4>Fill-out the items that are applicable to you</h4>
			</div>

             <div class="panel-body">

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Electricity </label><br>
                    <input id="expense_field5" name="expense_field5" class="number form-control" type="text" value=""> 
                </div> <!-- end form-group -->

                <div class="col col-md-6 form-group">
                     <label class="control-label"> Water </label><br>
                    <input id="expense_field6" name="expense_field6" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Telephone </label><br>
                    <input id="expense_field7" name="expense_field7" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                 <div class="col col-md-6 form-group">
                    <label class="control-label"> Internet </label><br>
                    <input id="expense_field8" name="expense_field8" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Landline </label><br>
                    <input id="expense_field9" name="expense_field9" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Cellphone / Mobile </label><br>
                    <input id="expense_field10" name="expense_field10" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Cable TV </label><br>
                    <input id="expense_field11" name="expense_field11" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Grocery </label><br>
                    <input id="expense_field12" name="expense_field12" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Non-Food </label><br>
                    <input id="expense_field13" name="expense_field13" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label"> Food </label><br>
                    <input id="expense_field14" name="expense_field14" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Children's Allowance </label><br>
                    <input id="expense_field15" name="expense_field15" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Gasoline </label><br>
                    <input id="expense_field16" name="expense_field16" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Village Condo </label><br>
                    <input id="expense_field17" name="expense_field17" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Newspaper Subscription </label><br>
                    <input id="expense_field18" name="expense_field18" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Other subscription (Netflix, spotify, etc) </label><br>
                    <input id="expense_field19" name="expense_field19" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label">Car Maintenance </label><br>
                    <input id="expense_field20" name="expense_field20" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Credit Card Payment </label><br>
                    <input id="expense_field21" name="expense_field21" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label">Entertainment </label><br>
                    <input id="expense_field22" name="expense_field22" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Life Insurance </label><br>
                    <input id="expense_field23" name="expense_field23" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label">Other Insurance Premium </label><br>
                    <input id="expense_field24" name="expense_field24" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Car Ammortization </label><br>
                    <input id="expense_field25" name="expense_field25" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->

                <div class="col col-md-6 form-group">
                    <label class="control-label">House Ammortization </label><br>
                    <input id="expense_field26" name="expense_field26" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Other Debt </label><br>
                    <input id="expense_field27" name="expense_field27" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label">Children's Tuition </label><br>
                    <input id="expense_field28" name="expense_field28" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->


                <div class="col col-md-6 form-group">
                    <label class="control-label"> Transportation </label><br>
                    <input id="expense_field29" name="expense_field29" class="number form-control" type="text" value=""> 
                </div>  <!-- end form-group -->



                <div style="visibility: hidden;" class="col col-md-6 form-group">
                     <label class="control-label"> Transportation </label><br>
                    <input  class=" form-control" type="text" value=""> 
                </div>  <!-- end form-group -->
                




                <button class="btn btn-warning backBtn-expense-2 pull-left" type="button">Back</button>
                <button class="btn btn-success pull-right" name="submit_expense" type="submit">Submit</button>
            </div>  <!-- end panel-body -->
            
        </div>
        <!-- end of step2 -->



        </form>
            
		

      </div> <!-- col-md-12 -->
    </div>  <!-- row -->

        

           
        </div>
    </div>
</div>  <!-- container -->

        </section>









<?php get_footer() ?>



