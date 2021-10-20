<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/view';

//Security
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;


//Отображение кол-ва данных
const QTY = 8;
const QTY_LINKS = 3;


//Скрипты и стили
const ADMIN_CSS_JS = [
   'styles' => ['admin/dd'],
   'scripts' => []
];

const USER_CSS_JS = [
    'styles' => ['vfvf/vfvvf', '/dddd'],
    'scripts' => ['http://im/']
];

use core\base\exceptions\RouteException;

function autoloadMainClasses($class_name) {
    $class_name = str_replace('\\', '/', $class_name);

    if(!@include_once $class_name . '.php') {
       throw new RouteException("Неверное имя файла: ". $class_name );
    }

}

spl_autoload_register('autoloadMainClasses');