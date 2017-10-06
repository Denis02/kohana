;
var id = 0;

function addNetwork()
{
id++;
// Создание новой строки таблицы
var new_tr=document.createElement('tr');
// Заполнение строки
new_tr.setAttribute('id', 'network'+id);
new_tr.innerHTML='<td><input type="text" name="newnetworks['+id+'][name]" required /></td>\
<td><input type="url" name="newnetworks['+id+'][address]" required /></td>\
<td><img name="newnetworks['+id+'][img]" /><br><input type="file" name="newfile'+id+'" accept="image/*"></td>\
<td><input type="button" onclick="delNetwork(\'network'+id+'\')" value="удалить" required /></td>';
// Добавление строки на страницу
var elem = document.getElementById('networkput');
elem.parentNode.insertBefore(new_tr, elem);
}

// Удаление строки с страницы
function delNetwork(id)
{
var el = document.getElementById(id);
document.getElementById('tbody').removeChild(el);
}