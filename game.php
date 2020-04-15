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
    <?php
    require 'components/navbar.php';
    ?>
    <!--Review system -->
    <div class="stars" data-rating="0">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div>
    <script src="./scripts/rating.js"></script>
    <!-- Main Body -->
    <div id="game-info" class="card bg-dark text-black border-0">
        <div class="card-img-overlay">
            <div class="row">
                <div id="data-column" class="col-md-6">
                    <h2 id='game_title'></h2>
                    <p id="game-description"></p>
                </div>
                <div id="media-column" class="col-md-6">
                    <div id="game-video">
                        <video id="my-video" class="video-js" controls preload="auto" width="624" height="351"
                            poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                            <!-- <source src="https://thumbs.gfycat.com/AnchoredSoggyGarpike-mobile.mp4" type="video/mp4" /> -->
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                    video</a>
                            </p>
                        </video>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li id="span1" class="list-group-item"><span><a id="storelink1" href='google.com'>N/A</a></span>
                        </li>
                        <li id="span2" class="list-group-item"><span><a id="storelink2" href='google.com'>N/A</a></span>
                        </li>
                        <li id="span3" class="list-group-item"><span><a id="storelink3" href='google.com'>N/A</a></span>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img id='img1' class="w-75 d-block"
                                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" />
                            </div>
                            <div class="carousel-item"><img id='img2' class="w-75 d-block"
                                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" />
                            </div>
                            <div class="carousel-item"><img id='img3' class="w-75 d-block"
                                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" />
                            </div>
                        </div>
                        <!-- <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                    class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                    class="sr-only">Previous</span></a><a class="carousel-control-next"
                                href="#carousel-1" role="button" data-slide="next"><span
                                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                                    class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol> -->
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <script src="./scripts/new_game_info.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>