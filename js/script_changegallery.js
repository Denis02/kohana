;
function changeImg(src, i){	
	var el= document.getElementById('img'+i);
	el.setAttribute('src','/photo/i/'+i+'/'+src.value);
}
function changeFolder(chec){	
	var elem = document.getElementsByClassName('folder');
		if(chec.checked){
			for(var i = 0; i < elem.length; i++){
			if(elem[i].hasAttribute('disabled'))
			elem[i].removeAttribute('disabled');}
		} else{
			for(var i = 0; i < elem.length; i++){
			elem[i].setAttribute('disabled','disabled');}
		}
}