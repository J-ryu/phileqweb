<?php
/**
 * The template for TRANSACT PAGE
 *
 *
 */

get_header();

?>

<!-- start page-title -->
<section
    class="page-title"
    style="background: url(<?php echo get_theme_file_uri('/assets/images/banners/account-opening.png'); ?>) center center/cover no-repeat local;">
    <div class="container">
     <!--   <div class="row">-->
            <div class="col col-xs-12">
                <h2>Account Opening</h2>
                <!-- <ol class="breadcrumb"> <li><a href="<?php echo site_url()
                ?>">Home</a></li> <li>Transact</li> </ol> -->
            </div>
    <!-- </div>-->
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end page-title -->

<section class="case-study-single-content">
    <div class="container">
        <div class="row">

            <div class="col col-md-12">
                <div class="case-details">

                    <div class="case-single-tab">
                        <div
                            class="col col-md-12"
                            style="display: flex;justify-content: center; margin-bottom:20px;">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#individual" data-toggle="tab" aria-expanded="true">INDIVIDUAL</a>
                                </li>
                                <li class="">
                                    <a href="#joint" data-toggle="tab" aria-expanded="false">JOINT</a>

                                </li>
                                <li class="">
                                    <a href="#intrust" data-toggle="tab" aria-expanded="false">IN TRUST FOR
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#institutional" data-toggle="tab" aria-expanded="false">INSTITUTIONAL
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End col col-md-12 -->

                        <div class="tab-content">
                            <div style="font-size:15px;" class="tab-pane fade active in" id="individual">
                                <!-- Individual -->

                                <ol style="margin:50px;line-height: 1.5;">

                                    <li style="padding:0px 10px">Fill out an
                                        <a  href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>" target="_blank">
                                            Account Opening Kit</a>
                                        or
                                        <a href="#" target="_blank">create an online account</a>
                                    </li>
                                    <p><br>
                                        The following procedures are for those who prefer to open an account manually.
                                        <br>
                                    </p>
                                    <li style="padding:0px 10px">Provide one (1) photocopied ID with 3x signature on the side. Acceptable IDs:
                                        <div class="row">

                                            <div class="col-md-6">
                                                <ul style="list-style: disc;margin: 0px 20px;">
                                                    <li>
                                                        Driver’s License</li>
                                                    <li>
                                                        Passport
                                                    </li>
                                                    <li>
                                                        SSS ID
                                                    </li>
                                                    <li>
                                                        GSIS E-Card</li>
                                                    <li>
                                                        TIN ID
                                                    </li>
                                                    <li>
                                                        Phil Health Card
                                                    </li>
                                                    <li>
                                                        Professional Regulation Card (PRC)
                                                    </li>
                                                    <li>
                                                        Postal ID
                                                    </li>
                                                    <li>
                                                        Photo-bearing Barangay ID/Certification
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="col-md-6">
                                                <ul style="list-style: disc;margin: 0px 20px;">
                                                    <li>
                                                        Government Office IDs issued by govt. instrumentalities (ie. AFP, HDMF, DepEd)
                                                    </li>
                                                    <li>
                                                        Firearms license
                                                    </li>
                                                    <li>
                                                        OWWA ID
                                                    </li>
                                                    <li>
                                                        Seaman’s Book
                                                    </li>
                                                    <li>
                                                        Voter’s ID
                                                    </li>
                                                    <li>
                                                        Police Clearance
                                                    </li>
                                                    <li>
                                                        Senior Citizen
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <div></div>
                                    <li style="padding:0px 10px">Make a payment to the fund of your choice
                                        <div style="margin:15px 0px;" class="service-single-section">
                                            <!-- start faq -->
                                            <div class="faq">
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <a
                                                                data-toggle="collapse"
                                                                data-parent="#accordion"
                                                                href="#collapse-1"
                                                                aria-expanded="false"
                                                                class="collapsed">Direct Deposit</a>
                                                        </div>
                                                        <div
                                                            id="collapse-1"
                                                            class="panel-collapse collapse"
                                                            aria-expanded="false"
                                                            style="height: 0px;">
                                                            <div class="panel-body">

                                                                <div class="hrf-faq-list">

                                                                    <article>
                                                                        <h4 >
                                                                            BANCO DE ORO (BDO)
                                                                        </h4>
                                                                        <div>
                                                                            <p>
                                                                                <img
                                                                                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/bdo-depo.png"
                                                                                    alt="BDO over the Counter Deposit Slip"
                                                                                    width="60%"
                                                                                    height="60%">
                                                                            </p>
                                                                            Go to any BDO branch and fill-out the
                                                                            <b>
                                                                                <span style="color: #00f;">blue</span></b>
                                                                            deposit slip.</p>
                                                                        <ol>

                                                                            <li>Write the account number of the fund.</li>
                                                                            <li>Write the fund name</li>
                                                                            <li>Write your PEMI account number followed by your First Name Initial and last
                                                                                name (ie. Acct. No 12345ADelaCruz).</li>

                                                                        </ol>
                                                                    </div>
                                                                </article>

                                                                <br>

                                                                <hr>
                                                                <br>

                                                                <article>
                                                                    <h4 >
                                                                        Union Bank of the Philippines
                                                                    </h4>
                                                                    <div>
                                                                        <p>
                                                                            <img
                                                                                src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/union-depo.png"
                                                                                alt="UnionBank over the Counter Deposit Slip"
                                                                                width="60%"
                                                                                height="60%">
                                                                        </p>
                                                                        Go to any Union Bank of the Philippines branch and fill-out the
                                                                        <b>
                                                                            <span style="color: #00f;">blue</span></b>
                                                                        deposit slip.</p>
                                                                    <ol>
                                                                        <li>Write the account number of the fund.</li>
                                                                        <li>Write the fund name</li>

                                                                    </ol>
                                                                </div>
                                                            </article>

                                                            <br>
                                                            <hr>
                                                            <br>
                                                            <article>
                                                                <h4 >
                                                                    RCBC Bank
                                                                </h4>
                                                                <div>
                                                                    <p>
                                                                        <img
                                                                            src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/rcbc-depo.jpg"
                                                                            alt="RCBC over the Counter Deposit Slip"
                                                                            width="40%"
                                                                            height="40%">
                                                                    </p>
                                                                    Go to any RCBC Bank branch and fill-out the
                                                                    <b>
                                                                        <span style="color: #00f;">blue</span></b>
                                                                    deposit slip.</p>
                                                                <ol>
                                                                    <li>Write the account number of the fund.</li>
                                                                    <li>Write the fund name</li>

                                                                </ol>
                                                            </div>
                                                        </article>

                                                        <br>
                                                        <hr>
                                                        <br>
                                                        <article>
                                                            <h4 >
                                                                Eastwest Bank
                                                            </h4>
                                                            <div>
                                                                <p>
                                                                    <img
                                                                        src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/eastwest-depo.png"
                                                                        alt="Eastwest over the Counter Deposit Slip"
                                                                        width="60%"
                                                                        height="60%">
                                                                </p>
                                                                Go to any Eastwest Bank branch and fill-out the
                                                                <b>
                                                                    <span style="color: #C93973;">red</span></b>
                                                                deposit slip.</p>
                                                            <ol>
                                                                <li>Write the account number of the fund.</li>
                                                                <li>Write the fund name</li>

                                                            </ol>
                                                        </div>
                                                    </article>

                                                </div>

                                                <!-- <a target="_blank"
                                                href="http://philequity-dev.dvrse.net/wp-content/uploads/2018/07/PEMI_ADDITIONAL_FORM.pdf"
                                                class="theme-btn"><span class="glyphicon glyphicon-list-alt"></span>Download
                                                application here</a> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordion"
                                                href="#collapse-2"
                                                aria-expanded="false"
                                                class="collapsed">Check</a>
                                        </div>
                                        <div
                                            id="collapse-2"
                                            class="panel-collapse collapse"
                                            aria-expanded="true"
                                            style="height: 0px;">
                                            <div class="panel-body">
                                                <ol>
                                                    <li>
                                                        Check – indicate the name of the fund (i.e. "Philequity Fund, Inc.") in the
                                                        Payable portion</li>
                                                    <li>Deposit directly to our bank accounts(ie. cash, check, bills payment, online
                                                        fund transfer, etc.)</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a
                                                class="collapsed"
                                                data-toggle="collapse"
                                                data-parent="#accordion"
                                                href="#collapse-3"
                                                aria-expanded="false">Online Fund Transfer</a>
                                        </div>
                                        <div id="collapse-3" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                <ol type="a">
                                                    <li>Your agent/distributor</li>
                                                    <li>If enrolled in email facility – email scanned copy to invest@philequity.net
                                                    </li>
                                                    <li>If not enrolled in email facility – send original documents to our office
                                                        2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
                                                        Pasig City 1605 Philippines</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a
                                                class="collapsed"
                                                data-toggle="collapse"
                                                data-parent="#accordion"
                                                href="#collapse-5"
                                                aria-expanded="false">
                                                Remittances</a>
                                        </div>
                                        <div id="collapse-5" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                <ol type="a">
                                                    <li>Your agent/distributor</li>
                                                    <li>If enrolled in email facility – email scanned copy to invest@philequity.net
                                                    </li>
                                                    <li>If not enrolled in email facility – send original documents to our office
                                                        2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
                                                        Pasig City 1605 Philippines</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end faq -->

                                <!-- end discussion-faq -->

                            </div>
                        </div>
                    </li>

                    <li style="padding:0px 10px;">
                        Send all documents to Philequity Management, Inc. located at 2005A East Tower
                        Philippine Stock Exchange Centre, Exchange Rd., Ortigas Center, Pasig City 1605
                        Philippines
                        <br><br>
                        You will be contacted via email once documents are received
                        <br><br>

                        <div class="btns text-center">
                            <a
                                style="margin:10px;"
                                href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"
                                target="_blank"
                                class="theme-btn">Open an account</a>
                            <a href="<?php echo site_url('/contact-us')?>" class="theme-btn"></span>Contact us</a>

                    </div>

                </li>

                <ol>
				
				</div>
                <!-- individual end tab pane -->


                <!-- Joint -->

                <div class="tab-pane fade" id="joint">
                    <ol style="margin:50px;line-height: 1.5;">

                        <li style="padding:0px 10px">Fill out an
                        <a  href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>" target="_blank">  Account Opening Kit</a> or
                            <a href="#" target="_blank">create an online account</a>
                        </li>
                        <p><br>
						For Joint account please indicate whether "OR" or "AND" taking note  
						that in an "AND" account, both shareholders need to sign on every
						instruction whereas for an "OR" account, only one (1) investor is 
						required to sign.
						<br>
					
						All account holders should indicate their Tax Identification Number (TIN)
						in the account opening forms.
						<br>
					
						The shareholder will receive a Confirmation Notice for the 
						investment/redemption made. If enrolled in the email facility, this will be
						sent within 24 hours from booking date otherwise, it will be coursed 
						through mail which will take more than 7 days. Immediately inform our 
						office for non-receipt of the Confirmation Notice.
                            <br>
                        </p>
                        <li style="padding:0px 10px">Provide one (1) photocopied ID with 3x signature on the side. Acceptable IDs:
                            <div class="row">

                                <div class="col-md-6">
                                    <ul style="list-style: disc;margin: 0px 20px;">
                                        <li>
                                            Driver’s License</li>
                                        <li>
                                            Passport
                                        </li>
                                        <li>
                                            SSS ID
                                        </li>
                                        <li>
                                            GSIS E-Card</li>
                                        <li>
                                            TIN ID
                                        </li>
                                        <li>
                                            Phil Health Card
                                        </li>
                                        <li>
                                            Professional Regulation Card (PRC)
                                        </li>
                                        <li>
                                            Postal ID
                                        </li>
                                        <li>
                                            Photo-bearing Barangay ID/Certification
                                        </li>

                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul style="list-style: disc;margin: 0px 20px;">
                                        <li>
                                            Government Office IDs issued by govt. instrumentalities (ie. AFP, HDMF, DepEd)
                                        </li>
                                        <li>
                                            Firearms license
                                        </li>
                                        <li>
                                            OWWA ID
                                        </li>
                                        <li>
                                            Seaman’s Book
                                        </li>
                                        <li>
                                            Voter’s ID
                                        </li>
                                        <li>
                                            Police Clearance
                                        </li>
                                        <li>
                                            Senior Citizen
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div></div>
                        <li style="padding:0px 10px">Make a payment to the fund of your choice
                            <div style="margin:15px 0px;" class="service-single-section">
                                <!-- start faq -->
                                <div class="faq">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a
                                                    data-toggle="collapse"
                                                    data-parent="#accordion"
                                                    href="#collapse-1-2"
                                                    aria-expanded="false"
                                                    class="collapsed">Direct Deposit</a>
                                            </div>
                                            <div
                                                id="collapse-1-2"
                                                class="panel-collapse collapse"
                                                aria-expanded="false"
                                                style="height: 0px;">
                                                <div class="panel-body">

                                                    <div class="hrf-faq-list">

                                                        <article>
                                                            <h4 >
                                                                BANCO DE ORO (BDO)
                                                            </h4>
                                                            <div>
                                                                <p>
                                                                    <img
                                                                        src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/bdo-depo.png"
                                                                        alt="BDO over the Counter Deposit Slip"
                                                                        width="60%"
                                                                        height="60%">
                                                                </p>
                                                                Go to any BDO branch and fill-out the
                                                                <b>
                                                                    <span style="color: #00f;">blue</span></b>
                                                                deposit slip.</p>
                                                            <ol>

                                                                <li>Write the account number of the fund.</li>
                                                                <li>Write the fund name</li>
                                                                <li>Write your PEMI account number followed by your First Name Initial and last
                                                                    name (ie. Acct. No 12345ADelaCruz).</li>

                                                            </ol>
                                                        </div>
                                                    </article>

                                                    <br>

                                                    <hr>
                                                    <br>

                                                    <article>
                                                        <h4 >
                                                            Union Bank of the Philippines
                                                        </h4>
                                                        <div>
                                                            <p>
                                                                <img
                                                                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/union-depo.png"
                                                                    alt="UnionBank over the Counter Deposit Slip"
                                                                    width="60%"
                                                                    height="60%">
                                                            </p>
                                                            Go to any Union Bank of the Philippines branch and fill-out the
                                                            <b>
                                                                <span style="color: #00f;">blue</span></b>
                                                            deposit slip.</p>
                                                        <ol>
                                                            <li>Write the account number of the fund.</li>
                                                            <li>Write the fund name</li>

                                                        </ol>
                                                    </div>
                                                </article>

                                                <br>
                                                <hr>
                                                <br>
                                                <article>
                                                    <h4 >
                                                        RCBC Bank
                                                    </h4>
                                                    <div>
                                                        <p>
                                                            <img
                                                                src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/rcbc-depo.jpg"
                                                                alt="RCBC over the Counter Deposit Slip"
                                                                width="40%"
                                                                height="40%">
                                                        </p>
                                                        Go to any RCBC Bank branch and fill-out the
                                                        <b>
                                                            <span style="color: #00f;">blue</span></b>
                                                        deposit slip.</p>
                                                    <ol>
                                                        <li>Write the account number of the fund.</li>
                                                        <li>Write the fund name</li>

                                                    </ol>
                                                </div>
                                            </article>

                                            <br>
                                            <hr>
                                            <br>
                                            <article>
                                                <h4 >
                                                    Eastwest Bank
                                                </h4>
                                                <div>
                                                    <p>
                                                        <img
                                                            src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/eastwest-depo.png"
                                                            alt="Eastwest over the Counter Deposit Slip"
                                                            width="60%"
                                                            height="60%">
                                                    </p>
                                                    Go to any Eastwest Bank branch and fill-out the
                                                    <b>
                                                        <span style="color: #C93973;">red</span></b>
                                                    deposit slip.</p>
                                                <ol>
                                                    <li>Write the account number of the fund.</li>
                                                    <li>Write the fund name</li>

                                                </ol>
                                            </div>
                                        </article>

                                    </div>

                                    <!-- <a target="_blank"
                                    href="http://philequity-dev.dvrse.net/wp-content/uploads/2018/07/PEMI_ADDITIONAL_FORM.pdf"
                                    class="theme-btn"><span class="glyphicon glyphicon-list-alt"></span>Download
                                    application here</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a
                                    data-toggle="collapse"
                                    data-parent="#accordion"
                                    href="#collapse-2-2"
                                    aria-expanded="false"
                                    class="collapsed">Check</a>
                            </div>
                            <div
                                id="collapse-2-2"
                                class="panel-collapse collapse"
                                aria-expanded="true"
                                style="height: 0px;">
                                <div class="panel-body">
                                    <ol>
                                        <li>
                                            Check – indicate the name of the fund (i.e. "Philequity Fund, Inc.") in the
                                            Payable portion</li>
                                        <li>Deposit directly to our bank accounts(ie. cash, check, bills payment, online
                                            fund transfer, etc.)</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a
                                    class="collapsed"
                                    data-toggle="collapse"
                                    data-parent="#accordion"
                                    href="#collapse-3-2"
                                    aria-expanded="false">Online Fund Transfer</a>
                            </div>
                            <div id="collapse-3-2" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <ol type="a">
                                        <li>Your agent/distributor</li>
                                        <li>If enrolled in email facility – email scanned copy to invest@philequity.net
                                        </li>
                                        <li>If not enrolled in email facility – send original documents to our office
                                            2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
                                            Pasig City 1605 Philippines</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a
                                    class="collapsed"
                                    data-toggle="collapse"
                                    data-parent="#accordion"
                                    href="#collapse-5-2"
                                    aria-expanded="false">
                                    Remittances</a>
                            </div>
                            <div id="collapse-5-2" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <ol type="a">
                                        <li>Your agent/distributor</li>
                                        <li>If enrolled in email facility – email scanned copy to invest@philequity.net
                                        </li>
                                        <li>If not enrolled in email facility – send original documents to our office
                                            2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
                                            Pasig City 1605 Philippines</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end faq -->

                    <!-- end discussion-faq -->

                </div>
            </div>
        </li>

        <li style="padding:0px 10px;">
            Send all documents to Philequity Management, Inc. located at 2005A East Tower
            Philippine Stock Exchange Centre, Exchange Rd., Ortigas Center, Pasig City 1605
            Philippines
            <br><br>
            You will be contacted via email once documents are received
            <br><br>

            <div class="btns text-center">
                <a
                    style="margin:10px;"
                    href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"
                    target="_blank"
                    class="theme-btn">Open an account</a>
                <a href="<?php echo site_url('/contact-us')?>" class="theme-btn"></span>Contact us</a>

        </div>

    </li>

    <ol>
	</div> <!-- END Joint Content -->

    <!-- Intrust -->
    <div class="tab-pane fade" id="intrust">
	<ol style="margin:50px;line-height: 1.5;">

