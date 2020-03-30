<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('biodata_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('daftar');
	}

	public function tambah()
	{
		// $this->load->view('daftar');
		$this->load->view('daftar/index');
	}

	public function edit($id)
	{
		$where = array('nim'=>$id);
		$data['mahasiswa'] = $this->biodata_model->tampil_edit($where,'mahasiswa')->result();
		$this->load->view('edit/index',$data);
	}

	public function tambah_action()
	{
		$data = array
		(
			'nama' => $this->input->post('nama1'),
			'password' => $this->input->post('password1'),
			'nim' =>$this->input->post('nim'),
			'id_program_studi' => $this->input->post('prodi1'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('telepon'),
			// 'alamat' => $this->input->post('alamat'),
			'tanggal_lahir' => $this->input->post('tgllahir'),
			'jenis_kelamin' => $this->input->post('jeniskelamiin')
		);
		$this->biodata_model->daftar($data,'mahasiswa');
		redirect('daftar');
	}

	public function edit_action()
	{
		$where = array('nim' => $this->input->post('nim'));
		$data = array
		(
			'nama' => $this->input->post('nama1'),
			'id_program_studi' => $this->input->post('prodi1'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('telepon'),
			// 'alamat' => $this->input->post('alamat'),
			'tanggal_lahir' => $this->input->post('tgllahir'),
			'jenis_kelamin' => $this->input->post('jeniskelamiin')
		);
		$this->biodata_model->edit($where, $data,'mahasiswa');
		redirect('daftar');
	}

}
