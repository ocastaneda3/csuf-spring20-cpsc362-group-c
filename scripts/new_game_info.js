var stylesheet = document.createElement('link');
stylesheet.setAttribute('href', 'https://bootswatch.com/4/cyborg/bootstrap.css');
stylesheet.setAttribute('rel', 'stylesheet');
stylesheet.setAttribute('type', 'text/css');
var stylesheet2 = document.createElement('link');
stylesheet2.setAttribute('href', 'main.css');
stylesheet2.setAttribute('rel', 'stylesheet');
document.head.appendChild(stylesheet);
document.head.appendChild(stylesheet2);

const app = document.getElementById('game_info');
var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/games/'.concat(query));

request.onload = () => {
    var data = JSON.parse(request.response);
    const game_card = document.createElement('div');
    game_card.setAttribute('class', 'card bg-dark text-black border-0');
    // const image = document.createElement('img');
    // image.setAttribute('src', ''.concat(data.background_image));
    // image.setAttribute('class', 'card-img')

    document.head.parentNode.setAttribute('style', "background: url('[image_url]'); background-size: cover;".replace('[image_url]', data.background_image));

    const gamecontent = document.createElement('div');
    gamecontent.setAttribute('class', 'card-img-overlay');

    const gametitle = document.createElement('h2');
    gametitle.setAttribute('class', 'card-title');
    gametitle.textContent = data.name;

    const gametext = document.createElement('h4');
    gametext.setAttribute('class', 'card-text');
    gametext.innerHTML = data.description;

    const gametext2 = document.createElement('h4');
    gametext2.setAttribute('class', 'card-text');

    gamecontent.appendChild(gametitle);
    gamecontent.appendChild(gametext);
    gamecontent.appendChild(gametext2);

    game_card.appendChild(gamecontent);

    app.appendChild(game_card);
};

request.send();