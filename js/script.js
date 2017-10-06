;
var i=0,
    presentation = document.querySelectorAll('.presentation>img')[0],
    samples = document.getElementsByClassName('samples')[0],
    photos = samples.getElementsByTagName('img');

window.onload = setInterval(funcPresent, '7000');

samples.onclick = function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;
    presentation.src = target.src;
}

function funcPresent() {
    for (i = 0; i < photos.length; i++) {
        if (presentation.src == photos[i].src) {
			if(presentation.src != photos[photos.length-1].src){
				presentation.src = photos[i+1].src; return;
			}
		else {presentation.src = photos[0].src; return;}
		}
	}
}