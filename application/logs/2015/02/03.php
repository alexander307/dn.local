<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-03 00:18:20 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\letter.php [ 38 ] in file:line
2015-02-03 00:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\dn.local\application\views\letter.php(38): natsort(Array)
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\dn.local\application\classes\Controller\Letter.php(62): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Letter->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Letter))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#13 {main} in file:line