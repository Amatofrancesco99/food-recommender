/* This .js file permits to show the features of the project, using a particular animation */
var TEXTS = ["All ingredients, for each receipe", "Nutrients for all receipes, for those who are health interested", " Step by step guideline, in order to properly cook dishes", "See the most liked receipes by other users", "Over 45k recipes, coming from all over the world"];
var index = 0;

// Note that jquery library has been used
$(function() {
  setInterval(function() {
    $('#more-text-change').fadeOut(2000, function() {
      $(this).text(TEXTS[index++]).fadeIn(2000);
      if (index === TEXTS.length)
        index = 0;
    });
  }, 6000);
});