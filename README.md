# Food Recommender 🍟
[![ForTheBadge built-with-love](http://ForTheBadge.com/images/badges/built-with-love.svg)](https://gitHub.com/Amatofrancesco99/)
[![License](https://img.shields.io/github/license/Ileriayo/markdown-badges?style=for-the-badge)](./blob/main/LICENSE)
![Repo-views-counter](https://komarev.com/ghpvc/?username=food-recommender&label=VIEWS&color=blueviolet&style=flat-square)

## Description
A web app, whose purpose is **suggesting recipes to logged users**.

Used recipes **dataset**: [**FoodRecsSysv1**](https://www.kaggle.com/elisaxxygao/foodrecsysv1?select=raw-data_recipe.csv).
<br>
It contains *over 45k recipes*, coming from all over the world!

## Configuration
<details id="configuration">
  <summary> How can I start this application?</summary><br>
  
 1. Open Mamp and start the server.
    1. Not yet downloaded? Go at this [link](https://www.mamp.info/en/downloads/).
 1. Open phpMyAdmin clicking on `WebStart`>`Tools` and create a new db named `food_recommender`.
 1. Fork this project moving in the `document root folder` shown once Mamp app is opened.
 1. Change the [`config.php`](https://github.com/Amatofrancesco99/food-recommender/blob/main/scripts/php/config.php) file, inserting your **MySQL db istance** coordinates.
    1. If you did not change the Mamp settings, the `config.php` file does not need to be modified.
 1. Download the [`.sql.zip file`](https://drive.google.com/file/d/1vSHhYI_drTdydcyKCq485CCr_xLOCdn8/view?usp=sharing)(containing *users, recipes & reviews tables*) and import it in `food_recommender` db.
    1. Problems with the import procedure, since the imported file is too big?<br>
       Search the `php.ini` file and change this properties:
       ```
       post_max_size = 2048M 
       upload_max_filesize = 2048M 
       max_execution_time = 5000 
       max_input_time = 5000 
       memory_limit = 4096M 
       ```
 1. Insert this link in your browser: `http://localhost:8888/food-recommender/templates/index.php`.
 1. Now the real fun begins...
    1. You can make changes on the project and add new functionalities.
</details>

## Functionalities
<details id="functionalities">
  <summary> What else could be implemented?</summary><br>
  
The application now returns a *random recipe* taken from the database.<br>
Obviously this is the easiest implementation, but you're free to fork this project and add new functionalities.<br>
Some examples:
- Suggesting a recipe basing on:
  - its nutrients
  - its ingredients
  - ratings given by other users
  - ...
- Handle the possibility to add a personal rating on a recipe, by a logged user.

**Any help will really be appreciated.**
</details>

## Languages, libraries, database & web server
![JavaScript](https://a11ybadges.com/badge?logo=javascript)
![PHP](https://a11ybadges.com/badge?logo=php)
![CSS3](https://a11ybadges.com/badge?logo=css3)
![HTML5](https://a11ybadges.com/badge?logo=html5)
![jQuery](https://a11ybadges.com/badge?logo=jquery)
![Font Awesome](https://a11ybadges.com/badge?logo=fontawesome)
![MAMP](https://a11ybadges.com/badge?logo=mamp)
![MySQL](https://a11ybadges.com/badge?logo=mysql)
![Apache](https://a11ybadges.com/badge?logo=apache)

***
![alt image](https://github.com/Amatofrancesco99/food-recommender/blob/main/images/other/mockup.jpg)
