<?php
/**
 *テーマ機能の追加
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  R.ogasawara
 *
 */
function theme_setup() {
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
}
	register_nav_menus(
		array(
			'primary2'=> 'Primary Menu2'
		)
	);
add_action( 'after_setup_theme', 'theme_setup');



/**
 *ウィジェット
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  R.ogasawara
 *
 */
function theme_setup_widgets_init() {
	register_sidebar(
		array(
			'name'         =>'サイドバー',
			'id'           =>'sidebar-1',
			'description'  =>'画面の右上にあるサイドバー',
			'before_widget'=>'<section>',
			'after_widget' =>'</section>',
			'before_title' =>'<h2 class="widget_title">',
			'after_title'  =>'</h2>'
		)
	);
}
add_action( 'widgets_init', 'theme_setup_widgets_init' );

/**
 * スタイルシートの追加
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  R.ogasawara
 *
 */
function theme_styles() {
	wp_enqueue_style( 'theme_style',  get_stylesheet_uri() );
	wp_enqueue_style( 'theme_common', get_template_directory_uri() . '/css/common.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
 /**
 * jsの追加
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  R.ogasawara
 *
 */
function theme_scripts() {
	wp_enqueue_style( 'theme_style',  get_stylesheet_uri() );
	wp_enqueue_script( 'theme_common', get_template_directory_uri() . '/js/slideshow.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
