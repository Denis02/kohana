<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Portfolio extends Controller_Main {

	public function action_index()
	{
		$data = array();
	//Галерея
		if(isset($_GET['category'])){
			if(file_exists("photo/".$_GET['category'])){
				$dir="photo/".$_GET['category']; // Путь к директории, в которой лежат фото
				$files = scandir($dir); // Получение списока файлов из директории
				$data['files'] = array_reverse(parent::photo_filter($files)); // Удаление лишних файлов			
				$content = View::factory("elements/gallery_element")->bind('data',$data);
			}
		//Портфолио
			else{
				$res = Model::factory('Test0211Model')->get_categoryphotos();
				$data['categories'] = $res;
				$content = View::factory('elements/portfolio_element')->bind('data',$data);
			}
		}
	//Портфолио
		else {
			$res = Model::factory('Test0211Model')->get_categoryphotos();
			$data['categories'] = $res;
			$content = View::factory('elements/portfolio_element')->bind('data',$data);
		}
		$this->template->content=$content;
	}
}
