# Embedding and Sharing

## Embedding

The player is optimized for iframe **embedding** using a specific address like:

https://staging.paratii.video/embed/<video_id>


### Embed code (full features) example:

`<iframe webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" src="https://staging.paratii.video/embed/6?autoplay=1&loop=1&playsinline=1&fullscreen=1&type=mini" width="570" height="320" frameborder="0"></iframe>`

### Showcase:

<a href="https://paratii-video.github.io/paratii-embed/" target="_blank">https://paratii-video.github.io/paratii-embed/</a>


### Fullscreen capability


```
use iframe browser specific attributes and fullscreen=1 in query parameters

```


### Autoplay


```
use autoplay=1 in query parameters

```


### Loop a video


```
use loop=1 in query parameters

```


### Sizes and features optimizations
Available mode are:

* _mini_: optimized above 570 pixel width
* _tiny_: optimized above 340 pixel width


```
use type=<mode> in query parameters

```


### Playinline (iOS)

Allow to play video inline, video will not automatically enter fullscreen mode when playback begins.



```
use playsinline=1 in query parameters

```



## oEmbed and Wordpress

Player is available for oEmbed at:

https://staging.paratii.video/oembed

We are working on submission to most popular oEmbed providers.

I order to add Paratii as oembed provider, and embed it easily, in your Wordpress site you can add the following snippet inside functions.php

```
wp_oembed_add_provider( "https://player.paratii.video/play/*", "https://player.paratii.video/oembed/" );
```

or you can just <a href="https://github.com/Paratii-Video/paratii-embed/raw/master/wordpress/paratii-oembed.zip">download</a> and <a href="https://codex.wordpress.org/Managing_Plugins">install</a> our plugin.

Just copy and paste the video url in the editor and ualà!



## Sharing

### Twitter Card

Tweeted videos will play directly inside your timeline using Paratii Player.
Look & feel can be tested pasting a video url at <a href="https://cards-dev.twitter.com/validator">https://cards-dev.twitter.com/validator</a>

### Telegram

Shared videos will play directly inside Telegram Mobile app

### Facebook Open Graph

Videos play inside feed, using IPFS Paratii Gateway, just if posted as a post comment.
