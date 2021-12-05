<?php
include_once 'define.php';

require_once 'Zend/Application.php';
$enviroment = APPLICATION_EVN;
$options = APPLICATION_PATH.'/configs/application.ini';
$application = new Zend_Application($enviroment, $options);
$application->bootstrap()->run();