<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Main {

//Админ Меню
	public function action_index()
	{
		$data = array();   //массив для передачи данных в вид
		$auth = Auth::instance();   //объект модуля авторизации

		if($auth->logged_in()!=0){   //проверка авторизации
			$content=View::factory('elements/admin_menu');   //вид админ меню
		}
		else{
			$content=View::factory('elements/auth_menu');   //вид авторизации
			/*Проверка логина ипароля*/
			if(isset($_POST['btnlogin'])){
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				if($auth->login($login,$password)){
					$content=View::factory('elements/admin_menu');
				}
				else{
					$data['error'] = 'Неверный логин или пароль!';
					$content=View::factory('elements/auth_menu')->bind('data',$data);
				}
			}
		}
		$this->template->content=$content;   //загрузка страницы
	}
		
//Выход (разлогинивание)
	public function action_logout()
	{
		$auth = Auth::instance();
		if($auth->logged_in()!=0){
			$auth->logout();
			$this->redirect('/');
		}
		else $this->redirect('/admin');
	}

//Загрузка фото
	public function action_addphoto()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0)
		{   /*загрузка фото на сервер*/
			if(isset($_POST['btnload']) && isset($_FILES['files'])&&isset($_POST['categoryname'])){
				$names = array();
				$errors = array();
				$data['category'] = $_POST['categoryname'];
				
				if(file_exists("photo/".$_POST['categoryname'])){   //проверка существования каталога на сервере
					$dir="photo/".$_POST['categoryname'];   //путь к директории, в которой лежат фото
					$allfiles = scandir($dir);   //получение списока файлов из директории
					$lastfile = 0;
					for($i = 0; $i < count($allfiles); $i++){
						$lastfile = ($lastfile<($allfiles[$i]+0))?($allfiles[$i]+0):$lastfile;   //перевод имен файлов в числовой формат и присваивание найбольшего числа
					}
					for($i = 0; $i < count($_FILES['files']); $i++){   //перебор загруженных файлов
						if(isset($_FILES['files']['name'][$i])){
							$ext = array('.jpg','.jpeg','.png');   //массив допустимых расшырений файлов
							$str = strtolower($_FILES['files']['name'][$i]);
							$pos = substr($str, strrpos($str,'.'), strlen($str)-1);  //расширение загруженного файла
							if(in_array($pos,$ext)){   //проверка типа загруженного файла
								$image = Image::factory($_FILES['files']['tmp_name'][$i]);   //создание объекта модуля Image из загруженного файла
								/*формирование имени нового фото*/
								$lastfile = 1 + $lastfile;
								while(strlen($lastfile)<3){
									$lastfile = '0'.$lastfile;
								}
								$newname = $_POST['categoryname'].'/'.$lastfile.$pos;
								/*изменение размера, накладка водяного знака и сохранение фото*/
								$image->resize(1280,1280);					
								$watermark = Image::factory('i/watermark.png');
								$watermark->background('#FFE',50);
								$image->watermark($watermark, 5, 5, 60);
								$image->save('photo/'.$newname, 70);
								/*изменение размера, обрезка и сохранение превью*/
								$image->resize(360);
								$image->crop(360,240,0,0);	
								$image->save('photo/i/'.$newname, 70);
								
								$names[] = $newname;
							} else $errors[] = 'Неверный тип файла: <br>'.$_FILES['files']['name'][$i].'!';	
						} else $data['error'] = 'Файл не загружен!';
					}
				} else $data['error'] = 'Отсутствует каталог "'.$_POST['categoryname'].'" на сервере!';
				
				$data['names'] = $names;
				$data['errors'] = $errors;
			}			
			$data['categories'] = Model::factory('Test0211Model')->get_categoryphotos();   //массив фото-галерей
			$content=View::factory('elements/admin_addphoto')->bind('data',$data);   
			$this->template->content=$content;
		}
		else $this->redirect('/admin');   //переадресации в админ меню
	}

