<?php
class ModelPengajuan extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('pengajuan', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('pengajuan', $where);
    }
    public function getPendudukWhere($where = null)
    {
        return $this->db->get_where('pengajuan', $where);
    }
    public function getAllPengajuan()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('penduduk', 'penduduk.id = pengajuan.id_penduduk');
        $this->db->join('surat', 'surat.id = pengajuan.id_surat');

        $query = $this->db->get();
        return $query->result();
    }
}
