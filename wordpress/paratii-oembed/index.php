<?php
/*
Plugin Name: Paratii oEmbed provider
Plugin URI: https://github.com/Paratii-Video/paratii-embed
Description: Add a oEmbed provider for Paratii Player
Author URI: http://paratii.video
Author: Paratii
Version: 1.0.0
*/


wp_oembed_add_provider( "https://portal.paratii.video/play/*", "https://portal.paratii.video/oembed/" );
