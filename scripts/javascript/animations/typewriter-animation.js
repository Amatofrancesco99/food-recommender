var dataText = ["Your opinion matters!"];
var CharDelay = 100;
var WordPause = 500;
var WordOffset = 0;
var RestartInterval = 2000;

function typeWriter(text, i, fnCallback) {
	if (i < (text.length)) {
		document.querySelector("#typewriter").innerHTML = text.substring(0, i+1) + '<span aria-hidden="true"></span>';
		setTimeout(function() {
			typeWriter(text, i+1, fnCallback);
		}, CharDelay);
	}

	else if (typeof fnCallback == 'function') {
		setTimeout(fnCallback, WordPause);
	}
}

function StartTextAnimation(j) {
	if (typeof dataText[j] == 'undefined' || j == dataText.length) {
		setTimeout(function() {
			StartTextAnimation(WordOffset);
		}, RestartInterval);
	}

	else if (j < dataText[j].length) {
		typeWriter(dataText[j], 0, function() {
			StartTextAnimation((j+1));
		});
	}
}

document.addEventListener('DOMContentLoaded', function(event) {
	StartTextAnimation(WordOffset);
});