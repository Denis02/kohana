<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-27 11:39:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/Controller/Admin.php [ 337 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:337
2016-04-27 11:39:10 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(337): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 337, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_myinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:337