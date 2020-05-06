<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Buddy</title>
    <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
    <link href="./styles/game-info.css" rel="stylesheet">
    <link href="./styles/rating.css" rel="stylesheet">
    <link href="./gameinfo.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"><img src="images/favicon.png" width="40" height="40"> Game Buddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./game-list.php">Games<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./developers.php">Devs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Login/Sign up</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Games . . .">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Main Body -->
    <div id="game-info" class="card bg-dark text-black border-0">
        <div class="card-img-overlay">
            <div class="row transparent_blackness ">
                <div id="data-column" class="col-md-6">
                    <h2 id="game_title" ></h2>
                    <p id="game-description"></p>
                    <div class="col">
                        <img id="rating" src='https://www.esrb.org/wp-content/uploads/2019/05/E.svg'></img>
                        <div class="progress">
                            <div id="metacriticRating" class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">0%</div>
                        </div><a>Metacritic</a>
                    
                        <form action="reviewlogin.php" method="post">
                            <font color="white"> <label for="Your Review">Review:</label></font><br>
                            <textarea name="review" maxlength="500" minlength="50" placeholder="Write something.." rows="10" cols="30" style="height:100px"  required></textarea> <br>
                            <font color="white"> <label for="Rating">Rating:</label></font><br>
                            <textarea name="rating" id="rating" maxlength="1" placeholder="/5" cols="5" rows="1"required></textarea><br>
                            <input type="submit" value="Submit"><br>
                            <?php include 'display_review.php'; ?>
                    </div>
                </div>
                <div id="media-column" class="col-md-6">
                    <div id="game-video"></div>
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div id="carousel-inner"></div>
                    </div>
                    <div id="stores">
                        <ul id="stores-list" class="list-group"></ul>
                    </div>
                    
                </div>
                <div id="comment-section" class="comment-column">
                    <!--Review system -->
                    <div class="stars" data-rating="0">
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                    </div>
                     <div class="jumbotron">
                         <div id="disqus_thread"></div>
                     </div>
                 </div>
                 
            </div>            
        </div>
        
    </div>
    <script src="./scripts/rating.js"></script>
    <script id="dsq-count-scr" src="//gamebuddy-1.disqus.com/count.js" async></script>
    <script src="./scripts/new_game_info.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>