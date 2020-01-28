<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();

require_once("template-parts/content-dbconn.php");

$options=array("Philequity Fund, Inc","Philequity Dollar Income Fund, Inc","Philequity PSE Index Fund, Inc","Philequity Peso Bond Fund, Inc","Philequity Dividend Yield Fund, Inc");
$data = '
<div class="form-row">
 <tr bgcolor="#f7f7f7">
         <td class="tableText"><strong>Which fund did you invest in</strong></td>
         <td>

         <div class="form-group col-md-12">

            <select class="form-control" name="mutualFund">';
			if(!($mutualFund)){
				$data.='<option selected>- Select Funds --</option>'; 
			}
			$num=1;

			foreach($options as $key => $values){
				if($num==$mutualFund){
					$data.='<option selected value="'.$num.'">'.$values.'</option>';
					$mutualFund = $values;
				}else{
					$data.='<option value="'.$num.'">'.$values.'</option>';
				}
				$num=$num+1;
			}
				// 
$data.=	'</select>   
            </div>        
         	</td>
		 </tr>
         <tr bgcolor="#ededed">
         <td><strong>Date of Investment</strong></td>
         <td>
         <div class="form-group col-md-4">
         Date: <select class="form-control" name="mutual_day" id="mutual_day">';
if(!($mutual_day)){
 $data.='<option selected>-- Select Day --</option>'; 



}
 for($y=1; $y<32; $y++){
  if($y==$mutual_day){
	$data.='<option selected>'.$y.'</option>';
  }else{
	$data.='<option>'.$y.'</option>';
  }
}
$option=array("January","February","March","April","May","June","July","August","September","October","November","December");
$data.='</select>
        </div>   
        <div class="form-group col-md-4"> 
         Month: <select class="form-control" name="mutual_month" id="mutual_month">';
if(!($mutual_month)){
	$data.='<option selected>-- Select Month --</option>'; 
}
$var=1;
foreach($option as $keys => $value){
	if($var==$mutual_month){
	$data.='<option selected value="'.$var.'">'.$value.'</option>';
	//$month = $value;
	}else{
	$data.='<option value="'.$var.'">'.$value.'</option>';
	}
	$var=$var+1;
}
$data.='</select>
        </div>

        <div class="form-group col-md-4">
         Year: <select class="form-control" name="mutual_year" id="mutual_year">';
if(!$mutual_year){
	$data.='<option selected>-Select Year-</option>'; 
}
for($y=1995; $y<2038; $y++){
	if($y==$mutual_year){
	 $data.='<option selected>'.$y.'</option>';
	}else{
	 $data.='<option >'.$y.'</option>';
	}
}
$data.='</select>
        </div>
         </td>
      </tr>
      <tr>
      <td colspan="12">
      
      <div class="form-group col-md-12">
      <label>Amount of Investment</label>
      <input type="text" id="amount_investment" name="amount_investment" class="number form-control" >
      </div>
      
      </td>
      </tr>
      </div>';



      
