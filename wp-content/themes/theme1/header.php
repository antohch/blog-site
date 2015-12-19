<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?></title>
<?php wp_head();?>
<script type="text/javascript">
	$(document).ready( function(){
		$('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
	});
</script>
</head>

<body>
<div class="head-wrapper">
	<div class="head">
		<div class="head-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="" /></div>
		<div class="head-banner"><img src="<?php bloginfo('template_url'); ?>/images/728x90.jpg" alt=""/></div>
	</div>
</div>
<div class="menu-wrapper">
	<div class="menu-main">
<?php if(!dynamic_sidebar('menu_header')): ?>
<span>Это область меню, добавляемого из виджетов</span>
<?php endif; ?>
	<!--
		<ul class ="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Design Services</a></li>
			<li><a href="#">Request Quote</a></li>
			<li><a href="#">Advertise</a></li>
			<li><a href="#">Contact Me</a></li>
		</ul>
	-->	
		<ul class ="ico-social">
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-vk.png" alt="мы вконтакте"/></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-youtube.png" alt="мы на youtube"/></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-facebook.png" alt="мы на facebook"/></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-twitter.png" alt="наш твиттер"/></a></li>
		</ul>
	</div>
</div>