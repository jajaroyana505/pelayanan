<?php
class Admin extends CI_Controller
{

    // beranda
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }


    // profile
    public function profile()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/profile');
        $this->load->view('admin/footer');
    }


    // pengajuan
    public function pengajuan()
    {
        $data['pengajuan'] = $this->ModelPengajuan->getAllPengajuan();
        $this->load->view('admin/header');
        $this->load->view('admin/pengajuan', $data);
        $this->load->view('admin/footer');
    }


    // pengaduan
    public function pengaduan()
    {
        $data['pengaduan'] = $this->ModelPengaduan->getAll()->row_array();
        $this->load->view('admin/header');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('admin/footer');
    }
}
