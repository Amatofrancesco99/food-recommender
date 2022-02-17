<!-- This file contains the index page description -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Food Recommender: a web app that suggests you what eating, knowing what kind of food do you like">
        <meta name="keywords" content="Food, Recommender System, Food Recommender">
    
        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../stylesheets/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../scripts/javascript/animations/more-animation.js"></script>
        <script src="../scripts/javascript/animations/comments-animation.js"></script>
        <script src="../scripts/javascript/animations/typewriter-animation.js"></script>

        <title>Food Recommender | Homepage</title>
    </head>

    <body onload="currentSlide(1)">
        <?php include("sharedElements/navbars/navbar1.php") ?>

        <header id="header">
            <div class="main-container">
                <div class="content">
                    <img src="../images/logo.png" class="logo">
                    <h1 class="purple">FOOD RECOMMENDER</h1><br>
                    <h4>
                        Are you to lazy to think about what cooking?<br>
                        In this case, this app is just made for you.<br>
                        New recipes will be suggested, benefiting of a very large dataset.<br>
                    </h4>
                </div>
            </div>

            <br>
            <div id="see-more">
                SEE MORE
                <div class="stage">
                    <div class="box bounce-4"></div>
                </div>
            </div>
        </header>

        <hr>
        
        <article id="more">
            <div class="more-container">
                <div class="more-thumb"></div>
                <div class="more-content">
                    <h1 class="white-pink more-title x-large">SOME <span class="purple">FEATURES</span></h1>
                    <p id="more-text-change" class="white medium">
                        Over 45k recipes, coming from all over the world
                    </p>
                </div>
            </div>
        </article>

        <hr>

        <article id="clients">
            <div class="clients-container">
                <div class="clients-thumb"></div>
                <div class="clients-content">
                    <h1 class="white-pink x-large">WHAT <span class="purple">CLIENTS </span>SAID</h1>
                    <p>
                        <div class="comments-container">
                            <?php include("../scripts/php/show_comments.php") ?>
                        </div>
                        <div class="dot-container">
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                    </p>
                </div>
            </div>
        </article>

        <hr>

        <article id="requests">
            <div class="requests-container">
            <div class="requests-content">
                <h1 class="white-pink x-large">MAKE <span class="purple">REQUESTS </span></h1>
                <p class="white medium">
                    <a href="login.php" class="purple">Login now</a> and leave a review.<br>
                    <div id="typewriter" class="white medium"></div>
                </p>
            </div>
        </article>

        <?php include("sharedElements/footer.php") ?>

    </body>

</html>