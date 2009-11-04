=== Insert Videos Videolog ===
Contributors: brunodulcetti
Tags: videos, videolog
Requires at least: 2.5
Tested up to: 2.8.5
Stable tag: 1

Put videos of Portal Videolog.tv on WordPress with shortcodes

== Description ==

Videolog.tv ia a first portal of videos. Since 2004, before Youtube and Vimeo.

Follow the next steps for add videos into your posts:

*   Insert the prefix [videolog 
*   For take the ID of video, go to URL of Video, ex: http://www.videolog.tv/video.php?id=123456 and get the ID (in this case, 123456)
*   Insert the ID of video in Videolog.tv, ex: 123456.
*   Complete the prefix of first step [videolog 123456]
*   (Optional) Put the parameter `width` and/or `height` after the ID of video [videolog 123456 width=600], [videolog 123456 height=400] [videolog 123456 width=600 height=400]
*   If you put only the width or only height, width or height, respectively, will be resized

== Installation ==

1. Upload `videolog_insert.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. After, place `[videolog ID_Video` in your posts