//Создание галереи
	public function action_addcategory()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0)
		{	/*создание папки на сервере и запись данных в БД*/
			if(isset($_POST['btncreate']) && isset($_POST['name']) && isset($_POST['folder'])){
				if(empty($_POST['name']) && empty($_POST['folder'])){   //проверка заполнения полей
					$data['error']  = 'Все поля должны быть заполнены!';
				}
				else{/*проверка уникальности имени новой папки*/
					$files = scandir('photo/');
					$folders = array();
					foreach($files as $file){
						if(is_dir('photo/'.$file) && $file != '.' && $file != '..'){
							$folders[] = $file;
						}
					}				
					if(in_array($_POST['folder'], $folders)){
						$data['error']  = 'Папка с именем "'.$_POST['folder'].'" уже существует!';
					}
					else{/*создание новой папки и запись в БД*/
						if(mkdir('photo/'.$_POST['folder'])&&mkdir('photo/i/'.$_POST['folder'])){   //создание каталога
							$category = array('name'=>$_POST['name'],'folder'=>$_POST['folder'],'photo'=>'');
							if(Model::factory('Test0211Model')->set_categoryphotos($category)){   //добавление новой галереи в БД
								$data['message'] = 'Галерея "'.$category['name'].'" создана!';
								$this->redirect('/admin/addphoto?category='.$category['folder']);   //переадресация на экшен загрузки фото
							}
							else{
								$data['error']  = 'Ошибка данных!';
							}
						}else{
							$data['error']  = 'Ошибка при создании каталога "'.$_POST['folder'].'"!';
						}
					}
				}		
			}
			$content=View::factory('elements/admin_addcategory')->bind('data',$data);
			$this->template->content=$content;
		}
		else $this->redirect('/admin');
	}

//Редактор галереи
	public function action_changegallery()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0)
		{   /*изменение данных в БД и на сервере*/
			if(isset($_POST['btnchange'])&&isset($_POST['category'])){
				$messages = array();
				$errors = array();
				$category = $_POST['category'];
				
				foreach($category as $id=>$value){   //перебор фото-галерей
					if(isset($value['delete']))
					{   /*удаление каталога фото-галереи на сервере*/
						if($delcat= Model::factory('Test0211Model')->get_categorybyid($id)){   //проверка существоания галереи в БД
							if(file_exists('photo/'.$delcat[0]['folder'])){   //проверка существования папки с фото
								self::removeDirectory('photo/'.$delcat[0]['folder']);   //удаление папки с фото
							}
							if(file_exists('photo/i/'.$delcat[0]['folder'])){   //проверка существования папки с превью
								self::removeDirectory('photo/i/'.$delcat[0]['folder']);   //удаление папки с превью
							}
						}/*удаление фото-галереи из БД*/
						if(Model::factory('Test0211Model')->del_categoryphotos($id)){
							$messages[] = 'Галерея '.$value['name'].' удалена!';
						}
						else{
							$errors[] = 'Ошибка при удалении галереи '.$value['name'].'!';
						}
					}					
					else{   /*изменение фото-галерей*/
						if(!empty($value['name'])&&!empty($value['photo'])){
							if($renamecat= Model::factory('Test0211Model')->get_categorybyid($id)){   //проверка существоания галереи в БД
								if(!empty($value['folder'])){   //проверка изменения названия папки
									if((Model::factory('Test0211Model')->upd_categoryphotos($value, $id))&&($renamecat[0]['folder']!=$value['folder'])){   //изменение галереи в БД
										if(file_exists('photo/'.$renamecat[0]['folder'])){
											rename('photo/'.$renamecat[0]['folder'], 'photo/'.$value['folder']);   //изменение имени папки с фото
										}
										if(file_exists('photo/i/'.$renamecat[0]['folder'])){
											rename('photo/i/'.$renamecat[0]['folder'],'photo/i/'.$value['folder']);   //изменение имени папки с превью
										}
									}
								}else{/*изменение галереи в БД*/
									Model::factory('Test0211Model')->upd_categoryphotos2($value, $id);
								}
							}
						}else{
							$errors[] = 'Все поля должны быть заполнены!';
						}
					}
				}
				$data['errors'] = $errors;
				$data['messages'] = $messages;
			}
			
			$data['categories'] = Model::factory('Test0211Model')->get_categoryphotos();
			$data['files'] = array();
			/*получение списка фото из папки галереи*/
			foreach($data['categories'] as $cat){
				if(file_exists("photo/".$cat['folder'])){
					$dir="photo/".$cat['folder']; // путь к директории, в которой лежат фото
					$files = scandir($dir); // получение списока файлов из директории
					$data['files'][$cat['id']] = array_reverse(parent::photo_filter($files)); // удаление лишних файлов			
				}
			}
			$content=View::factory('elements/admin_changegallery')->bind('data',$data);
			$this->template->content=$content;
		}
		else $this->redirect('/admin');
	}

