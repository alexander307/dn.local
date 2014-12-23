<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-22 21:48:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\audio.php [ 5 ] in C:\xampp\htdocs\dn.local\application\views\audio.php:5
2014-12-22 21:48:10 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\audio.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Audio.php(10): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Audio->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\audio.php:5
2014-12-22 21:48:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\audio.php [ 5 ] in C:\xampp\htdocs\dn.local\application\views\audio.php:5
2014-12-22 21:48:48 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\audio.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Audio.php(10): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Audio->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\audio.php:5