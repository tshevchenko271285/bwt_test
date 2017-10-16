<?php
/* Пути по-умолчанию для поиска файлов */
set_include_path(
	get_include_path()
		.PATH_SEPARATOR.'app/controller'
		.PATH_SEPARATOR.'app/model'
		.PATH_SEPARATOR.'app/view'
);

/* Автозагрузчик классов */
function __autoload($class){
  require_once($class.'.php');
}

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();

/* Вывод данных */
//echo $front->getBody();