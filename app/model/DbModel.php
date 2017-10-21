<?php
class DbModel {
	
	public $db;
	private $dsn, $username, $passwd;
	
	public function __construct(){
		
		$this->dsn = 'mysql:dbname=bwt_test;host=127.0.0.1';
		$this->username = 'user';
		$this->passwd = '123';
		
		$this->db = new PDO($this->dsn, $this->username, $this->passwd);
		
	}
	
	public function saveFeedback($name, $email, $message){
		
		$name = $this->db->quote($name);
		$email = $this->db->quote($email);
		$message = $this->db->quote($message);
		
		$sql = "INSERT feedbacks (`name`, `email`, `message`) 
						VALUES($name, $email, $message)";
		
		$this->db->exec($sql);
	}
	
	public function getFeedbacks(){
		
		$sql = "SELECT * FROM feedbacks ORDER BY date DESC";
		
		$result = $this->db->query($sql, PDO::FETCH_OBJ);
		return $result->fetchAll();
		
	}
}
/*$db = new DbModel();
$db->getFeedbacks();*/