<?php
class IndexController implements IController {
	public $data = [];
	protected $page, $db;
	
	public function __construct(){
		$this->page = new PageModel();
		$this->data['view'] = $this->page->getNameView(__CLASS__);
		$this->data['title'] = 'BWT scool';
	}
	
	public function indexAction(){
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	
}