<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-26 23:04:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: outer_id ~ APPPATH\views\audio_alt.php [ 103 ] in C:\xampp\htdocs\dn.local\application\views\audio_alt.php:103
2015-01-26 23:04:41 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\audio_alt.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 103, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\Audio.php(100): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Audio->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\audio_alt.php:103
2015-01-26 23:26:59 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Friends.php [ 17 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:17
2015-01-26 23:26:59 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(17): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php:17
2015-01-26 23:28:05 --- CRITICAL: Kohana_Exception [ 0 ]: The friend property does not exist in the Model_Friends class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php:603
2015-01-26 23:28:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('friend')
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\Friends.php(20): Kohana_ORM->__get('friend')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Friends->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php:603
2015-01-26 23:48:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: friends ~ APPPATH\views\friends.php [ 6 ] in C:\xampp\htdocs\dn.local\application\views\friends.php:6
2015-01-26 23:48:53 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\friends.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(292): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\friends.php:6