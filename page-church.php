<?php
/**
*Template Name: Church Page
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="slide-contact">
		<span class="close contact-handle">X</span>
		<h3 class="contact">Get in Touch</h3>
		<ul>
			<li><span>address</span><a href="https://maps.google.com/maps?q=2232+s.+Nogales+Avenue+Tulsa,+OK&hl=en&sll=36.152302,-95.87801&sspn=0.718543,1.19339&hnear=2232+S+Nogales+Ave,+Tulsa,+Oklahoma+74107&t=m&z=16&iwloc=A"> 2232 S. Nogales Ave, Tulsa, OK 74107 </a></li>
			<li><span>phone</span>(918) 582-3665</li>
			<li><span>email</span><a href="mailto:info@westsideharvest.com">info@westsideharvest.com</a></li>
		</ul>
	</div>
	<div class="overlay contact-handle"></div>
	            <section class="page" id="page-zero">
	                <div class="wrapper">
	                   <div class="slider">
                       <div class='embed-container'><iframe src='https://player.vimeo.com/video/87631611' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                     </div>
	                    <aside>
	                      <section class="welcome">
	                        <h1>Welcome</h1>
	                        <p><?php the_field('home_welcome_description'); ?></p>
	                        <a href="https://maps.google.com/maps?q=2232+s.+Nogales+Avenue+Tulsa,+OK&hl=en&sll=36.152302,-95.87801&sspn=0.718543,1.19339&hnear=2232+S+Nogales+Ave,+Tulsa,+Oklahoma+74107&t=m&z=16&iwloc=A"class="button">Come Visit Us!</a>
	                        <div class="give-wrap">
	                     	    <button class="button popup-with-form" href="#online-giving">Online Giving</button>
		                      </div>
	                      </section>

	                       <div class="service-times">
	                        <ul class="times clearfix">
	                          <li class="clearfix">Sun. <?php the_field('service_times_sun'); ?></li>
	                          <li class="clearfix">Wed. <?php the_field('service_times_wednesday'); ?></li>
	                        </ul>
	                        <section class="address">
	                          <h2>Where we at?</h2>
	                          <p>2232 s. Nogales Avenue Tulsa, OK</p>
	                        </section>
	                      </div>
	                    </aside>
	                </div>

	            </section>
	            <section id="page-one">
	              <div class="wrapper clearfix">
	                <h1>Services <span>when to come see us</span></h1>
	                <p><?php the_field('services_description'); ?></p>
	              <section>
	                <div class="collumn">
	                  <h1>Sundays</h1>
	                  <p><?php the_field('services_sunday_description'); ?></p>
	                <a href="http://feeds.feedburner.com/theburghchurch/zZFu" class="button podcasts">Podcasts</a>

	                </div>
	                <div class="collumn">
	                  <h1>Wednesdays</h1>
	                  <p><?php the_field('services_wednesday_description'); ?></p>
	                </div>
	              </section>
	              </div>

	            </section>

	            <section id="page-two" class="about">
	            	<div class="wrapper">
	            		<h1>About the Harvest<span> restore. repair. rebuild</span></h1>
	            		<section class="half-left">
		            		<p> <?php the_field('about_description'); ?></p>
		            		<div class="give-wrap">
	                     	<button class="button popup-with-form" href="#online-giving">Online Giving</button>

	                     	<div id="online-giving" class="mfp-hide donate-form white-popup-block">
                          <h3>Donate to the Harvest</h3>
                          <p>Use the form below to designate the amount you would like to donate, and what you'd like to donate to. You will then be redirected to secure payments through Amazon to complete your billing information.</p>
                          <script async src="https://static-na.payments-amazon.com/OffAmazonPayments/us/js/Widgets.js"></script>
                          <select name="description" class="input-description">
                            <option>--</option>
                            <option div_id="church_support" >Harvest Community Church                         </option>
                            <option div_id="market_support" >Harvest Market                                   </option>
                            <option div_id="daniel_support" >Staff Support - Daniel May                       </option>
                            <option div_id="sengal_support" >Missionary Support - Emily Sengal                </option>
                            <option div_id="neeraj_support" >Missionary Support - Neeraj Gautam               </option>
                            <option div_id="sonyad_support" >Missionary Support - Sonya Dilworth              </option>
                            <option div_id="ryanen_support" >Missionary Support - Ryan &amp; Melissa Entwistle</option>
                          </select>
                          <div class="form-wrap">
                            <div
                                id="church_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="0"
                                data-ap-signature="oqmHYCggiOeAgRkXMj%2FrSLgHXvqCX7w3lgXNz44tMAw%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Harvest Community Church"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="market_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="0"
                                data-ap-signature="M9ktSclKXVRa4bdhfPIfoyyaI6CD3unORexZy4BwKus%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Harvest Market"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="daniel_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="1"
                                data-ap-signature="Rzdms4TttJUKhhcFD%2BlsWBK2DVvAYccIOARKCJ3yqmg%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Staff Support - Daniel May"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="sengal_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="1"
                                data-ap-signature="MHGgxWkO6U2q6DfsPatnDmZzcdQW1sKz5r5WADIrke0%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Missionary Support - Emily Sengal"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="neeraj_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="1"
                                data-ap-signature="yU0cSPJKXWLzrvcgk6Ro15yJa5cSv%2Bx83G3Qrvtk%2BGY%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Missionary Support - Neeraj Gautam"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="sonyad_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="1"
                                data-ap-signature="rhaDaPnOrU4E0pJyE%2B50Igz0JrgiU8n23UVPeU%2FCVPc%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Missionary Support - Sonya Dilworth"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                            <div
                                id="ryanen_support"
                                class="amazon_payments"
                                data-ap-widget-type="expressDonationWidget"
                                data-ap-widget-theme="ap-light"
                                data-ap-widget-amount-presets="25,50,100,150"
                                data-ap-widget-default-amount="1"
                                data-ap-signature="B0oypbxE%2FXGYAiSj9zuqAAklbPQwCBiSlzNv0lgol2A%3D"
                                data-ap-seller-id="AKQ4KNZWFDUIT"
                                data-ap-access-key="AKIAINII5XHTMBO4V5LA"
                                data-ap-lwa-client-id="amzn1.application-oa2-client.08628897464f4a15af2b15a331ee45d9"
                                data-ap-return-url="http://www.westsideharvest.com/index.php/church"
                                data-ap-currency-code="USD"
                                data-ap-amount="0"
                                data-ap-note="Missionary Support - Ryan and Melissa Entwistle"
                                data-ap-shipping-address-required="false"
                                data-ap-payment-action="AuthorizeAndCapture">
                            </div>
                          </div>
                        </div>
		               </div>
	    				</section>
	    				<section class="half-right">
	            	<img src="<?php the_field('about_photo'); ?>" />
	            </section>
	          </div>
	        </section>
	      <?php comments_template( '', true ); ?>


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
