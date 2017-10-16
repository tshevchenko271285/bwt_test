<?php
class MyController implements IController {
	public $data = [];
	public function __construct(){
		$this->data['name'] = 'Tima';
	}
	
	public function indexAction(){
		$fc = FrontController::getInstance();
		$controller_name = $fc->getController();
		
		$page = new PageModel();
		
		$this->data['view'] = $page->getNameView($controller_name);
		
		$page->setPageData($this->data);
		$page->getView();
	}
}