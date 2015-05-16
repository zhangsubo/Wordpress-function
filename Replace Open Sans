<?php
/*
Plugin Name: Replace Open Sans
Plugin URI: http://zhangsubo.cn
Description: 将WordPress 后台中的open-sans字体加载源从Google Fonts替换为360的CDN加载源。
Author: 张小璋
Author URI: http://zhangsubo.cn/
Version: 1.0
Text Domain: 更换开源open-sans
*/

function devework_replace_open_sans() {
	wp_deregister_style('open-sans');
	wp_register_style( 'open-sans', '//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600' );
	wp_enqueue_style( 'open-sans');
}
add_action( 'wp_enqueue_scripts', 'devework_replace_open_sans' );
add_action('admin_enqueue_scripts', 'devework_replace_open_sans');
?>
