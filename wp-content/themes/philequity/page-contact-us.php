<?php
/**
 * The template for Home Page
 *

 */


get_header();
?>


<!-- start contact-section -->
<section class="contact-section section-padding">
           			<div class="container">
                	<div class="row">
                   <!--new map -->
                  	<div class="col col-md-6">
          			<!-- Embedded Google Map -->
          			<iframe width="100%" height="440px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.284742950773!2d121.05960931602262!3d14.582843989813748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c81404294769%3A0xca1744dab13f8449!2sPhilequity+Management%2C+Inc.!5e0!3m2!1sen!2sph!4v1527398490122"></iframe>
        			<div class="section-title-s4">
        			   <div class=" row contact-info">
                        	<div class="col-md-12 col-sm-12">
                        	  <p class="addre"><em class="fa fa-map-marker"></em>Suite 2005-A, East Tower, Philippine Stock Exchange Centre, Exchange Road, Ortigas Center, Pasig City, Philippines</p>
                        	</div>
                            <div class="col-md-12 col-sm-12">
                        		<p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+6326898080">+632-689-8080 </a></p>
                           		<p class="mobile-device"><i class="fa fa-mobile"></i> <a href="tel:+639493252712">+63949-325-2712 / +63917-865-7197 </a></p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <p class="mail-id"><em class="fa fa-envelope"></em> ask@philequity.net</p>
                            </div>
                      </div>
        			</div>
        			</div>

                   
                   
                    	<div class="col col-md-6">
                        <div class="section-title-s4">
                          <h2>Let’s Get In Touch</h2>
                          <p>Your opinion is important to us! Please fill out the form below for your comments, suggestions, feedback and inquiries to let us know how we may serve you better </p>
                        </div>
                        <div class="contact-form">
                            <form method="post" id="contact-form" class="form row contact-validation-active">
                                <div class="col col-sm-6">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="address">Home/Business Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone/Mobile number</label>
                                  <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email" >Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6 col-lg-12">
                                  <label for="subject">Subject</label>
                                  <select name="subject" id="subject" class="form-control">
                                    <option selected disabled>Select inquiry</option>
                                    <option>Mutual Funds</option>
                                    <option>Account(Existing Client)</option>
                                    <option>Procedures</option>
                                    <option>Investment/Subscription</option>
                                    <option>Redemption</option>
                                    <option>Feedback</option>
                                    <option>Other Inquiries</option>
                                  </select>
                                </div>
                                  <div class="col col-sm-6 col-lg-12">
                                  <label for="message">Message</label>
                                  <input type="text" class="form-control" id="message" name="message" placeholder="Write..">
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                  <button type="submit">Submit</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->


        <?php

get_footer();