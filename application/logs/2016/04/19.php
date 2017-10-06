<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-19 17:44:05 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Admin.php [ 127 ] in file:line
2016-04-19 17:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/virt/homes/tes...', 127, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(127): mkdir('photo/')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addcategory()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in file:line