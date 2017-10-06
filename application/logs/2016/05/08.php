<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-08 21:29:09 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin.php [ 206 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:206
2016-05-08 21:29:09 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(206): Kohana_Core::error_handler(8, 'Array to string...', '/virt/homes/tes...', 206, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:206
2016-05-08 21:41:21 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin.php [ 206 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:206
2016-05-08 21:41:21 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(206): Kohana_Core::error_handler(8, 'Array to string...', '/virt/homes/tes...', 206, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:206