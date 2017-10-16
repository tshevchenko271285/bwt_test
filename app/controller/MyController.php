<?php
class MyController implements IController {
	public function indexAction(){
		
		$fc = FrontController::getInstance();

		$view = new PageModel($fc->getController());
		echo 'hello world';
	}
}