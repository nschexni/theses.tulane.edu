<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller{
	
	function login_test(){
		$this->load->library('session');
		if(!$this->session->userdata('authenticated')){
			$this->load->helper('url');
			$this->session->set_flashdata('redirect', '/' . $this->uri->uri_string());
			redirect('http://theses.tulane.edu/user/login', 'refresh');
		} 
			
		$user = $this->session->userdata('user_account');
		$name = $user['name'];
		$this->load->view('raw', array('data' => "Welcome, $name"));
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */