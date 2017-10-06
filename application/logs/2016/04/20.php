<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-20 12:49:02 --- EMERGENCY: ErrorException [ 2 ]: include(/functions/photo.php): failed to open stream: No such file or directory ~ APPPATH/views/elements/admin_changegallery.php [ 3 ] in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:3
2016-04-20 12:49:02 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(3): Kohana_Core::error_handler(2, 'include(/functi...', '/virt/homes/tes...', 3, Array)
#1 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(3): include()
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /virt/homes/test0211/htdocs/application/views/index.php(3): Kohana_View->__toString()
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#15 {main} in /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php:3
2016-04-20 15:36:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Admin.php [ 164 ] in file:line
2016-04-20 15:36:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 15:38:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 166 ] in file:line
2016-04-20 15:38:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 15:39:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2016-04-20 15:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 15:41:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 15:41:04 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 15:55:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 15:55:49 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:02:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:02:25 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:06:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Admin.php [ 174 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:174
2016-04-20 16:06:50 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(174): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 174, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:174
2016-04-20 16:19:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:19:03 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:34:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:34:28 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:36:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/Test0211Model.php [ 75 ] in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:36:02 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 75, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(173): Model_Test0211Model->upd_categoryphotos(Array, 1)
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php:75
2016-04-20 16:49:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2016-04-20 16:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 16:50:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2016-04-20 16:50:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-20 16:52:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Admin.php [ 165 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:165
2016-04-20 16:52:37 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(165): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 165, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:165
2016-04-20 22:51:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Admin.php [ 173 ] in file:line
2016-04-20 22:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line