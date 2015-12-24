<?php

/*
Загружаемые скрипты и стили
*/
function load_style_script(){
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);
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
register_sidebar(array(
					'name' => 'Sidebar', 
					'id' => 'sidebar', 
					'before_widget' => '<div class="sidebar-widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3>',
					'after_title'   => '</h3>',
					));
register_sidebar(array(
					'name' => 'Footer', 
					'id' => 'footer', 
					'before_widget' => '<div class="footer-info %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3>',
					'after_title'   => '</h3>',
					));
register_sidebar(array(
					'name' => 'Social', 
					'id' => 'social', 
					//'before_widget' => '<div class="footer-info %2$s">',
					//'after_widget'  => '</div>',
					//'before_title'  => '<h3>',
					//'after_title'   => '</h3>',
					));
/*
* Банер
*/
function banner_posts(){
  $labels = array(
	'name' => 'Баннеры', // Основное название типа записи
	'singular_name' => 'Баннер', // отдельное название записи типа Book
	'add_new' => 'Добавить новый',
	'add_new_item' => 'Добавить новый баннер',
	'edit_item' => 'Редактировать баннер',
	'new_item' => 'Новый баннер',
	'view_item' => 'Посмотреть баннер',
	'search_items' => 'Найти баннер',
	'not_found' =>  'Банер не найден',
	'not_found_in_trash' => 'В корзине баннер не найдено',
	'parent_item_colon' => '',
	'menu_name' => 'Баннеры'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','thumbnail')
  );
	register_post_type('banner',$args);
}
add_action('init', 'banner_posts');

/*
* Слайдер
*/
function slid_posts(){
  $labels = array(
	'name' => 'Слайдеры', // Основное название типа записи
	'singular_name' => 'Слайдер', // отдельное название записи типа Book
	'add_new' => 'Добавить новый',
	'add_new_item' => 'Добавить новый слайдер',
	'edit_item' => 'Редактировать слайдер',
	'new_item' => 'Новый слайдер',
	'view_item' => 'Посмотреть слайдер',
	'search_items' => 'Найти слайдер',
	'not_found' =>  'Слайдер не найден',
	'not_found_in_trash' => 'В корзине слайдер не найдено',
	'parent_item_colon' => '',
	'menu_name' => 'Слайдеры'

  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','thumbnail', 'editor')
  );
	register_post_type('slider',$args);
}
add_action('init', 'slid_posts');