//Редактор фото из галереи
	public function action_changephoto()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0)
		{   /*изменение файлов на сервере*/
			if(isset($_POST['btnchange'])){
				$messages = array();
				$errors = array();
				/*изменение превью*/
				if(isset($_POST['preview'])){					
					foreach($_POST['preview'] as $pre){   //перебор массива превью
						if(isset($_POST['changepreview'][$pre])){
							if(file_exists('photo/'.$pre))   //проверка существования файла
							{
								$image = Image::factory('photo/'.$pre);   //создание объекта Image
								$heightphoto = getimagesize('photo/'.$pre)[1];  //высота фото
								/*создание нового превью*/
								if($heightphoto < 835){   //для широких фото
									$image->resize(null, 240);   //установка высоты превью в 240px
									$image->save('photo/i/'.$pre, 70);   //сохранение превью
									$position = getimagesize('photo/i/'.$pre)[0] - 360;   //определение превышения размера ширины превью						
								}
								else{   //для широких фото
									$image->resize(360);   //установка высоких превью в 240px
									$image->save('photo/i/'.$pre, 70);   //сохранение превью
									$position = getimagesize('photo/i/'.$pre)[1] - 240;   //определение превышения размера высоты превью	
								}
								$image = Image::factory('photo/i/'.$pre);
								/*обрезра и сохранение превью по заданному параметру*/
								if($_POST['changepreview'][$pre] == 'bottom'){																		
									$image->crop(360,240,0,$position);
									$image->save('photo/i/'.$pre);
								}
								elseif($_POST['changepreview'][$pre] == 'centery'){
									$image->crop(360,240,0,$position/2);
									$image->save('photo/i/'.$pre);
								}								
								elseif($_POST['changepreview'][$pre] == 'centerx'){
									$image->crop(360,240,$position/2,0);
									$image->save('photo/i/'.$pre);
								}
								elseif($_POST['changepreview'][$pre] == 'right'){
									$image->crop(360,240,$position,0);
									$image->save('photo/i/'.$pre);
								}								
								else{
									$image->crop(360,240,0,0);
									$image->save('photo/i/'.$pre);
								}	
							}
						}
					}
				}/*удаление фото*/
				if(isset($_POST['delete'])){
					foreach($_POST['delete'] as $del){
						if(file_exists('photo/'.$del)){
							unlink('photo/'.$del);
						}
						if(file_exists('photo/i/'.$del)){
							unlink('photo/i/'.$del);
						}
					}
				}			
				$data['errors'] = $errors;
				$data['messages'] = $messages;
			}
			/*получение списка фото из папки галереи*/
			if(isset($_GET['category'])){
				if(file_exists("photo/".$_GET['category'])){
					$dir="photo/".$_GET['category']; // путь к директории, в которой лежат фото
					$files = scandir($dir); // получение списока файлов из директории
					$data['files'] = array_reverse(parent::photo_filter($files)); // удаление лишних файлов			
				}
			}
			$content=View::factory('elements/admin_changephoto')->bind('data',$data);
			$this->template->content=$content;			
		}
		else $this->redirect('/admin');		
	}

//Редактор личных данных
	public function action_myinfo()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0)
		{		
			if(isset($_POST['btnchange'])){
				$messages = array();
				$errors = array();
				/*изменение данных в таблице БД myinfo*/
				if(isset($_POST['myinfo'])){
					$myinfo = $_POST['myinfo'];
					if(!empty($myinfo['email'])&&!empty($myinfo['phone'])&&!empty($myinfo['address'])){
						Model::factory('Test0211Model')->upd_myinfo2($myinfo);
					}
					else{
						$errors[] = 'Все поля должны быть заполнены!';
					}
				}/*изменение данных в таблице БД networks*/
				if(isset($_POST['networks'])){
					$networks = $_POST['networks'];
					foreach($networks as $id=>$value){
						/*удаление соцсети*/
						if(isset($value['delete'])){						
							if($delnet= Model::factory('Test0211Model')->get_networkbyid($id)){
								if(file_exists('i/networks/'.$delnet[0]['img'])){
									unlink('i/networks/'.$delnet[0]['img']);
								}
							}
							if(Model::factory('Test0211Model')->del_networks($id)){
								$messages[] = 'Соцсеть '.$value['name'].' удалена!';
							}
							else{
								$errors[] = 'Ошибка при удалении соцсети '.$value['name'].'!';
							}
						}/*изменение соцсети*/
						else{
							if(!empty($value['name'])&&!empty($value['address'])){
								if($renamenet = Model::factory('Test0211Model')->get_networkbyid($id)){
									$namefile = 'file'.$id;
									/*изменения с иконкой соцсети*/
									if(!empty($_FILES[$namefile]['name'])){
										$ext = array('.jpg','.jpeg','.png','.gif','.ico');
										$str = strtolower($_FILES[$namefile]['name']);
										$pos = substr($str, strrpos($str,'.'), strlen($str)-1);  //расширение загруженного файла
										if(in_array($pos,$ext)){
											$image = Image::factory($_FILES[$namefile]['tmp_name']);
											$image->resize(32, 32);	
											$info = pathinfo($renamenet[0]['img']);
											$filename = basename($renamenet[0]['img'],'.'.$info['extension']);
											$value['img'] = ''.$filename.$pos;
											$image->save('i/networks/'.$value['img']);
											Model::factory('Test0211Model')->upd_networks($value, $id);
										} else $errors[] = 'Неверный тип файла: <br>'.$_FILES[$namefile]['name'].'!';	
									}/*изменения соцсети без иконки*/
									else{
										Model::factory('Test0211Model')->upd_networks2($value, $id);
									}
								}
							}else{
								$errors[] = 'Все поля должны быть заполнены!';
							}
						}
					}
				}/*добавление данных в таблицу БД networks*/				
				if(isset($_POST['newnetworks'])){
					$newnetworks = $_POST['newnetworks'];
					foreach($newnetworks as $id=>$value){
						if(!empty($value['name'])&&!empty($value['address'])){
							$namefile = 'newfile'.$id;
							if(!empty($_FILES[$namefile]['name'])){
								$ext = array('.jpg','.jpeg','.png','.gif','.ico');
								$str = strtolower($_FILES[$namefile]['name']);
								$pos = substr($str, strrpos($str,'.'), strlen($str)-1);  //расширение загруженного файла
								if(in_array($pos,$ext)){
									$image = Image::factory($_FILES[$namefile]['tmp_name']);
									$image->resize(32, 32);
									$filename = parse_url($value['address'],PHP_URL_HOST);
									$value['img'] = ''.$filename.$pos;
									$image->save('i/networks/'.$value['img']);
										Model::factory('Test0211Model')->set_networks($value);
								} else $errors[] = 'Неверный тип файла: <br>'.$_FILES[$namefile]['name'].'!';	
							}
							else{
								Model::factory('Test0211Model')->set_networks2($value);
							}							
						}
						else{
							$errors[] = 'Все поля должны быть заполнены!';
						}
					}
				}				
				$data['errors'] = $errors;
				$data['messages'] = $messages;
			}
		
			$res = Model::factory('Test0211Model')->get_networks();
			$data['networks'] = $res;
			$res = Model::factory('Test0211Model')->get_myinfo();
			$data['myinfo'] = $res[0];			
			$content=View::factory('elements/admin_myinfo')->bind('data',$data);
			$this->template->content=$content;
		}
		else $this->redirect('/admin');
	}

