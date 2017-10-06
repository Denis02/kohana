<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-07 12:53:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php:67
2016-04-07 12:53:53 --- DEBUG: #0 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\ProgramFiles\server\localhost\kohana_v3.3.5\index.php(117): Kohana_Request::factory('', Array, false)
#3 {main} in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php:67
2016-04-07 12:54:03 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php:67
2016-04-07 12:54:03 --- DEBUG: #0 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 F:\ProgramFiles\server\localhost\kohana_v3.3.5\index.php(117): Kohana_Request::factory('', Array, false)
#3 {main} in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Cookie.php:67
2016-04-07 23:10:22 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-04-07 23:10:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-07 23:11:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-04-07 23:11:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-07 23:12:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16
2016-04-07 23:12:54 --- DEBUG: #0 F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\ProgramFiles...', 16, Array)
#1 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\ProgramFiles\server\localhost\kohana_v3.3.5\index.php(118): Kohana_Request->execute()
#7 {main} in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16
2016-04-07 23:12:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16
2016-04-07 23:12:57 --- DEBUG: #0 F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\ProgramFiles...', 16, Array)
#1 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\ProgramFiles\server\localhost\kohana_v3.3.5\index.php(118): Kohana_Request->execute()
#7 {main} in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16
2016-04-07 23:13:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Welcome.php [ 16 ] in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16
2016-04-07 23:13:26 --- DEBUG: #0 F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\ProgramFiles...', 16, Array)
#1 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\ProgramFiles\server\localhost\kohana_v3.3.5\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 F:\ProgramFiles\server\localhost\kohana_v3.3.5\index.php(118): Kohana_Request->execute()
#7 {main} in F:\ProgramFiles\server\localhost\kohana_v3.3.5\application\classes\Controller\Welcome.php:16