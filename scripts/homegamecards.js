/************************************************/
/* Function: sendHttpRequest                    */
/*----------------------------------------------*/
/* - Send XMLHttpRequest to get data          */
/************************************************/
const gamerow = document.getElementById('gamerow')
gamerow.setAttribute('class','row')
const sendHttpRequest = (method, url) => {
	var request = new XMLHttpRequest();
	request.open(method, url);
	request.onload = () => {
		var data = JSON.parse(request.response);
		data.results.forEach(game => {
			const column = document.createElement('div')
			column.setAttribute('class', 'col-sm')
			const card = document.createElement('div')
			card.setAttribute('class', 'card border-secondary mb-3')
			card.setAttribute('style', 'max-width: 20rem;')
			const cardheader = document.createElement('div')
			cardheader.setAttribute('class', 'card-header')
			cardheader.textContent = game.name
			const game_img = document.createElement('img');
			game_img.className = 'background';
			game_img.src = game.background_image;
			gamerow.appendChild(column)
			column.appendChild(card)
			card.appendChild(cardheader)
			// cardbody.appendChild(cardtitle)
			card.appendChild(game_img)
		});
	};
	
	request.send();
};
var youareel = 'https://api.rawg.io/api/games?ordering=+rating&page_size=4&page='
var randompage = youareel + Math.floor(Math.random() * 10) + 1;
sendHttpRequest('GET', randompage);

