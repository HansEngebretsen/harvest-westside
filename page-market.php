<?php
/**
*Template Name: Market Page
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 <div class="main-content market-page">
 	<img src="<?php bloginfo('template_directory'); ?>/img/Template/market-logo.png" class="market-logo" alt="The Harvest Westside Market">
 	<div class="right-section">
    <div class='embed-container'>
      <iframe src='https://player.vimeo.com/video/87631611' frameborder='0' webkitAllowFullScreen='' mozallowfullscreen='' allowFullScreen=''></iframe>
    </div>
 		<p><?php the_field('main_market_description'); ?></p>
 		<img src="<?php the_field('main_image'); ?>" alt="Westside Harvest Market" />
 		<img src="<?php the_field('second_image'); ?>" alt="Westside Harvest Market" />
 	</div>
</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>