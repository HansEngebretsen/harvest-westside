<?php
/**
*Template Name: Home Page
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header') ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<section id="intro-top"><div class="inner-container"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/template/index-top-background.jpg" alt="logo"></div></section>

<div class="container">

    <!-- Example row of columns -->
    <div class="row-for-three clearfix">
        <div class="one-third-col">
            <a href="/index.php/church"><h2>Church</h2>
            <p>A small community church where God’s love is known and shared</p>
            <p><a class="btn" href="/index.php/church">Church Site &raquo;</a></p></a>
        </div>
        <div class="one-third-col harvest">
            <a href="/index.php/market"><h2>Market</h2>
            <p>A neighborhood market providing essential resources for the community</p>
            <p><a class="btn" href="/index.php/market">Market Site &raquo;</a></p></a>
       </div>
        <!--<div class="one-third-col clinic">
            <a href="/index.php/clinic/"><h2>Clinic</h2>
            <p>A mobile health clinic offering free, quality medical care</p>
            <p><a class="btn" href="/index.php/clinic">Clinic Site &raquo;</a></p></a>
        </div>-->
    </div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>