<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class Kaur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
        $this->AuthModel->cekLoginKaur();
    }

    public function index()
    {
        $where_calon['status_hasil'] = 'Sedang Di Proses';
        $where_diterima['status_hasil'] = 'Diterima';
        $where_tidak['status_hasil'] = 'Tidak Diterima';
        $data = [
            'lowongan' => $this->AdminModel->total_lowongan('lowongan'),
            'calon_pelamar' => $this->AdminModel->total_pelamar('apply_job', $where_calon),
            'pelamar_diterima' => $this->AdminModel->total_pelamar('apply_job', $where_diterima),
            'pelamar_tidak_terima' => $this->AdminModel->total_pelamar('apply_job', $where_tidak),
        ];
        $this->template->load('layout/layout', 'kaur/dashboard', $data);
    }

    // ############################## CALON PELAMAR ############################## //
    public function Calon_Pelamar()
    {
    $status = ['Diterima','Sedang Di Proses'];
    $id['status_hasil'] = $status;
    $data = [
        'apply' => $this->AdminModel->get_kandidat('apply_job', $id)
    ];

    $this->template->load('layout/layout', 'kaur/calon_pelamar', $data);
    }
    public function Detail_Calon_Pelamar($id)
    {
        $data_apply = $this->AdminModel->get_detail_calon_pelamar('apply_job', $id);

        $id_user['id_user'] = $data_apply['id_user'];

        $data = [
            'apply' => $data_apply,
            'bahasa' => $this->AdminModel->getWhere('bahasa', $id_user)->result(),
            'keahlian' => $this->AdminModel->getWhere('keahlian', $id_user)->result(),
            'pendidikan' => $this->AdminModel->getWhere('pendidikan', $id_user)->result(),
            'pengalaman' => $this->AdminModel->getWhere('pengalaman', $id_user)->result(),
            'training' => $this->AdminModel->getWhere('training', $id_user)->result(),
        ];

        $this->template->load('layout/layout', 'kaur/calon_pelamar_detail', $data);
    }

    public function ApproveApply($id)
    {
        $id_apply = $id;
        $ids['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Diterima',
            ];

            $this->AdminModel->updateData('apply_job', $data, $ids);
            $this->session->set_flashdata('success', 'Calon Pelamar Berhasil ke tahap selanjutnya!');
            redirect("Kaur/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Kaur/Detail_Calon_Pelamar/$id_apply");
        }
    }

    public function CancelApply($id)
    {
        $id_apply = $id;
        $where['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Tidak Diterima',
            ];

            $this->AdminModel->updateData('apply_job', $data, $where);
            $this->session->set_flashdata('success', 'Calon Pelamar Tidak Berhasil ke tahap selanjutnya!');
            redirect("Kaur/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Kaur/Detail_Calon_Pelamar/$id_apply");
        }
    }

    // ############################## PELAMAR DITERIMA ############################## //

    public function Pelamar_Diterima()
    {
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';
        $data = [
            'lowongan' => $this->AdminModel->doubleJoin('lowongan', 'departement', 'jabatan', $join, $join2),
        ];

        $this->template->load('layout/layout', 'kaur/pelamar_diterima', $data);
    }
    
    public function Detail_Pelamar_Diterima($id)
    {
        $id_lowongan['id_lowongan'] = $id;
        $data = [
            'total' => $this->AdminModel->total('apply_job', $id_lowongan),
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id),
            'pelamar' => $this->AdminModel->get_pelamar_diterima('apply_job', $id_lowongan),
        ];

        $this->template->load('layout/layout', 'kaur/detail_pelamar_diterima', $data);
    }

    public function Detail_Pelamar($id)
    {
        $data_apply = $this->AdminModel->get_detail_calon_pelamar('apply_job', $id);

        $id_user['id_user'] = $data_apply['id_user'];

        $data = [
            'apply' => $data_apply,
            'bahasa' => $this->AdminModel->getWhere('bahasa', $id_user)->result(),
            'keahlian' => $this->AdminModel->getWhere('keahlian', $id_user)->result(),
            'pendidikan' => $this->AdminModel->getWhere('pendidikan', $id_user)->result(),
            'pengalaman' => $this->AdminModel->getWhere('pengalaman', $id_user)->result(),
            'training' => $this->AdminModel->getWhere('training', $id_user)->result(),
        ];

        $this->template->load('layout/layout', 'kaur/pelamar_detail', $data);
    }

    public function print()
    {
        $data = [
            'total' => $this->AdminModel->total('apply_job', $id_lowongan),
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id),
            'pelamar' => $this->AdminModel->get_pelamar_diterima('apply_job', $id_lowongan),
        ];
        $this->template->load('layout/layout', 'kaur/pelamar_detail', $data);
        
    }

    public function laporan()
    {

        $id['status_hasil'] = 'Diterima';
        $data = [
            'apply' => $this->AdminModel->get_apply('apply_job', $id)
        ];

        $this->template->load('layout/laporankaur', 'kaur/laporan', $data);
         
          
    }

    // ############################## PELAMAR TIDAK DITERIMA ############################## //

    public function Pelamar_Tidak_Diterima()
    {
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';
        $data = [
            'lowongan' => $this->AdminModel->doubleJoin('lowongan', 'departement', 'jabatan', $join, $join2),
        ];

        $this->template->load('layout/layout', 'kaur/pelamar_tidak_diterima', $data);
    }

    public function Detail_Pelamar_Tidak_Diterima($id)
    {
        $id_lowongan['id_lowongan'] = $id;
        $data = [
            'total' => $this->AdminModel->total_tidak('apply_job', $id_lowongan),
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id),
            'pelamar' => $this->AdminModel->get_pelamar_tidak_diterima('apply_job', $id_lowongan),
        ];

        $this->template->load('layout/layout', 'kaur/detail_pelamar_tidak_diterima', $data);
    }

    // ############################## LAPORAN PELAMAR DITERIMA ############################## //
    public function Laporan_Pelamar_Diterima()
    {
        $this->template->load('layout/layout', 'kaur/laporan_diterima');
    }

    public function get_laporan_diterima()
    {
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');
        if (!$this->input->is_ajax_request()) {
            $result['status'] = false;
        } else {
            $result['data'] = $this->AdminModel->get_laporan_diterima($start_date, $end_date)->result();
            $result['total'] = $this->AdminModel->get_laporan_total($start_date, $end_date)->row_array();
            $result['status'] = true;
        }
        echo json_encode($result);
    }

    public function Laporan_Pelamar_Tidak_Diterima()
    {
        $this->template->load('layout/layout', 'kaur/laporan_tidak_diterima');
    }

    public function get_laporan_tidak_diterima()
    {
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');
        if (!$this->input->is_ajax_request()) {
            $result['status'] = false;
        } else {
            $result['data'] = $this->AdminModel->get_laporan_tidak_diterima($start_date, $end_date)->result();
            $result['total'] = $this->AdminModel->get_laporan_tidak_total($start_date, $end_date)->row_array();
            $result['status'] = true;
        }
        echo json_encode($result);
    }

    // ########################### DATA PENGALAMAN ########################### //

    public function Pengalaman()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];

        $data = [
            'pengalaman' => $this->AdminModel->get_pengalaman('pengalaman', $id)
        ];

        $this->template->load('layout/layout', 'kaur/pengalaman', $data);
    }

    public function Tambah_Pengalaman()
    {
        $this->template->load('layout/layout', 'kaur/pengalaman_tambah');
    }

    public function tambahDataPengalaman()
    {
        $perusahaan         = $this->input->post('perusahaan');
        $posisi_terakhir    = $this->input->post('posisi_terakhir');
        $jabatan_terakhir   = $this->input->post('jabatan_terakhir');
        $mulai_bekerja      = $this->input->post('mulai_bekerja');
        $berakhir_bekerja   = $this->input->post('berakhir_bekerja');
        $fasilitas_terakhir = $this->input->post('fasilitas_terakhir');
        $alasan             = $this->input->post('alasan');

        try {
            for ($i = 0; $i < count($this->input->post('perusahaan')); $i++) {
                $gaji_pokok         = $this->input->post('gaji_pokok')[$i];
                $gaji_pokok         = preg_replace("/[,]/", "", $gaji_pokok);
                $gaji_pokok         = (int)$gaji_pokok;

                $gaji_insentif      = $this->input->post('gaji_insentif')[$i];
                $gaji_insentif      = preg_replace("/[,]/", "", $gaji_insentif);
                $gaji_insentif      = (int)$gaji_insentif;
                $data_pengalaman = [
                    'id_user'            => $_SESSION['id_user'],
                    'posisi_terakhir'    => $posisi_terakhir[$i],
                    'perusahaan'         => $perusahaan[$i],
                    'jabatan_terakhir'   => $jabatan_terakhir[$i],
                    'mulai_bekerja'      => $mulai_bekerja[$i],
                    'berakhir_bekerja'   => $berakhir_bekerja[$i],
                    'gaji_pokok'         => $gaji_pokok,
                    'gaji_insentif'      => $gaji_insentif,
                    'fasilitas_terakhir' => $fasilitas_terakhir[$i],
                    'alasan'             => $alasan[$i],
                ];

                $this->AdminModel->createData('pengalaman', $data_pengalaman);
            }
            // die;
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil Disimpan!');
            redirect("Kaur/Pengalaman");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pengalaman Gagal Disimpan!');
            redirect("Kaur/Tambah_Pengalaman");
        }
    }

    public function Edit_Pengalaman($id)
    {
        $id = [
            'id_pengalaman' => $id
        ];

        $data = [
            'pengalaman' => $this->AdminModel->cekData('pengalaman', $id)
        ];

        $this->template->load('layout/layout', 'kaur/pengalaman_edit', $data);
    }

    public function editDataPengalaman()
    {
        $id['id_pengalaman'] = $this->input->post('id');
        $id_pengalaman = $this->input->post('id');
        $perusahaan         = $this->input->post('perusahaan');
        $posisi_terakhir    = $this->input->post('posisi_terakhir');
        $jabatan_terakhir   = $this->input->post('jabatan_terakhir');
        $mulai_bekerja      = $this->input->post('mulai_bekerja');
        $berakhir_bekerja   = $this->input->post('berakhir_bekerja');
        $fasilitas_terakhir = $this->input->post('fasilitas_terakhir');
        $alasan             = $this->input->post('alasan');
        $gaji_pokok         = $this->input->post('gaji_pokok');
        $gaji_pokok         = preg_replace("/[,]/", "", $gaji_pokok);
        $gaji_pokok         = (int)$gaji_pokok;

        $gaji_insentif      = $this->input->post('gaji_insentif');
        $gaji_insentif      = preg_replace("/[,]/", "", $gaji_insentif);
        $gaji_insentif      = (int)$gaji_insentif;
        try {
            $data_pengalaman = [
                'posisi_terakhir'    => $posisi_terakhir,
                'perusahaan'         => $perusahaan,
                'jabatan_terakhir'   => $jabatan_terakhir,
                'mulai_bekerja'      => $mulai_bekerja,
                'berakhir_bekerja'   => $berakhir_bekerja,
                'gaji_pokok'         => $gaji_pokok,
                'gaji_insentif'      => $gaji_insentif,
                'fasilitas_terakhir' => $fasilitas_terakhir,
                'alasan'             => $alasan,
            ];
            $this->AdminModel->updateData('pengalaman', $data_pengalaman, $id);
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil Diupdate!');
            redirect("Kaur/Edit_Pengalaman/$id_pengalaman");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pengalaman Gagal Diupdate!');
            redirect("Kaur/Edit_Pengalaman/$id_pengalaman");
        }
    }
    // ############################## MY PROFILE ############################## //

    public function My_Profile()
    {
        $this->template->load('layout/layout', 'Kaur/my_profile');
    }

    public function update_profile()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $foto = $_FILES['foto']['name'];
        $old_foto = $this->input->post('old_foto');
        try {
            if ($foto) {
                if ($old_foto == 'default.png') {
                    $config['upload_path'] = './assets/profile/';
                    $config['allowed_types'] = 'jpg|png|jpeg';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('Kaur/My_Profile');
                    } else {
                        $data = [
                            'nama_user' => $this->input->post('nama_user'),
                            'email' => $this->input->post('email'),
                            'no_telp' => $this->input->post('no_telp'),
                            'foto' => $this->upload->data('file_name'),
                        ];
                    }
                } else {
                    unlink('./assets/profile/' . $old_foto);
                    $config['upload_path'] = './assets/profile/';
                    $config['allowed_types'] = 'jpg|png|jpeg';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('Kaur/My_Profile');
                    } else {
                        $data = [
                            'nama_user' => $this->input->post('nama_user'),
                            'email' => $this->input->post('email'),
                            'no_telp' => $this->input->post('no_telp'),
                            'foto' => $this->upload->data('file_name'),
                        ];
                    }
                }
            } else {
                $data = [
                    'nama_user' => $this->input->post('nama_user'),
                    'email' => $this->input->post('email'),
                    'no_telp' => $this->input->post('no_telp'),
                ];
            }

            $this->AdminModel->updateData('user', $data, $id);

            $this->session->set_flashdata('success', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Kaur/My_Profile');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Kaur/My_Profile');
        }
    }

    // ############################## SETTING ############################## //

    public function Settings()
    {
        $this->template->load('layout/layout', 'Kaur/setting');
    }

    public function change_password()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $old_password = $this->input->post('old_password');
        $password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        try {
            $cekPasswordOld = $this->AdminModel->cekData('user', $id);
            if (password_verify($old_password, $cekPasswordOld['password'])) {
                if ($confirm_password == $password) {
                    $data = [
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    $this->AdminModel->updateData('user', $data, $id);
                    $this->session->set_flashdata('success', 'Password Berhasil Diupdate!, Silahkan Logout Akun Anda dan Login Kembali!');
                    redirect("Kaur/Settings");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect("Kaur/Settings");
                }
            } else {
                $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                redirect("Kaur/Settings");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Password Gagal Diupdate!');
            redirect("Kaur/Settings");
        }
    }
}