if($mutualFund&&$mutual_day&&$mutual_month&&$mutual_year){
    $amount_investment               = str_replace(array(',', ' '), '', $_POST["amount_investment"]);
   
    
    

    //GET LATEST NAVPS OF SELECTED FUNDS
    $query = "SELECT * from dailyfunds WHERE type ='".$mutualFund."'
            ORDER BY date_navps DESC LIMIT 1 ";
    $result = mysql_query($query);
    $record = mysql_fetch_array($result);
    if($record["eid"]){
        $cur_navps = $record["navps"];
	$cur_Date=explode("-",$record["date_navps"],3);
        $cur_day=$cur_Date[2];
        $cur_month=$cur_Date[1];
        $cur_year=$cur_Date[0];
        $cur_navpsDate = mktime(0,0,0,$cur_month,$cur_day,$cur_year);
        $navpsDate = date("F d, Y", mktime(0,0,0,$cur_month,$cur_day,$cur_year));
    
        $curDate = strtotime($cur_year."-".$cur_month."-".$cur_day);
    }
    


    //CHECK DATE ENTERED 
    //$start_date = mktime(0,0,0,1,2,1995);
    //$entry_date = mktime(0,0,0,$month,$day,$year);
    $start_date = "1995-1-2";
    $entry_date = $mutual_year."-".$mutual_month."-".$mutual_day;
    if($entry_date>$start_date && $entry_date<=(time()+(60*60*24))){
        
        $qry = "SELECT *, date_navps AS time_navps FROM dailyfunds WHERE 
            (type = '$mutualFund' AND date_navps = '".$entry_date."') 
            OR 
            ( date_navps ='".$entry_date."' AND type = '$mutualFund')
            OR 
            ( date_navps ='".$entry_date."' AND type = '$mutualFund')
            ORDER BY date_navps DESC LIMIT 1";
        $res = mysql_query($qry);
        $rec = mysql_fetch_array($res);
        
        if($rec["eid"]){
            $selDate = strtotime($rec["time_navps"]);
            $diffDate = $curDate - $selDate;
            //$nodays = floor($diffDate/60/60/24);
            $nodays = round((($cur_navpsDate - $rec["time_navps"])/86400),0);
            $entry_navps = $rec["navps"];
            
            $actual = round(((($cur_navps/$entry_navps) - 1) * 100),2); 
            
            if($nodays>360){
                $f = ($cur_navps/$entry_navps);
                $q = (1/($nodays/360));
                
                $annual = round(((pow($f,$q) - 1) * 100),2);			
            }
          

            //$share_received = round(($amount_investment/$entry_navps ),2); 
            //$gain_loss_amount =  round((($share_received * $cur_navps) - $amount_investment),2);



            $share_received = round(($amount_investment/$entry_navps ),2); 
            $gain_loss_amount =  round((($share_received * $cur_navps) - $amount_investment),2);

          
	 $newDate = date("M-d-Y", strtotime($entry_date));
        	
           //  echo ' mutual Fund: ' .$mutualFund;
            // echo ' amount_investment: ' .$amount_investment;
             //echo ' newDate: ' .$newDate;
            // echo ' share_received: ' .$share_received;
            // echo ' gain_loss_amount: ' .abs($gain_loss_amount);
             //echo ' percentage_gain_loss: ' . round(($percentage_gain_loss),2);
	     //echo 'nodays: ' .$nodays;
	    //echo 'entry navps: ' .$entry_navps;
	    //echo 'curnavps : ' .$cur_navps;


          
             


           
           

            $return = '
            <div class="table-responsive">
            <table class="table-striped table table-hover">
              <tr style="font-weight:bolder;">
                 <td colspan="6" class="tableHeader"><span class="blueHeader">Fund</span> 
                 <span style="color:red" >Returns</span></td>
              </tr>
              <tr>
                  <td><strong>Mutual fund you Invest in</strong></td>
                 <td align="center">'. $mutualFund.'</td>
              </tr>
              

              <tr>
                 <td><strong>Date of Investment</strong></td>
                 <td align="center">'.$newDate.'</td>
              </tr>
              <tr>
                 <td><strong>Amount of Investment</strong></td>
                 <td align="center">'.number_format($amount_investment, 2, '.', ',').'</td>
              </tr>

              <tr>
              <td><strong> Gain/Loss </strong></td>
              <td align="center">'.number_format($gain_loss_amount, 2, '.', '').'</td>
              </tr>

              <tr>
              <td> <strong>Absolute Gain/Loss (in %)</strong></td>
              
              <td align="center">'.number_format($actual, 2, '.', '').'%</td>
             </tr>
             
                 <td> <strong>Compound Annual Growth Rate (in %)</strong></td>
                 <td align="center">'.$annual.'%</td>
              </tr>
            </table>
           </div>
                  ';
        }else{
         $return ='

         <div class="panel panel-success">
         <div class="panel-heading" style="background-color:#FEC325 !important">
         <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-6">
             <h3 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> <span class="glyphicon glyphicon-list-alt"> </span> Calculated Returns </h3>
             </div>
         </div>
         </div>
         




         <div class="panel-body table-responsive">
         <table class="table table-hover">
             
             <tbody>
             

             <tr>
                 <td><strong>No NAVPS found for the date entered.</strong></td>
                 <td align="center">&nbsp;</td>
                 
             </tr>        

             
             </tbody>
         </table>
         </div>	           
     </div>
               ';
        }
    
      }else{
         $return ='

         <div class="panel panel-success">
            <div class="panel-heading" style="background-color:#FEC325 !important">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                <h3 class="text-center pull-left" style="padding-left: 30px; text-align: center;"> <span class="glyphicon glyphicon-list-alt"> </span> Calculated Returns </h3>
                </div>
            </div>
            </div>
            




            <div class="panel-body table-responsive">
            <table class="table table-hover">
                
                <tbody>
                

                <tr>
                    <td><strong>No NAVPS found for the date entered.</strong></td>
                    <td align="center">&nbsp;</td>
                    
                </tr>        

                
                </tbody>
            </table>
            </div>	           
        </div>


      
        

        


               ';
      }
      
    }


   
