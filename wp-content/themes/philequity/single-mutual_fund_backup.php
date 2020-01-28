

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-/#single-post-mutual
 *
 * @package philequity
 */

 
get_header();
require_once("template-parts/content-dbconn.php");


$fund  = get_the_title();
$funds_category;


// navps_url_data 
// $navps_url_data  = 


$navps_category = ""; 

if ($fund  == 'Philequity Fund, Inc') {
    $navps_category = 'pefi';
   
}
if ($fund  == 'Philequity PSE Index Fund, Inc') {
    $navps_category = 'ppse';
}
if ($fund  == 'Philequity Dollar Income Fund, Inc') {
    $navps_category = 'pdif';
}
if ($fund  == 'Philequity Peso Bond Fund, Inc') {
    $navps_category = 'ppbf';
}
if ($fund  == 'Philequity Dividend Yield Fund, Inc') {
    $navps_category = 'pdyf';
}   



$navps_query = "SELECT * FROM `navps_data` WHERE `navps_type`='$navps_category'  ORDER BY id ASC LIMIT 1";
$navps_result = mysql_query($navps_query);
$navps_record  = mysql_fetch_array($navps_result);
$navps_get_URL = $navps_record["nav_data_URL"];



// First data data
$query = "SELECT * ,  date_navps as start, DATE_FORMAT(date_navps,'%Y') as startyear FROM dailyfunds WHERE type='$fund' AND status = '1' ORDER BY date_navps ASC LIMIT 1";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
$startnavps = $record["start"];
$startyear = $record["startyear"];


$query = "SELECT * , DATE_FORMAT(date_navps,'%Y') as endyear FROM dailyfunds WHERE type='$fund' AND status = '1' ORDER BY date_navps DESC LIMIT 1";
$result = mysql_query($query);
$record = mysql_fetch_array($result);
$endnavps = $record["endyear"];




// $sql="SELECT eid,type,date_navps,navps,prcnt_change,DATE_FORMAT(date_navps,'%Y') as year FROM dailyfunds WHERE type='$fund' AND status = '1' GROUP BY year ORDER BY date_navps ASC LIMIT $limit_new, 12" ;


$sql="SELECT eid,type,date_navps,navps,prcnt_change,DATE_FORMAT(date_navps,'%Y') as year FROM dailyfunds WHERE type='$fund' AND status = '1' GROUP BY year ORDER BY date_navps ASC " ;

$query=mysql_query($sql);

$data_num=mysql_num_rows($query);


for($i=1;$i<=$data_num;$i++){
	$data=mysql_fetch_array($query);
	//print_r($data);	
	// first line
	$ydarray.=$comma.$pefi;
	$pchg=(1+($data["prcnt_change"]/100));
	$pefi=($pefi*$pchg);
	
	// year
	$yeara.=$comma.$data["year"];
	$data_blue.=$comma.$data["navps"];	
	$comma=',';
}



$endnavps_ten = $endnavps-10;
$limit_new = $endnavps_ten-$startyear;



$sql_navps_ten="SELECT eid,type,date_navps,navps,prcnt_change,DATE_FORMAT(date_navps,'%Y') as year FROM dailyfunds WHERE type='$fund' AND status = '1' GROUP BY year ORDER BY date_navps ASC LIMIT $limit_new, 11" ;
$query_navps_ten=mysql_query($sql_navps_ten);
$data_num_navps_ten=mysql_num_rows($query_navps_ten);

for($i=1;$i<=$data_num_navps_ten;$i++){
    $data=mysql_fetch_array($query_navps_ten);
   
    $ydarray_ten.=$comma.$pefi_ten;
	$pchg_ten=(1+($data["prcnt_change"]/100));
	$pefi_ten=($pefi_ten*$pchg_ten);
	
	// year
	$yeara_ten.=$comma.$data["year"];
	$data_blue_ten.=$comma.$data["navps"];	
	$comma=',';
}


// GET 5 YEAR NAVPS

$endnavps_five = $endnavps-5;
$limit_new_five = $endnavps_five-$startyear;



$sql_navps_five="SELECT eid,type,date_navps,navps,prcnt_change,DATE_FORMAT(date_navps,'%Y') as year FROM dailyfunds WHERE type='$fund' AND status = '1' GROUP BY year ORDER BY date_navps ASC LIMIT $limit_new_five, 20" ;
$query_navps_five=mysql_query($sql_navps_five);
$data_num_navps_five=mysql_num_rows($query_navps_five);

