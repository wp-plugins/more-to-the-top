<?php /*

**************************************************************************

Plugin Name:  More To The Top
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/more-to-the-top/
Version:      1.1.0
Description:  A very simple plugin that makes the <code>&lt;!--more--&gt;</code> link not scroll down when viewing the rest of the post.
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************

Copyright (C) 2008 Viper007Bond

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/

add_filter( 'the_content', 'moretothetop' );

function moretothetop( $content ) {
	global $post;

	return str_replace( array( '#more-' . $post->ID . '"', '<span id="more-' . $post->ID . '"></span>' ), array( '"', '' ), $content);
}

// I said it was a very simple plugin, didn't I? ;)

?>