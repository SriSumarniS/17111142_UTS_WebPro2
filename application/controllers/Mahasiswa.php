<?php 

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']= 'Jadwal Mata Kuliah';
		$data['jadwal_matkul'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Jadwal Mata Kuliah';

		$this->form_validation->set_rules('matkul', 'Nama Mata Kuliah', 'required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'required');
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->tambahDataJadwal();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataJadwal($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}	

	public function detail($id)
	{
		$data['judul'] = 'Detail Jadwal Mata Kuliah';
		$data['jadwal_matkul'] = $this->Mahasiswa_model->getDataById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail');
		$this->load->view('templates/footer');
	}	

	public function edit($id)
	{
		$data['judul'] = 'Form Edit Data Jadwal Mata Kuliah';
		$data['jadwal_matkul'] = $this->Mahasiswa_model->getDataById($id);
		$data['Hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
		$data['Kampus'] = ['1','3'];

		$this->form_validation->set_rules('matkul', 'Nama Mata Kuliah', 'required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'required');
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->editDataJadwal();
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('mahasiswa');
		}
	}
}