<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp_model extends CI_Model
{
    private $table = 'spp';


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
            "no_spp" => $this->input->post('no_spp'),
            "tahun" => $this->input->post('tahun'),
            "nominal" => $this->input->post('nominal'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
		$data = array(
            "no_spp" => $this->input->post('no_spp'),
            "tahun" => $this->input->post('tahun'),
            "nominal" => $this->input->post('nominal'),
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
