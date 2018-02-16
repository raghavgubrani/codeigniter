<?php
class Authenticate extends CI_Model{
	public function authenti($username, $password) {
		
	}
	
	public function getData() {
		return ['abc'=>'ABC', 'xyz'=>'XYZ'];
	}
	public function getUser() {
		$this->load->database();

		$q = $this->db->select('uname, fname, lname')
		//$q = $this->db->get("users");
						->get("users");

// echo '<pre>'; print_r($q->result_array()); die;
		return $result = $q->result_array();
		
	}
}

?>