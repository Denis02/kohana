;
var i = 0;
var timeout;
var opacity = 100;

    presentation = document.querySelectorAll('.presentation>img')[0],
    presentation2 = document.querySelectorAll('.presentation>img')[1],
    samples = document.getElementsByClassName('samples')[0],
    photos = samples.getElementsByTagName('img');

window.onload = setInterval(funcPresent, '7000');

samples.onclick = function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;
	opacity = 100;
	clearTimeout(timeout);
    presentation.src = target.src;
	presentation.style.opacity=1;
	presentation.style.filter='alpha(opacity=100)';
	presentation2.style.opacity=0;
	presentation2.style.filter='alpha(opacity=0)';
}

function funcPresent() {
    for (i = 0; i < photos.length; i++) {
        if (presentation.src == photos[i].src) {
			if(presentation.src != photos[photos.length-1].src){
				presentation2.src = photos[i+1].src;
			}
			else {
				presentation2.src = photos[0].src;
			}
		}
	}
	change_image();
}

function change_image() {
	opacity--;
	presentation.style.opacity=opacity/100;
	presentation.style.filter='alpha(opacity='+opacity+')';
	presentation2.style.opacity=(100-opacity)/100;
	presentation2.style.filter='alpha(opacity='+(100-opacity)+')';
	if (opacity==0) {
		opacity = 100;
		clearTimeout(timeout);
		presentation.src = presentation2.src; 
		presentation.style.opacity=1;
		presentation.style.filter='alpha(opacity=100)';
		presentation2.style.opacity=0;
		presentation2.style.filter='alpha(opacity=0)';
		return;
	 }
	timeout = setTimeout("change_image()", 25);
}