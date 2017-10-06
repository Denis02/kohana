;
var id = 0;

function addPresentPhoto()
{
	var el = document.getElementById('invisible');
	el.setAttribute('style', 'display:table-row');
}

function presentPhoto(str, folder){
	id++;
	var category = str.split('/');
	var options;

	for(var i=0; i<category.length; i++){
	options += '<option value="'+folder+'/'+category[i]+'" >'+category[i]+'</option>';
	}

	// Создание новой строки таблицы
	var new_tr=document.createElement('tr');
	// Заполнение строки
	new_tr.setAttribute('id', 'newpp'+id);
	new_tr.innerHTML='<td>\
			<select id="src'+id+'" name="newpresentphoto['+id+']" onchange="setSRC(this,\''+id+'\')" required>\
			'+options+'</select><br>\
			<div class="gallery_img"><a id="a'+id+'" href="/photo/'+folder+'/'+category[0]+'" data-lightbox="image"><img id="img'+id+'" src="/photo/i/'+folder+'/'+category[0]+'"></a></div>\
			</td>\
			<td><input type="button" onclick="delPresentPhoto(\'newpp'+id+'\')" value="удалить" /></td>';
	// Добавление строки на страницу
	var elem = document.getElementById('invisible');
	elem.parentNode.insertBefore(new_tr, elem);
	elem.setAttribute('style', 'display:none');
}


function setSRC(src, i){
	var el= document.getElementById('img'+i);
	el.setAttribute('src','/photo/i/'+src.value);
	var el2= document.getElementById('a'+i);
	el2.setAttribute('href','/photo/'+src.value);
}

function getListPhoto(category){
	var new_select=document.createElement('select');
	var elem = document.getElementById('invisible');
	elem.parentNode.insertBefore(new_select, elem);
}

function delPresentPhoto(id)
{
var el = document.getElementById(id);
document.getElementById('tbody').removeChild(el);
}