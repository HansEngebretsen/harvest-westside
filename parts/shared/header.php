<header id="header" class="clearfix">
    <section  class="top-nav">
        <nav>
            <ul>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </ul>
        </nav>

    </section>
   

   <?php if( is_page('church') ) :?>
    	<section class="page-nav clearfix">
    	    <nav class="clearfix wrapper">
    	        <a href="<?php echo home_url(); ?>" class="logo">Harvest Community Church <img src="<?php bloginfo('template_directory'); ?>/img/template/logo-church.png" /></a>
    	        <div class="service-time"><span>Restore Repair Rebuild</span></div>
    	       <div class="page-link-outer"> <ul class="clearfix page-link-container">
    	            <li class="page-link active" id="page-link-zero"><a href="#page-zero">Home</a></li>
    	            <li class="page-link" id="page-link-one"><a href="#page-one">Services</a></li>
    	            <li class="page-link" id="page-link-two"><a href="#page-two">About</a></li>

    	            <li class="page-link" id="prayer-room-link"><a href="http://westsideharvest.com/index.php/prayer-board">Prayer Room</a></li>
    	            <li class="page-link" id="devos-link"><a href="http://www.theburghchurch.com/home/index.php?option=com_content&view=section&layout=blog&id=10&Itemid=64" target="_blank">Devos</a> | </li>
    	            <li class="page-link" id="contact-handle" ><a href="#" class="contact-handle">Contact</a></li>
    	        </ul>
    	        </div>
    	    </nav>
    	</section>
 <?php else: ?>
 <?php endif;?>  
   
</header>
