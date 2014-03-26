<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="utf-8">
    <title>ThermoSpas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link media="all" rel="stylesheet" href="/assets/stylesheets/front/fancybox.css">
    <link media="all" rel="stylesheet" href="/assets/stylesheets/front/all.css">
    <script type="text/javascript" src="/assets/javascripts/front/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/front/jquery.main.js"></script>
    <!--[if IE]><script type="text/javascript" src="js/ie.js"></script><![endif]-->
    <link href="/assets/stylesheets/front/myStyles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- page -->
	<div id="wrapper">
			<!-- header -->
			<header id="header">
				<!-- main image -->
				<div class="main-image">
					<img src="/assets/images/img01.jpg" height="410" alt="image description">
				</div>
				<div class="header-frame">
					<div class="header-holder">
						<!-- logotype -->
						<h1 class="logo"><a href="#">ThermoSpas - Designed to Improve Your Life</a></h1>
						<div class="top-block">
							<div class="arrow-left"></div>
							<div class="arrow-right">
								<!-- main promo -->
								<div class="main-promo">
									<strong class="title">Get Your <span>FREE</span> DVD &amp; Brochure!</strong>
									Plus, Right Now <strong>SAVE an Additional <span class="curr">$</span>1,000</strong> with Bonus Gifts!
								</div>
							</div>
							<!-- registration form -->
							<?= form_open('main/confirmation', array('class'=>'form-reg')) ?>
								<fieldset>
									<legend>Register form</legend>
									<strong class="title">Fast, Easy &amp; FREE!</strong>
									<p>Just fill out the quick form below to receive your FREE information. No obligation!</p>
									<div class="row">
										<div class="row-area">
											<input id="fname" class="text1 required" type="text" title="First Name*" placeholder="First Name*" name="fname">
										</div>
										<div class="row-area">
											<input id="lname" class="text2 required" type="text" title="Last Name*" placeholder="Last Name*" name="lname">
										</div>
									</div>
									<div class="row">
										<input type="text" value="" placeholder="Email" name="email">
									</div>
									<div class="row row-area">
										<input id="Phone" type="text" class="required-number" placeholder="Phone*" name="phone">
									</div>
									<div class="row">
										<input type="text" placeholder="Address" name="address">
									</div>
									<div class="row">
										<input class="text3" type="text" placeholder="City" name="city">
										<select class="select" name="state">
											<option>State</option>
											<option>ID</option>
											<option>IA</option>
											<option>AL</option>
											<option>AK</option>
											<option>AZ</option>
											<option>AR</option>
											<option>WY</option>
											<option>WA</option>
											<option>VT</option>
											<option>VA</option>
											<option>WI</option>
											<option>HI</option>
											<option>DE</option>
											<option>GA</option>
											<option>WV</option>
											<option>IL</option>
											<option>IN</option>
											<option>CA</option>
											<option>KS</option>
											<option>KY</option>
											<option>CO</option>
											<option>CT</option>
											<option>LA</option>
											<option>MA</option>
											<option>MN</option>
											<option>MS</option>
											<option>MO</option>
											<option>MI</option>
											<option>MT</option>
											<option>ME</option>
											<option>MD</option>
											<option>NE</option>
											<option>NV</option>
											<option>NH</option>
											<option>NJ</option>
											<option>NY</option>
											<option>NM</option>
											<option>OH</option>
											<option>OK</option>
											<option>OR</option>
											<option>PA</option>
											<option>RI</option>
											<option>ND</option>
											<option>NC</option>
											<option>TN</option>
											<option>TX</option>
											<option>FL</option>
											<option>SD</option>
											<option>SC</option>
											<option>UT</option>
										</select>
										<div class="row-area">
											<input class="text4 required-number" type="text" placeholder="Zip*" name="zip">
										</div>
									</div>
									<div class="row">
										<input type="submit" value="Get Your FREE DVD &amp; Brochure NOW!">
									</div>
									<span class="req">* required</span>
								</fieldset>
							 <?= form_close() ?>
						</div>
					</div>
				</div>
			</header>
			<div id="main">
				<!-- content -->
				<section id="content">
					<div class="top-promo">
						<!-- promo disk -->
						<div class="promo-disk">
							<img src="/assets/images/img02.png" alt="image description">
							<a class="logo2" href="#">ThermoSpas</a>
							<p>builds the highest quality, quietest, most luxurious &amp; energy efficient spas and hot tubs in the world.</p>
							<a class="link focusForm" href="#">Get your FREE DVD &amp; Brochure!</a>
						</div>
						<!-- promo text -->
						<div class="promo-txt">
							<h2>Get the Most Out of Life!</h2>
							<p>ThermoSpas are <strong>custom-built just for you</strong> and can be enjoyed day or night, indoors or outdoors. And since ThermoSpas require less maintenance and comes with one of the best warranties in the hot tub industry, you can spend more time <strong>enjoying your personal at-home retreat</strong> with family, friends, for private time, or a romantic getaway.</p>
							<h2>Feel More Relaxed &amp; Rejuvinated!</h2>
							<p>There is no denying how relaxing a ThermoSpas hot tub can be with the calming sensation of warm, bubbling water and <strong>up to 160</strong> specially-designed, therapeutic water jets. ThermoSpas is also recognized by the <em>Arthritis Foundation</em> for pain relief and many other health benefits.</p>
						</div>
					</div>
					<!-- advantage -->
					<div class="advantage-block">
						<h2>A Complete Line of Custom-Built Hot Tubs and Spas For Every Need</h2>
						<!-- tabs -->
						<div class="tabs">
							<div class="tab-content">
								<div id="tab1">
									<a href="#"><img src="/assets/images/img02.jpg" alt="image description"></a>
								</div>
								<div id="tab2">
									<a href="#"><img src="/assets/images/img03.jpg" alt="image description"></a>
								</div>
								<div id="tab3">
									<a href="#"><img src="/assets/images/img04.jpg" alt="image description"></a>
								</div>
							</div>
							<ul class="tabset">
								<li>
									<a href="#tab1">
										<strong class="title">Health</strong>
										ThermoSpas is dedicated to creating the most beneficial hydrotherapy hot tubs for arthritis, pain relief, stress, sleep problems, headaches, and more.
									</a>
								</li>
								<li class="active">
									<a href="#tab2">
										<strong class="title">Fitness</strong>
										ThermoSpas has a full line of fitness hot tubs and swim spas designed to provide a comprehensive, low-impact workout – and an amazing massage after.
									</a>
								</li>
								<li>
									<a href="#tab3">
										<strong class="title">Lifestyle</strong>
										Have fun, reconnect with family or throw a party and discover why our customers are the happpiest home owners on the block.
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="features-holder">
						<!-- features -->
						<div class="features">
							<strong class="title">Featured on Many Hit Shows:</strong>
							<ul class="features-list">
								<li><img src="/assets/images/img05.jpg" alt="image description"></li>
								<li><img src="/assets/images/img06.jpg" alt="image description"></li>
								<li><img src="/assets/images/img07.jpg" alt="image description"></li>
								<li><img src="/assets/images/img08.jpg" alt="image description"></li>
							</ul>
						</div>
						<div class="btn-get">
							<a href="#" class="focusForm">Get Your <span>FREE</span> DVD &amp; Brochure Now!</a>
						</div>
					</div>
					<!-- testimonials -->
					<div class="testimonials">
						<img src="/assets/images/img09.jpg" alt="image description">
						<h2>What Real Customers Are Saying</h2>
						<div class="quotes">
							<blockquote>
								<q>I would like to say that I would recommend ThermoSpas for whatever reason – whether it be entertainment, stress or therapy. It has helped my husband and I immeasurably!”</q>
								<cite>– Mrs. Christine L. Silva</cite>
							</blockquote>
							<blockquote>
								<q>Our physical health, our sense of spiritual well being, a significantly lower stress level, and an improved love life are all benefits that both my wife and I noticed right away.”</q>
								<cite>– Andrew and Doreen Laird</cite>
							</blockquote>
						</div>
					</div>
				</section>
				<!-- footer -->
				<div id="footer">
					<!-- partners -->
					<ul class="partners-list">
						<li><img src="/assets/images/img10.png" alt="image description"></li>
						<li><img src="/assets/images/img11.png" alt="image description"></li>
					</ul>
					<p class="call">Speak to a friendly Sales Associate about a FREE site inspection! <strong>800.555.1212</strong></p>
					<div class="txt">
						<ul class="bottom-nav">
							<li><a class="lightbox-opener" href="#popup1">Privacy Policy</a></li>
							<li><a class="lightbox-opener" href="#popup2">Terms and Conditions</a></li>
						</ul>
						<p>&copy;2014 ThermoSpas Hot Tub Products, Inc. All Rights Reserved.</p>
					</div>
				</div>
			</div>
			</div>
    <!-- popup -->
    <div class="popup-holder">
        <div id="popup1" class="lightbox">
            <div class="heading">
                <a class="close" href="#">X</a> <span class="close-text">hit <span>escape</span> to
                    close</span>
                <h2>
                    Privacy Policy</h2>
            </div>
            <div class="area">
                <h5>
                    THERMOSPAS PRIVACY POLICY LAST UPDATED AND EFFECTIVE AS OF JUNE 28, 2012</h5>
                <div class="frame">
                    <p>
                        This privacy policy describes how ThermoSpas Hot Tub Products, Inc. and its United
                        States-based affiliates and subsidiaries (collectively, “ThermoSpas”) may handle
                        and use personal identifiable information (&#34;PII&#34;) you submit directly or
                        indirectly to ThermoSpas, whether through your use of any ThermoSpas website (each,
                        a &#34;ThermoSpas Website&#34;), your offline submission of PII to ThermoSpas, your
                        submission of PII to one or more third parties for transmission of the same to ThermoSpas,
                        or otherwise.</p>
                    <p>
                        The purpose of this privacy policy is to help you make an informed decision about
                        whether to use or continue using any ThermoSpas Website, whether to submit PII to
                        ThermoSpas, and whether to continue to allow ThermoSpas to maintain your PII. If
                        you do not agree to any of the terms of this privacy policy, please (a) refrain
                        from submitting PII to ThermoSpas and (b) request that ThermoSpas remove your PII
                        from the database in which ThermoSpas stores that information. If you need to contact
                        ThermoSpas regarding this privacy policy or ThermoSpas&#39; use of PII, please direct
                        your inquiries to privacy@thermospas.com.</p>
                    <p>
                        You can browse parts of each ThermoSpas Website without telling ThermoSpas who you
                        are or revealing any personal information about yourself. However, once you give
                        PII to ThermoSpas you are no longer anonymous to ThermoSpas. Accordingly, if you
                        choose to provide ThermoSpas with PII, you consent to the storage and use of that
                        information pursuant to this privacy policy.</p>
                    <h4>
                        WHAT INFORMATION THERMOSPAS MAY COLLECT</h4>
                    <p>
                        ThermoSpas may collect any of the following information regarding you:</p>
                    <ol>
                        <li>Personal Information. ThermoSpas may collect personal information that can be used
                            to identify you (i.e., PII). As used herein, PII may include, without limitation,
                            your name, email address, mailing address, telephone number, and any other information
                            that could be used to identify you, your ordering history with ThermoSpas&#39; products
                            or services, and your shopping preferences.</li>
                        <li>Non-Personal Information. When you visit a ThermoSpas Website, ThermoSpas may collect
                            non-personal information such as your browser type, the identity of your internet
                            service provider, your computer&#39;s operating system, the URL of the previous
                            website you visited, and the IP address of the computer you are using. While none
                            of this information standing alone can be easily used to identify you, it may be
                            combined with PII you provide to ThermoSpas.</li>
                        <li>Cookies. When you visit a ThermoSpas Website, ThermoSpas may send a small text file
                            to your computer called a &#34;cookie&#34; that identifies your browser to ThermoSpas’
                            server. Many web browsers automatically accept cookies, but as part of the functionality
                            within your browser you usually can choose to decline to accept cookies if you prefer.
                            Any cookie sent to your computer by ThermoSpas in connection with your use of a
                            ThermoSpas Website does not give ThermoSpas access to your computer or to any PII.
                            If you disable your browser&#39;s ability to collect cookies from ThermoSpas, certain
                            portions of each ThermoSpas Website may not work properly during your visit to that
                            website.</li>
                    </ol>
                    <h4>
                        WHAT THERMOSPAS MAY DO WITH INFORMATION IT COLLECTS</h4>
                    <p>
                        <strong>How ThermoSpas may use your PII.</strong> ThermoSpas may use the PII you
                        provide for any of the following reasons:</p>
                    <ul>
                        <li style="list-style-type: disc">To contact and communicate with you regarding your
                            use of a ThermoSpas Website;</li>
                        <li style="list-style-type: disc">To respond to your questions;</li>
                        <li style="list-style-type: disc">To process a request you may make for information
                            or materials;</li>
                        <li style="list-style-type: disc">To provide you with promotional information respecting
                            products manufactured and/or distributed by or services offered by ThermoSpas, its
                            affiliates, and/or its partners;</li>
                        <li style="list-style-type: disc">To assist you with products you have acquired through
                            ThermoSpas and/or to provide you with warranty services respecting such products;</li>
                        <li style="list-style-type: disc">To contact you for market research purposes, including,
                            without limitation, the potential customization of a ThermoSpas Website according
                            to your interests;</li>
                        <li style="list-style-type: disc">To improve a ThermoSpas Website, to improve ThermoSpas&#39;
                            products and services, and to provide the products, services, and customer support
                            you may want;</li>
                        <li style="list-style-type: disc">For internal record keeping; and</li>
                        <li style="list-style-type: disc">To compile statistical records and other aggregate
                            data about usage of a ThermoSpas Website in a way that does not personally identify
                            you but that allows ThermoSpas to more effectively facilitate the promotion of its
                            products and services to appropriate target audiences. ThermoSpas may hire third
                            parties to help it collect and analyze such statistical data, and ThermoSpas may
                            share such data with third parties for this purpose.</li>
                    </ul>
                    <p>
                        <strong>How ThermoSpas may use non-personal information and cookies.</strong></p>
                    <p>
                        ThermoSpas may compile data regarding your usage of a ThermoSpas Website and may
                        analyze traffic log cookies to identify which ThermoSpas Website pages are being
                        visited. Such data may help ThermoSpas provide you with a better ThermoSpas Website
                        by enabling ThermoSpas to monitor which pages you find useful and which you do not.</p>
                    <h4>
                        CHILDREN</h4>
                    <p>
                        ThermoSpas does not knowingly request, collect, or maintain PII from anyone under
                        the age of thirteen (13) years old without verified parental consent. ThermoSpas’
                        intention is to refrain from collecting PII from anyone under the age of eighteen
                        (18) years old, whether through a ThermoSpas Website or otherwise. If ThermoSpas
                        learns of ThermoSpas’ collection of PII from anyone under the age of thirteen (13)
                        years old without verified parental consent, ThermoSpas will remove this information
                        from the database in which ThermoSpas stores it.</p>
                    <h4>
                        SECURITY</h4>
                    <p>
                        ThermoSpas treats collected PII as an asset that must be protected and utilizes
                        security protocols and tools to safeguard and prevent PII in ThermoSpas’ control
                        from unauthorized access and disclosure. However, third parties may nonetheless
                        unlawfully intercept or access transmissions or private communications concerning
                        PII maintained by ThermoSpas. Although ThermoSpas works hard to protect the privacy
                        of all PII over which ThermoSpas has control, ThermoSpas does not promise, warrant,
                        or guarantee, and thus you should not expect, that any PII you submit to ThermoSpas
                        will always remain private. Your submission, whether direct or indirect, of PII
                        to ThermoSpas is therefore done at your own risk.</p>
                    <h4>
                        DISCLOSURES TO THIRD PARTIES</h4>
                    <p>
                        <strong>Disclosures To Affiliates, Partners, And Service Providers.</strong>&nbsp;ThermoSpas
                        may disclose your PII to (a) any ThermoSpas affiliate, (b) any ThermoSpas subsidiary,
                        (c) any thirdparty authorized dealer of products manufactured and/or distributed
                        by ThermoSpas or by any ThermoSpas affiliate or subsidiary; and (d) any third-party
                        entity allowed to act as an authorized warranty service center for products manufactured
                        and/or distributed by ThermoSpas or by any ThermoSpas affiliate or subsidiary. Any
                        of these entities may use the PII you provide to ThermoSpas to contact you regarding
                        products and/or services you acquired from ThermoSpas or to discuss products and/or
                        services ThermoSpas or any ThermoSpas affiliate or subsidiary may have to offer
                        you or in which you may be interested. ThermoSpas may also disclose your PII to
                        any service provider that assists ThermoSpas in operating any ThermoSpas Website
                        and in conducting ThermoSpas&#39; business.</p>
                    <p>
                        <strong>Other Disclosures Generally Prohibited; Exceptions.</strong>&nbsp;Except
                        as stated herein, ThermoSpas does not sell, rent, license, or otherwise permit third
                        parties to access your PII. However, ThermoSpas may share PII as it deems necessary
                        in its sole and absolute discretion (a) to prevent an emergency, (b) to protect
                        or enforce the rights of ThermoSpas, of any ThermoSpas affiliate or subsidiary,
                        or of any third party, (c) to comply with any law, rule, court order, or subpoena,
                        (d) to protect the business, property, or operations of ThermoSpas or of any ThermoSpas
                        affiliate or subsidiary, or (e) in connection with any sale, acquisition, merger,
                        or other combination of the business of ThermoSpas or of any ThermoSpas affiliate
                        or subsidiary with any third party.</p>
                    <p>
                        <strong>Disclosures At Your Request.</strong>&nbsp;ThermoSpas may share your PII
                        with third parties to whom you explicitly ask ThermoSpas to send your information.</p>
                    <h4>
                        LINKS TO OTHER WEBSITES</h4>
                    <p>
                        Each ThermoSpas Website may contain links to third party websites to which this
                        privacy policy does not apply. If you use any such link to leave a ThermoSpas Website,
                        ThermoSpas (a) may not have any control over the website to which you may be directed
                        and (b) is not responsible for the protection and privacy of any information you
                        provide to the operator of that other website. ThermoSpas strongly encourages you
                        to read the privacy policy of any website you visit, whether you navigate to that
                        website through a ThermoSpas Website or otherwise, to discern what information that
                        third party website may collect from you and how the operators of that third party
                        website may use that information.</p>
                    <h4>
                        REVIEW/OPT OUT</h4>
                    <p>
                        If you would like to review your PII as maintained by ThermoSpas or remove your
                        PII from ThermoSpas&#39; database, please send an email to privacy&#64;thermospas.com.
                        In your inquiry please specify sufficient information such that ThermoSpas is able
                        to identify who you are and locate your PII, including without limitation your name
                        and your email address.</p>
                    <h4>
                        PRIVACY POLICY CHANGES</h4>
                    <p>
                        By using any ThermoSpas Website or by submitting PII to ThermoSpas, you consent
                        to ThermoSpas&#39; collection and use of PII consistent with this privacy policy.
                        ThermoSpas reserves the right in its sole and absolute discretion to modify any
                        provision in this privacy policy at any time and for any reason consistent with
                        applicable law, and you agree to be bound to any such modification to the same extent
                        as if the modification had been made before you submitted PII to ThermoSpas. If
                        ThermoSpas modifies this privacy policy, (a) ThermoSpas will post the revised privacy
                        policy on each ThermoSpas Website, and (b) the modification shall automatically
                        take effect when the modified privacy policy is first posted. PLEASE PERIODICALLY
                        REVISIT A THERMOSPAS WEBSITE TO REVIEW ANY CHANGES THERMOSPAS MAY HAVE MADE TO THIS
                        PRIVACY POLICY.</p>
                </div>
            </div>
        </div>
<div id="popup2" class="lightbox">
            <div class="heading">
                <a class="close" href="#">X</a> <span class="close-text">hit <span>escape</span> to
                    close</span>
                <h2>
                    Terms and Conditions</h2>
            </div>
            <div class="area">
                <h3>
                    $1,000 Bonus Gifts Breakdown&#42;</h3>
                <br />
                <div class="frame">
                    <p>
                        <strong>&#36;400 Cash Discount - </strong>Save &#36;400 on any Designer Series Spa</p>
                    <p>
                        <strong>Free Delivery & Installation -</strong> A &#36;450 value that includes a
                        full inspection and complete spa education</p>
                    <p>
                        <strong>Free Chemical Starter Kit -</strong> A &#36;150 value that includes everything
                        you need to start enjoying your hot tub immediately</p>
                    <p style="font-style: italic">
                        &#42;&#36;1,000 Bonus Gifts are only valid during initial visit and may not be combined
                        with any other offer. Discount only applies to the purchase of a Designer Series
                        hot tub.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>