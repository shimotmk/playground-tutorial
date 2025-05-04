<?php
/*
Plugin name: My Playground Plugin
*/

function my_custom_plugin() {
	echo "<h1>Hello from My Playground Plugin!</h1>";
}
add_action('admin_notices', 'my_custom_plugin');
