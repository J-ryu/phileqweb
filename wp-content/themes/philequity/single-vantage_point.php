
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package philequity
 */

get_header();
?>
<section class="page-title" style="background: url(<?php echo get_theme_file_uri('/assets/images/pg-title/vantagepoint.jpg'); ?>) center center/cover no-repeat local;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                    <h2><span style="color: #fff">Vantage Poi</span></h2>
                    <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Vantage Deta</li>
                        </ol>
                    <!-- <h3 style="color: darkcyan">Issue Date: June 16, 2015</h3> -->
                    </div>
               </div> 
               <!-- end row -->
            </div> <!-- end container -->
 </section>        
        <!-- end page-title -->

        <!-- start blog-with-sidebar-section -->
        <section class="blog-with-sidebar-section blog-single-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="news-grids col col-lg-8 col-lg-offset-1 col-lg-push-3 col-md-8 col-md-push-4">
                        <div class="post">
                            <div class="post-title-meta">
                                <h2>MARKET OUTLOOK: CAUTIOUS <br>STRATEGY: FINANCIAL SECTOR</h2>
                                <ul class="meta-info">
                                    <li><a href="#">By: Author Name</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> 06 March, 2018</a></li>
                                    
                                </ul>
                            </div>

                            <div class="tag-share" style="border-bottom: none !important;"> 
                                <div>
                                    <ul class="share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->


                            <div class="post-body">
                                <p>Markets continue to gyrate as the likelihood of a Greek default increased. Last minute meetings this week will be held to stave this off and hopefully calm both equity and bond markets.</p>
                             
                                <p>Volatility continues to wreak havoc across all asset classes. Foreign equity markets gyrated, with the Dow Jones index going up then down by 3 digits. The bond selloff continued as well. Markets are now driven by a number of macroeconomic factors, with some experiencing localized risk, such as MERS in Korea and election results in Turkey. For one, Greece has gotten closer to default as the IMF walked away from the negotiation table. Second, interest rate normalization is also in progress both on expectations of higher rates and inflation starting to move higher.</p>

                                <p style="padding-top: 20px;">However, the World Bank raised a cautionary flag when it released a report downgrading growth forecasts for emerging markets, saying that most of them will suffer from rising interest rates and low commodity prices. As a result, emerging market equity funds suffered $9.8 billion in outflows last week, the biggest since 2008, for a total of $26 billion in outflows YTD.</p>
                            
                            <p>With the Philippines being part of the emerging market index, this points to weakness in stock prices, especially with the peso decisively breaking the PhP 45/$ level. Risks abound on many fronts, so we will keep a cautious stance.</p>

                                <!-- <div class="gallery-post">
                                    <h3>Lorem Ipsum is not simply random text. </h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                    <div class="gallery">
                                        <div class="img-holder">
                                            <img src="assets/images/blog-single/img-1.jpg" alt>
                                        </div>
                                        <div class="img-holder">
                                            <img src="assets/images/blog-single/img-2.jpg" alt>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="text-post">
                                    <h3>It has roots in a piece of classical Latin</h3>
                                    <p>a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33.</p>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interes ted. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reprodu ced in their exact original form</p>
                                </div> -->
                            </div>
                        </div> <!-- end post -->

                       
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-lg-pull-9 col-md-4 col-md-pull-8 col-sm-5">
                     
                        <div class="widget recent-post-widget">
                            <h3>Recent post</h3>
                            <ul>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Integer suscipit sit amet</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="assets/images/blog/thumb-2/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-sidebar-section -->        


<!-- <section style="padding: 10px 0 !important;" class="service-single-section section-padding">
        <div class="row">
          <div class="col col-md-9 col-md-push-1">
            <div style="font-size:12px;" class="disclaimer">
          
            Disclaimer: The information contained herein is the property of Philequity Management Inc. and may not be copied or distributed without the prior consent of Philequity Management, Inc. The information and views expressed herein is not warranted to be accurate, complete or timely and may change without prior notice. Neither Philequity nor its content provider is responsible for any damages and losses arising from any use of this information. Past performance is not a guarantee of future results. Investments in mutual funds are not guaranteed by the Philippine Deposit Insurance Corporation. Investing in mutual funds involves risk and possible losses of principal. Consult a professional before investing. For inquiries, please contact Philequity Management, Inc.</div>
          </div> <!-- end service-single-content -->
        </div> <!-- end col -->
  </section> -->
        

<?php
get_footer();