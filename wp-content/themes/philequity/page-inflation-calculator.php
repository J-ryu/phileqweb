<?php
/**
 * The template for Inflation Calculator Page
 *
 *
 */

get_header();
?>

 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/inflation-calculator.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
               <!-- <div class="row"> -->
                    <div class="col col-xs-12">
                        <h2>Inflation Calculator</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Inflation Calculator</li>
                        </ol> -->
                  <!--  </div> -->
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->






<section class="section-padding about-section-s3">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-10">
                        <div class="section-title-s2">
                            <h2>What is inflation and how does it affect you?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <div class="about-details">
                        <p>
                            Ever wonder why prices keep rising from one year to the next? Ever heard 
                            your grandmother say, "When I was your age, a sack of rice only cost 10 pesos"  
                            or "10 years ago, a loaf of bread only a fraction of what it costs today."?
                            your grandmother say, "When I was your age, a sack of rice only cost 10 pesos."?            
                        </p>
				<br>
                          </div>
                              <p>Inflation is the rate at which the general cost of goods and services rise over a period of time.
                              In other words, inflation may be the culprit behind those rising prices, causing your 
                              purchasing power to decrease. Let's play with some numbers.
                            <p>
                      
                    </div>

                    <div class="col col-md-5">
                        <div class="about-chart">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/about-chart-2.png" alt="" align="right">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col col-md-6">

                        <?php while ( have_posts() ) :
                        the_post();
                        ?>  
                        <?php the_content()?>

                        <?php
                        endwhile;
                        ?>

                    </div> <!-- col-md-12 -->



           <div class="col col-md-6 ">                                           
                                          
                          <canvas id="myCharts" width="1440" height="800" style="margin-top:90px; display: block; height: 400px !important; width: 720px;"></canvas>

                                           <script>
                                               var ctx = document.getElementById("myCharts").getContext('2d');

                                               var myCharts = new Chart(ctx, {
                                               type: 'bar',
                                               data: {
                                               labels: ['2000',
							'2001','2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009',
 							'2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018' ],

                                               datasets: [{
                                               label: '% Inflation Rate',
                                               data: [6.6,5.4,2.7, 2.3, 4.8 , 6.6, 5.5, 3.0,8.2,4.3,3.8,4.7,3.1,2.6,3.6,0.7,1.3,2.9,5.2],
                                                   backgroundColor: [
                                                   'rgba(255, 99, 132, 0.2)',
                                                   'rgba(54, 162, 235, 0.2)',
                                                   'rgba(255, 206, 86, 0.2)',
                                                   'rgba(75, 192, 192, 0.2)',
                                                   'rgba(153, 102, 255, 0.2)',
                                                   'rgba(255, 159, 64, 0.2)',
						   'rgba(255, 99, 132, 0.2)',
                                                   'rgba(54, 162, 235, 0.2)',
                                                   'rgba(255, 206, 86, 0.2)',
                                                   'rgba(75, 192, 192, 0.2)',
                                                   'rgba(153, 102, 255, 0.2)',
                                                   'rgba(255, 159, 64, 0.2)',
						   'rgba(255, 99, 132, 0.2)',
                                                   'rgba(54, 162, 235, 0.2)',
                                                   'rgba(255, 206, 86, 0.2)',
                                                   'rgba(75, 192, 192, 0.2)',
                                                   'rgba(153, 102, 255, 0.2)',
                                                   'rgba(255, 159, 64, 0.2)',
						    'rgba(255, 99, 132, 0.2)'

                                                   ],
                                                   borderColor: [
                                                   'rgba(255,99,132,1)',
                                                   'rgba(54, 162, 235, 1)',
                                                   'rgba(255, 206, 86, 1)',
                                                   'rgba(75, 192, 192, 1)',
                                                   'rgba(153, 102, 255, 1)',
                                                   'rgba(255, 159, 64, 1)',
						   'rgba(255,99,132,1)',
						   'rgba(54, 162, 235, 1)',
						   'rgba(255, 206, 86, 1)',
						   'rgba(75, 192, 192, 1)',
						   'rgba(153, 102, 255, 1)',
						   'rgba(255, 159, 64, 1)',
						   'rgba(255,99,132,1)',
                                                   'rgba(54, 162, 235, 1)',
                                                   'rgba(255, 206, 86, 1)',
                                                   'rgba(75, 192, 192, 1)',
                                                   'rgba(153, 102, 255, 1)',
                                                   'rgba(255, 159, 64, 1)',
						   'rgba(255,99,132,1)'


                                                   ],
                                               borderWidth: 1
                                               }]
                                               },
                                               options: {
                                                   scales: {
                                                       yAxes: [{
                                                   ticks: {
                                                       beginAtZero:true
                                                       }
                                               }]
                                               }
                                               }
                                               });


                                       </script>    
                                   </div>   <!-- end col-md-12 -->
                </div>  <!-- row -->
                              
            <div class="col col-md-12">

                <div class="text-center">
                    <div class="btns" style="margin:20px 0px !important">
                    <a href="<?php echo site_url('/all-calculator') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>OTHER CALCULATORS</a>
                    <a href="<?php echo site_url('/contact-us') ?>"  class="theme-btn"><span class="glyphicon glyphicon-save"></span>TALK TO US</a>
                    <a href="<?php echo site_url('/learn') ?>" class="theme-btn">LEARN MORE</a>

                    </div> 
                </div>
            </div>                              




            </div> <!-- end container -->
        </section>






<?php get_footer() ?>