<li style="padding:0px 10px">Fill out an
<a  href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>" target="_blank">
		Account Opening Kit</a>
	or
	<a href="#" target="_blank">create an online account</a>
</li>
<p>
	<br>
	The following procedures are for those who prefer to open an account manually.
	</p>

	Additional requirements for In-Trust-For (ITF):
	<ol type="a">
	<li>Birth Certificate of beneficiary</li>
	<li>One (1) valid ID of beneficiary</li>
	</ol>
<br>
<li style="padding:0px 10px">Provide one (1) photocopied ID with 3x signature on the side. Acceptable IDs:
	<div class="row">

		<div class="col-md-6">
			<ul style="list-style: disc;margin: 0px 20px;">
				<li>
					Driver’s License</li>
				<li>
					Passport
				</li>
				<li>
					SSS ID
				</li>
				<li>
					GSIS E-Card</li>
				<li>
					TIN ID
				</li>
				<li>
					Phil Health Card
				</li>
				<li>
					Professional Regulation Card (PRC)
				</li>
				<li>
					Postal ID
				</li>
				<li>
					Photo-bearing Barangay ID/Certification
				</li>

			</ul>
		</div>

		<div class="col-md-6">
			<ul style="list-style: disc;margin: 0px 20px;">
				<li>
					Government Office IDs issued by govt. instrumentalities (ie. AFP, HDMF, DepEd)
				</li>
				<li>
					Firearms license
				</li>
				<li>
					OWWA ID
				</li>
				<li>
					Seaman’s Book
				</li>
				<li>
					Voter’s ID
				</li>
				<li>
					Police Clearance
				</li>
				<li>
					Senior Citizen
				</li>
			</ul>
		</div>
	</div>