for($i=1;$i<=$data_num_navps_five;$i++){
    $data=mysql_fetch_array($query_navps_five);
   
    $ydarray_five.=$comma.$pefi_five;
	$pchg_five=(1+($data["prcnt_change"]/100));
	$pefi_five=($pefi_five*$pchg_five);
	
	// year
	$yeara_five.=$comma.$data["year"];
	$data_blue_five.=$comma.$data["navps"];	
	$comma=',';
}


// GET 3 YEAR NAVPS

$endnavps_three = $endnavps-3;

$limit_new_three= $endnavps_three-$startyear;



$sql_navps_three="SELECT eid,type,date_navps,navps,prcnt_change,DATE_FORMAT(date_navps,'%Y') as year FROM dailyfunds WHERE type='$fund' AND status = '1' GROUP BY year ORDER BY date_navps ASC LIMIT $limit_new_three, 20" ;
$query_navps_three=mysql_query($sql_navps_three);
$data_num_navps_three=mysql_num_rows($query_navps_three);

for($i=1;$i<=$data_num_navps_three;$i++){
    $data=mysql_fetch_array($query_navps_three);
   
    $ydarray_three.=$comma.$pefi_three;
	$pchg_three=(1+($data["prcnt_change"]/100));
	$pefi_three=($pefi_three*$pchg_three);
	
	// year
	$yeara_three.=$comma.$data["year"];
	$data_blue_three.=$comma.$data["navps"];	
	$comma=',';
}




if($fund == 'Philequity Fund, Inc' || $fund == 'Philequity Dividend Yield Fund, Inc' || $fund == 'Philequity PSE Index Fund, Inc'){


	$sql="SELECT * , DATE_FORMAT(date_phisix,'%Y') as year FROM dailyphisix WHERE UNIX_TIMESTAMP(date_phisix) >= UNIX_TIMESTAMP('$startnavps') AND status = '1' ORDER BY date_phisix ASC";
	$query=mysql_query($sql);

	$data_num=mysql_num_rows($query);
	if($fund == 'Philequity Dividend Yield Fund, Inc' || $fund == 'Philequity PSE Index Fund, Inc'){

        // echo "true";
        $ydata_mac = explode(",",$data_blue);
        $psei=$ydata_mac[0];

        // echo $ydata_mac[0];
        // echo $psei;
        
	}else{
		$psei=1;
	}

	
	$phisix = '';
	for($i=1;$i<=$data_num;$i++){
		$data=mysql_fetch_array($query);
		
		if($phisix==''){
			$phisix=$data["phisix"];
		}else{
			$phisix.=','.$data["phisix"];
		}
		$ydarray2.=$comm.$psei;
		$pchg=(1+($data["prcnt_change"]/100));
		$psei=($psei*$pchg);
			
		//year
		$yearb.=$comm.$data["year"]; 		
		$comm=',';	
		
	}
	if($fund == 'Philequity PSE Index Fund, Inc'){
		$exp_phisix = explode(",",$phisix);
		if(isset($exp_phisix)){
			$psei_data = '';
			foreach($exp_phisix as $key => $data_phisix){
				if($key==0){
					//$ydata_mac = explode(",",$data_blue);
					$psei_data = $ydata_mac[0].',';
				}else{
					$num = $key - 1;
					if($key == 1){
						$compute = $ydata_mac[$num] * ($data_phisix / $exp_phisix[$num]);
					}else{
						$compute = $compute * ($data_phisix / $exp_phisix[$num]);
					}
					



					//echo $ydata_mac[$num].' * '.$data_phisix .' / '. $exp_phisix[$num];
					//echo '<br>';
                    $psei_data.=round($compute,5).',';
                    
				}
			}
		}
	}
}


$ydata = explode(",",$data_blue);

if($fund == 'Philequity PSE Index Fund, Inc'){
	$ydata2 = explode(",",$psei_data);

}else{
	$ydata2 = explode(",",$ydarray2);	
}

$datax = explode(",",$yeara);


// get ten NAVPS


$ydata_ten = explode(",",$data_blue_ten);

if($fund == 'Philequity PSE Index Fund, Inc'){
	$ydata2_ten = explode(",",$psei_data_ten);

}else{
	$ydata2_ten = explode(",",$ydarray2_ten);	
}

