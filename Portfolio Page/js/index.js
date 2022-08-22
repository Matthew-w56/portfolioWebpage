const dimming_screen = document.getElementById("dimming-screen");
const quote_div = document.getElementById("quote-popup");
const quote_output_box = document.getElementById("text-area");
const sound_dummy = document.getElementById("dummy");

var scrollY = 0;
const sound_html = "<embed src=\"./index-page/img/sound.wav\" hidden=\"true\" autostart=\"true\" loop=\"false\">";
const sound_obj = new Audio("./index-page/img/sound.wav");

var quotes = [
	"Spread love everywhere you go. Let no one ever come to you without leaving happier. -Mother Teresa",
	"When you reach the end of your rope, tie a knot in it and hang on. -Franklin D. Roosevelt",
	"Always remember that you are absolutely unique. Just like everyone else. -Margaret Mead",
	"Don't judge each day by the harvest you reap but by the seeds that you plant. -Robert Louis Stevenson",
	"The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt",
	"Tell me and I forget. Teach me and I remember. Involve me and I learn. -Benjamin Franklin",
	"The best and most beautiful things in the world cannot be seen or even touched, they must be felt with the heart. -Helen Keller",
	"It is during our darkest moments that we must focus to see the light. -Aristotle",
	"Whoever is happy will make others happy too. -Anne Frank",
	"Do not go where the path may lead, go instead where there is no path and leave a trail. -Ralph Waldo Emerson"
];
var num_quotes = 10;

dimming_screen.addEventListener('click', (event) => {
	hideQuotePopup();
});

function hideQuotePopup() {
	quote_div.className = "container-fluid quote-popup hidden";
	enableScroll();
}

function showQuotePopup() {
	quote_div.className = "container-fluid quote-popup";
	disableScroll();
}

function disableScroll() {
	scrollY = document.documentElement.scrollTop;
	window.onscroll = function() {
		window.scroll(0, scrollY);
	};
}

function enableScroll() {
	window.onscroll = function() {};
}

function setRandomQuote() {
	quote_output_box.innerHTML = quotes[Math.floor(Math.random() * num_quotes)];
	playSound();
}

function playSound() {
	sound_obj.play();
}
