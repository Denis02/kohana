<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Main {
	
	public function action_index()
	{
		$data = array();
		$res = Model::factory('Test0211Model')->get_networks();
		$data['networks'] = $res;
		$res = Model::factory('Test0211Model')->get_myinfo();
		$data['myinfo'] = $res[0];
		
		$content=View::factory('elements/contacts_element')->bind('data',$data);
		$this->template->content=$content;
	}

}
