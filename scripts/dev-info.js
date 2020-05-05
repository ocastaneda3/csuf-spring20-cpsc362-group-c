var stylesheet = document.createElement('link');
stylesheet.setAttribute('href', 'https://bootswatch.com/4/cyborg/bootstrap.css');
stylesheet.setAttribute('rel', 'stylesheet');
stylesheet.setAttribute('type', 'text/css');
document.head.appendChild(stylesheet);

const app = document.getElementById('game-info');

var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/publishers/'.concat(query));

request.onload = () => {

    var data = JSON.parse(request.response);

    document.head.parentNode.setAttribute('style', "background: url('[image_url]'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;".replace('[image_url]', data.image_background));
    const dev_title = document.getElementById('dev-title');
    dev_title.setAttribute('class', 'card-title');
    dev_title.textContent = data.name;

    const dev_description = document.getElementById('dev-description');
    dev_description.setAttribute('class', 'card-text');
    dev_description.innerHTML = data.description;

};

request.send();