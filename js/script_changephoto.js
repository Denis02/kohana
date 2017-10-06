;
	function changePreview(chec, img){
		var elem = document.getElementById(img);
		if(elem.hasAttribute('disabled') && chec.checked){
			elem.removeAttribute('disabled');
		} else{
			elem.setAttribute('disabled','disabled');
		}
	}