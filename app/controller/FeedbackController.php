<?php
class FeedbackController extends IndexController {
	
	public function __construct(){
		$this->page = new PageModel();
		$this->data['view'] = 'add'.$this->page->getNameView(__CLASS__);
	}
	
	public function addAction() {
		if($_SERVER['REQUEST_METHOD'] === 'POST') {
			echo 'POST';
		}
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	
	public function saveAction(){
		echo 'Hello';
		$this->page->getView();
	}
}