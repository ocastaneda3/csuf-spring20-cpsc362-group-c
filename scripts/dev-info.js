var stylesheet = document.createElement('link');
stylesheet.setAttribute('href', 'https://bootswatch.com/4/cyborg/bootstrap.css');
stylesheet.setAttribute('rel', 'stylesheet');
stylesheet.setAttribute('type', 'text/css');
document.head.appendChild(stylesheet);

const app = document.getElementById('game-info');

var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/publishers/'.concat(this.id));

request.onload = () => {

    var data = JSON.parse(request.response);
    document.head.parentNode.setAttribute('style', "background: url('[image_url]'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;".replace('[image_url]', data.background_image));
    const game_title = document.getElementById('game_title');
    game_title.setAttribute('class', 'card-title');
    game_title.textContent = data.name;

    const game_text = document.getElementById('game-description');
    game_text.setAttribute('class', 'card-text');
    game_text.innerHTML = data.description;

    // Add Media
    var disqus_config = function () {
        this.page.url = query;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = query; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://gamebuddy-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
};

request.send();