//Настройка сайта
	public function action_sitedecor()
	{
		$data = array();
		$auth = Auth::instance();

		if($auth->logged_in()!=0){
			$messages = array();
			$errors = array();
			
			if(isset($_POST['btnchange']))
			{   /*изменение текста приветствия*/
				if(!empty($_POST['text'])){
					Model::factory('Test0211Model')->upd_myinfotext($_POST['text']);
				}/*изменение фона сайта*/
				if(!empty($_FILES['file'])){
					$ext = array('.jpg','.jpeg','.png','.gif');
					$str = strtolower($_FILES['file']['name']);
					$pos = substr($str, strrpos($str,'.'), strlen($str)-1);  //расширение загруженного файла
					if(in_array($pos,$ext)){
						$image = Image::factory($_FILES['file']['tmp_name']);
						$image->resize(1280,1280);
						$image->save('i/body.png');
					}				
				}/*удаление фото из слайд-шоу*/
				if(isset($_POST['delete'])){
					foreach($_POST['delete'] as $del){
						Model::factory('Test0211Model')->del_presentphotos($del);
					}
				}/*добавление фото в слайд-шоу*/				
				if(isset($_POST['newpresentphoto'])){
					foreach($_POST['newpresentphoto'] as $set){
						Model::factory('Test0211Model')->set_presentphotos($set);
					}
				}				
				$data['errors'] = $errors;
				$data['messages'] = $messages;
			}			
		
			$res = Model::factory('Test0211Model')->get_categoryphotos();
			$data['categoryphotos'] = $res;
			$res = Model::factory('Test0211Model')->get_presentphotos();
			$data['presentphotos'] = $res;
			$res = Model::factory('Test0211Model')->get_myinfo();
			$data['text'] = $res[0]['text'];
			/*создание строк фото для использования в JS*/
			$data['files'] = array();
			foreach($data['categoryphotos'] as $cat){
				$dir="photo/i/".$cat['folder']; 
				if(file_exists($dir)){
					$files = scandir($dir);
					$files = array_reverse(parent::photo_filter($files));
					$data['files'][$cat['folder']] = implode('/', $files);  //преобразование массива в строку
				}
			}			
			$content=View::factory('elements/admin_sitedecor')->bind('data',$data);
			$this->template->content=$content;
		}
		else $this->redirect('/admin');
	}	
	
//Функции:

//Удаление директории
	static function removeDirectory($dir){
	if ($objs = glob($dir."/*")){
		foreach($objs as $obj){
			is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		}
	}
    rmdir($dir);
  }
  	
//Генератор паролей	
	public function action_hpass()
	{
		$auth = Auth::instance();
		if($auth->logged_in()!=0 && $_GET['pass']){
			$this->template->content = $auth->hash_password($_GET['pass']);
		}
		else $this->redirect('/admin');
	}

}