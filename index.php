<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="https://github.com/0-l">
        <link rel="stylesheet" type="text/css" href="css/awoo.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200|Roboto:100,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>~</title>
</head>
<body>
    <div id="search">
        <div>
            <input type="text" spellcheck="false" placeholder="search">
            <button class="close"><i class="material-icons">&#xE5CD;</i></button>
            <ul class="search-engines"></ul>
        </div>
    </div>
    <div id="links" class="-">
        <div id="tabs" class="!-">
            <cols>
                <ul class="- indicator">
                    <li active></li>
                </ul>
                <div class="+ widgets col-end">
                    <p class="time">00<span>:00</span></p>
                    <div class="!+ + weather-config">
                        <input name="color" type="text" placeholder="location">
                    </div>
                    <div class="+ weather">
                        <button class="!+ edit">edit</button>
                        <p temperature>4ºC</p>
                        <p weather class="+">
                            <i class="material-icons" sunny>wb_sunny</i>
                        </p>
                    </div>
                </div>
            </cols>
        </div>
        <div id="panels">
            <ul class="feature" id="main" active>
              <div class="links">
                <li>
                  <h1>Work</h1>
                  <a href="https://mail.google.com" target="_blank">Gmail</a>
                  <a href="https://gitlab.com" target="_blank">GitLab</a>
                  <a href="https://trello.com" target="_blank">Trello</a>
                  <a href="https://partners.shopify.com" target="_blank">Shopify Partners</a>
                  <a href="https://toggl.com" target="_blank">Toggl</a>
                </li>
                <li>
                  <h1>Uni</h1>
                  <a href="https://blackboard.vuw.ac.nz" target="_blank">Blackboard</a>
                  <a href="https://my.vuw.ac.nz" target="_blank">MyVUW</a>
                </li>
                <li>
                  <h1>Resources</h1>
                  <a href="https://help.shopify.com" target="_blank">Shopify Help</a>
                  <a href="https://www.shopify.co.nz/partners/shopify-cheat-sheet" target="_blank">Shopify Liquid</a>
                  
                </li>
              </div>
            </ul>
            <ul class="feature" id="boards">
                <div class="links">
                    <li>
                        <h1>Fun</h1>
                        <a href="https://4chan.org/a/" target="_blank">/a/</a>
                        <a href="https://4chan.org/lit/" target="_blank">/lit/</a>
                        <a href="https://4chan.org/jp/" target="_blank">/jp/</a>
                        <a href="https://4chan.org/r9k/" target="_blank">/r9k/</a>
                        <a href="https://www.4chan.org/wg/" target="_blank">/wg/</a>
                        <a href="https://www.4chan.org/v/" target="_blank">/v/</a>
                    </li>
                    <li>
                        <h1>Comfy</h1>
                        <a href="https://sushigirl.us/kawaii/" target="_blank">/kawaii/</a>
                        <a href="https://sushigirl.us/lounge/" target="_blank">/lounge/</a>
                        <a href="https://www.4chan.org/wsg/" target="_blank">/wsg/</a>
                    </li>
                    <li>
                        <h1>Technology</h1>
                        <a href="https://4chan.org/g/" target="_blank">/g/</a>
                        <a href="https://www.lainchan.org/lambda/" target="_blank">/λ/</a>
                        <a href="https://www.lainchan.org/sec/" target="_blank">/sec/</a>
                        <a href="https://boards.420chan.org/prog/" target="_blank">/prog/</a>
                        <a href="https://8ch.net/g/" target="_blank">/8g/</a>
                    </li>
                </div>
            </ul>
            <ul id="music">
                <div class="links">
                    <li><a href="https://soundcloud.com/" target="_blank">soundcloud</a></li>
                    <li><a href="http://lolicore.org/" target="_blank">lolicore</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=FLdYG2Q_1DDrt0PoeoRicihw" target="_blank">y-playlist</a></li>
                    <li><a href="https://lainchan.org/music/res/898.html" target="_blank">/music/</a></li>
                </div>
            </ul>
            <ul id="tech">
                <div class="links">
                    <li><a href="https://arisuchan.jp/" target="_blank">arisuchan</a></li>
                    <li><a href="https://systemspace.link/" target="_blank">つき</a></li>
                    <li><a href="https://docs.racket-lang.org/" target="_blank">racket</a></li>
                    <li><a href="https://stallman.org/" target="_blank">stallman</a></li>
                    <li><a href="http://afternoon.dynu.com/letterbox.html" target="_blank">post office</a></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="|" id="todo">
        <button class="+ add"><img src="img/add.png"></button>
        <div class="+ addTodo">
            <input type="text" value="" placeholder="todo" spellcheck="false">
        </div>
        <rows class="items">
            <h1 class="+">todo</h1>
        </rows>
    </div>
    <script type="text/javascript" src="js/strftime.js"></script>
    <script type="text/javascript" src="js/todo.js"></script>
    <script type="text/javascript" src="js/weather.js"></script>
    <script type="text/javascript" src="js/powerline.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
</body>
</html>
