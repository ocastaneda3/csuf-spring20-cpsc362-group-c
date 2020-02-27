const app = document.getElementById('game_info');

var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/games/'.concat(query));

request.onload = () => {
    var data = JSON.parse(request.response);
    
    const background_image = document.createElement('div');
    background_image.setAttribute('id', 'bg');

    const image = document.createElement('img');
    image.setAttribute('src', ''.concat(data.background_image));
    // console.log(document);
    // const background_image = document.createElement('img')
    // background_image.setAttribute('id', 'bg');
    // background_image.src = data.background_image;

    // document.body.style.backgroundImage = "url('[image_url]')".replace('[image_url]', data.background_image);
    background_image.appendChild(image);
    app.appendChild(background_image);
};

request.send();

const h1 = document.createElement('h1');
h1.textContent = query;

app.appendChild(h1);