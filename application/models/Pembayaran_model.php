<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $table = 'pembayaran';


    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
	public function where($query)
    {
		return $this->db->from($this->table)->where($query)->get()->result();   
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
            "petugas_id" => $this->input->post('petugas_id'),
            "tgl_bayar" => $this->input->post('tgl_bayar'),
            "spp_id" => $this->input->post('spp_id'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
		$data = array(
			"petugas_id" => $this->input->post('petugas_id'),
            "tgl_bayar" => $this->input->post('tgl_bayar'),
            "spp_id" => $this->input->post('spp_id'),
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
