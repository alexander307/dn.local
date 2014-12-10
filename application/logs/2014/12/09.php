<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-09 22:54:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 25 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:25
2014-12-09 22:54:41 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Wall->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(25): Kohana_Request->execute()
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:25
2014-12-09 23:02:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\Wall.php [ 25 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:25
2014-12-09 23:02:02 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 25, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Wall->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(25): Kohana_Request->execute()
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Wall.php:25