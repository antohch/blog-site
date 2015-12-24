<?php /*
Template Name: Вывод всех записей
*/
?>
<?php get_header();?>
<div class="content-wrapper">
	<div class="content-main">
		<div class="content">
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
			'paged' => $paged,
			'post_type' => 'post',
			'nopaging' => false,
			'posts_per_page'=> 0,
			'post_status' => 'publish',
			);
$the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();?>
<div class="articles">
	<div class="articles-gen-img">
		<a href="<?php the_permalink(); ?>">
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail(); ?>
		<?php else: ?>
			<img src="<?php bloginfo('template_url'); ?>/images/no_img.jpg" alt="" />
		<?php endif; ?>
		</a>
	</div>
	<div class="articles-head">
		<span class="articles-date"><img src="<?php bloginfo('template_url'); ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author(); ?></span> - <?php the_time('M jS, Y') ?></span>
		<span class="articles-comments"><img src="<?php bloginfo('template_url'); ?>/images/articles-comment.jpg" alt="commets" /> <a href="#"><?php comments_popup_link(); ?></a></span>           
	</div>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_excerpt(); ?>
	<p><a href="<?php the_permalink(); ?>">Read More</a></p>
</div>
<?php endwhile; ?>
			<div class="pager">
				<?php wp_pagenavi( array( 'query' => $the_query) ); ?>
			</div>
<?php endif?>
<?php wp_reset_postdata();?>
		</div>
			<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>
