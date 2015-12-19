<?php

/*
Загружаемые скрипты и стили
*/
function load_style_script(){
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


/*
Загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');


/*
Добавляем виджиты
*/
register_sidebar(array(
					'name' => 'Меню', 
					'id' => 'menu_header', 
					'before_widget' => '', 
					'after_widget' => '',
					));
/*$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );*/