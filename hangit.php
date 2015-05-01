<?php
/**
 * Plugin Name: Hanging Indent shortcode
 * Plugin URI: http://bionicteaching.com
 * Description: Use [hangit] Whatever your citation is[/hangit].
 * Version: .9
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */
 
 /*   2014  PLUGIN_AUTHOR_NAME  (email : bionicteaching@gmail.com)
 
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
 
function hangit_shortcode( $atts, $content = null ) {
return '<p style="margin-left:.5in;text-indent:-.5in;">' . $content . '</p>';
}
add_shortcode( 'hangit', 'hangit_shortcode' );