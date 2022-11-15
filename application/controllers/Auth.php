<?php
class Auth extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            // echo "loged";
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();
        //jika usernya ada 
        if ($user) {
            //cek password 
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                    'id_penduduk' => $user['id_penduduk']
                ];
                $this->session->set_userdata($data);

                // cek role user
                if ($user['role_id'] == 2) {
                    redirect('admin');
                } else {
                    if ($user['image'] == 'default.jpg') {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');
                    }
                    redirect('user/beranda');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('auth');
        }
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        //membuat rule untuk inputan nama agar tidak boleh kosong dengan membuat pesan error dengan
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required',
            [
                'required' => 'Nama Belum diis!!'
            ]
        );

        // membuat role untuk nik
        $this->form_validation->set_rules(
            'nik',
            'Nik',
            'required|numeric|trim|max_length[16]|min_length[16]|is_unique[penduduk.nik]',
            [
                'valid_email' => 'Email Tidak Benar!!',
                'required' => 'Nik Belum diisi!!',
                'is_unique' => 'NIK Sudah Terdaftar!',
                'min_length' => 'NIK terlalu Pendek',
                'max_length' => 'NIK terlalu Panjang',
                'numeric' => 'NIK harus berupa angka'
            ]
        );

        // validasi tempat lahir
        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempt_Lahir',
            'required',
            [
                'required' => 'Tempat lahir diis!!'
            ]
        );

        // tanggal lahir
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal_Lahir',
            'required',
            [
                'required' => 'Tanggal lahir diisi!!'
            ]
        );

        // validasi jenis kelamin
        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenisa_Kelamin',
            'required',
            [
                'required' => 'Jenis kelamin diisi!!'
            ]
        );




        // validasi agama
        $this->form_validation->set_rules(
            'agama',
            'Agama',
            'required',
            [
                'required' => 'Agama diisi!!'
            ]
        );


        // validai alamat
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            [
                'required' => 'Alamat lahir diisi!!'
            ]
        );



        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'valid_email' => 'Email Tidak Benar!!',
                'required' => 'Email Belum diisi!!',
                'is_unique' => 'Email Sudah Terdaftar!'
            ]
        );
        //membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan
        //bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        //'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah
        //'Password Terlalu Pendek'.
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama!!',
                'min_length' => 'Password Terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {

            // insert data ke table penduduk
            $nik = $this->input->post('nik');
            $data_penduduk = [
                'nik' => $nik,
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->ModelPenduduk->simpanData($data_penduduk); //menggunakan model
            // insert data ke table user

            $row = $this->ModelPenduduk->getPendudukWhere(['nik' => $nik])->row_array();
            $id = $row['id'];
            $email = $this->input->post('email', true);
            $data_user = [
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'id_penduduk' => $id
            ];
            $this->ModelUser->simpanData($data_user);
            //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('auth');
        }
    }

    function data_diri()
    {
        $this->load->view('templates/header');
        $this->load->view('user/data_diri');
        $this->load->view('templates/footer');
    }
    function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu Telah Logout!');
        redirect('auth');
    }
}
