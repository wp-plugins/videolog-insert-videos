<?php
/*
Plugin Name: Videolog Insert Videos
Version: 1.0
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

	return	"<object width='$width' height='$height'>".
			"<param name='allowfullscreen' value='true' />".
			"<param name='allowscriptaccess' value='always' />".
			"<param name='movie' value='http://www.videolog.tv/ajax/codigoPlayer.php?id_video=$id_video&amp;relacionados=S&amp;default=S&amp;hd=S&amp;swf=1&amp;width=$width&amp;height=$height' />".
			"<embed src='http://www.videolog.tv/ajax/codigoPlayer.php?id_video=$id_video&amp;relacionados=S&amp;default=S&amp;&hd=S&amp;swf=1&amp;width=$width&amp;height=$height' type='application/x-shockwave-flash' allowfullscreen='true' allowscriptaccess='always' width='$width' height='$height'></embed>".
			"</object>".
			"<p><a href='http://www.videolog.tv/video?$id_video'>Veja o Video no Videolog.tv</a>.</p>";
}

add_shortcode('videolog', 'videolog_callback');
?>
