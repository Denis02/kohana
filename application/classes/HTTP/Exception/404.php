<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     * 
     * @return Response
     */
    public function get_response()
    {
        $view = View::factory('index'); //тут задаємо шлях до шаблону з оформленням 404 помилки
 
        // Remembering that `$this` is an instance of HTTP_Exception_404
        $view->message = $this->getMessage();
        
	//Header
	$categories = array();		
	$res = Model::factory('Test0211Model')->get_categoryphotos();
	$categories = $res;
	$view->header=View::factory('elements/header_element')->bind('categories',$categories);
	
	//Body	
		$view->content='Страница с таким адресом не существует!';
	
	//Footer
		$data = array();		
		$res = Model::factory('Test0211Model')->get_networks();
		$data['networks'] = $res;
		$res = Model::factory('Test0211Model')->get_myinfo();
		$data['myinfo'] = $res[0];
		$view->footer=View::factory('elements/footer_element')->bind('data',$data);
 
        $response = Response::factory()
            ->status(404)
            ->body($view->render());
 
        return $response;
    }
}
