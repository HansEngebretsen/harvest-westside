	            <footer>
	                <p>&copy; Harvest Community Center <?php echo date("Y"); ?></p>
	            </footer>
	        

	        </div> <!-- /container -->

	        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.9.1.min.js"></script>
	        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
	        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	        
	       	<?php if( is_page('church') ) :?>
	        	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/enc-base64-min.js"></script>
	        	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/hmac-sha256.js"></script>
	        	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/church.js"></script>
	        <?php endif;?>  
	        <script>
	            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	            s.parentNode.insertBefore(g,s)}(document,'script'));
	        </script>
	    </body>
	</html>