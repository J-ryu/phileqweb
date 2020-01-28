<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */


$expense_field1           = $_POST["expense_field1"];
$expense_field2           = $_POST["expense_field2"];
$expense_field3           = $_POST["expense_field3"];
$expense_field4           = $_POST["expense_field4"];
$expense_field5           = $_POST["expense_field5"];
$expense_field6           = $_POST["expense_field6"];
$expense_field7           = $_POST["expense_field7"];
$expense_field8           = $_POST["expense_field8"];
$expense_field9           = $_POST["expense_field9"];
$expense_field10          = $_POST["expense_field10"];
$expense_field11          = $_POST["expense_field11"];
$expense_field12          = $_POST["expense_field12"];
$expense_field13          = $_POST["expense_field13"];
$expense_field14          = $_POST["expense_field14"];
$expense_field15          = $_POST["expense_field15"];
$expense_field16          = $_POST["expense_field16"];
$expense_field17          = $_POST["expense_field17"];
$expense_field18          = $_POST["expense_field18"];
$expense_field19          = $_POST["expense_field19"];
$expense_field20          = $_POST["expense_field20"];
$expense_field21          = $_POST["expense_field21"];
$expense_field22          = $_POST["expense_field22"];
$expense_field23          = $_POST["expense_field23"];
$expense_field24          = $_POST["expense_field24"];
$expense_field25          = $_POST["expense_field25"];
$expense_field26          = $_POST["expense_field26"];
$expense_field27          = $_POST["expense_field27"];
$expense_field28          = $_POST["expense_field28"];
$expense_field29          = $_POST["expense_field29"];


$net_salary = intval(preg_replace('/[^\d.]/', '', $expense_field1));
$thirteenth_month = intval(preg_replace('/[^\d.]/', '', $expense_field2));
$mid_year = intval(preg_replace('/[^\d.]/', '', $expense_field3));
$other_income = intval(preg_replace('/[^\d.]/', '', $expense_field4));


$net_salary_projection = $net_salary * 12;
$other_income_projection = $other_income * 12;

$electricity_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field5));
$water_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field6));
$telephone_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field7));
$internet_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field8));
$landline_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field9));
$mobile_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field10));
$cable_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field11));
$grocery_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field12));
$non_food_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field13));
$dailyfood_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field14));
$child_allowance_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field15));
$gasoline_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field16));
$condo_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field17));
$neswpaper_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field18));
$other_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field19));
$car_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field20));
$creditcard_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field21));
$entertainment_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field22));
$life_insurance_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field23));
$other_insurance_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field24));
$car_ammor_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field25));
$house_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field26));
$other_debt_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field27));
$children_tuition_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field28));
$transportation_expenses = intval(preg_replace('/[^\d.]/', '', $expense_field29));

$electricity_expenses_projection = $electricity_expenses * 12;
$water_expenses_projection 		 = $water_expenses* 12;
$telephone_expenses_projection   = $telephone_expenses * 12;
$internet_expenses_projection    = $internet_expenses * 12;
$landline_expenses_projection    = $landline_expenses * 12;
$mobile_expenses_projection 	 = $mobile_expenses * 12;
$cable_expenses_projection 		 = $cable_expenses * 12;
$grocery_expenses_projection     = $grocery_expenses * 12;

$non_food_expenses_projection            = $non_food_expenses * 12;
$dailyfood_expenses_projection           = $dailyfood_expenses * 12;
$child_allowance_expenses_projection     = $child_allowance_expenses * 12;
$gasoline_expenses_projection            = $gasoline_expenses * 12;
$condo_expenses_projection               = $condo_expenses * 12;


$newspaper_expenses_projection           = $newspaper_expenses * 12;
$other_expenses_projection    			 = $other_expenses * 12;
$car_expenses_projection    			 = $car_expenses * 12;

$creditcard_expenses_projection          = $creditcard_expenses * 12;
$entertainment_expenses_projection    	 = $entertainment_expenses * 12;
$life_insurance_expenses_projection      = $life_insurance_expenses * 12;
$other_insurance_expenses_projection     = $other_insurance_expenses * 12;


$car_ammor_expenses_projection          = $car_ammor_expenses * 12;
$house_expenses_projection    	    	= $house_expenses * 12;
$other_debt_expenses_projection     	= $other_debt_expenses * 12;
$children_tuition_expenses_projection   = $children_tuition_expenses * 12;
$transportation_expenses_projection     = $transportation_expenses * 12;

$totalAnnnualIncome =  $net_salary_projection + $other_income_projection + $thirteenth_month + $mid_year;
$totalAnnualExpenses =  $electricity_expenses_projection + $water_expenses_projection + $telephone_expenses_projection +
    $internet_expenses_projection + $mobile_expenses_projection + $cable_expenses_projection + $grocery_expenses_projection +
    $dailyfood_expenses_projection + $child_allowance_expenses_projection + $gasoline_expenses_projection + 
    $condo_expenses_projection + $newspaper_expenses_projection + $other_expenses_projection + $car_expenses_projection + 
    $creditcard_expenses_projection + $entertainment_expenses_projection + $life_insurance_expenses_projection + 
    $other_insurance_expenses_projection + $car_ammor_expenses_projection + $house_expenses_projection + 
    $other_debt_expenses_projection + $children_tuition_expenses_projection + $transportation_expenses_projection;






