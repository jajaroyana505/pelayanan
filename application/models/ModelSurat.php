<?php
class ModelSurat extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('surat', $data);
    }

    // mengambil index tertinggi/terakhor
    public function maxId()
    {
        $this->db->select_max('id');
        $query = $this->db->get('surat');
        return $query;
    }
}
