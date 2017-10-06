<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-18 12:24:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: categories ~ APPPATH/views/elements/admin_addphoto.php [ 3 ] in /virt/homes/test0211/htdocs/application/views/elements/admin_addphoto.php:3
2016-04-18 12:24:47 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/views/elements/admin_addphoto.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 3, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /virt/homes/test0211/htdocs/application/views/index.php(3): Kohana_View->__toString()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#14 {main} in /virt/homes/test0211/htdocs/application/views/elements/admin_addphoto.php:3
2016-04-18 12:31:26 --- EMERGENCY: ErrorException [ 2 ]: scandir(photo/addcategory): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 62 ] in file:line
2016-04-18 12:31:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(photo/a...', '/virt/homes/tes...', 62, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(62): scandir('photo/addcatego...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-18 16:23:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/elements/admin_changegallery.php [ 10 ] in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:10
2016-04-18 16:23:11 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 10, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /virt/homes/test0211/htdocs/application/views/index.php(3): Kohana_View->__toString()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#14 {main} in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:10
2016-04-18 16:25:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view elements/admin_changecover could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:25:42 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(145): Kohana_View->set_filename('elements/admin_...')
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(30): Kohana_View->__construct('elements/admin_...', NULL)
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(131): Kohana_View::factory('elements/admin_...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changecover()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:27:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view elements/admin_changecover could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:27:39 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(145): Kohana_View->set_filename('elements/admin_...')
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(30): Kohana_View->__construct('elements/admin_...', NULL)
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(131): Kohana_View::factory('elements/admin_...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changecover()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:27:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view elements/admin_changecover could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:27:49 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(145): Kohana_View->set_filename('elements/admin_...')
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(30): Kohana_View->__construct('elements/admin_...', NULL)
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(131): Kohana_View::factory('elements/admin_...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changecover()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:30:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view elements/admin_changecover could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:30:05 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(145): Kohana_View->set_filename('elements/admin_...')
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(30): Kohana_View->__construct('elements/admin_...', NULL)
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(131): Kohana_View::factory('elements/admin_...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changecover()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:34:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view elements/admin_changecover could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:34:06 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(145): Kohana_View->set_filename('elements/admin_...')
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(30): Kohana_View->__construct('elements/admin_...', NULL)
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(131): Kohana_View::factory('elements/admin_...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changecover()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/View.php:145
2016-04-18 16:36:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/elements/admin_changegallery.php [ 10 ] in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:10
2016-04-18 16:36:44 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 10, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /virt/homes/test0211/htdocs/application/views/index.php(3): Kohana_View->__toString()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#14 {main} in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:10
2016-04-18 18:26:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:26:43 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:27:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:27:50 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:27:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:27:54 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:28:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:28:25 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:30:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:30:10 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:31:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:31:03 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/admin/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:31:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:31:17 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/admin/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:36:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:36:57 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:38:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:38:46 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/admin')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:38:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 18:38:49 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/admin')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 19:09:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:09:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:12:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:13:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:14:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:18:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 27 ] in file:line
2016-04-18 19:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:19:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:19:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:23:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:23:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:23:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:26:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:26:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:27:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:27:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 19:31:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/footer_element.php [ 24 ] in file:line
2016-04-18 19:31:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 22:45:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 22:45:39 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(104): Kohana_Controller::redirect('/admin')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:08:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:08:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:13:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:13:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:13:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:14:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:14:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:14:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:14:48 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant this - assumed 'this' ~ APPPATH/classes/Controller/Admin.php [ 103 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:103
2016-04-18 23:14:48 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(103): Kohana_Core::error_handler(8, 'Use of undefine...', '/virt/homes/tes...', 103, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:103
2016-04-18 23:15:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:16:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:16:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:17:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH/classes/Controller/Admin.php [ 103 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:103
2016-04-18 23:17:35 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 103, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:103
2016-04-18 23:17:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:17:59 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(103): Kohana_Controller::redirect('/admin')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:18:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:18:08 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/admin', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/admin')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/admin', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(103): Kohana_Controller::redirect('/admin')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:24:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin::executeAction() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:25:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin::executeAction() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:26:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin::executeAction() ~ APPPATH/classes/Controller/Admin.php [ 103 ] in file:line
2016-04-18 23:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:28:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 106 ] in file:line
2016-04-18 23:28:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:28:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 106 ] in file:line
2016-04-18 23:28:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:29:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 106 ] in file:line
2016-04-18 23:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:31:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:32:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:33:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:33:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:33:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:48:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:49:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Admin.php [ 102 ] in file:line
2016-04-18 23:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 23:50:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Untrusted host test0211.ho.ua. If you trust test0211.ho.ua, add it to the trusted hosts in the `url` config file. ~ SYSPATH/classes/Kohana/URL.php [ 107 ] in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:50:21 --- DEBUG: #0 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(102): Kohana_Controller::redirect('/')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#6 [internal function]: Kohana_Controller->execute()
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#11 {main} in /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php:144
2016-04-18 23:57:38 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant test0211 - assumed 'test0211' ~ APPPATH/config/url.php [ 10 ] in /virt/homes/test0211/htdocs/application/config/url.php:10
2016-04-18 23:57:38 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/config/url.php(10): Kohana_Core::error_handler(8, 'Use of undefine...', '/virt/homes/tes...', 10, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Core.php(829): include('/virt/homes/tes...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/virt/homes/tes...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('url')
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(254): Kohana_Config->load('url')
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(105): Kohana_URL::is_trusted_host('test0211.ho.ua')
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/URL.php(144): Kohana_URL::base(true, false)
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP/Exception/Redirect.php(29): Kohana_URL::site('/', true, false)
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(127): Kohana_HTTP::redirect('/', 302)
#10 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(102): Kohana_Controller::redirect('/')
#11 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#12 [internal function]: Kohana_Controller->execute()
#13 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#17 {main} in /virt/homes/test0211/htdocs/application/config/url.php:10