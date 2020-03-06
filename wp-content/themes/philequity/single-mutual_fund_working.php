

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
                    $psei_data.=round($compute,4).',';
                    
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
        <div class="row">
            <div class="col col-xs-12">
                <h2><?php the_title();?></h2>
                <!-- <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('/mutual-funds') ?>">Mutual Funds</a></li>
                    <li><?php the_title();?></li>
                </ol> -->
            </div>
        </div> <!-- end row -->
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
                                                                valueDecimals: 2,
                                                                valuePrefix: '',
                                                                valueSuffix: ' '
                                                            },

                                                    
                                                            data: {
                                                                csv: csv
                                                            },
                                                            title: {
                                                                    text: 'NAVPs Graph since Fund Launch'
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
                                </div>

                                <div class="tab-pane fade" id="features">
                               <?php the_field('mutual_features'); ?>
                                </div>


                               <div class="tab-pane fade" id="returnCalculator">

                                <div class="col col-md-12">

                                    <div class="text-center">
                                        <div class="btns" style="margin:20px 0px !important">

                                        <a href="<?php echo site_url('/return-calculator') ?>" class="theme-btn">Fund Return</a>

                                          <a href="<?php echo site_url('/return-calculator-potential') ?>" class="theme-btn">Investment Calculator</a>

                                        </div> <!-- btns -->
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

                          </div> <!-- end row -->

                        </div> <!-- end awards tab -->

                              <div class="tab-pane fade" id="directors">

                               <div class="row">
                            
                            <div class="col col-xs-12 text-center">
                                <div class="section-title-s3">
                                    <a href="<?php echo site_url('/awards') ?>">
                                        <h2><?php the_title();?> Directors </h2>
                                    </a>
                                </div>
                            </div>

                           <div class="col col-md-12" style="padding:0px 150px; margin-bottom:30px">
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
                            </div>

                          </div> <!-- end row -->


                             
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
                                                                    text: 'NAVPs Graph since Fund Launch'
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


