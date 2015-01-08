<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-07 06:13:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Avatar.php [ 9 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:9
2015-01-07 06:13:27 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:9
2015-01-07 06:17:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: avatar ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2015-01-07 06:17:28 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(271): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2015-01-07 07:28:49 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant UPLOADED_ERR_OK - assumed 'UPLOADED_ERR_OK' ~ APPPATH\classes\Controller\Avatar.php [ 10 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:28:49 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(10): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(36): Kohana_Request->execute()
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 10 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:28:55 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:31:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 10 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:31:27 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:31:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 10 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:31:33 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:10
2015-01-07 07:33:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 11 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:11
2015-01-07 07:33:49 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:11
2015-01-07 07:48:58 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant UPLOADED_ERR_OK - assumed 'UPLOADED_ERR_OK' ~ APPPATH\classes\Controller\Avatar.php [ 15 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:15
2015-01-07 07:48:58 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:15
2015-01-07 07:49:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 07:49:11 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 07:53:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant UPLOADED_ERR_OK - assumed 'UPLOADED_ERR_OK' ~ APPPATH\classes\Controller\Avatar.php [ 17 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:17
2015-01-07 07:53:25 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(17): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:17
2015-01-07 08:12:25 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Avatar.php [ 28 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:28
2015-01-07 08:12:25 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(28): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:28
2015-01-07 08:13:55 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Avatar.php [ 28 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:28
2015-01-07 08:13:55 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(28): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:28
2015-01-07 08:15:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Avatar.php [ 28 ] in file:line
2015-01-07 08:15:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-07 08:23:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:48 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:54 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:24:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:24:08 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:34 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:36 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:37 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:44 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:48 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:49 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatarfile ~ APPPATH\classes\Controller\Avatar.php [ 13 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:23:50 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Avatar.php:13
2015-01-07 08:33:31 --- CRITICAL: ErrorException [ 1 ]: Class 'InvalidFileTypeException' not found ~ APPPATH\classes\Controller\Avatar.php [ 25 ] in file:line
2015-01-07 08:33:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-07 08:38:36 --- CRITICAL: ErrorException [ 1 ]: Class 'InvalidFileTypeException' not found ~ APPPATH\classes\Controller\Avatar.php [ 25 ] in file:line
2015-01-07 08:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-07 08:43:31 --- CRITICAL: ErrorException [ 1 ]: Class 'InvalidFileTypeException' not found ~ APPPATH\classes\Controller\Avatar.php [ 25 ] in file:line
2015-01-07 08:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line