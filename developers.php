<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game Buddy</title>

        <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
        <link href="./styles/game-cards.css" rel="stylesheet">
        <link href="./styles/rating.css" rel="stylesheet">
        <link href="./main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        require 'components/navbar.php';
        ?>
        <!-- Main Body -->
        <div id="game-card-list"></div>
        <script src="./scripts/studio-cards.js"></script>
        
    </body>
</html>