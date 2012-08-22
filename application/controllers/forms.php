<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
		//load the Theses_db Model
		$this->load->model('Theses_db');
    }


        public function index() 
        {
            $this->td_submit();
        }

        
        public function td_submit(){	
	//check to see if the user is logged in.  If not then send them to the login page:
            if(!$this->session->userdata('authenticated')){
                $this->session->set_flashdata('redirect', base_url().$this->uri->uri_string());
			redirect("http://theses.tulane.edu/user/login", 'refresh');
		}
                $acct = $this->session->userdata('user_account');
                
		if(!$acct['memberships']['graduate'] && 
                   !$acct['memberships']['faculty'] && 
                   !$acct['memberships']['staff']){
			show_error('You do not have permission to submit publications.  Contact your faculty advisor.', 403);
		}
             
            //loads Elements Class
            $this->load->library('Elements');
             
            //Title Generator
            $title = array('title' => 'Tulane University | Theses & Dissertation Archive | Submission Page');

            //loads header
            $this->load->view('common/header', $title);

            //loads main navigation
            $this->load->view('common/theses_main_menu');     
                
      //FORM VALIDATION AND DATABASE CONNECTION 
            
	    //Load the Form Helper
            $this->load->helper('form');
            
	    //Load the Form Validation Library
            $this->load->library('form_validation');

            //Load the MYForm Validation Library
            $this->load->library('MY_Form_validation');
            
            //$config array is for the Upload Class.  We pass the array to the Upload Library
            $config['upload_path'] = "./uploads/"; 
            $config['allowed_types'] = 'pdf';
            
            //Load the Upload File Class
            $this->load->library('upload',$config);
            
            //Set Rules Validation
            $this->form_validation->set_rules('last_name', 'Author\'s Last Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('first_name', 'Author\'s First Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('middle_initial', 'Middle Initial', 'trim|xss_clean');
            $this->form_validation->set_rules('email', 'Author\'s Email Address', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('degree_date', 'Degree Date (YYYY)', 'required|min_length[4]|max_length[4]|integer|xss_clean');
            $this->form_validation->set_rules('degree_granted', 'Degree Granted', 'required');
            $this->form_validation->set_rules('school', 'Degree Granting School', 'required');
            $this->form_validation->set_rules('advisor_last_name', 'Advisor\'s Last Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('advisor_first_name', 'Advisor\'s First Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('department', 'Department');
            $this->form_validation->set_rules('title', 'Title', 'trim|required|is_title|xss_clean');
            $this->form_validation->set_rules('document_type', 'Document Type', 'required');
            $this->form_validation->set_rules('keywords', 'Keywords', 'trim|required|xss_clean');
            $this->form_validation->set_rules('abstract', 'Abstract', 'trim|xss_clean');
            $this->form_validation->set_rules('language', 'Language', 'trim|required');
            $this->form_validation->set_rules('userfile','File Upload','xss_clean');
            $this->form_validation->set_rules('copyright_release', 'Copyright Agree Terms', 'required');
            $this->form_validation->set_rules('digital_signature', 'Digital Signature', 'trim|required|xss_clean');
            
	    //This is the Form Action.  
            if ($this->form_validation->run() == FALSE || !$this->upload->do_upload())
                                    {
                                      //form hasn't run or failed validation
                                      //checks for errors with the file upload and passes the $form_error var to the page  
                                      $form_error = array('form_error'=>$this->upload->display_errors());                          
                                      //return errors to td_submit.php
				      $this->load->view('forms/td_submit', $form_error);  
                                    }
					
			else
				{
                                        //This is used for the Upload File Class
                                        $file_data = $this->upload->data();
                            
                                        //builds the $data array
					$data = array(
							'last_name'=>$this->input->post('last_name'),
							'first_name'=>$this->input->post('first_name'),
							'middle_initial'=>$this->input->post('middle_initial'),
							'email'=>$this->input->post('email'),
							'degree_date'=>$this->input->post('degree_date'),
							'degree_granted'=>$this->input->post('degree_granted'),
							'school' =>$this->input->post('school'),
							'advisor_last_name'=>$this->input->post('advisor_last_name'),
							'advisor_first_name'=>$this->input->post('advisor_first_name'),
							'department'=>$this->input->post('department'),
							'title'=>$this->input->post('title'),
							'document_type'=>$this->input->post('document_type'),
							'keywords'=>$this->input->post('keywords'),
							'abstract'=>$this->input->post('abstract'),
							'language'=>$this->input->post('language'),
							'userfile'=> base_url().'uploads/'.$file_data['file_name'],
							'copyright_release'=>$this->input->post('copyright_release'),
							'digital_signature'=>$this->input->post('digital_signature')
						);
                                        
					  //Pass $data array to the Theses_db Model
					  $this->Theses_db->theses_db_insert($data);
					  //Then, load the Success Page
					  $this->load->view('forms/td_submit_success', $data);
                                                
				} 

            //loads footer
            $this->load->view('common/footer');  
	}
            
        
        public function td_submit_success(){
         
        }
}
    
