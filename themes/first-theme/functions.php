<?php
/***
 * @name: functions.php
 * @author: Osvaldo Alves
 * @description: This file work as plugin
***/

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup() {
    
    add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus(
		array(
		    'primary' => "Primary"
		)
	);

}

?>
