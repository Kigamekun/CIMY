<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $table = 'pegawai';

    public function rules()
    {
        return [
            [
                'field' => 'nip',  
                'label' => 'nip',  
                'rules' => 'required' 
            ],
			[
                'field' => 'nama',  
                'label' => 'nama',  
                'rules' => 'required' 
            ],
			[
                'field' => 'jenis_kelamin',  
                'label' => 'jenis_kelamin',  
                'rules' => 'required' 
            ],
			[
                'field' => 'tgl_lahir',  
                'label' => 'tgl_lahir',  
                'rules' => 'required' 
            ],
			[
                'field' => 'status',  
                'label' => 'status',  
                'rules' => 'required' 
            ],
			[
                'field' => 'mulai_kerja',  
                'label' => 'mulai_kerja',  
                'rules' => 'required' 
            ],
        ];
    }

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
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->update($this->table, $data, array('IdMhsw' => $this->input->post('IdMhsw')));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("IdMhsw" => $id));
    }
}
