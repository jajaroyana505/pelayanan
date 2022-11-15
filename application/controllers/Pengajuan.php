<?php
class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function buat_pengajuan()
    {

        //var_dump($data['user']['id_penduduk']);
        $data['penduduk'] = $this->ModelPenduduk->getPendudukWhere(['id' => $this->session->userdata('id_penduduk')])->result();
        $this->form_validation->set_rules(
            'rt',
            'RT',
            'required',
            [
                'required' => 'rt Belum diis!!'
            ]
        );

        if ($this->form_validation->run() == true) {
            echo 'masuk';


            // input data surat ke database table surat
            $kode  = $this->input->POST('kode');
            $surat = [
                'kode_surat'       => $kode,
                'tanggal_surat'    => "-",
                'nama_surat' => $this->input->POST('nama_surat')
            ];
            $this->ModelSurat->simpanData($surat);

            // ambil id dari table surat
            $id_surat = $this->ModelSurat->maxId()->row_array();
            $id_surat = $id_surat["id"];

            // input data pengajuan ke database table pengajuan
            $id_penduduk = $this->session->userdata('id_penduduk');
            $pengajuan = [
                'tanggal' => time(),
                'status'  => 0,
                'id_penduduk' => $id_penduduk,
                'id_surat' => $id_surat
            ];
            $this->ModelPengajuan->simpanData($pengajuan);

            // cek fungsi berikutnya
            if ($kode == 'SKD') {
                // jika kode surat SKD / keterangan domisili
                $this->input_data_skd($id_surat, $id_penduduk);
            }
        } else {
            $id = $this->ModelSurat->maxId()->row_array();
            var_dump($id);
            echo $id["id"];
            // echo "<br>";
            // foreach ($id as $row) {
            //     echo $row->id;
            // };

            // $data['penduduk'] = $this->ModelPenduduk->cekData(['email' => this]);
            $this->load->view('pengajuan/buat_pengajuan', $data);
        }
    }
    public function input_data_skd($id_surat, $id_penduduk)
    {
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $dusun = $this->input->post('dusun');
        $data_skd = [
            'id_surat' => $id_surat,
            'id_penduduk' => $id_penduduk,
            'alamat_domisili' => "RT $rt/$rw Dusun $dusun"
        ];
        $this->load->model('ModelSKD');
        $this->ModelSKD->simpanData($data_skd);
    }


    public function detail_pengajuan($id)
    {
        $this->load->model('ModelSKD');

        // set data yang akan di kirim ke view
        $pengajuan = $this->ModelPengajuan->getDetailPengajuan($id);
        foreach ($pengajuan as $peng) {
            $id_pengajuan   = $peng->id;
            $id_penduduk    = $peng->id_penduduk;
            $id_surat       = $peng->id_surat;
            $kode_surat     = $peng->kode_surat;
            $dataSurat = [
                'tanggal'       => $peng->tanggal,
                'status'        => $peng->status,
                'nik'           => $peng->nik,
                'nama'          => $peng->nama,
                'ttl'           => "$peng->tempat_lahir, $peng->tanggal_lahir",
                'kelamin'       => $peng->jenis_kelamin,
                'alamat'        => $peng->alamat,
                'tanggal_suarat' => $peng->tanggal_surat
            ];
        }

        if ($kode_surat == "SKD") {
            $data_surat = $this->ModelSKD->getDataSurat($id_surat);
            foreach ($data_surat as $skd) {
                $dataSurat['alamat_domisili'] = $skd->alamat_domisili;
            }
        }
        $data['dataSurat'] = $dataSurat;

        $this->load->view('admin/header');
        if ($kode_surat == "SKD") {
            $this->load->view('pengajuan/detail_pengajuan/skd', $data);
        }
        $this->load->view('admin/footer');
    }
}
