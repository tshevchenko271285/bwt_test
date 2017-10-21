<?php
class FeedbackController extends IndexController {
	/*private $db, $page;
	public $data;*/
	public function __construct(){
		$this->db = new DbModel();
		$this->page = new PageModel();
		$this->data['view'] = 'add'.$this->page->getNameView(__CLASS__);
		$this->data['title'] = 'BWT scool';
	}
	
	public function addAction() {
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	
	public function saveAction(){
		if($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$this->db->saveFeedback($name, $email, $message);
		}
	}
}