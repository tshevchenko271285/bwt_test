<?php
class PageModel {
	
	public $data = [];
	
	// Загрузка макета представления
	public function getView(){
		include_once('layout.view.php');
	}
	
	//Получение имя View из имени Controller`a
	public function getNameView($controller) {
		$position_name = strrpos($controller, 'Controller');
		$name = substr($controller, 0, $position_name).'.view.php';
		return lcfirst($name);
	}
	
	// Установка данных для отображения
	public function setPageData(Array $data){
		$this->data = $data;
	}
	
}