<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<?php wp_head();?>


</head>

<body>
<div class="head-wrapper">
	<div class="head">
		<div class="head-logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="" /></a></div>
		<?php $banner = new WP_Query(array('post_type' => 'banner', 'posts_per_page' => 1));?>
		<?php if($banner->have_posts()): while($banner->have_posts()): $banner->the_post();?>
			<div class="head-banner"><?php the_post_thumbnail('full'); ?></div>
		<?php endwhile;?>
		<?php else:?>
			<p>место для баннер 728х90<p/>
		<?php endif;?>
		<?php wp_reset_postdata();?>
		
	</div>
</div>
<div class="menu-wrapper">
	<div class="menu-main">
		<div class="menu-screen">
			<?php if(!dynamic_sidebar('menu_header')): ?>
			<span>Это область меню, добавляемого из виджетов</span>
			<?php endif; ?>
			<ul class ="ico-social">
				<?php if(!dynamic_sidebar('social')):?>
					<span>Место для иконок с социальными сетями</span>
				<?php endif?>
			</ul>
			<a id="pull" href="#">Меню</a>
		</div>
	</div>
</div>