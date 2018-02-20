<?php
/**
* 
*/
class User extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->model('authenticate', 'auth');
		$data['users'] = $this->authenticate->getUser();
		// echo '<pre>'; print_r($data);

		$this->load->library('email');
		$this->email->send();

		$this->load->view('public/user_list',$data);
	}
}
?>