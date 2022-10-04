<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    private $table = 'petugas';

	public function rules()
    {
        return [
            [
                'field' => 'username',  
                'label' => 'username',  
                'rules' => 'required' 
            ],
			[
                'field' => 'password',  
                'label' => 'password',  
                'rules' => 'required' 
            ],
			[
                'field' => 'level',  
                'label' => 'level',  
                'rules' => 'required' 
            ],
			[
                'field' => 'nama',  
                'label' => 'nama',  
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
            "nama_petugas" => $this->input->post('nama_petugas'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
		$data = array(
            "nama_petugas" => $this->input->post('nama'),
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
