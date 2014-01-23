<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to starkers_comment() which is
 * located in the functions.php file.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>
		     
<?php
$comment_args = array(
	'fields' => apply_filters(
		'comment_form_default_fields', array(
			'author' =>
			      '<div class="form-left">' .
			      '<input id="author" class="name-input" placeholder="Your Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			      '" size="30" />',

			 'email' =>
			      
			      '<input id="email" class="email-input" placeholder="Your E-mail" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			      '" size="30"' . $aria_req . ' /></div>',
			'url'    => ''
		)
	),
	'comment_notes_before' => '',
	'class_submit' => 'button',
	'comment_field' => '<p class="comment-form-comment">' .
		'<label for="comment" class="hidden">' . __( 'Your Prayer Request:' ) . '</label>' .
		'<textarea id="comment" class="message-content" name="comment"  placeholder="How can we pray for you?" rows="8" aria-required="true"></textarea>' .
		'</p><!-- #form-section-comment .form-section -->',
    'comment_notes_after' => '',
    'title_reply' => 'Submit a prayer request',
    'label_submit'    => 'Submit Request'

);
comment_form( $comment_args );
?>
	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
	<h1 class="comments-title">Prayer Listing <span>pray for someone</span></h1>
	<div class="comments-section">
	<ul>
		<?php wp_list_comments( array( 'callback' => 'starkers_comment' ) ); ?>
	</ul>
	<div class="navigation">
	    <div class="alignleft"><?php previous_comments_link( '« Newer Comments' ); ?></div>
	    <div class="alignright"><?php next_comments_link( '« Older Comments'); ?></div>   
	</div>
	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Comments are closed</p>
	
	<?php endif; ?>
	</div>

</div><!-- #comments -->
