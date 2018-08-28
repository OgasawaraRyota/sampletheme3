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
