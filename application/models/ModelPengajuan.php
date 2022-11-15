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
    public function getPengajuanWhere($where = null)
    {
        return $this->db->get_where('pengajuan', $where);
    }
    public function getAllPengajuan()
    {
        $this->db->from('pengajuan');
        $this->db->join('penduduk', 'pengajuan.id_penduduk = penduduk.id');
        $this->db->join('surat', 'pengajuan.id_surat = surat.id');
        $this->db->select('pengajuan.id, pengajuan.tanggal, pengajuan.status, penduduk.nama, surat.nama_surat');

        $query = $this->db->get_where();
        return $query->result();
    }
    public function getDetailPengajuan($id)
    {
        $this->db->from('pengajuan');
        $this->db->join('penduduk', 'pengajuan.id_penduduk = penduduk.id');
        $this->db->join('surat', 'pengajuan.id_surat = surat.id');
        $this->db->select('*');

        $query = $this->db->get_where('', array('pengajuan.id' => $id));
        return $query->result();
    }
}
