<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
    }

    public function index()
    {
        // $this->load->view('theme/navigation');
        $this->load->view('auth/login');
        // $this->load->view('theme/footer');
        

    }

    // public function prosesLogin()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $query = $this->AuthModel->cek_user($email);
    //     //jika usernya ada
    //     if ($query) {
    //         //jika usernya aktif
    //         if ($query['is_active'] == 1) {
    //             //cek password
    //             if (password_verify($password, $query['password'])) {
    //                 $data = [
    //                     'email' => $query['email'],
    //                     'id_user' => $query['id_user'],
    //                     'foto' => $query['foto'],
    //                     'nama_user' => $query['nama_user'],
    //                     'no_telp' => $query['no_telp'],
    //                     'role' => $query['role'],
    //                     'is_login' => TRUE,
    //                 ];
    //                 $this->session->set_userdata($data);
    //                 if ($query['role'] == 'Admin') {
    //                     $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                     redirect('admin');
    //                 } elseif ($query['role'] == 'HRD') {
    //                     $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                     redirect('hrd');
    //                 } elseif ($query['role'] == 'Kaur') {
    //                     $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                     redirect('kaur');
    //                 } elseif ($query['role'] == 'Direktur') {
    //                     $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                     redirect('direktur');
    //                 } elseif ($query['role'] == 'User') {
    //                     $id['id_user'] = $query['id_user'];

    //                     $cekDataPelamar = $this->AdminModel->cekData('pelamar', $id);
    //                     if ($cekDataPelamar) {
    //                         $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                         redirect('user');
    //                     } else {
    //                         $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                         redirect('user/Data_Pelamar');
    //                     }
    //                 } elseif ($query['role'] == 'Pelamar') {
    //                     $id['id_user'] = $query['id_user'];

    //                     $cekDataPelamar = $this->AdminModel->cekData('pelamar', $id);
    //                     if ($cekDataPelamar) {
    //                         $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                         redirect('pelamar');
    //                     } else {
    //                         $this->session->set_flashdata('success', 'Anda Berhasil Login!');
    //                         redirect('pelamar/Data_Pelamar');
    //                     }
    //                 } else {
    //                     $this->session->unset_userdata('email');
    //                     $this->session->unset_userdata('id_user');
    //                     $this->session->unset_userdata('foto');
    //                     $this->session->unset_userdata('nama_user');
    //                     $this->session->unset_userdata('no_telp');
    //                     $this->session->unset_userdata('role');
    //                     $this->session->sess_destroy();
    //                     session_destroy();
    //                     redirect('/');
    //                 }
    //             } else {
    //                 $this->session->set_flashdata('error', 'Wrong Password!');
    //                 redirect('/');
    //             }
    //         } else {
    //             $this->session->set_flashdata('error', 'Email is Not Been Activated!');
    //             redirect('/');
    //         }
    //     } else {
    //         $this->session->set_flashdata('error', 'Email is Not Registered');
    //         redirect('/');
    //     }
    // }

    public function prosesLogin() { 

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $query = $this->AuthModel->cek_user($email);
    //jika usernya ada
    if ($query) {
        //jika usernya aktif
        if ($query['is_active'] == 1) {
            //cek password
            if (password_verify($password, $query['password'])) {
                $data = [
                    'email' => $query['email'],
                    'id_user' => $query['id_user'],
                    'foto' => $query['foto'],
                    'nama_user' => $query['nama_user'],
                    'no_telp' => $query['no_telp'],
                    'role' => $query['role'],
                    'is_login' => TRUE,
                ];
                $this->session->set_userdata($data);
                if ($query['role'] == 'Admin') {
                    $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                    redirect('admin');
                } elseif ($query['role'] == 'HRD') {
                    $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                    redirect('hrd');
                } elseif ($query['role'] == 'Kaur') {
                    $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                    redirect('kaur');
                } elseif ($query['role'] == 'Direktur') {
                    $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                    redirect('direktur');
                } elseif ($query['role'] == 'User') {
                    $id['id_user'] = $query['id_user'];

                    $cekDataPelamar = $this->AdminModel->cekData('pelamar', $id);
                    if ($cekDataPelamar) {
                        $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                        redirect('user');
                    } else {
                        $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                        redirect('user/Data_Pelamar');
                    }
                } elseif ($query['role'] == 'Pelamar') {
                    $id['id_user'] = $query['id_user'];

                    $cekDataPelamar = $this->AdminModel->cekData('pelamar', $id);
                    if ($cekDataPelamar) {
                        $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                        redirect('pelamar');
                    } else {
                        $this->session->set_flashdata('success', 'Anda Berhasil Login!');
                        redirect('pelamar/Data_Pelamar');
                    } 
                } else {
                    $this->session->unset_userdata('email');
                    $this->session->unset_userdata('id_user');
                    $this->session->unset_userdata('foto');
                    $this->session->unset_userdata('nama_user');
                    $this->session->unset_userdata('no_telp');
                    $this->session->unset_userdata('role');
                    $this->session->sess_destroy();
                    session_destroy();
                    redirect('/');
                }
            } else {
                $this->session->set_flashdata('error', 'Password salah. silakan coba lagi');
                redirect('auth/index');
            }
        } else {
            $this->session->set_flashdata('error', 'Email is Not Been Activated!');
            redirect('auth/index');
        }
    } else {
        $this->session->set_flashdata('error', 'Email is Not Registered');
        redirect('auth/index');
    }
}

    public function Register()
    {
        $this->load->view('auth/register');
    }

    public function daftar()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');

        $data = [
            'email' => $email
        ];
        $cekData = $this->AdminModel->cekData('user', $data);
        // var_dump($nama);
        // die;
        try {
            if ($cekData) {
                $this->session->set_flashdata('error', 'Email Sudah Terdaftar!');
                redirect("auth/Register");
            } else {
                if ($password == $confirm_password) {
                    $save = [
                        'email' => $email,
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                        'nama_user' => $nama,
                        'no_telp' => $no_telp,
                        'foto' => 'default.png',
                        'role' => 'User'
                    ];
                    $this->AdminModel->createData('user', $save);
                    $this->session->set_flashdata('success', 'Registrasi Anda Berhasil, Silahkan Login!');
                    redirect("auth/register");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Match!');
                    redirect("auth/register");
                }
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Registrasi Anda Gagal, Silahkan Coba Kembali!');
            redirect("auth/register");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('foto');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama_user');
        $this->session->unset_userdata('no_telp');
        $this->session->unset_userdata('role');
        $this->session->sess_destroy();
        session_destroy();
        $this->session->set_flashdata('success', 'Terimakasih Telah Menggunakan Aplikasi Ini');
        redirect('/');
    }
}
