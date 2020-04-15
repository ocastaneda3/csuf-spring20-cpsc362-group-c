const add_video_content = (data_, content_column) => {

    const video_temp1 = document.createElement('div');
    video_temp1.setAttribute('class', 'game__movie');

    const video_temp2 = document.createElement('div');
    video_temp2.setAttribute('class', 'game-card-video');

    const video = document.createElement('video');
    video.setAttribute('class', 'game-card-video__video');
    video.setAttribute('playsinline', '');
    video.setAttribute('loop', '');
    video.setAttribute('src', '[vid_url]'.replace('[vid_url]', data_.clip.clips.full));
    video.autoplay = true;

    video_temp2.appendChild(video);
    video_temp1.appendChild(video_temp2);
    content_column.appendChild(video_temp1);
}
var stylesheet = document.createElement('link');

stylesheet.setAttribute('href', 'https://bootswatch.com/4/cyborg/bootstrap.css');
stylesheet.setAttribute('rel', 'stylesheet');
stylesheet.setAttribute('type', 'text/css');

// var stylesheet2 = document.createElement('link');

// stylesheet2.setAttribute('href', 'main.css');
// stylesheet2.setAttribute('rel', 'stylesheet');
document.head.appendChild(stylesheet);
// document.head.appendChild(stylesheet2);

const app = document.getElementById('game-info');

var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/games/'.concat(query));

request.onload = () => {
    var data = JSON.parse(request.response);

    // const background_image = document.getElementById('background_img');
    // background_image.setAttribute('src', data.background_image);
    // background_image.setAttribute('style', 'background-size: fit;')
    // background_image.setAttribute('style', "background: url('[image_url]'); background-size: cover;".replace('[image_url]', data.background_image));
    document.head.parentNode.setAttribute('style', "background: url('[image_url]'); background-size: cover;".replace('[image_url]', data.background_image));

    // const game_card = document.createElement('div');
    // game_card.setAttribute('class', 'card bg-dark text-black border-0');

    // const game_content = document.createElement('div');
    // game_content.setAttribute('class', 'game-content card-img-overlay');

    const game_title = document.getElementById('game_title');
    game_title.setAttribute('class', 'card-title');
    game_title.textContent = data.name;

    const game_text = document.getElementById('game-description');
    game_text.setAttribute('class', 'card-text');
    game_text.innerHTML = data.description;

    const media_content_column = document.getElementById('game-video');
    media_content_column.setAttribute('class', 'game-content-columns');

    // Add Media
    add_video_content(data, media_content_column);

    // const game_text = document.createElement('h4');
    // game_text.setAttribute('class', 'card-text');
    // game_text.innerHTML = data.description;

    // const temp = document.createElement('div');
    // temp.setAttribute('class', 'side-by-side');
    // temp.appendChild(media_content_column);
    // temp.appendChild(game_text);

    // game_content.appendChild(game_title);
    // game_content.appendChild(temp);
    // // game_content.appendChild(media_content_column);
    // // game_content.appendChild(game_text);
    // // game_content.appendChild(gametext2);

    // game_card.appendChild(game_content);

    // app.appendChild(game_card);
};

request.send();