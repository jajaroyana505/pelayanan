<?php
class ModelPengaduan extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('pengaduan', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('pengaduan', $where);
    }
    public function getPendudukWhere($where = null)
    {
        return $this->db->get_where('pengaduan', $where);
    }
    public function getAll()
    {
    }
}
