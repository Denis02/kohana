<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-11 19:51:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Test0211' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-11 19:51:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-11 19:51:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Test0211' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-11 19:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-11 19:52:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Test0211' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-04-11 19:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-11 19:54:51 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 19:54:51 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(7): Kohana_Database_Query->execute()
#3 /virt/homes/test0211/htdocs/application/classes/Controller/Home.php(7): Model_Test0211Model->get_presentphotos()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:02:54 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:02:54 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(7): Kohana_Database_Query->execute()
#3 /virt/homes/test0211/htdocs/application/classes/Controller/Home.php(7): Model_Test0211Model->get_presentphotos()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:11:44 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:11:44 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(7): Kohana_Database_Query->execute()
#3 /virt/homes/test0211/htdocs/application/classes/Controller/Home.php(7): Model_Test0211Model->get_presentphotos()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:14:10 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171
2016-04-11 20:14:10 --- DEBUG: #0 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /virt/homes/test0211/htdocs/application/classes/Model/Test0211Model.php(7): Kohana_Database_Query->execute()
#3 /virt/homes/test0211/htdocs/application/classes/Controller/Home.php(7): Model_Test0211Model->get_presentphotos()
#4 /virt/homes/test0211/htdocs/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /virt/homes/test0211/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /virt/homes/test0211/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /virt/homes/test0211/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /virt/homes/test0211/htdocs/modules/database/classes/Kohana/Database/MySQL.php:171