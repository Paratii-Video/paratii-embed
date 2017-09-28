## Embedding and Sharing the player and oEmbed service
### Embeddiing
The player is optimized for **embedding** into iframe using a specific address:

http://localhost:3000/embed/video_id

Embedding customizer is available within the app.
The customizer manages: fullscreen capability, autoplay flag, loop flag, sizes type (mini or tiny), playinline (iOS) flag

	`<iframe webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" src="http://localhost:3000/embed/7?autoplay=1&loop=1&playinline=1" width="570" height="320"></iframe>`

Showcase:

https://paratii-video.github.io/paratii-embed/embedding.html

### Sharing

**twitter card**
**facebook og**

Showcase:

https://paratii-video.github.io/paratii-embed/sharing.html

### oEmbed

Showcase:

https://paratii-video.github.io/paratii-embed/oEmbed.html
