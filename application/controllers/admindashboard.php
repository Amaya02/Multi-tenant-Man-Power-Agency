<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admindashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
	}
	
	public function index()
	{
		// if the user is validated, then this function will run
		echo 'Congrats!';
		echo $this->session->userdata('username');
	}
	
	private function check_isValidated(){
		if(! $this->session->userdata('validated')){
			$base=base_url();
			redirect($base);
		}
	}
		
}
?>