<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-25 13:47:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/elements/admin_changephoto.php [ 2 ] in file:line
2016-04-25 13:47:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 13:52:29 --- EMERGENCY: ErrorException [ 2 ]: scandir(photo/&gt;&lt;input type=): failed to open dir: No such file or directory ~ APPPATH/views/elements/admin_changephoto.php [ 7 ] in file:line
2016-04-25 13:52:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(photo/&...', '/virt/homes/tes...', 7, Array)
#1 /virt/homes/test0211/htdocs/application/views/elements/admin_changephoto.php(7): scandir('photo/><input t...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(62): include('/virt/homes/tes...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/virt/homes/tes...', Array)
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /virt/homes/test0211/htdocs/application/views/index.php(4): Kohana_View->__toString()
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
2016-04-25 18:46:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: /virt/homes/test0211/htdocs ~ MODPATH/image/classes/Kohana/Image.php [ 109 ] in /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php:91
2016-04-25 18:46:30 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('')
#1 /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image.php(56): Kohana_Image_GD->__construct('')
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(74): Kohana_Image::factory('')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addphoto()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php:91
2016-04-25 20:37:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/admin_addphoto.php [ 55 ] in file:line
2016-04-25 20:37:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-25 20:38:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/elements/admin_addphoto.php [ 55 ] in file:line
2016-04-25 20:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line