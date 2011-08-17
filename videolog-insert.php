<?php
/*
Plugin Name: Videolog Insert Videos
Version: 1.1.1
Plugin URI: http://www.videolog.tv/blog/?p=458
Author: Videolog Technology Team
Author URI: http://www.videolog.tv/blog/
Description: Put videos of Portal Videolog.tv on WordPress with shortcodes
*/

function videolog_callback($atts, $content=null) {
	$id_video = $atts[0];

	extract(shortcode_atts(array(
		'width' 	=> '',
		'height' 	=> ''
	), $atts));

	if (empty($id_video) || !is_numeric($id_video)) return '<p>Invalid ID</p>';
	if ($height && !$width) $width = intval($height * 4 / 3);
	if (!$height && $width) $height = intval($width * 3 / 4);
	if (!$height && !$width) :
		$width = 500;
		$height = 375;
	endif;
	
	return	'<iframe width="$width" height="$height" src="http://www.videolog.tv/v/index.php?id_video=$id_video" scrolling="no" frameborder="0" allowfullscreen></iframe>'.
			'<p><a href="http://www.videolog.tv/video?$id_video">Veja o Video no Videolog.tv</a>.</p>';
}

add_shortcode('videolog', 'videolog_callback');
?>
