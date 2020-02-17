const app = document.getElementById('root');


const container = document.createElement('div');
container.setAttribute('class', 'container');

app.appendChild(container);

var request = new XMLHttpRequest();

request.open('GET', 'https://api.rawg.io/api/games', true);

request.onload = () => {
	var data = JSON.parse(request.response);

	data.results.forEach(game => {
		const card = document.createElement('div');
		card.setAttribute('class', 'card');

		const h1 = document.createElement('h1');
		h1.textContent = game.name;

		const p = document.createElement('p');

		var sub_request = new XMLHttpRequest();

		sub_request.open('GET', 'https://api.rawg.io/api/games/'.concat(game.id));
		sub_request.onload = () => {
			var sub_data = JSON.parse(sub_request.response);
			// console.log(sub_data);

			sub_data.description_raw = sub_data.description_raw.substring(0, 300);
			p.textContent = `${sub_data.description_raw} . . .`;
		};

		container.appendChild(card);
		card.appendChild(h1);
		card.appendChild(p);

		sub_request.send();
	});
};

request.send();
