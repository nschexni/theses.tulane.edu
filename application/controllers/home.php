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
            
            //loads Common Class
            $this->load->library('Common');
            
            //load Cdm_custom_query Model
            $this->load->model('Cdm_queries');
            
            //load the Cdm_custom_query functions for Browse By School
            $cdm_query['tulane'] = $this->Cdm_queries->school_browse('Tulane+University');
            $cdm_query['payson'] = $this->Cdm_queries->school_browse('Payson+Center+for+International+Development');
            $cdm_query['tropical'] = $this->Cdm_queries->school_browse('School+of+Public+Health+and+Tropical+Medicine');
            $cdm_query['science'] = $this->Cdm_queries->school_browse('School+of+Science+and+Engineering');
            $cdm_query['social'] = $this->Cdm_queries->school_browse('School+of+Social+Work'); 
            $cdm_query['engineering'] = $this->Cdm_queries->school_engineering();
             
            //Title Generator
            $title = array('title' => 'Tulane University\'s Theses & Dissertation Homepage');
            
            //loads header
            $this->load->view('common/header', $title);
            
            //loads main navigation
            $this->load->view('common/theses_main_menu');
            
            //loads views/home/index.php
            $this->load->view('home/index', $cdm_query);  
            
            //loads footer
            $this->load->view('common/footer');     
	}
        
}
    