</li>
<div></div>
<li style="padding:0px 10px">Make a payment to the fund of your choice
	<div style="margin:15px 0px;" class="service-single-section">
		<!-- start faq -->
		<div class="faq">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a
							data-toggle="collapse"
							data-parent="#accordion"
							href="#collapse-1-3"
							aria-expanded="false"
							class="collapsed">Direct Deposit</a>
					</div>
					<div
						id="collapse-1-3"
						class="panel-collapse collapse"
						aria-expanded="false"
						style="height: 0px;">
						<div class="panel-body">

							<div class="hrf-faq-list">

								<article>
									<h4 >
										BANCO DE ORO (BDO)
									</h4>
									<div>
										<p>
											<img
												src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/bdo-depo.png"
												alt="BDO over the Counter Deposit Slip"
												width="60%"
												height="60%">
										</p>
										Go to any BDO branch and fill-out the
										<b>
											<span style="color: #00f;">blue</span></b>
										deposit slip.</p>
									<ol>

										<li>Write the account number of the fund.</li>
										<li>Write the fund name</li>
										<li>Write your PEMI account number followed by your First Name Initial and last
											name (ie. Acct. No 12345ADelaCruz).</li>

									</ol>
								</div>
							</article>

							<br>

							<hr>
							<br>

							<article>
								<h4 >
									Union Bank of the Philippines
								</h4>
								<div>
									<p>
										<img
											src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/union-depo.png"
											alt="UnionBank over the Counter Deposit Slip"
											width="60%"
											height="60%">
									</p>
									Go to any Union Bank of the Philippines branch and fill-out the
									<b>
										<span style="color: #00f;">blue</span></b>
									deposit slip.</p>
								<ol>
									<li>Write the account number of the fund.</li>
									<li>Write the fund name</li>

								</ol>
							</div>
						</article>

						<br>
						<hr>
						<br>
						<article>
							<h4 >
								RCBC Bank
							</h4>
							<div>
								<p>
									<img
										src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/rcbc-depo.jpg"
										alt="RCBC over the Counter Deposit Slip"
										width="40%"
										height="40%">
								</p>
								Go to any RCBC Bank branch and fill-out the
								<b>
									<span style="color: #00f;">blue</span></b>
								deposit slip.</p>
							<ol>
								<li>Write the account number of the fund.</li>
								<li>Write the fund name</li>

							</ol>
						</div>
					</article>

					<br>
					<hr>
					<br>
					<article>
						<h4 >
							Eastwest Bank
						</h4>
						<div>
							<p>
								<img
									src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/eastwest-depo.png"
									alt="Eastwest over the Counter Deposit Slip"
									width="60%"
									height="60%">
							</p>
							Go to any Eastwest Bank branch and fill-out the
							<b>
								<span style="color: #C93973;">red</span></b>
							deposit slip.</p>
						<ol>
							<li>Write the account number of the fund.</li>
							<li>Write the fund name</li>

						</ol>
					</div>
				</article>

			</div>

			<!-- <a target="_blank"
			href="http://philequity-dev.dvrse.net/wp-content/uploads/2018/07/PEMI_ADDITIONAL_FORM.pdf"
			class="theme-btn"><span class="glyphicon glyphicon-list-alt"></span>Download
			application here</a> -->
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-2-3"
			aria-expanded="false"
			class="collapsed">Check</a>
	</div>
	<div
		id="collapse-2-3"
		class="panel-collapse collapse"
		aria-expanded="true"
		style="height: 0px;">
		<div class="panel-body">
			<ol>
				<li>
					Check – indicate the name of the fund (i.e. "Philequity Fund, Inc.") in the
					Payable portion</li>
				<li>Deposit directly to our bank accounts(ie. cash, check, bills payment, online
					fund transfer, etc.)</li>
			</ol>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			class="collapsed"
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-3-3"
			aria-expanded="false">Online Fund Transfer</a>
	</div>
	<div id="collapse-3-3" class="panel-collapse collapse" aria-expanded="false">
		<div class="panel-body">
			<ol type="a">
				<li>Your agent/distributor</li>
				<li>If enrolled in email facility – email scanned copy to invest@philequity.net
				</li>
				<li>If not enrolled in email facility – send original documents to our office
					2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
					Pasig City 1605 Philippines</li>
			</ol>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			class="collapsed"
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-5-3"
			aria-expanded="false">
			Remittances</a>
	</div>
	<div id="collapse-5-3" class="panel-collapse collapse" aria-expanded="false">
		<div class="panel-body">
			<ol type="a">
				<li>Your agent/distributor</li>
				<li>If enrolled in email facility – email scanned copy to invest@philequity.net
				</li>
				<li>If not enrolled in email facility – send original documents to our office
					2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
					Pasig City 1605 Philippines</li>
			</ol>
		</div>
	</div>
