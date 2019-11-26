<?php 

class Mahasiswa_model extends CI_model {
	public function getAllMahasiswa()
	{
		// $query = $this->db->get('jadwal_matkul');
		// return $query->result_array();
		return $this->db->get('jadwal_matkul')->result_array();
	}

	public function tambahDataJadwal()
	{
		$data = [
			"Hari" => $this->input->post('hari', true),
			"Nama_Matkul" => $this->input->post('matkul', true),
			"Nama_Dosen" => $this->input->post('dosen', true),
			"Ruangan" => $this->input->post('ruangan', true),
			"Kampus" => $this->input->post('kampus', true),
			"Waktu" => $this->input->post('waktu', true)
		];

		$this->db->insert('jadwal_matkul', $data);
	}

	public function hapusDataJadwal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jadwal_matkul');
	}

	public function getDataById($id)
	{
		return $this->db->get_where('jadwal_matkul', ['id' => $id])->row_array();
	}

	public function editDataJadwal()
	{
		$data = [
			"Hari" => $this->input->post('hari', true),
			"Nama_Matkul" => $this->input->post('matkul', true),
			"Nama_Dosen" => $this->input->post('dosen', true),
			"Ruangan" => $this->input->post('ruangan', true),
			"Kampus" => $this->input->post('kampus', true),
			"Waktu" => $this->input->post('waktu', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jadwal_matkul', $data);
	}
}