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
		$this->load->view('public/articles_list');
	}
}
?>