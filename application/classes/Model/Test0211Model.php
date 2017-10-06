<?php defined('SYSPATH') or die('No direct script access.');

class Model_Test0211Model extends Model {

	//select
	public function get_presentphotos(){
		return DB::select()->from('presentphotos')
			->execute()->as_array();
	}
	
	public function get_myinfo(){
		return DB::select()->from('myinfo')
			->execute()->as_array();
	}
	
	public function get_networks(){
		return DB::select()->from('networks')
			->execute()->as_array();
	}
	
	public function get_categoryphotos(){
		return DB::select()->from('categoryphotos')
			->execute()->as_array();
	}
	
	//select by id
	public function get_presentbyid($id){
		return DB::select()->from('presentphotos')
			->where('id','=',$id)
			->execute()->as_array();
	}
	
	public function get_networkbyid($id){
		return DB::select()->from('networks')
			->where('id','=',$id)
			->execute()->as_array();
	}
	
	public function get_categorybyid($id){
		return DB::select()->from('categoryphotos')
			->where('id','=',$id)
			->execute()->as_array();
	}
	
	//insert
	public function set_presentphotos($data){
		return DB::insert('presentphotos', array('name'))
			->values(array($data))
			->execute();
	}
	
	public function set_myinfo($data){
		return DB::insert('myinfo', array('email','phone','address','text'))
			->values(array($data['email'], $data['phone'], $data['address'], $data['text']))
			->execute();
	}
	public function set_myinfo2($data){
		return DB::insert('myinfo', array('email','phone','address'))
			->values(array($data['email'], $data['phone'], $data['address']))
			->execute();
	}
	public function set_myinfotext($data){
		return DB::insert('myinfo', array('text'))
			->values(array($data))
			->execute();
	}
	
	public function set_networks($data){
		return DB::insert('networks', array('name','address','img'))
			->values(array($data['name'], $data['address'], $data['img']))
			->execute();		
	}
	
	public function set_categoryphotos($data){
		return DB::insert('categoryphotos', array('name','folder','photo'))
			->values(array($data['name'], $data['folder'], $data['photo']))
			->execute();
	}
	
	//update
	public function upd_presentphotos($data, $id){
		return DB::update('presentphotos')
			->set(array('name'=>$data))
			->where('id','=',$id)
			->execute();
	}
	
	public function upd_myinfo($data, $id=1){
		return DB::update('myinfo')
			->set(array('email'=>$data['email'],'phone'=>$data['phone'],'address'=>$data['address'],'text'=>$data['text']))
			->where('id','=',$id)
			->execute();
	}
	public function upd_myinfo2($data, $id=1){
		return DB::update('myinfo')
			->set(array('email'=>$data['email'],'phone'=>$data['phone'],'address'=>$data['address']))
			->where('id','=',$id)
			->execute();
	}
	public function upd_myinfotext($data, $id=1){
		return DB::update('myinfo')
			->set(array('text'=>$data))
			->where('id','=',$id)
			->execute();
	}
	
	public function upd_networks($data, $id){
		return DB::update('networks')
			->set(array('name'=>$data['name'],'address'=>$data['address'],'img'=>$data['img']))
			->where('id','=',$id)
			->execute();
	}
	public function upd_networks2($data, $id){
		return DB::update('networks')
			->set(array('name'=>$data['name'],'address'=>$data['address']))
			->where('id','=',$id)
			->execute();
	}
	
	public function upd_categoryphotos($data, $id){
		return DB::update('categoryphotos')
			->set(array('name'=>$data['name'],'folder'=>$data['folder'],'photo'=>$data['photo']))
			->where('id','=',$id)
			->execute();
	}	
	public function upd_categoryphotos2($data, $id){
		return DB::update('categoryphotos')
			->set(array('name'=>$data['name'], 'photo'=>$data['photo']))
			->where('id','=',$id)
			->execute();
	}
	
	//delete
	public function del_presentphotos($id){
		return DB::delete('presentphotos')
			->where('id','=',$id)
			->execute();
	}
	
	public function del_myinfo($id=1){
		return DB::delete('myinfo')
			->where('id','=',$id)
			->execute();
	}
	
	public function del_networks($id){
		return DB::delete('networks')
			->where('id','=',$id)
			->execute();
	}
	
	public function del_categoryphotos($id){
		return DB::delete('categoryphotos')
			->where('id','=',$id)
			->execute();
	}
	
}
?>