$datax_ten = explode(",",$yeara_ten);

// get five NAVPS

$ydata_five = explode(",",$data_blue_five);

if($fund == 'Philequity PSE Index Fund, Inc'){
	$ydata2_five = explode(",",$psei_data_five);

}else{
	$ydata2_five = explode(",",$ydarray2_five);	
}
$datax_five = explode(",",$yeara_five);


// get five NAVPS

$ydata_three = explode(",",$data_blue_three);

if($fund == 'Philequity PSE Index Fund, Inc'){
	$ydata2_three = explode(",",$psei_data_three);

}else{
	$ydata2_three = explode(",",$ydarray2_three);	
}
$datax_three = explode(",",$yeara_three);



?>



   <script type="text/javascript">$('#fundsPer').addClass('hide');</script>



  <!-- start page-title -->
  <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/mutual_funds.jpg'); ?>) center center/cover no-repeat local;">
    <div class="container">
        <!--<div class="row">-->
            <div class="col col-xs-12">
                <h2><?php the_title();?></h2>
                <!-- <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('/mutual-funds') ?>">Mutual Funds</a></li>
                    <li><?php the_title();?></li>
                </ol> -->
            </div>
        <!--</div>--> <!-- end row -->
    </div> <!-- end container -->
 </section> <!-- end page-title -->




