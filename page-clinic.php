<?php
/**
*Template Name: Clinic Page
 * @package   WordPress
 * @subpackage  Starkers
 * @since     Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 <div class="main-content clinic-page">
 	<h1 class="title"> <img src="<?php bloginfo('template_directory'); ?>/img/Template/harvest-clinic-logo.png" class="clinic-logo" alt="The Harvest Westside Clinic"></h1>
 	<p class="clinic-description"><?php the_field('clinic_main_description'); ?></p>

 		<img src="<?php the_field('clinic_main_image'); ?>" class="clinic-photo" alt="The Harvest Westside Clinic">
 	<aside class="clinic-aside">
       <div class="service-times">
        <div class="address clearfix">
          <h2>Days:</h2>
          <h3><?php the_field('date_of_clinic'); ?></h3>
        </div>
        <section class="address">
          <h2>When:</h2>
          <p><?php the_field('hours'); ?></p>
        </section>
      </div>
    </aside>
	
</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>