<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/PictoPlots/style.css" rel="stylesheet" type="text/css"/>
    <title>Moviews</title>
</head>
<body>
    <div class="wrapper">
        <div class="main-row">
            <h2 class="text-align centre">Lets Guess Movie Title By Icon</h2>
            <div class="col line-content">
                <h2 id="show_title"></h2>
                <img id="movie_icon" src="/PictoPlots/image1.png" />
                <input id="get_movie" type="hidden" value="0">
                <input id="movie_name" type="hidden" value="Gladiator">

                <button id="get_title" onclick="showTitle()">See Movie Title</button>
                <button id="next_play" onclick="getMovie()">Play Next</button>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="/PictoPlots/script.js" type="text/javascript"></script>