<section class="case-study-single-content ">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12">
                        <div class="case-details">

                     <div class="case-single-tab">
                         <div class="col col-md-12" style="display: flex;justify-content: center; margin-bottom:20px;">
                                <ul class="nav">
                                     <li class="active">
                                    <a   href="#snapshot" data-toggle="tab">Snapshot</a>
                                    </li>
                                    <li>
                                        <a href="#description" data-toggle="tab">Description</a>  

                                    </li>
                                    <li>
                                        <a href="#features" data-toggle="tab">Features</a>
                                    </li>

                                    <li>
                                        <a href="#performance"  data-toggle="tab">Performance</a>
                                    </li>

                                    <li>
                                        <a href="#returnCalculator"  data-toggle="tab">Return Calculator</a>
                                        
                                    </li>
                                    <li>
                                        <a href="#awards"  data-toggle="tab">Awards</a>
                                    </li>
                                    <li>
                                        <a href="#directors"  data-toggle="tab">Directors</a>
                                    </li>


                                </ul>
                          </div>
                               <?php
	                          	while ( have_posts() ) :
                                the_post(); 
                               ?>        
                               
                                <div class="tab-content">

                                <!-- SNAPSHOT -->
                                <div class="tab-pane fade in active" id="snapshot">

                                 <?php the_content(); 
                                 
                                  ?>

                                    <div class="row">
                                        
                                        <div class="col col-md-12 chart"> 


                  

                                         <div id="navps" style="height: 400px; min-width: 310px"></div>

                                        <script type="text/javascript">


                                        $.get('<?php echo $navps_get_URL?>', function(csv) {
                                                        Highcharts.stockChart('navps', {
                                                            chart: {
                                                                type: 'line'
                                                            },
                                                            tooltip: {
                                                                valueDecimals: 4,
                                                                valuePrefix: '',
                                                                valueSuffix: ' '
                                                            },

                                                    
                                                            data: {
                                                                csv: csv
                                                            },
                                                            title: {
                                                                    text: 'NAVPS Graph since Fund launch'
                                                            },
                                                            yAxis: {
                                                                title: {
                                                                    text: 'NAVPS'
                                                                }
                                                            },
                                                
                                                        });
                                                    });

                                        </script>
                                         
                                           
                                        </div>   <!-- end col-md-12 -->
                                    </div>   <!-- end row -->
                                

                      <?php
                         if ($fund  == 'Philequity Fund, Inc') {
                             get_template_part( 'template-parts/content','cagr-pefi');
                       
                         }
                         if ($fund  == 'Philequity PSE Index Fund, Inc') {
                            get_template_part('template-parts/content','cagr-ppse');
                        }
                        if ($fund  == 'Philequity Dollar Income Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pdif');
                        }
                        if ($fund  == 'Philequity Peso Bond Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pmmf');
                        }
                        if ($fund  == 'Philequity Dividend Yield Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pdyf');
                        }      
                      ?>

    </div>    <!-- end tab pane -->


                                <div class="tab-pane fade" id="description">
                                  <?php the_field('mutual_description'); ?>    
					<div class="col col-md-12" style="margin-bottom:50px">
                                        	<div class="section-title-s3">
                                     		<!--<a href="<?php echo site_url('/return-calculator') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Calculate returns</a>-->
						<a href="<?php echo site_url('/transact') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Open an Account</a>
						<a href="<?php echo site_url('/download') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Download Prospectus</a>
						<a href="<?php echo site_url('/download') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Latest Fund Fact Sheet</a>
						<!--<a href="<?php echo site_url('https://www.facebook.com/') ?>" target="_blank" class="theme-btn"><span class="glyphicon icon-share"></span>Share on social Media</a>-->
                                    
                          		  </div>

                                        </div>

				 							                               
                                </div>

                               <div class="tab-pane fade" id="features">
                               <?php the_field('mutual_features'); ?>
					<div class="col col-md-12" style="margin-bottom:50px">
                                        	<div class="section-title-s3">
                                     		<!--<a href="<?php echo site_url('/return-calculator') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Calculate returns</a>-->
						<a href="<?php echo site_url('/transact') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Open an Account</a>
						<a href="<?php echo site_url('/download') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Fund Prospectus</a>
						<a href="<?php echo site_url('/download') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Latest Fund Fact Sheet</a>
						<!--<a href="<?php echo site_url('https://www.facebook.com/') ?>" target="_blank" class="theme-btn"><span class="glyphicon icon-share"></span>Share on social Media</a>-->	
                          		 	 </div>

                                        </div>

                                </div>


                               <div class="tab-pane fade" id="returnCalculator">

                                <div class="col col-md-12">
				<div class="case-single-tab">
					
		<section class="services-pg-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <h2 style="text-align: center; font-weight: bolder;">Fund Returns</h2>
                    </div>
                </div>
              

              

            
                <div class="row">
                    <div class="col col-xs-12">


                        <div style=" text-align: center;" class="services-grid-s2">  


                        <div class="grid-transact" style="
                            height: 400px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/return-calculator')?>">
                                <div class="icon">
                                    <i class="fi icon-calculator-report-two"></i>
                                </div>
                                <div class="details">
                                <h3>Historical Returns</h3>
                                </div>
                              </a>
                                
                        </div>


                          <div class="grid-transact" style="
                            height: 400px !important;
                            overflow: hidden !important;">
                            <a href="<?php echo site_url('/return-calculator-potential')?>">
                                <div class="icon">
                                    <i class="fi icon-calculator-report"></i>
                                </div>
                                <div class="details">
                                <h3>CAGR Calculator</h3>
                                
                            </div>
                            </a>
                            
                        </div>

                                                    
                        </div>
                    </div>




                     </div> <!-- end row -->
                </div> <!-- end container -->
        </section>

				<div class="text-center">
                                  <div class="col col-md-12" style="margin-bottom:50px">
                                        <div class="section-title-s3">
                                     		<!--<a href="<?php echo site_url('/return-calculator') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-user"></span>Calculate returns</a>-->
						<a href="<?php echo site_url('/contact-us') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Contact Us</a>
						<a href="<?php echo site_url('/the-benefits-of-mutual-funds') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Learn More</a>
						<a href="<?php echo site_url('/all-calculator') ?>" target="_blank" class="theme-btn"><span class="glyphicon glyphicon-save"></span>Other Calculators</a>
						<!--<a href="<?php echo site_url('https://www.facebook.com/') ?>" target="_blank" class="theme-btn"><span class="glyphicon icon-share"></span>Share on social Media</a>-->
                                    
                          		  </div>
                                  </div>


                                    </div>
                                </div>



                             
                               </div>

                           </div>

                         <div class="tab-pane fade" id="awards">

                          <div class="row">
                            
                            <div class="col col-xs-12 text-center">
                                <div class="section-title-s3" style="padding:60px;">
                                    <a href="<?php echo site_url('/awards') ?>">
                                        <h2><?php the_title();?> Awards </h2>
                                    </a>
                                </div>
                            </div>
				
                           <div class="col col-md-12 text-center" style="margin-bottom:30px">
                                 <div class="about-chart ">
                                   <a href="<?php echo site_url('/awards') ?>">
                                         <img class="img-fluid d-block mx-auto" src="http://philequity-dev.dvrse.net/wp-content/themes/philequity/assets/images/about-s2/Awards-banner-1.jpg" alt="">
                                  </a>
                                </div>
	

                            </div>
				
			  <!-- start team-pg-section -->
        <section class="team-pg-section section-padding">
            <div class="container">
             

                <div class="row">
                <div class="col col-md-12">
                        <div class="section-title-s3">
                            <h2>Philequity Awards</h2>
                           
                        </div>
                    </div>
              
                    
                    <?php while ( have_posts() ) :
                        the_post();
                        ?>  
                    <?php the_content()?>

                        <?php
                         endwhile;
                       ?>

    

                       
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end team-pg-section -->
				

                          </div> <!-- end row -->

                        </div> <!-- end awards tab -->

                              <div class="tab-pane fade" id="directors">

                               <div class="row">
                            
                            <div class="col col-xs-12 text-center">
                                <div class="section-title-s3">
                                    <a href="<?php echo site_url('/directors') ?>">
                                        <h2><!--<?php the_title();?>-->Our <span>Board of Directors</span> </h2>
                                    </a>
                                </div>
                            </div>
                  
			  

                            <!--<div class="col col-md-12" style="padding:0px 150px; margin-bottom:30px">
                                 <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li> Proin non erat vel magna tempus dictum.</li>
                                    <li>Ut posuere quam sed neque facilisis lobortis.</li>
                                    <li>Pellentesque ac vestibulum nulla.</li>
                                    <li> Pellentesque sit amet sapien non nibh congue interdum id posuere tortor.</li>
                                    <li>Interdum et malesuada fames ac ante ipsum primis in faucibus.</li>
                                    <li>Suspendisse sed ornare nunc. Quisque tristique tellus vel velit dictum.</li>
                                    <li>sit amet porttitor urna cursus.</li>
                                 </ol>
			    </div>-->

                        </div>   <!-- end row -->

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
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/Joseph-Ong-3.jpg" alt="" class="img-circle">
                    	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Joseph L. Ong</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Treasurer
                    	</h4>

                    <p>Mr. Ong is the treasurer of the Company. In 2003, he became a director of Philequity. Previously, he was connected with
				Exxon Chemicals serving various functions in sales, marketing, audit, and logistics operation both here and abroad. 
				Currently, he is engaged in the import and distribution of industrial chemicals. Mr. Ong holds a degree in Chemical Engineering, 
				magna cum laude, from De La Salle University.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/Antonio-samson.jpg" alt="" class="img-circle">                    	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Antonio R. Samson</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Independent Director
                    	</h4>

                    <p><strong>Mr. Samson</strong> is the <strong>Independent Director of the Company</strong>. He is also the Independent Director of Vantage Equities, Inc. and
			 Yehey! Corporation and the Director of eBusiness Services, Inc. Concurrently, he is the President of the Manila Chamber 
			Orchestra Foundation and the Metropolitan Museum and the Chairman of the Advertising Foundation. He is also a columnist of
			 Business World and Business Day Magazine. He holds a Bachelors degree in Economics from the Ateneo de Manila University 
			and Masters of Business Administration from Asian Institute of Management.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/gregorio-yu-3.jpg" alt="" class="img-circle">                    	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Gregorio T. Yu</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Independent Director
                    	</h4>

                    <p style="font-size:13px";><strong>Mr. Yu</strong>  is the <strong>Independent Director of the Company</strong>. He is also the Independent Director of Vantage Equities,
			 Inc. and Yehey! Corporation. At the same time, he is the Director of the following companies: eBusiness Services, Inc., Philippine Airlines
			 Inc., and Yehey! Corporation. Concurrently, he is also the chairman of the following companies: CATS Motors Inc., CATS Asian Cars Inc. and
			 CATS Automobile Corp. Also, he is also the Trustee of the Government Service Insurance System as well as a Trustee of Xavier School, Inc. and
			 Xavier School Educational and Trust Fund, Inc. He graduated from De la Salle University with a Bachelor of Arts in Economics, summa cum laude.
			 Mr. Yu holds a graduate degree in Business Administration from Wharton School, University of Pennsylvania where he was in the Director’s Honor
			 List.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>        

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/willy-ocier-2.jpg" alt="" class="img-circle">                   	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Willy N. Ocier</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Director
                    	</h4>

                    <p>Mr. Ocier is a Director of the Company. He is also a Director of the following companies: Ebusiness Services, Inc., 
			Yehey! Corporation and Vantage Equities, Inc. At the same time, he is also the Chairman and President of Pacific Online Systems 
			Corporation and serves as Vice Chairman of Belle Corporation and Co-Vice Chairman of Highlands Prime, Inc. Concurrently, 
			he is the Chairman of the Boards of the following corporations: APC Group, Inc., Sinophil Corporation, Premium Leisure and Amusement, 
			Inc, Tagaytay Midlands Golf Club, Inc. and Aragorn Power and Energy Corporation. He earned his Economics degree from the Ateneo de Manila 
			University.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>    

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/39303898_2074168345991994_628613243098628096_n-2.jpg" alt="" class="img-circle">                
  			</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Bert Hontiveros</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Director
                    	</h4>

                    <p>Mr. Hontiveros is a Director of the Company. He is also a Director of the following companies: Ebusiness Services, Inc., 
			Yehey! Corporation and Vantage Equities, Inc. At the same time, he is also the Chairman and President of Pacific Online Systems
			Corporation and serves as Vice Chairman of Belle Corporation and Co-Vice Chairman of Highlands Prime, Inc. Concurrently, he is the
			 Chairman of the Boards of the following corporations: APC Group, Inc., Sinophil Corporation, Premium Leisure and Amusement, Inc, 
			Tagaytay Midlands Golf Club, Inc. and Aragorn Power and Energy Corporation.</p>
                	</div>
		</div><!--End of Col col-md-12 -->
