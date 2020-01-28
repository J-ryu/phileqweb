<?php
/**
 * The template for Inflation Calculator Page
 *
 *
 */

get_header();
?>

 <!-- start page-title -->
 <section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/financial-goal-calculator.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
              <!--  <div class="row">  -->
                    <div class="col col-xs-12">
                        <h2>Financial Goal Calculator</h2>
                        <!-- <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>
                            <li>Inflation Calculator</li>
                        </ol> -->
                 <!-- </div> -->
                </div> <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->






<section class="services-pg-section">
  <div class="container">
            <div class="col col-md-12" style="margin-top:40px;">
                    <p>
                    Travelling around the world? Going on that dream vacation? Starting a business? Fulfill your passions with financial security. This calculator computes how much you need to save or invest to achieve your financial goal. 
                        <br>
                        <br>
                       
                        
                    </p>
            </div>

          

                <div class="row">
                    <div class="col col-md-12">

                        <?php while ( have_posts() ) :
                        the_post();
                        ?>  
                        <?php the_content()?>

                        <?php
                        endwhile;
                        ?>

                    </div> <!-- col-md-12 -->



           <div class="col col-md-12 text-center"> 
                                          
                                           
                                          <canvas id="myCharts" width="1440" height="800" style="margin-top:90px; display: block; height: 400px !important; width: 70%;"></canvas>

                                           <script>
                                               var ctx = document.getElementById("myCharts").getContext('2d');

                                               var myCharts = new Chart(ctx, {
                                               type: 'bar',
                                               data: {
                                               labels: [ 'Bank Savings', 'Bank Time', 'Government', 'Equities' ],

                                               datasets: [{
                                               label: '',
                                               data: [1.4, 3.40, 7.80 , 13.31 ],
                                                   backgroundColor: [
                                                   'rgba(255, 99, 132, 0.2)',
                                                   'rgba(54, 162, 235, 0.2)',
                                                   'rgba(255, 206, 86, 0.2)',
                                                   'rgba(75, 192, 192, 0.2)',
                                                   'rgba(153, 102, 255, 0.2)',
                                                   'rgba(255, 159, 64, 0.2)'
                                                   ],
                                                   borderColor: [
                                                   'rgba(255,99,132,1)',
                                                   'rgba(54, 162, 235, 1)',
                                                   'rgba(255, 206, 86, 1)',
                                                   'rgba(75, 192, 192, 1)',
                                                   'rgba(153, 102, 255, 1)',
                                                   'rgba(255, 159, 64, 1)'
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
                                   </div> 


                                <div class="col col-md-12">

                                    <div class="text-center">
                                        <div class="btns" style="margin:20px 0px !important">
                                        <a href="<?php echo site_url('/all-calculator') ?>" class="theme-btn"><span class="glyphicon glyphicon-user"></span>OTHER CALCULATORS</a>
                                       <a href="<?php echo site_url('/contact-us') ?>"  class="theme-btn"><span class="glyphicon glyphicon-save"></span>TALK TO US</a>
                                        <a href="<?php echo site_url('/learn') ?>" class="theme-btn">LEARN MORE</a>

                                        </div> 
                                    </div>
                                </div>



                </div> 


         


            </div>  
            
            
        </section>






<?php get_footer() ?>
