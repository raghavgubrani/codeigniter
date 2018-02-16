<?php
/**
* 
*/
class User extends MY_Controller
{
	

	public function index()
	{
		$this->load->model('authenticate', 'auth');
		$data = $this->authenticate->getData();
		
		print_r($data);
		
		echo "User Public Index";
	}
}
?>