</div>

</div>
<!-- end faq -->

<!-- end discussion-faq -->

</div>
</div>
</li>

<li style="padding:0px 10px;">
Send all documents to Philequity Management, Inc. located at 2005A East Tower
Philippine Stock Exchange Centre, Exchange Rd., Ortigas Center, Pasig City 1605
Philippines
<br><br>
You will be contacted via email once documents are received
<br><br>

<div class="btns text-center">
<a
style="margin:10px;"
href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"
target="_blank"
class="theme-btn">Open an account</a>
<a href="<?php echo site_url('/contact-us')?>" class="theme-btn"></span>Contact us</a>

</div>

</li>

<ol>

    </div>  <!--end instrust for content -->


    <!-- institutional content -->
    <div class="tab-pane fade" id="institutional">

	<h5>For Sole Proprietorship</h5>

	<ol type="a">
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Account%20Opening%20Form%20(AOF)%20-%20Institution.pdf" target="_blank">Account Opening Form (AOF)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investor%20Risk%20Profiling%20Questionnaire%20(IRPQ)%20-%20Institution.pdf" target="_blank">Investor Risk Profiling Questionnaire (IRPQ)</a></li>
                    
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investment%20Application%20Form%20(IAF).pdf" target="_blank">Investment Application Form (IAF)</a></li>
                    <li>Two (2) <a href="https://www.philequity.net/report/PEMI%20-%20Signature%20Card%20-%20Institution.pdf" target="_blank">Signature Cards</a> </li>
                    <li>One (1) Valid ID with signature </li>
                    <li>Certified True Copy of DTI Certificate of Registration</li>
    </ol>

	<h5>For Partnership</h5>	
	<ol type="a">
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Account%20Opening%20Form%20(AOF)%20-%20Institution.pdf" target="_blank">Account Opening Form (AOF)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investor%20Risk%20Profiling%20Questionnaire%20(IRPQ)%20-%20Institution.pdf" target="_blank">Investor Risk Profiling Questionnaire (IRPQ)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investment%20Application%20Form%20(IAF).pdf" target="_blank">Investment Application Form (IAF)</a></li>
                    <li>Two (2) <a href="https://www.philequity.net/report/PEMI%20-%20Signature%20Card%20-%20Institution.pdf" target="_blank">Signature Cards</a> </li>
                    <li>One (1) Valid ID with signature </li>
                    <li>Certified True Copy of DTI Certificate of Registration</li>
	</ol>

	<h5>For Corporation</h5>	
	<ol type="a">
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Account%20Opening%20Form%20(AOF)%20-%20Institution.pdf" target="_blank">Account Opening Form (AOF)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investor%20Risk%20Profiling%20Questionnaire%20(IRPQ)%20-%20Institution.pdf" target="_blank">Investor Risk Profiling Questionnaire (IRPQ)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investment%20Application%20Form%20(IAF).pdf" target="_blank">Investment Application Form (IAF)</a></li>
                    <li>Two (2) <a href="https://www.philequity.net/report/PEMI%20-%20Signature%20Card%20-%20Institution.pdf" target="_blank">Signature Cards</a> duly authenticated by Corporate Secretary</li>
                    <li>One (1) Valid ID with signature of each authorized signatory duly authenticated by Corporate Secretary</li>
                    <li>Certified True Copy of SEC Certificate of Registration</li>
                    <li>Certified True Copy of Articles of Incorporation and By Laws</li>
                    <li>Certified True Copy of Secretary's Certificate / Board Resolution authorizing investment in Philequity and authorized signatories</li>
                    <li>Latest General Information Sheet</li>
	</ol>

	<h5>Others</h5>

	<ol type="a">
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Account%20Opening%20Form%20(AOF)%20-%20Institution.pdf" target="_blank">Account Opening Form (AOF)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investor%20Risk%20Profiling%20Questionnaire%20(IRPQ)%20-%20Institution.pdf" target="_blank">Investor Risk Profiling Questionnaire (IRPQ)</a></li>
                    <li><a href="https://www.philequity.net/report/PEMI%20-%20Investment%20Application%20Form%20(IAF).pdf" target="_blank">Investment Application Form (IAF)</a></li>
                    <li>Two (2) <a href="https://www.philequity.net/report/PEMI%20-%20Signature%20Card%20-%20Institution.pdf" target="_blank">Signature Cards</a> duly authenticated</li>
                    <li>One (1) Valid ID with signature of each authorized signatory duly authenticated </li>
                    <li>Certified True Copy of Certificate of Registration with appropriate government agencies</li>
                    <li>Certified True Copy of Articles of Association or Constitution and By Laws</li>
                    <li>Certified True Copy of Secretary's Certificate / Board Resolution authorizing investment in Philequity and authorized signatories</li>
                    <li>Latest General Information Sheet</li>
                </ol>




	<ol style="margin:50px;line-height: 1.5;">


