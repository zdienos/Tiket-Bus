<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('username_admin');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
	public function index(){
	$data['title'] = "List Tiket";
	$data['tiket'] = $this->db->query("SELECT * FROM tbl_tiket ")->result_array();
	// die(print_r($data));
	$this->load->view('backend/tiket', $data);	
	}
	public function viewtiket($ord='',$jdw='',$krs=''){
		$data['title'] = "List Tiket";
		$id = $ord."/".$jdw."/".$krs;
		$data['tiket'] = $this->db->query("SELECT * FROM tbl_tiket WHERE kd_tiket = '".$id."'")->row_array();
		$this->load->view('backend/view_tiket', $data);	
	}

}

/* End of file Tiket.php */
/* Location: ./application/controllers/backend/Tiket.php */