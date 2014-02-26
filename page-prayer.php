<?php
/**
*Template Name: Prayer Page
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
if(isset($_POST['email'])) {
     
    $name = $_POST['author']; 
    $email_from = $_POST['email'];
    $comments = $_POST['comment']; 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
   
    $email_message = "Prayer request received on website:\n\n";
    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    
    $to = 'michelle@westsideharvest.com';
    $subject = 'Harvest Website Prayer Request';

    wp_mail($to, $subject, $email_message);
?>
<div class="wrapper main-content prayer-sent">
<?php
}
else
{
?>
<div class="wrapper main-content">
<?php
}
?>
  	<a href="<?php echo home_url(); ?>" class="logo">Harvest Community Church <img src="<?php bloginfo('template_directory'); ?>/img/template/logo-church.png" /></a>
	<div class="paragraph-right">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
    <script type="text/javascript">
    	$('#submit').click(function(){
    		if (!$('#author').val()) {
    			alert('Please enter your name.');
    			return false;
    		}
    		var email = $('#email').val();
    		if (!email) {
    			alert('Please enter your email address.');
    			return false;
    		}
    		if (email.indexOf('@') < 0) {
    			alert('Please enter a valid email address.');
    			return false;
    		}
    		if (!$('#comment').val()) {
    			alert('Please enter a prayer request.');
    			return false;
    		}
    	})
    </script>
	<div id="comments">
		<p class="prayer-submit">Thanks for submitting a prayer request. We'll be praying for you!</p>
	    <div id="respond" class="comment-respond">
	    		<h3 id="reply-title" class="comment-reply-title">Submit a prayer request <small><a rel="nofollow" id="cancel-comment-reply-link" href="/index.php/prayer-board/#respond" style="display:none;">Cancel reply</a></small></h3>
				<form method="post" id="commentform" class="comment-form">
					<div class="form-left">
						<input id="author" class="name-input" placeholder="Your Name" name="author" type="text">
						<input id="email" class="email-input" placeholder="Your E-mail" name="email" type="text"></div>

						<p class="comment-form-comment">
							<label for="comment" class="hidden">Your Prayer Request:</label>
							<textarea id="comment" class="message-content" name="comment" placeholder="How can we pray for you?" rows="8" aria-required="true"></textarea></p><!-- #form-section-comment .form-section -->												<p class="form-submit">
							<input name="submit" type="submit" id="submit" value="Submit Request">
						</p>
					</div>
				</form>
		</div>
	</div>
</div>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>