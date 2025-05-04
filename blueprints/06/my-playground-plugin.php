<?php
/*
Plugin Name: My Playground Plugin
*/

function my_playground_plugin() {
	echo '<h1>Hello, My Playground!</h1>';
}
add_action('admin_notices', 'my_playground_plugin');
