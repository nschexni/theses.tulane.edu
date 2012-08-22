<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registry extends CI_Controller{

	function index(){
			$this->load->view('templates/bootstrap_header', array(
				'title' => 'Tulane Research Data Registry'
			));
			$this->load->view('templates/banner');
			$this->load->view('templates/infobar');
			$this->load->view('templates/navbar');

			$this->load->view('registry/listing', array());

			$this->load->view('templates/footer');
			$this->load->view('templates/bootstrap_footer');
	}

	function submit(){

		if(!$this->session->userdata('authenticated')){
			$this->session->set_flashdata('redirect', '/tdl/' . $this->uri->uri_string());
			redirect('http://theses.tulane.edu/user/login', 'refresh');
		}
		$acct = $this->session->userdata('user_account');
		if(!$acct['memberships']['graduate'] && !$acct['memberships']['faculty'] && !$acct['memberships']['staff']){
			show_error('You do not have permission to submit publications.  Contact your faculty advisor.', 403);
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		if(!$this->form_validation->run('registry_submission')){
			$name = $acct['name'];

			$this->load->view('templates/bootstrap_header', array(
				'title' => 'Research Data Listing Submission'
			));
			$this->load->view('templates/banner');
			$this->load->view('templates/infobar');
			$this->load->view('templates/navbar');

			$this->load->view('registry/submit', array(
				'name' => $name
			));

			$this->load->view('templates/footer');
			$this->load->view('templates/bootstrap_footer');
		} else {
			
		}
	}

	function approve(){

	}
}