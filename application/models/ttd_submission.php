<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TTD_Submission extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function save($inputs){
		$this->db->insert('ttd_submissions', $inputs);
	}


	function get_all(){
		$query = $this->db->select('*')->from('ttd_submissions')->get();
		return $query->result_array();
	}

	function get_all_unapproved(){
		$query = $this->db->select('*')->from('ttd_submissions')->where('`approved` is NULL')->get();
		return $query->result_array();
	}

	function get_all_approved(){
		$query = $this->db->select('*')->from('ttd_submissions')->where('`approved` is TRUE')->get();
		return $query->result_array();
	}

	function get_all_denied(){
		$query = $this->db->select('*')->from('ttd_submissions')->where('`approved` is FALSE')->get();
		return $query->result_array();
	}

	function get_one($id){
		$query = $this->db->select('*')->from('ttd_submissions')->where('id', $id)->get();
		return $query->row_array();
	}

	function get_one_for_csv($id){
		$query = $this->db->select('project_title, author_name, advisor, school, department, graduate_date, project_type, degree_granted, publication_year, language, keywords, abstract, file')->from('ttd_submissions')->where('id', $id)->get();
		return $query->row_array();
	}

}

/* End of file ttd_submission.php */
/* Location: ./application/controllers/pages.php */