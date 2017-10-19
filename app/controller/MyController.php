<?php
class MyController implements IController {
	
	public $data = [];
	protected $page;
	
	public function __construct(){
		$this->page = new PageModel();
		$this->data['view'] = $this->page->getNameView(__CLASS__);
	}
	
	public function indexAction(){
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	
}