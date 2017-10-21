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
		
		return $this->db->exec($sql);
	}
}
//$d = new DbModel();
//var_dump($d->saveFeedback('Значение для теста', 'Значение для теста', 'Значение для теста'));
