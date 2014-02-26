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
<div class='embed-container'><iframe src='https://player.vimeo.com/video/87631611' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>	                   </div>
	                    <aside>
	                      <section class="welcome">
	                        <h1>Welcome</h1>
	                        <p><?php the_field('home_welcome_description'); ?></p>
	                        <a href="https://maps.google.com/maps?q=2232+s.+Nogales+Avenue+Tulsa,+OK&hl=en&sll=36.152302,-95.87801&sspn=0.718543,1.19339&hnear=2232+S+Nogales+Ave,+Tulsa,+Oklahoma+74107&t=m&z=16&iwloc=A"class="button">Come Visit Us!</a>
	                     <div class="give-wrap"> 
	                     	<button class="button give-toggle">Online Giving</button>
		                     <form action="https://authorize.payments.amazon.com/pba/paypipeline" class="give" method="post">
		                      	  <input type="hidden" name="returnUrl" value="http://westsideharvest.com/index.php/church">
		                      	  <input type="hidden" name="processImmediate" value="1">
		                      	  <input type="hidden" name="accessKey" value="11SEM03K88SD016FS1G2">
		                      	  <input type="hidden" name="signatureMethod" value="HmacSHA256">
		                      	  <input type="hidden" name="collectShippingAddress" value="0">
		                      	  <input type="hidden" name="isDonationWidget" value="1">
		                      	  <input type="hidden" name="amazonPaymentsAccountId" value="BMLSSZAEMKIO7H8AHVKKLB247KKJC17BEZFMLI">
		                      	  <input type="hidden" name="cobrandingStyle" value="logo">
		                      	  <input type="hidden" name="immediateReturn" value="0">
		                      	  <input type="hidden" name="description" value="Donate to the Harvest Community Church">
		                      	  <input type="hidden" name="abandonUrl" value="http://westsideharvest.com/index.php/church">
		                      	  <input type="hidden" name="signatureVersion" value="2">
		                      	  <input type="hidden" name="signature" value="4V8J9EPW5l8SM0/x0efOJqdldxvFpDQO4BTQwGDPCiw=">
		                      	  <input type="text" name="amount" class="amount-input" value="" placeholder="Amount">		            		
		                      	  <input type="submit" class="button give" border="0" value="Give">
		                      </form>
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
	                  <p>Worship for all ages begins at 11:00am. After announcements and songs, children are dismissed for Nursery, Toddler Class, or Children’s Church while adults stay for the teaching.</p>
	                <a href="http://feeds.feedburner.com/theburghchurch/zZFu" class="button podcasts">Podcasts</a>

	                </div>
	                <div class="collumn">
	                  <h1>Wednesdays</h1>
	                  <p>Join us at 6:00pm for a delicious, home-cooked meal. At 6:30, children head to Kid’s Connection, Youth head to J-Crew, and adults enjoy an in-depth Bible study. And again, Nursery and Toddler class are available for those who qualify!</p>
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
	                     	<button class="button give-toggle">Online Giving</button>
		                     <form action="https://authorize.payments.amazon.com/pba/paypipeline" class="give" method="post">
		                      	  <input type="hidden" name="returnUrl" value="http://westsideharvest.com/index.php/church">
		                      	  <input type="hidden" name="processImmediate" value="1">
		                      	  <input type="hidden" name="accessKey" value="11SEM03K88SD016FS1G2">
		                      	  <input type="hidden" name="signatureMethod" value="HmacSHA256">
		                      	  <input type="hidden" name="collectShippingAddress" value="0">
		                      	  <input type="hidden" name="isDonationWidget" value="1">
		                      	  <input type="hidden" name="amazonPaymentsAccountId" value="BMLSSZAEMKIO7H8AHVKKLB247KKJC17BEZFMLI">
		                      	  <input type="hidden" name="cobrandingStyle" value="logo">
		                      	  <input type="hidden" name="immediateReturn" value="0">
		                      	  <input type="hidden" name="description" value="Donate to the Harvest Community Church">
		                      	  <input type="hidden" name="abandonUrl" value="http://westsideharvest.com/index.php/church">
		                      	  <input type="hidden" name="signatureVersion" value="2">
		                      	  <input type="hidden" name="signature" value="4V8J9EPW5l8SM0/x0efOJqdldxvFpDQO4BTQwGDPCiw=">
		                      	  <input type="text" name="amount" class="amount-input" value="" placeholder="Amount">		            		
		                      	  <input type="submit" class="button give" border="0" value="Give">
		                      </form>
		                  </div>
		            		<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		            		<input type="hidden" name="cmd" value="_donations">
		            		<input type="hidden" name="business" value="daniel@faithburgh.com">
		            		<input type="hidden" name="item_name" value="The Burgh Donation">
		            		<input type="hidden" name="no_shipping" value="0">
		            		<input type="hidden" name="no_note" value="1">
		            		<input type="hidden" name="currency_code" value="USD">
		            		<input type="hidden" name="tax" value="0">
		            		<input type="hidden" name="bn" value="PP-DonationsBF">
		            		<input type="submit" class="button" border="0" name="submit" value="Online Giving">
		            		</form> -->
	    				</section>
	    				<section class="half-right">
	            			<img src="<?php the_field('about_photo'); ?>" />
	            		</section>
	            	</div>
	            </section>
	          	<?php comments_template( '', true ); ?>


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>