<li style="padding:0px 10px">Provide one (1) photocopied ID with 3x signature on the side. Acceptable IDs:
	<div class="row">

		<div class="col-md-6">
			<ul style="list-style: disc;margin: 0px 20px;">
				<li>
					Driver’s License</li>
				<li>
					Passport
				</li>
				<li>
					SSS ID
				</li>
				<li>
					GSIS E-Card</li>
				<li>
					TIN ID
				</li>
				<li>
					Phil Health Card
				</li>
				<li>
					Professional Regulation Card (PRC)
				</li>
				<li>
					Postal ID
				</li>
				<li>
					Photo-bearing Barangay ID/Certification
				</li>

			</ul>
		</div>

		<div class="col-md-6">
			<ul style="list-style: disc;margin: 0px 20px;">
				<li>
					Government Office IDs issued by govt. instrumentalities (ie. AFP, HDMF, DepEd)
				</li>
				<li>
					Firearms license
				</li>
				<li>
					OWWA ID
				</li>
				<li>
					Seaman’s Book
				</li>
				<li>
					Voter’s ID
				</li>
				<li>
					Police Clearance
				</li>
				<li>
					Senior Citizen
				</li>
			</ul>
		</div>
	</div>
</li>
<div></div>
<li style="padding:0px 10px">Make a payment to the fund of your choice
	<div style="margin:15px 0px;" class="service-single-section">
		<!-- start faq -->
		<div class="faq">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a
							data-toggle="collapse"
							data-parent="#accordion"
							href="#collapse-1-4"
							aria-expanded="false"
							class="collapsed">Direct Deposit</a>
					</div>
					<div
						id="collapse-1-4"
						class="panel-collapse collapse"
						aria-expanded="false"
						style="height: 0px;">
						<div class="panel-body">

							<div class="hrf-faq-list">

								<article>
									<h4 >
										BANCO DE ORO (BDO)
									</h4>
									<div>
										<p>
											<img
												src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/bdo-depo.png"
												alt="BDO over the Counter Deposit Slip"
												width="60%"
												height="60%">
										</p>
										Go to any BDO branch and fill-out the
										<b>
											<span style="color: #00f;">blue</span></b>
										deposit slip.</p>
									<ol>

										<li>Write the account number of the fund.</li>
										<li>Write the fund name</li>
										<li>Write your PEMI account number followed by your First Name Initial and last
											name (ie. Acct. No 12345ADelaCruz).</li>

									</ol>
								</div>
							</article>

							<br>

							<hr>
							<br>

							<article>
								<h4 >
									Union Bank of the Philippines
								</h4>
								<div>
									<p>
										<img
											src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/union-depo.png"
											alt="UnionBank over the Counter Deposit Slip"
											width="60%"
											height="60%">
									</p>
									Go to any Union Bank of the Philippines branch and fill-out the
									<b>
										<span style="color: #00f;">blue</span></b>
									deposit slip.</p>
								<ol>
									<li>Write the account number of the fund.</li>
									<li>Write the fund name</li>

								</ol>
							</div>
						</article>

						<br>
						<hr>
						<br>
						<article>
							<h4 >
								RCBC Bank
							</h4>
							<div>
								<p>
									<img
										src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/rcbc-depo.jpg"
										alt="RCBC over the Counter Deposit Slip"
										width="40%"
										height="40%">
								</p>
								Go to any RCBC Bank branch and fill-out the
								<b>
									<span style="color: #00f;">blue</span></b>
								deposit slip.</p>
							<ol>
								<li>Write the account number of the fund.</li>
								<li>Write the fund name</li>

							</ol>
						</div>
					</article>

					<br>
					<hr>
					<br>
					<article>
						<h4 >
							Eastwest Bank
						</h4>
						<div>
							<p>
								<img
									src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/procedures/eastwest-depo.png"
									alt="Eastwest over the Counter Deposit Slip"
									width="60%"
									height="60%">
							</p>
							Go to any Eastwest Bank branch and fill-out the
							<b>
								<span style="color: #C93973;">red</span></b>
							deposit slip.</p>
						<ol>
							<li>Write the account number of the fund.</li>
							<li>Write the fund name</li>

						</ol>
					</div>
				</article>

			</div>

			<!-- <a target="_blank"
			href="http://philequity-dev.dvrse.net/wp-content/uploads/2018/07/PEMI_ADDITIONAL_FORM.pdf"
			class="theme-btn"><span class="glyphicon glyphicon-list-alt"></span>Download
			application here</a> -->
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-2-4"
			aria-expanded="false"
			class="collapsed">Check</a>
	</div>
	<div
		id="collapse-2-4"
		class="panel-collapse collapse"
		aria-expanded="true"
		style="height: 0px;">
		<div class="panel-body">
			<ol>
				<li>
					Check – indicate the name of the fund (i.e. "Philequity Fund, Inc.") in the
					Payable portion</li>
				<li>Deposit directly to our bank accounts(ie. cash, check, bills payment, online
					fund transfer, etc.)</li>
			</ol>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			class="collapsed"
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-3-4"
			aria-expanded="false">Online Fund Transfer</a>
	</div>
	<div id="collapse-3-4" class="panel-collapse collapse" aria-expanded="false">
		<div class="panel-body">
			<ol type="a">
				<li>Your agent/distributor</li>
				<li>If enrolled in email facility – email scanned copy to invest@philequity.net
				</li>
				<li>If not enrolled in email facility – send original documents to our office
					2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
					Pasig City 1605 Philippines</li>
			</ol>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<a
			class="collapsed"
			data-toggle="collapse"
			data-parent="#accordion"
			href="#collapse-5-4"
			aria-expanded="false">
			Remittances</a>
	</div>
	<div id="collapse-5-4" class="panel-collapse collapse" aria-expanded="false">
		<div class="panel-body">
			<ol type="a">
				<li>Your agent/distributor</li>
				<li>If enrolled in email facility – email scanned copy to invest@philequity.net
				</li>
				<li>If not enrolled in email facility – send original documents to our office
					2005A East Tower Philippine Stock Exchange Center, Exchange Rd., Ortigas Center,
					Pasig City 1605 Philippines</li>
			</ol>
		</div>
	</div>
</div>

</div>
<!-- end faq -->

<!-- end discussion-faq -->

</div>
</div>
</li>

<li style="padding:0px 10px;">
Send all documents to Philequity Management, Inc. located at 2005A East Tower
Philippine Stock Exchange Centre, Exchange Rd., Ortigas Center, Pasig City 1605
Philippines
<br><br>
You will be contacted via email once documents are received
<br><br>

<div class="btns text-center">
<a
style="margin:10px;"
href="<?php echo site_url().'/wp-content/uploads/2018/07/Account_Opening_Individual.pdf'?>"
target="_blank"
class="theme-btn">Open an account</a>
<a href="<?php echo site_url('/contact-us')?>" class="theme-btn"></span>Contact us</a>

</div>

</li>

<ol>



    </div>

</div>
</div>

</div>

</div>
<!-- end row -->

</div>
</div>
</section>

<?php 

get_footer();
?>