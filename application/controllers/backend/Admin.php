<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('level');
		if ($username == '2') {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
	public function index(){
		$data['title'] = "List Admin";
		$data['admin'] = $this->db->query("SELECT * FROM tbl_admin")->result_array();
		// die(print_r($data));
		$this->load->view('backend/admin', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/backend/Admin.php */