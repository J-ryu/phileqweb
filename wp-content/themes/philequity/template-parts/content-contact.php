<?php
/**
 * The template for CONTACT
 *

 */
?>

        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="contact-location-map" >
                            
                        <iframe 
                        width="100%" 
                        height="380px"
                        frameborder="0" 
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.284742950773!2d121.05960931602262!3d14.582843989813748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c81404294769%3A0xca1744dab13f8449!2sPhilequity+Management%2C+Inc.!5e0!3m2!1sen!2sph!4v1527398490122">
                    
                        </iframe>

                        </div>
                    </div>

                    <div class="col col-md-6">
                        <div class="section-title-s4">
                            <h2>Request a call back</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="contact-form">
                            <form method="post" id="contact-form" class="form row contact-validation-active">
                                <div class="col col-sm-6">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone No</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="business">                </label>
                                    <select name="business" id="business" class="form-control">
                                        <option selected disabled>Select one</option>
                                        <option>Personal Business</option>
                                        <option>Inquiry</option>
                                        <option>Report an issue</option>
                                    </select>
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