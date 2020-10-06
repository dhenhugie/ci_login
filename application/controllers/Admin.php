<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!= "login"){
		redirect(base_url().'?error');	
		}
	}

	public function index()
	{
		$data['buku'] = $this->M_perpus->get_data('buku')->result();	
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();	
		$data['transaksi'] = $this->M_perpus->get_data('transaksi')->result();	
		$this->load->view('admin/index',$data);
	}
}