var add_video_content = (data_, content_column) => {

    var video = document.getElementById('my-video')

    var source1 = document.createElement('source')
    source1.setAttribute('src', '[vid_url]'.replace('[vid_url]', data_.clip.clips.full))
    source1.type = 'video/mp4'
    video.appendChild(source1)
    var videothing = document.getElementById('game-video')
    videothing.setAttribute('poster', setAttribute('src', '[vid_url]'.replace('[vid_url]', data_.clip.clips.preview)))


    span1.appendChild(spanlink1)
    var script = document.createElement('script')
    script.src = 'https://vjs.zencdn.net/7.7.5/video.js'
    var body = getElementsByTagName("BODY")[0]
    body.appendChild(script)

}
var stylesheet = document.createElement('link');

stylesheet.setAttribute('href', 'https://bootswatch.com/4/cyborg/bootstrap.css');
stylesheet.setAttribute('rel', 'stylesheet');
stylesheet.setAttribute('type', 'text/css');


function getIconName(name) {
    var output = name
    switch (name) {
        case "xbox360":
            output = 'xbox'
            break
        case "gog":
            output = 'gog-com'
            break
        case "playstation-store":
            output = 'playstation'
            break
        case "xbox-store":
            output = 'xbox'
            break
        default:
            break
    }
    return output
}
function getRating(id){
    var rating
    switch(id){
        case 1:
            rating = 'https://www.esrb.org/wp-content/uploads/2019/05/E.svg'
            break
        case 2:
            rating = 'https://www.esrb.org/wp-content/uploads/2019/05/E10plus.svg'
            break
        case 3:
            rating = 'https://www.esrb.org/wp-content/uploads/2019/05/T.svg'
            break
        case 4:
            rating = 'https://www.esrb.org/wp-content/uploads/2019/05/M.svg'
            break
        case 5:
            rating = 'https://www.esrb.org/wp-content/uploads/2019/05/AO.svg'
            break
        default:
            break
    }
    return rating
}
document.head.appendChild(stylesheet);


const app = document.getElementById('game-info');

var query = window.location.search.substring(1).split('=')[1];
var request = new XMLHttpRequest();
var request2 = new XMLHttpRequest();
request2.open('GET', 'https://api.rawg.io/api/games/'.concat(query).concat('/screenshots'));
request2.onload = () => {
    var data = JSON.parse(request2.response);
    console.log(data.results[0].image)
    var img1 = document.getElementById('img1')
    img1.setAttribute('src', data.results[0].image)
    var img2 = document.getElementById('img2')
    img2.setAttribute('src', data.results[1].image)
    var img3 = document.getElementById('img3')
    img3.setAttribute('src', data.results[2].image)
}
request.open('GET', 'https://api.rawg.io/api/games/'.concat(query));

request.onload = () => {
    var data = JSON.parse(request.response);
    document.head.parentNode.setAttribute('style', "background: url('[image_url]'); background-size: cover;".replace('[image_url]', data.background_image));
    const game_title = document.getElementById('game_title');
    game_title.setAttribute('class', 'card-title');
    game_title.textContent = data.name;

    const game_text = document.getElementById('game-description');
    game_text.setAttribute('class', 'card-text');
    game_text.innerHTML = data.description;

    const media_content_column = document.getElementById('game-video');
    media_content_column.setAttribute('class', 'game-content-columns');
    const storelink1 = document.getElementById('storelink1')
    storelink1.setAttribute('href', data.stores[0].url)
    storelink1.innerHTML = data.stores[0].store.name.concat(' ')
    var storeicon1 = document.createElement('span')
    storeicon1.setAttribute('class', 'iconify')
    var icontype = 'mdi:'
    storeicon1.setAttribute('data-icon', icontype.concat(getIconName(data.stores[0].store.slug)))
    storeicon1.setAttribute('data-inline', 'false')
    const span1 = document.getElementById('span1')
    span1.appendChild(storeicon1)
    const storelink2 = document.getElementById('storelink2')
    storelink2.setAttribute('href', data.stores[1].url)
    storelink2.innerHTML = data.stores[1].store.name.concat(' ')
    var storeicon2 = document.createElement('span')
    storeicon2.setAttribute('class', 'iconify')
    storeicon2.setAttribute('data-icon', icontype.concat(getIconName(data.stores[1].store.slug)))
    storeicon2.setAttribute('data-inline', 'false')
    const span2 = document.getElementById('span2')
    span2.appendChild(storeicon2)
    const storelink3 = document.getElementById('storelink3')
    storelink3.setAttribute('href', data.stores[2].url)
    storelink3.innerHTML = data.stores[2].store.name.concat(' ')
    var storeicon3 = document.createElement('span')
    storeicon3.setAttribute('class', 'iconify')
    storeicon3.setAttribute('data-icon', icontype.concat(getIconName(data.stores[2].store.slug)))
    storeicon3.setAttribute('data-inline', 'false')
    const span3 = document.getElementById('span3')
    span3.appendChild(storeicon3)
    const rating = document.getElementById('rating')
    rating.setAttribute('src', getRating(data.esrb_rating.id))
    // Add Media
    add_video_content(data, media_content_column);
};

request.send();
request2.send();