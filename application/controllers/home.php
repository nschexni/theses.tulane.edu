<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

        /**
         * @desc    Loads the Home Page
         * @param   
         */
	public function index() 
	{            
            //loads Elements Class
            $this->load->library('Elements');
            
            //load Cdm_custom_query Model
            $this->load->model('Cdm_rest');
            
            //load the Cdm_rest functions for Browse By School
            $cdm_rest['tulane'] = $this->Cdm_rest->search_url('Tulane%20University');
            $cdm_rest['payson'] = $this->Cdm_rest->search_url('Payson%20Center%20for%20International%20Development');
            $cdm_rest['tropical'] = $this->Cdm_rest->search_url('School%20of%20Public%20Health%20and%20Tropical%20Medicine');
            $cdm_rest['science'] = $this->Cdm_rest->search_url('School%20of%20Science%20and%20Engineering');
            $cdm_rest['social'] = $this->Cdm_rest->search_url('School%20of%20Social%20Work'); 
            $cdm_rest['engineering'] = $this->Cdm_rest->search_school_engineering();
             
            //Title Generator
            $title = array('title' => 'Tulane University\'s Theses & Dissertation Homepage');
            
            //loads header
            $this->load->view('common/header', $title);
            
            //loads main navigation
            $this->load->view('common/theses_main_menu');
            
            //loads views/home/index.php
            $this->load->view('home/index', $cdm_rest);  
            
            //loads footer
            $this->load->view('common/footer');     
	}
        
}
    
