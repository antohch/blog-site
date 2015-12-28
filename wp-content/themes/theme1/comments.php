<ul class="commentlist">
	<h3 class="comment-reply-title">Комментарии:</h3>
	<?php $post_id = get_the_ID();?>
	<h4>всего <?php echo wp_count_comments($post_id)->total_comments; ?></h2>
	<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
	<?php $arg = array ( 
				fields => array(
					'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
					'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
					'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
					'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
					),
				);?>
	<?php comment_form($arg); ?>
</ul>