?>


 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/fund-returns-investment.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
             <!--<div class="row">-->
                    <div class="col col-xs-12">
                        <h2>Historical Returns</h2>
                          
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
			<center>
                    <p>
                        Wondering how much your investment has already earned?  You don’t need to do the math yourself.  
                        Find out your investment’s rate of return by using our Return Calculator.  Simply select the name of
                        the mutual fund and the date on which you invested your money.  The Return Calculator will tell you:
                    </p>
			</center>
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



                            <div id="fund_years" class='row'>   <!-- forms -->    
                               <!-- <h4 class="text-center">How my investment has done over years? </h4> -->


                                <div style="margin-bottom:20px;" class="row">
                                    <div class="col col-md-12">
                                            <div id="return-funds-form" 
                                            <?php  if (isset($_POST['amount_investment'])) {?> style='display:none;' <?php  } else {  ?>  style='display:block; background-color: #f2f2f2; padding: 15px; position: relative; border-radius: 5px;'<?php } ?>>
                                                    
                                                <form action="<?php the_permalink(); ?>"  method="POST" name="formreturncalc" id="formreturncalc">
                                                
                                                <div class="panel-body  table">
                                                
                                                <table style="background-color: transparent;" class="table borderless table-striped">
                                                <?php echo $data ?>
                                            
                                                <tr>
                                                <td colspan="2">

                                                    <div>
                                                    <button style="margin:10px 0;"  class="btn btn-primary pull-right" name="computeReturn"  id="computeReturn" type="submit">
                                                        <span class="fa fa-calculator"></span> Compute Return 
                                                        </button>
                                                    </div>  

                                                </tr>
                                                </table>
                                                </div>
                                                </form>          
                                        
                                        </div>    <!-- return-funds-form -->
                                    </div> <!-- col -->
                                </div>  <!-- row -->

                            </div>


     
             <div class="row">
                    <div class="col col-md-12">
                       <?php echo $return ?>
			</div>
		
                    
                <div class="col col-md-12">
			
                      <div <?php if (isset($_POST['amount_investment'])) {?> style='display:block; text-align:center; margin:15px 0;' <?php  } else {  ?>  style='display:none;'<?php } ?> class="btns">
			<a style="margin: 0 5px" href="<?php echo site_url('/return-calculator')?>" class="theme-btn">Back</a>
			<a style="margin: 0 5px" href="<?php echo site_url('/all-calculator')?>" class="theme-btn">Other Calculators</a>
                        <a style="margin: 0 5px" href="<?php echo site_url('/contact-us') ?>" class="theme-btn">Talk to Us</a>
                        <a style="margin: 0 5px" href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>"class="theme-btn">Learn More</a>


                      </div>


                    <p style="text-align:center">
                        <em>
                        Return figures reflected above are based on the change in the NAVPS of the selected fund over
                        the selected period.  As such, these figures only factor in the annual management fee imputed
                        in the NAVPS and do not include any applicable sales charges such as entry or exit fees.
                        </em>
                    </p>

                   
                </div>
            </div>
        </div>
  
                               
        
    </section>







<?php 
// if (isset($_POST['formreturncalc'])){
    
// }


get_footer();
?>








                    