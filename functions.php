<?
function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

function prefix_conditional_body_class( $classes ) {
    if( is_page_template('mytemplate.php') )
        $classes[] = 'mytemplate';

    return $classes;
}
add_filter( 'body_class', 'prefix_conditional_body_class' );

add_theme_support( 'post-thumbnails' ); // для всех типов постов

?>
