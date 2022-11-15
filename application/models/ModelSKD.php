<?php
class ModelSKD extends CI_Model

{
    public function simpanData($data = null)
    {
        $this->db->insert('data_surat_domisili', $data);
    }

    public function getDataSurat($id = null)
    {
        // $this->db->select('*');
        // $this->db->from('data_surat_domisili');
        // $this->db->where($where);
        // $query = $this->db->get();
        $query = $this->db->get_where("data_surat_domisili", array('id_surat' => $id));
        return $query->result();
    }
}
