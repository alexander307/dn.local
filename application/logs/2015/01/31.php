<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-31 09:10:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Friends.php [ 67 ] in file:line
2015-01-31 09:10:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-31 09:13:49 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Friends.php [ 68 ] in file:line
2015-01-31 09:13:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-31 09:14:26 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Friends.php [ 68 ] in file:line
2015-01-31 09:14:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-31 09:57:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:57:03 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(81): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:57:24 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:57:24 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(81): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:57:40 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:57:40 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(81): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:58:06 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:58:06 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(81): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:81
2015-01-31 09:58:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:84
2015-01-31 09:58:55 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(84): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:84
2015-01-31 10:00:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:00:29 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(82): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:00:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:00:55 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(82): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:01:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:01:27 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(82): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:82
2015-01-31 10:02:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete friends model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:83
2015-01-31 10:02:13 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(83): Kohana_ORM->delete()
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:83
2015-01-31 10:09:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2015-01-31 10:09:19 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Wall->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(41): Kohana_Request->execute()
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2015-01-31 10:09:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: moovie ~ APPPATH\views\user_video.php [ 12 ] in C:\xampp\htdocs\dn.local\application\views\user_video.php:12
2015-01-31 10:09:19 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user_video.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Addvideo.php(36): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_addvideo->action_user()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_addvideo))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(44): Kohana_Request->execute()
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#15 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\dn.local\application\views\user_video.php:12