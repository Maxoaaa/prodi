<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pencarian extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}
	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue
			);
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/v_pencarian');
		$this->load->view('dashboard/v_footer');
	}
	public function index2()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue
			);
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/v_pencarian_hasil');
		$this->load->view('dashboard/v_footer');
	}
}