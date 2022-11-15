<?php
class Admin extends CI_Controller
{

    // beranda
    public function index()
    {
        $data['judul'] = "dashboard";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }


    // profile
    public function profile()
    {
        $data['judul'] = "profile";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }


    // pengajuan
    public function pengajuan()
    {
        $data['judul'] = "pengajuan";
        $data['pengajuan'] = $this->ModelPengajuan->getAllPengajuan();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/pengajuan', $data);
        $this->load->view('admin/footer');
    }




    // pengaduan
    public function pengaduan()
    {
        $data['judul'] = "pengajuan";
        // $data['pengaduan'] = $this->ModelPengaduan->getAll()->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('admin/footer');
    }
}