</div><!-- End of Row-->
<hr>    

<div class="row">
            <div class="col col-md-12">
		  <div class="details" style="padding-top: 5px;">
		   	<div class="client-pic" style="text-align: center !important; ">
                        	<img src="https://uat.philequity.net/wp-content/uploads/2018/06/Valentino-Sy-3.jpg" alt="" class="img-circle">        
          	</div>

		     	<div class="about-text" style="display:flex;">
                       		 <h3 style="margin:0.6em 0 0.2em !important">
                            		<b>Valentino C. Sy</b>
                        	</h3>
                    	</div>

		    	<h4>
                       		Director
                    	</h4>

                    <p>Mr. Sy is a Director of the Company. He is also the Chairman and Chief Executive Officer of Vantage Equities, Inc. and Chairman of
			eBusiness Services, Inc. and Yehey! Corporation. Concurrently, he is the Director of Wealth Securities and the President of Equinox
		 	International Corp and Wealth Securities. He holds a degree in Industrial Management Engineering from the De La Salle University.</p>
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

      
    		</div> <!-- end container -->
	</section>
</div> <!-- end directors list -->


                             



                                <div class="tab-pane fade" id="performance">
                                	<div class="row">
                                        	<div class="col col-md-12 chart">
                                         <div id="navps-per" style="height: 400px; min-width: 310px"></div>

                                        <script type="text/javascript">


                                            $.get('<?php echo $navps_get_URL?>', function(csv) {
                                                        Highcharts.stockChart('navps-per', {
                                                            chart: {
                                                                type: 'line'
                                                            },
                                                    
                                                            data: {
                                                                csv: csv
                                                            },
                                                            title: {
                                                                    text: 'Fund Performance'
                                                            },
                                                            yAxis: {
                                                                title: {
                                                                    text: 'NAVPS'
                                                                }
                                                            },
                                                
                                                        });
                                                    });

                                        </script>
                                         
                                           
                                        </div>   <!-- end col-md-12 -->
                                    </div>   <!-- end row -->

                                    

                         <?php
                         if ($fund  == 'Philequity Fund, Inc') {
                             get_template_part( 'template-parts/content','cagr-pefi-funds');
                            
                         }
                         if ($fund  == 'Philequity PSE Index Fund, Inc') {
                            get_template_part('template-parts/content','cagr-ppse-funds');

                        }
                        if ($fund  == 'Philequity Dollar Income Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pdif-funds');
                        }
                        if ($fund  == 'Philequity Peso Bond Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pmmf-funds');
                        }
                        if ($fund  == 'Philequity Dividend Yield Fund, Inc') {
                            get_template_part('template-parts/content','cagr-pdyf-funds');
                        }      
                      ?>




                                </div>
                                                    
                                      
                            </div>
                         </div>
                        
                    </div>

<?php
		endwhile; // End of the loop.
?>	
                
                    
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>









	
<?php




get_footer(); ?>