$totalSavings =	$totalAnnnualIncome - $totalAnnualExpenses;


$houseHoldTotal = $electricity_expenses_projection +  $water_expenses_projection + $telephone_expenses_projection 
+ $internet_expenses_projection + $landline_expenses_projection + $mobile_expenses_projection + $cable_expenses_projection + 
$grocery_expenses_projection + $condo_expenses_projection + $house_expenses_projection;

$householdPercentage = ($houseHoldTotal / $totalAnnualExpenses) * 100 ;


$transportationTotal = $gasoline_expenses_projection + $car_expenses_projection + $car_ammor_expenses_projection + $transportation_expenses_projection;
$transportationPercentage = ($transportationTotal / $totalAnnualExpenses) * 100 ;

$obligationTotal = $child_allowance_expenses_projection + $life_insurance_expenses_projection + $other_insurance_expenses_projection + $other_debt_expenses_projection + $children_tuition_expenses_projection;
$obligationPercentage = ($obligationTotal / $totalAnnualExpenses) * 100 ;

$lifestyleTotal = $dailyfood_expenses_projection + $non_food_expenses_projection + $newspaper_expenses_projection + $other_expenses_projection +
 $creditcard_expenses_projection + $entertainment_expenses_projection;
$lifestylePercentage = ($lifestyleTotal / $totalAnnualExpenses) * 100 ;        

get_header();
?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/form-scripts-expense.js" type="text/javascript"></script>


 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/expense-calculator.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <!-- <div class="row">-->
                    <div class="col col-xs-12">
                      	<h2>Expense Calculator</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Expense Calculator</li>
                        </ol> -->
                    </div>
                <!-- </div>  --> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->




<!-- account details -->
<section style="margin-top:20px;" class="service-single-section">

<div class="container">  

            <div class="col col-md-12" style="margin:10px;">
                    <p>To get a better grasp of your current financial situation, it would be helpful to itemize what’s eating up your cash-flow.  <br>
                      Take a few minutes to fill out the fields below and find out how you can take charge and reduce your unnecessary spending habits.
                        <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                    </p>
            </div>

   <div class="row">
     <div class="col-md-6">
     <h3>Projected Savings</h3>
     <ul style="font-size:16px;">
   
     <li>Your annual projected income: <?php echo number_format($totalAnnnualIncome,2, "." , "," ); ?></li>
     <li>Your annual projected expenses: <?php echo number_format($totalAnnualExpenses,2, "." , "," ); ?></li>
     <li>Your annual projected savings: <?php echo number_format($totalSavings,2,".",","); ?> </li>
     
     </ul>

      </div> <!-- col-md-12 -->
      
      <div class="col-md-6">
      <h3>Breakdown of your Expenses</h3>
      <ul style="font-size:16px;">
        <li>Household Percentage: <?php echo number_format((int)$householdPercentage); ?>%</li>
        <li>Transportation Percentage: <?php echo number_format((int)$transportationPercentage);?>% </li>
        <li>Obligation Percentage:  <?php  echo number_format((int)$obligationPercentage);?>% </li>
        <li>Lifestyle Percentage: <?php echo number_format((int)$lifestylePercentage);?>% </li>
      </ul>
      </div>

    </div>  <!-- row -->

    

    <hr>

    <div class="row">
      <div class="col col-md-12">

              <div class="about-details">
                <div class="col col-md-6">  
                        <h3>Tips on your expenses:</h3>
                        <ul>
                            <li>Analyze your expenses.</li> 
                            <li>Are your expenses absolutely necessary.</li> 
                            <li>Determine which of your expenses you can reduce or eliminate.</li> 
                            <li>Does your income compensate the lifestyle you live.</li> 
                            <li>Determine a budget for the breakdown of your expenses.</li> 
                        </ul>
                </div>
                <div class="col col-md-6">  
            
                        <h3>Tips on your income:</h3>
                        <ul>
                            <li>Is your income sufficient for the expenses you currently have.</li> 
                            <li>Are there other means of income you can attain.</li>  
            
                        </ul>
                </div>
             <br>
	     <br>
                       <!-- <div class="col col-md-offset-6 col-md-8 ">  
                                <h3>Let Philequity assist you.</h3>
                                <div class="btns">
                                    <a style="margin:5px 0;" href="<?php echo site_url('/mutual-funds') ?>" class="theme-btn">Mutual Funds</a>
                                </div>
                        </div>-->
            
                </div>
                </div>

        </div> 


        
            

           
        </div>
        <div class="row">
                <div class="btns text-center" style="margin:30px 0px;">
			 <h3>Let Philequity assist you.</h3>
			<a style="margin:5px 0;" href="<?php echo site_url('/mutual-funds') ?>" class="theme-btn">Mutual Funds</a>
                        <a href="<?php echo site_url('/all-calculator') ?>"  class="theme-btn"><span class="glyphicon glyphicon-user"></span>OTHER CALCULATORS</a>
                        <a href="<?php echo site_url('/contact-us') ?>"  class="theme-btn"><span class="glyphicon glyphicon-save"></span>TALK TO US</a>
                        <a href="<?php echo site_url('/learn') ?>"  class="theme-btn"><span class="glyphicon glyphicon-save"></span>LEARN MORE</a>
                       
                       
                 </div>
        </div>

    </div>
</div>  <!-- container -->

        </section>






<?php get_footer() ?>



