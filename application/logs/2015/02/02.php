<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-02 22:44:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2015-02-02 22:44:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
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
2015-02-02 22:44:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: moovie ~ APPPATH\views\user_video.php [ 12 ] in C:\xampp\htdocs\dn.local\application\views\user_video.php:12
2015-02-02 22:44:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user_video.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
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
2015-02-02 22:45:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:27
2015-02-02 22:45:17 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 27, Array)
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
2015-02-02 22:45:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: moovie ~ APPPATH\views\user_video.php [ 12 ] in C:\xampp\htdocs\dn.local\application\views\user_video.php:12
2015-02-02 22:45:18 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user_video.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
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
2015-02-02 22:52:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_letter' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-02-02 22:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 22:52:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post_id ~ APPPATH\classes\Controller\Letter.php [ 49 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 22:52:44 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 22:53:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post_id ~ APPPATH\classes\Controller\Letter.php [ 49 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 22:53:42 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 22:53:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post_id ~ APPPATH\classes\Controller\Letter.php [ 49 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 22:53:44 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php:49
2015-02-02 23:19:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letter_out ~ APPPATH\views\letter.php [ 3 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:3
2015-02-02 23:19:49 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 3, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(55): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:3
2015-02-02 23:20:33 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\views\letter.php [ 3 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:3
2015-02-02 23:20:33 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(3): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 3, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(56): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:3
2015-02-02 23:34:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letter_in ~ APPPATH\views\letter.php [ 13 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:13
2015-02-02 23:34:48 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(61): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:13
2015-02-02 23:37:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_in ~ APPPATH\views\letter.php [ 23 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:37:08 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_in ~ APPPATH\views\letter.php [ 23 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_in ~ APPPATH\views\letter.php [ 23 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:57 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_in ~ APPPATH\views\letter.php [ 23 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:39:59 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:40:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_out ~ APPPATH\views\letter.php [ 12 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:12
2015-02-02 23:40:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:12
2015-02-02 23:40:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letters_in ~ APPPATH\views\letter.php [ 23 ] in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:40:11 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\letter.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\letter.php:23
2015-02-02 23:56:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function merge() ~ APPPATH\views\letter.php [ 25 ] in file:line
2015-02-02 23:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line