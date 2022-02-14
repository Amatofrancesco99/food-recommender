<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="robots" content="noindex">

        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../stylesheets/style.css">

        <script src="../scripts/javascript/functions.js"></script> 

        <title>Food Recommender | Review</title>
    </head>


    <body>
        <?php include("sharedElements/navbars/navbar2.php") ?>

        <header id="default">
            <div class="review-container">
                <div class="content">
                    <img src="../images/logo.png" class="logo">
                    <h1 class="purple">REVIEW</h1>
                    <h4>
                        What do you think about this application?
                    </h4>
                    <form onsubmit="return validReviewForm();" action="../scripts/php/handle_review.php" method="post">
                        <input type="checkbox" id="anonymous" name="anonymous">
                        <label for="anonymous" class="small"> Anonymous</label><br>
                        <textarea id="comment-area" name="comment-area" class="smaller"></textarea><br>
                        <input type="submit" class="button" value="Send" name="send" id="send">
                    </form>
                </div>
            </div>
        </header>

        <?php include("sharedElements/footer.php") ?>        
    </body>

</html>