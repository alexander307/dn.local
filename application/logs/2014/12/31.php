<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-31 01:44:17 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'dn.com' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:75
2014-12-31 01:44:17 --- DEBUG: #0 F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('dn.com')
#1 F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#4 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 F:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(16): Kohana_ORM::factory('post')
#9 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Wall->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#12 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 F:\xampp\htdocs\dn.local\application\classes\Controller\User.php(26): Kohana_Request->execute()
#15 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#16 [internal function]: Kohana_Controller->execute()
#17 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#18 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 F:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#21 {main} in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:75
2014-12-31 01:44:17 --- CRITICAL: Database_Exception [ 1046 ]: No database selected [ SHOW FULL COLUMNS FROM `video` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:359
2014-12-31 01:44:17 --- DEBUG: #0 F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('video')
#2 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 F:\xampp\htdocs\dn.local\application\classes\Controller\Addvideo.php(31): Kohana_ORM::factory('video')
#7 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_addvideo->action_user()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_addvideo))
#10 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\xampp\htdocs\dn.local\application\classes\Controller\User.php(29): Kohana_Request->execute()
#13 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 F:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#19 {main} in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:359
2014-12-31 01:44:17 --- CRITICAL: Database_Exception [ 1046 ]: No database selected [ SHOW FULL COLUMNS FROM `unique_` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:359
2014-12-31 01:44:17 --- DEBUG: #0 F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('unique_')
#2 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 F:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('1')
#6 F:\xampp\htdocs\dn.local\application\classes\Controller\User.php(34): Kohana_ORM::factory('unique', '1')
#7 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in F:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\MySQL.php:359
2014-12-31 12:30:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 27 ] in F:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2014-12-31 12:30:02 --- DEBUG: #0 F:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 27, Array)
#1 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Wall->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#4 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 F:\xampp\htdocs\dn.local\application\classes\Controller\User.php(26): Kohana_Request->execute()
#7 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 F:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in F:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2014-12-31 12:30:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: moovie ~ APPPATH\views\user_video.php [ 12 ] in F:\xampp\htdocs\dn.local\application\views\user_video.php:12
2014-12-31 12:30:02 --- DEBUG: #0 F:\xampp\htdocs\dn.local\application\views\user_video.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\\xampp\\htdocs...', 12, Array)
#1 F:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('F:\\xampp\\htdocs...')
#2 F:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('F:\\xampp\\htdocs...', Array)
#3 F:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 F:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 F:\xampp\htdocs\dn.local\application\classes\Controller\Addvideo.php(37): Kohana_Response->body(Object(View))
#6 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_addvideo->action_user()
#7 [internal function]: Kohana_Controller->execute()
#8 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_addvideo))
#9 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 F:\xampp\htdocs\dn.local\application\classes\Controller\User.php(29): Kohana_Request->execute()
#12 F:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#15 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 F:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 F:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#18 {main} in F:\xampp\htdocs\dn.local\application\views\user_video.php:12