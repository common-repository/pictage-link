<?php
/*
Plugin Name: Pictage Link
Plugin URI: http://code.google.com/p/pictage-link/
Description: For Pictage Members. This plug-in displays a generated list of your active events with more customization options. 
Version: 0.3
Author: Alfred Gutierrez
Author URI: http://uberdood.com/contact
License: GPL2
*/
?>

<?php
/*  Copyright 2010  Alfred Gutierrez  (email : virusidx@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>

<?

function piclink() { //event listings functions
include("pictage.php");
}

function piclink_css() { //include stylesheet
include("style.php");
}

function piclink_jquery() { //include jquery
echo '<script src="wp-content/plugins/pictage-link/jquery.js" type="text/javascript"></script>';
}

function piclink_admin() { //add submenu admin page
  add_submenu_page('options-general.php', 'Pictage Link Options', 'Pictage Link', 'administrator', 'pictage-link', 'piclink_options');
}

function piclink_options() {
  include("piclink-options.php");
}

add_action('admin_menu', 'piclink_admin');
add_action('wp_head', 'piclink_css'); //imports stylesheet into head
add_action('wp_head', 'piclink_jquery'); //imports jquery into head
add_shortcode('piclink', 'piclink'); //adds shortcode [piclink] to use in posts/pages


add_option('admin_studio_id', ' ');
add_option('admin_link_color', '3366CC');
add_option('admin_hover_color', '990022');
add_option('admin_visited_color', 'FFFFFF');
add_option('admin_font_style', 'Times New Roman');
add_option('admin_font_weight', 'Normal');
add_option('admin_font_size', '10');
add_option('admin_line_height', '1.75');



?>

