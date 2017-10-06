<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'index';

	public function before(){
		parent::before();
	//Header
		$categories = array();		
		$res = Model::factory('Test0211Model')->get_categoryphotos();
		$categories = $res;
		$this->template->header=View::factory('elements/header_element')->bind('categories',$categories);
		/*Кнопка "Админ"*/
		if(Auth::instance()->logged_in()!=0){
			$this->template->admin=View::factory('elements/admin_link');			
		} else $this->template->admin='';
	//Body	
		$this->template->content='';
	//Footer
		$data = array();		
		$res = Model::factory('Test0211Model')->get_networks();
		$data['networks'] = $res;
		$res = Model::factory('Test0211Model')->get_myinfo();
		$data['myinfo'] = $res[0];
		$this->template->footer=View::factory('elements/footer_element')->bind('data',$data);
	}	
		
/* Функция для удаления лишних файлов: */
    static function photo_filter($files) {
        $result = array();
        $allowed_types = array('.jpg','.jpeg','.gif','.png');
        for ($i = 0; $i < count($files); $i++) {
            $ext = strtolower(substr($files[$i], strrpos($files[$i],'.'), strlen($files[$i])-1));
            if ($files[$i] != "." && $files[$i] != ".." && in_array($ext,$allowed_types)) $result[] = $files[$i];
        }
        return $result;
    }
}
