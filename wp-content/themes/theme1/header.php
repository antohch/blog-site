<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<?php wp_head();?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
<script>
		$(function() {
			$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			  pager: true,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  random: false,          // Boolean: Randomize the order of the slides, true or false
			  pause: false,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "",   // String: Text for the "previous" button
			  nextText: "",       // String: Text for the "next" button
			  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
			  
			  
			  
			  
			  
			var pull 		= $('#pull');
				menu 		= $('.menu-main ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
			});
			
		});
</script>
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