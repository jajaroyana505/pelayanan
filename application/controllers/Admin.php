<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function profile()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/profile');
        $this->load->view('admin/footer');
    }
    public function pengajuan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pengajuan');
        $this->load->view('admin/footer');
    }
    public function pengaduan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pengaduan');
        $this->load->view('admin/footer');
    }
}
