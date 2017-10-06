<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-24 00:00:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH/classes/Controller/Main.php [ 15 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Main.php:15
2016-04-24 00:00:23 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 15, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Main.php:15
2016-04-24 13:46:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH/classes/Controller/Admin.php [ 219 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:219
2016-04-24 13:46:57 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 219, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_myinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:219
2016-04-24 17:58:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 288 ] in file:line
2016-04-24 17:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-24 17:58:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 288 ] in file:line
2016-04-24 17:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-24 17:59:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 288 ] in file:line
2016-04-24 17:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-24 17:59:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin.php [ 288 ] in file:line
2016-04-24 17:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-24 23:08:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/Controller/Admin.php [ 327 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:327
2016-04-24 23:08:51 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(327): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 327, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_sitedecor()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:327
2016-04-24 23:12:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Admin.php [ 326 ] in file:line
2016-04-24 23:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-24 23:16:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Admin.php [ 326 ] in file:line
2016-04-24 23:16:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line