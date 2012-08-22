<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{
        
        /**
         * @desc    Testing page used to play around with LDAP.  This Page displays all of the User Data
         * @param   
         */
	function index(){
		$this->info();
	}
        
        
        /**
         * @desc    Testing page used to play around with LDAP
         * @param   
         */ 
	function info(){
                $allUserInfo = $this->session->userdata('user_account');
                $userID = $allUserInfo['email'];
                $userID = explode('@', $userID);
                $userID = $userID[0];
                
		$lookup = $this->uri->rsegment(3, $userID);

		$this->load->library('ADUser', array('user' => $lookup));

		$this->load->view('common/header', array('title' => 'User Information: ' . $lookup));
		if ($this->aduser->exists()){                    
			$this->load->view('user/userInfo', array( 
				'long_data' => $this->aduser->getRaw(),  
				'short_data' => $this->aduser->getInfo()
			));
		} else {
			$html = "<h1>No User Found with id: $lookup</h1>";
			$this->load->view('user/raw', array('data' => $html));
		}
		$this->load->view('common/footer');
	}

	function login(){
		//Login Form needs username and password fields via POST, and submit button value "login"
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');

                //If Not Logged In
		if(!$this->input->post('login')){
			$this->load->library('user_agent');
			$this->session->keep_flashdata('redirect');
                        if($this->session->flashdata('message') === false && $this->session->flashdata('redirect')){
				$message = "Page requires login!";
			} else {
				$message = $this->session->flashdata('message');	
			}

			$this->load->view('common/header', array(
				'title' => 'Tulane University | Theses & Dissertation Login Page'
			));
			$this->load->view('common/theses_main_menu');

			$this->load->view('user/login', array('message' => $message));

			$this->load->view('common/footer');

		} else {
			$this->load->library('ADUser', array('user' => $this->input->post('username')));
			if ($this->aduser->auth($this->input->post('password'))){
				$this->session->set_userdata('authenticated', true);
				$this->session->set_flashdata('message', 'User authenticated.');
				$this->session->set_userdata('user_account', $this->aduser->getInfo());

				if($this->session->flashdata('redirect')){
					$redirect = $this->session->flashdata('redirect');
				} else {
					$redirect = base_url();
				}
				redirect('forms/td_submit', 'refresh');
			} else {
				$this->session->set_flashdata('message', 'Oh, sorry! That\'s an Invalid Login!');
				$this->session->keep_flashdata('redirect');
				redirect(base_url().'user/login', 'refresh');
			}

		}

	}

        
        function logout(){
            $this->load->library('session');
            $this->session->sess_destroy();
            redirect('home/index');       
        }
}

/* End of file user.php */
/* Location: ./application/controllers/pages.php */