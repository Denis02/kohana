<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-22 00:13:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: delcat ~ APPPATH/classes/Controller/Admin.php [ 185 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:185
2016-04-22 00:13:35 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/virt/homes/tes...', 185, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changegallery()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:185
2016-04-22 00:15:45 --- EMERGENCY: ErrorException [ 2 ]: scandir(photo/i/test2): failed to open dir: No such file or directory ~ APPPATH/views/elements/admin_changegallery.php [ 20 ] in file:line
2016-04-22 00:15:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(photo/i...', '/virt/homes/tes...', 20, Array)
#1 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(20): scandir('photo/i/test2')
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
#15 {main} in file:line
2016-04-22 00:18:36 --- EMERGENCY: ErrorException [ 2 ]: scandir(photo/i/test2): failed to open dir: No such file or directory ~ APPPATH/views/elements/admin_changegallery.php [ 20 ] in file:line
2016-04-22 00:18:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(photo/i...', '/virt/homes/tes...', 20, Array)
#1 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(20): scandir('photo/i/test2')
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
#15 {main} in file:line
2016-04-22 00:19:00 --- EMERGENCY: ErrorException [ 2 ]: scandir(photo/i/test2): failed to open dir: No such file or directory ~ APPPATH/views/elements/admin_changegallery.php [ 20 ] in file:line
2016-04-22 00:19:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(photo/i...', '/virt/homes/tes...', 20, Array)
#1 /virt/homes/test0211/htdocs/application/views/elements/admin_changegallery.php(20): scandir('photo/i/test2')
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
#15 {main} in file:line