var TEXTS = ["Step by step guideline, in order to properly cook dishes", "Detailed description for each receipe", "See the most liked receipes by other users", "Nutritional values ​​for each recipe, for users who are weight concerned", "Know a priori how many time you'll need to cook that receipe", "Crawled data from Food.com - online recipe aggregator",  "Over 180k recipes, coming from all over the world"];

var index = 0;

$(function() {
  setInterval(function() {
    $('#more-text-change').fadeOut(2000, function() {
      $(this).text(TEXTS[index++]).fadeIn(2000);
      if (index === TEXTS.length)
        index = 0;
    });
  }, 6000);
});