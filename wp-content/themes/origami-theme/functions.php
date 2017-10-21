<?php

register_nav_menus(array(
	'primary-menu' => 'Menú Primario',
	'social-menu' => 'Menú Social'
));

add_theme_support('post-thumbnails');

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'fa';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

if(function_exists('register_sidebar')) {
    register_sidebar(array(
            'name' => 'Sidebar Widget',
            'before_widget' => '<div>', 
            'after_widget' => '</div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>',
    ));
}

?>