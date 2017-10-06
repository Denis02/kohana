<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Main {
	
	public function action_index()
	{
		$data = array();
		$res = Model::factory('Test0211Model')->get_presentphotos();
		$data['photos'] = $res;
		$res = Model::factory('Test0211Model')->get_myinfo();
		$data['text'] = $res[0]['text'];
		
		$content=View::factory('elements/main_element')->bind('data',$data);
		$this->template->content=$content;
	}

}
