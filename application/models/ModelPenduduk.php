<?php
class ModelPenduduk extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('penduduk', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('penduduk', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('prnduduk', $where);
    }
}
