<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-29 13:43:31 --- EMERGENCY: ErrorException [ 2 ]: : failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 240 ] in file:line
2016-04-29 13:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, ': failed to ope...', '/virt/homes/tes...', 240, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(240): getimagesize('\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-29 13:45:33 --- EMERGENCY: ErrorException [ 2 ]: : failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 240 ] in file:line
2016-04-29 13:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, ': failed to ope...', '/virt/homes/tes...', 240, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(240): getimagesize('\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00...')
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-29 13:46:29 --- EMERGENCY: ErrorException [ 2 ]: imagesy() expects parameter 1 to be resource, object given ~ APPPATH/classes/Controller/Admin.php [ 240 ] in file:line
2016-04-29 13:46:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagesy() expec...', '/virt/homes/tes...', 240, Array)
#1 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(240): imagesy(Object(Image_GD))
#2 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#3 [internal function]: Kohana_Controller->execute()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2016-04-29 14:01:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 109 ] in /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php:91
2016-04-29 14:01:50 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('photo/itest/8.j...')
#1 /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image.php(56): Kohana_Image_GD->__construct('photo/itest/8.j...')
#2 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(242): Kohana_Image::factory('photo/itest/8.j...')
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#4 [internal function]: Kohana_Controller->execute()
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#9 {main} in /virt/homes/test0211/htdocs/modules/image/classes/Kohana/Image/GD.php:91
2016-04-29 14:33:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: children/319.jpg ~ APPPATH/classes/Controller/Admin.php [ 236 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:236
2016-04-29 14:33:44 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(236): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 236, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:236
2016-04-29 15:36:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: changepreview ~ APPPATH/classes/Controller/Admin.php [ 236 ] in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:236
2016-04-29 15:36:59 --- DEBUG: #0 /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php(236): Kohana_Core::error_handler(8, 'Undefined index...', '/virt/homes/tes...', 236, Array)
#1 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Admin->action_changephoto()
#2 [internal function]: Kohana_Controller->execute()
#3 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /virt/homes/test0211/htdocs/application/classes/Controller/Admin.php:236