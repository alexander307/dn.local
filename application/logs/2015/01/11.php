<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-11 03:46:00 --- CRITICAL: View_Exception [ 0 ]: The requested view /vid_vid_1 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php:137
2015-01-11 03:46:00 --- DEBUG: #0 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/vid_vid_1')
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(30): Kohana_View->__construct('/vid_vid_1', NULL)
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\Addvideo.php(87): Kohana_View::factory('/vid_vid_1')
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_addvideo->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_addvideo))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php:137
2015-01-11 03:46:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: video ~ APPPATH\views\vidvid_1.php [ 64 ] in C:\xampp\htdocs\dn.local\application\views\vidvid_1.php:64
2015-01-11 03:46:18 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\vidvid_1.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 64, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Addvideo.php(89): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_addvideo->action_test()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_addvideo))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\vidvid_1.php:64