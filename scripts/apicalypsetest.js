const axios = require('axios');
axios({
    url: "https://api-v3.igdb.com/achievements",
    method: 'POST',
    headers: {
        'Accept': 'application/json',
        'user-key': 'fe71135e6b3518c182a6a9681cd391b2'
    },
    data: "fields achievement_icon,category,created_at,description,external_id,game,language,locked_achievement_icon,name,owners,owners_percentage,rank,slug,tags,updated_at;"
  })
    .then(response => {
        console.log(response.data);
    })
    .catch(err => {
        console.error(err);
    });