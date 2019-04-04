<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
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
		$data['title'] = "List Tujuan";
		$data['bus'] = $this->db->query("SELECT * FROM tbl_bus")->result_array();
		$data['tujuan'] = $this->db->query("SELECT * FROM tbl_tujuan")->result_array();
		$data['jadwal'] = $this->db->query("SELECT * FROM tbl_jadwal LEFT JOIN tbl_bus on tbl_jadwal.kd_bus = tbl_bus.kd_bus LEFT JOIN tbl_tujuan on tbl_jadwal.kd_tujuan = tbl_tujuan.kd_tujuan ")->result_array();
		// die(print_r($data));
		$this->load->view('backend/jadwal', $data);
	}
	public function tambahjadwal($value=''){
		// print_r($_POST);
		$tujuan = $this->db->query("SELECT * FROM tbl_tujuan
               WHERE kd_tujuan ='".$this->input->post('tujuan')."'")->row_array();
		$kode = $this->getkod_model->get_kodjad();
		$simpan = array(
				'kd_jadwal' => $kode,
				'kd_tujuan' => $tujuan['kd_tujuan'],
				'kd_bus' => $this->input->post('bus'),
				'wilayah_jadwal' => $tujuan['kota_tujuan'],
				'jam_berangkat_jadwal' => $this->input->post('berangkat'),
				'jam_tiba_jadwal' => $this->input->post('tiba'),
				'harga_jadwal' =>  $this->input->post('harga'),
				 );
					 	// die(print_r($simpan));
			$this->db->insert('tbl_jadwal', $simpan);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Data Jadwal Di Simpan", "success");');
			redirect('backend/jadwal');
	}
	public function viewjadwal($id=''){
		$data['title'] = "List Tujuan";
	 	$sqlcek = $this->db->query("SELECT * FROM tbl_jadwal LEFT JOIN tbl_bus on tbl_jadwal.kd_bus = tbl_bus.kd_bus LEFT JOIN tbl_tujuan on tbl_jadwal.kd_tujuan = tbl_tujuan.kd_tujuan WHERE kd_jadwal ='".$id."'")->row_array();
		$data['jadwal'] = $sqlcek;
		$data['title'] = "View jadwal";
		// die(print_r($sqlcek));
		$this->load->view('backend/view_jadwal',$data);
	}	
}

/* End of file Jadwal.php */
/* Location: ./application/controllers/backend/Jadwal.php */