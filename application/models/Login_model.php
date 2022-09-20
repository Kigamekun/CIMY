<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $table = 'login';
    private $tablePegawai = 'petugas';
    private $tableSiswa = 'siswa';


    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
	public function where($query)
    {
        return $this->db->get_where($this->table, $query)->row();
    }


    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(  
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
        );
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
		$data = array(
            "username" => $this->input->post('username'),
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }


	public function registerPegawai()
	{
		$data = array(  
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
            "level" => $this->input->post('level'),
			
        );
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();

		return $this->db->insert($this->tablePegawai,[
			'nama_petugas' => $this->input->post('nama'),
			'login_id' => $insert_id,
			"image" => $this->upload->data()["file_name"]
		]);


	}

	public function registerSiswa()
	{
		$data = array(  
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
            "level" => 'siswa',
        );
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();

		return $this->db->insert($this->tableSiswa,[
			"nisn" => $this->input->post('nisn'),
            "nis" => $this->input->post('nis'),
            "nama" => $this->input->post('nama'),
            "id_kelas" => $this->input->post('id_kelas'),
            "alamat" => $this->input->post('alamat'),
            "no_telp" => $this->input->post('no_telp'),
			'id_login' => $insert_id,
			"image" => $this->upload->data()["file_name"]
		]);
	}


	public function registerPegawaiWithoutImage()
	{
		$data = array(  
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
            "level" => $this->input->post('level'),
			
        );
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();

		return $this->db->insert($this->tablePegawai,[
			'nama_petugas' => $this->input->post('nama'),
			'login_id' => $insert_id,
			
		]);


	}

	public function registerSiswaWithoutImage()
	{
		$data = array(  
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
            "level" => 'siswa',
        );
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();

		return $this->db->insert($this->tableSiswa,[
			"nisn" => $this->input->post('nisn'),
            "nis" => $this->input->post('nis'),
            "nama" => $this->input->post('nama'),
            "id_kelas" => $this->input->post('id_kelas'),
            "alamat" => $this->input->post('alamat'),
            "no_telp" => $this->input->post('no_telp'),
			'id_login' => $insert_id,
			
		]);
	}
}
