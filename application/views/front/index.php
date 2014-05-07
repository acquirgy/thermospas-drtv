<!DOCTYPE html>
<html lang="en">
<head>
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
	<div id="wrapper">
    <div id="topspace">
      <!-- logotype -->
      <h1 class="logo"><a href="#">ThermoSpas - Designed to Improve Your Life</a></h1>
      <div class="phone-top">
       <p ><strong>Have Questions?</strong></p>
        <p>1-800-985-5084</p>
     </div>
     <div class="partners" >
      <img src="/assets/images/30yr.jpg" alt="image description" />
      <img src="/assets/images/img10.png" alt="image description" />
      <img src="/assets/images/img11.png" alt="image description" />
    </div>
  </div>
			<!-- header -->
			<header id="header">
				<!-- main image -->
				<div class="main-image">
					<img src="/assets/images/img01.jpg" height="410" alt="image description">
				</div>
				<div class="header-frame">
					<div class="header-holder">
						<!-- logotype -->
						<div class="top-block">
							<div class="arrow-right">
								<!-- main promo -->
								<div class="main-promo">
                  <strong class="title">Get Your <span>FREE</span> DVD, Brochure, &amp; Backyard Resorts Guide!</strong>
									Plus, Right Now get <strong>$1,000 in Savings</strong>
								</div>
							</div>
							<!-- registration form -->
							<?= form_open('main/confirmation', array('class'=>'form-reg')) ?>
              <fieldset>
                <legend>Register form</legend>
                <strong class="title">Fast, Easy &amp; FREE!</strong>
                <p class="getstarted">Just fill out the quick form below to receive your FREE information. No obligation!</p>
                <p class="req">* required</p>
                <input type="hidden" name="tester" class="tester" value="invalid" />
                <div class="row">
                  <div class="row-area">
                    <input name="fname" id="fname" class="text1 required" type="text" placeholder="First Name*" title="First Name*" />
                  </div>
                  <div class="row-area">
                    <input name="lname" class="text2 required" type="text" placeholder="Last Name*" title="Last Name*" />
                  </div>
                </div>
                <div class="row row-area">
                  <input id="Phone" name="phone" type="text" class="required-number" placeholder="Phone*" title="Phone*" />
                </div>
                <div class="row row-area">
                  <input id="Zip" name="zip" class="required" type="text" placeholder="Zip Code*" title="Zip Code*" />
                </div>
                <div class="row row-area">
                  <input type="text" name="email" value="Email" placeholder="Email" />
                </div>
                <div class="row">
                  <input type="submit" value="Get Your FREE DVD &amp; Brochure NOW!" />
                </div>
                <div id="form-links" class="row">
                  <a class="lightbox-opener" href="#popup1">Your Info is Secure</a>&nbsp;|&nbsp;
                  <a class="lightbox-opener" href="#popup1">Privacy Policy</a>
                </div>
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
							<img src="/assets/images/backyard-resorts.jpg" alt="image description">

						</div>
						<!-- promo text -->
						<div class="promo-txt">
							<h2>Wouldn’t it be great to get away to a luxurious spa resort <strong><em>whenever you felt like it?</em></strong></h2>
							<p>Well, you can! Find out how easy and affordable it can be for you to create and enjoy a beautiful backyard resort – <em><strong>right in your own backyard</strong></em> – with a ThermoSpas home spa, customized specifically for you! </p>
							<p>Get started right now with a <strong><em>FREE</em></strong> DVD, informational brochure, and complimentary Backyard Resorts Guide packed with ideas to help you create your own personal backyard resort. <em>PLUS</em>, get <em><strong>$1,000 in savings!</strong></em> </p>
						</div>
					</div>
           <!-- advantage -->
          <div class="advantage-block">
            <span class="title">What Real Customers Are Saying</span>
            <!-- videos -->
            <div class="boxes">
              <div class="box">
                  <a class="yt" href="https://www.youtube.com/watch?v=jC5p_bKz-FU&amp;autoplay=1&amp;rel=0&amp;modestbranding=1&amp;showinfo=0"><img src="/assets/images/Testimonial_Thumb_1a.jpg" alt="Testimonial 1" onmouseover="this.src='/assets/images/Testimonial_Thumb_1b.jpg';" onmouseout="this.src='/assets/images/Testimonial_Thumb_1a.jpg';"></a><br/>
                  Isaac and Isa Matthews
              </div>
              <div class="box">
                 <!-- <iframe width="230" height="200" src="//www.youtube.com/embed/KvsrZTVev2c" frameborder="0" allowfullscreen></iframe><br/> -->
                  <a class="yt" href="https://www.youtube.com/watch?v=KvsrZTVev2c&amp;autoplay=1&amp;rel=0&amp;modestbranding=1&amp;showinfo=0"><img src="/assets/images/Testimonial_Thumb_2a.jpg" alt="Testimonial 2" onmouseover="this.src='/assets/images/Testimonial_Thumb_2b.jpg';" onmouseout="this.src='/assets/images/Testimonial_Thumb_2a.jpg';"></a><br/>
              Dr. Michael and Shannon Holloway
              </div>
              <div class="box">
                  <a class="yt" href="https://www.youtube.com/watch?v=u15XBQ4CMFI&amp;autoplay=1&amp;rel=0&amp;modestbranding=1&amp;showinfo=0"><img src="/assets/images/Testimonial_Thumb_3a.jpg" alt="Testimonial 3" onmouseover="this.src='/assets/images/Testimonial_Thumb_3b.jpg';" onmouseout="this.src='/assets/images/Testimonial_Thumb_3a.jpg';"></a><br/>
                  Wayne Holmok
              </div>
              <div class="box">
                  <!-- <iframe width="230" height="200" src="//www.youtube.com/embed/mgRjiy_xFfo" frameborder="0" allowfullscreen></iframe><br/> -->
                   <a class="yt" href="https://www.youtube.com/watch?v=mgRjiy_xFfo&amp;autoplay=1&amp;rel=0&amp;modestbranding=1&amp;showinfo=0"><img src="/assets/images/Testimonial_Thumb_4a.jpg" alt="Testimonial 4" onmouseover="this.src='/assets/images/Testimonial_Thumb_4b.jpg';" onmouseout="this.src='/assets/images/Testimonial_Thumb_4a.jpg';"></a><br/>
                    Lynda Harned and Diane Chvila
              </div>
            </div>
          </div>
           <div class="features-holder">
            <!-- features -->
            <div class="features">
              <strong class="title">As seen on:</strong>
              <ul class="features-list">
                <li><img src="/assets/images/img05.jpg" alt="image description"></li>
                <li><img src="/assets/images/img07.jpg" alt="image description"></li>
                <li><img src="/assets/images/img08.jpg" alt="image description"></li>
              </ul>
            </div>
            <div class="btn-get">
              <a href="#" class="focusForm">Get your <span>FREE</span> DVD, Brochure, Guide, and $1,000 Savings!</a>
            </div>
          </div>
				</section>
				<!-- footer -->
        <div id="footer">
         <div class="partners-bottom bottom-text">
          <p class="phone mobileonly"><strong>Get Your Free DVD, Brochure, and Guide Now!</strong><br /><span class="call">Call Today <a href="tel:1-800-985-5084" style="text-decoration: underline;">1-800-985-5084</a></span></p>
          <p class="phone nonmobile" ><strong>Get Your Free DVD, Brochure, and Guide Now!</strong><br /><span class="call">Call Today 1-800-985-5084</span></p>
        </div>
        <div class="partners-bottom" >
          <img src="/assets/images/img10.png" alt="image description" />
          <img src="/assets/images/img11.png" alt="image description" />
        </div>

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