<?php
class FeedbackController extends IndexController {
	
	public function __construct(){
		$this->db = new DbModel();
		$this->page = new PageModel();
		$this->data['title'] = 'BWT scool';
	}
	
	public function addAction() {
		$this->data['view'] = 'add'.$this->page->getNameView(__CLASS__);
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	public function getAction(){
		$this->data['view'] = 'get'.$this->page->getNameView(__CLASS__);
		
		if($_SERVER['HTTP_X_REQUESTED_WITH']) {
			$this->data['feedbacks'] = $this->db->getFeedbacks();
		}
		
		$this->data['feedbacks'] = $this->db->getFeedbacks();
		$this->page->setPageData($this->data);
		$this->page->getView();
	}
	public function saveAction(){
		if($_SERVER['REQUEST_METHOD'] !== 'POST') {
			$this->addAction();
			exit;	
		}
			$name = trim(strip_tags($_POST['name']));
			$email = trim(strip_tags($_POST['email']));
			$message = trim(strip_tags($_POST['message']));
			
			$this->db->saveFeedback($name, $email, $message);
	}
}