<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

	function index(){
		$this->info();
	}
        
        
        /**
         * @desc    Testing page: Displays all of a users info from LDAP.  
         *          Use http://theses.tulane.edu/user/info/id_goes_here
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

        /**
         * @desc    Theses Authorization Page Login.  
         *          Performs all of the logic to initiate a login
         * @param   
         */ 
	function login(){
		//Login Form needs username and password fields via POST, 
                //and submit button value "login"
            
                //load the required helpers and libraries
                    $this->load->library('session');
                    $this->load->helper('url');
                    $this->load->helper('form');

                //If Not Logged In
                    if(!$this->input->post('login')){
			$this->load->library('user_agent');
			$this->session->keep_flashdata('redirect');
                            if($this->session->flashdata('message') === false 
                                && $this->session->flashdata('redirect')
                              ){
                                $message = "Page requires login!";
                               } 
                            else {
                                $message = $this->session->flashdata('message');	
                            }
                        
                        //load the header and title
			$this->load->view('common/header', 
                                           array('title' => 'Theses & Dissertation Login Page'
                                          )
                        );
			//load the main menu
                        $this->load->view('common/theses_main_menu');
                        
                        //load the login view page
			$this->load->view('user/login', array('message' => $message));
                        
                        //load the footer
			$this->load->view('common/footer');

                    }
                    else {
                        //load the ADUser library and pass it the username
			$this->load->library('ADUser', 
                                              array('user' => $this->input->post('username'))
                                            );
                        //if username and password are correct then authenticate the user
			if ($this->aduser->auth($this->input->post('password'))){
				$this->session->set_userdata('authenticated', true);
				$this->session->set_flashdata('message', 'User authenticated.');
				$this->session->set_userdata('user_account', 
                                                              $this->aduser->getInfo()
                                                );
                                //redirect the user
                                    if($this->session->flashdata('redirect')){
                                        $redirect = $this->session->flashdata('redirect');
                                    }else {
                                        $redirect = base_url();
                                    }
                            //redirects to the Submission Form        
                            redirect('forms/td_submit', 'refresh');
			} 
                        else {
                            //call login_error_message function from the MY_Form_validation:library
                            $this->elements->login_error_message("There is a problem with your login info.  Try again.");
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