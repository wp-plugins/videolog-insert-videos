=== Embed Videolog Videos ===
Contributors: Bruno Dulcetti
Tags: videos, videolog, embeds, player, flash
Requires at least: 2.5
Tested up to: 3.1
Stable tag: 1.1

Put videos of Portal Videolog.tv on WordPress with shortcodes

== Description ==

Videolog.tv is the world's first video sharing website - since 2004, before Youtube and Vimeo - and is Brazil's largest video community. Follow these steps to easily embed videolog HD or SD videos into your Wordpress posts:

* Type the videolog tag `[videolog ` (remove the quotes)
* Retrieve the video ID from the id parameter in the video URL, e.g.: in `http://www.videolog.tv/video.php?id=123456`, the video ID is `123456`
* Append the video ID to the video tag and close brackets, like in `[videolog 123456]`
* Optional: configure width and height. If you choose only one, the video aspect ration will be kept. 
[videolog 123456 width=320]
[videolog 123456 height=240]
[videolog 123456 width=640 height=480]

== Installation ==

1. Upload `videolog_insert.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. After, place `[videolog ID_Video]` in your posts
