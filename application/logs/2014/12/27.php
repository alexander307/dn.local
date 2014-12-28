<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-27 10:16:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Логин...' for key 'login' [ INSERT INTO `unique_` (`login`, `password`, `name`, `surname`, `patronomyc`, `nickname`) VALUES ('Логин...', 'Пароль...', 'Имя...', 'Фамилия...', '(Отчество)...', 'nick...') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-12-27 10:16:35 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `un...', false, Array)
#1 C:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\dn.local\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php(21): Kohana_ORM->save()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Registration->action_step1()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251