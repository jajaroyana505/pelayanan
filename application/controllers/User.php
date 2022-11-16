<?php
class User extends CI_Controller


{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        //var_dump($data['user']['id_penduduk']);
        $data['penduduk'] = $this->ModelPenduduk->cekData(['id' => $data['user']['id_penduduk']])->row_array();

        // var_dump($data['penduduk']);
        // $data['penduduk'] = $this->ModelPenduduk->cekData(['email' => this]);

        $this->load->view('templates/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function beranda()
    {
        $this->load->view('templates/header');
        $this->load->view('user/beranda');
        $this->load->view('templates/footer');
    }

    public function pengajuan()
    {
        // $data['penduduk'] = $this->ModelPenduduk->cekData(['email' => this]);

        $this->load->view('templates/header');
        $this->load->view('user/pengajuan');
        $this->load->view('templates/footer');
    }
    public function pengaduan()
    {
        // $data['penduduk'] = $this->ModelPenduduk->cekData(['email' => this]);

        $this->load->view('templates/header');
        $this->load->view('user/pengaduan');
        $this->load->view('templates/footer');
    }
}
