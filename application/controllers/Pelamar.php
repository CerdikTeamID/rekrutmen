<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
        $this->AuthModel->cekLoginPelamar();
    }

    public function index()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $where_seleksi['status_hasil'] = 'Lolos Seleksi';
        $where_proses['status_hasil'] = 'Sedang Di Proses';
        $data = [
            'lowongan' => $this->AdminModel->total_lowongan('lowongan'),
            'lamaran' => $this->AdminModel->total_lamaran('apply_job', $id),
            'lolos' => $this->AdminModel->total_user('apply_job', $where_seleksi, $id),
            'proses' => $this->AdminModel->total_user('apply_job', $where_proses, $id),
        ];
        $this->template->load('layout/layout', 'pelamar/dashboard', $data);
    }
 
    // ########################### DATA PELAMAR ########################### //

    public function Data_Pelamar()
    {
        $id['id_user'] = $_SESSION['id_user'];

        $cekData = $this->AdminModel->cekData('pelamar', $id);

        if ($cekData) {
            $this->session->set_flashdata('error', 'Anda Tidak Dapat Ke Halaman Ini Kembali!');
            return redirect('Pelamar');
        } else {
            $this->session->set_flashdata('succes', 'Harap Isi Semua Data Anda!');
            $this->template->load('layout/layout', 'pelamar/data_pelamar');
        }
    }

    public function daftarDataDiri()
    {
        $id_user                       = $_SESSION['id_user'];
        $nama_pelamar                  = $this->input->post('nama_lengkap');
        $no_ktp                        = $this->input->post('no_ktp');
        $email                         = $this->input->post('email');
        $tempat_lahir                  = $this->input->post('tempat_lahir');
        $tgl_lahir                     = $this->input->post('tgl_lahir');
        $jk                            = $this->input->post('jk');
        $hp                            = $this->input->post('hp');
        $pendidikan_terakhir           = $this->input->post('pendidikan_terakhir');
        $jurusan                       = $this->input->post('jurusan');
        $sim                           = $this->input->post('sim');
        $agama                         = $this->input->post('agama');
        $no_npwp                       = $this->input->post('no_npwp');
        $no_sim                        = $this->input->post('no_sim');
        $alamat                        = $this->input->post('alamat');
        $alamat_domisili               = $this->input->post('alamat_domisili');
        $status_tempat_tinggal         = $this->input->post('status_tempat_tinggal');
        $pendidikan_terakhir           = $this->input->post('pendidikan_terakhir');
        $nama_sekolah                  = $this->input->post('nama_sekolah');
        $kota                          = $this->input->post('kota');
        $jurusan                       = $this->input->post('jurusan');
        $start_year                    = $this->input->post('start_year');
        $end_year                      = $this->input->post('end_year');
        $nilai_pend                    = $this->input->post('nilai_pend');
        $perusahaan                    = $this->input->post('perusahaan');
        $posisi_terakhir               = $this->input->post('posisi_terakhir');
        $jabatan_terakhir              = $this->input->post('jabatan_terakhir');
        $mulai_bekerja                 = $this->input->post('mulai_bekerja');
        $berakhir_bekerja              = $this->input->post('berakhir_bekerja');
        $gaji_pokok                    = $this->input->post('gaji_pokok');
        $gaji_pokok                    = preg_replace("/[,]/", "", $gaji_pokok);
        $gaji_pokok                    = (int)$gaji_pokok;
        $gaji_insentif                 = $this->input->post('gaji_insentif');
        $gaji_insentif                 = preg_replace("/[,]/", "", $gaji_insentif);
        $gaji_insentif                 = (int)$gaji_insentif;
        $fasilitas_terakhir            = $this->input->post('fasilitas_terakhir');
        $alasan                        = $this->input->post('alasan');
        $keterampilan                  = $this->input->post('keterampilan');
        $tingkat_keahlian_keterampilan = $this->input->post('tingkat_keahlian_keterampilan');
        $training                      = $this->input->post('training');
        $sertifikasi                   = $this->input->post('sertifikasi');
        $penyelenggara                 = $this->input->post('penyelenggara');
        $tahun_pelatihan               = $this->input->post('tahun_pelatihan');
        $bahasa_asing                  = $this->input->post('bahasa_asing');
        $tingkat_keahlian_bahasa       = $this->input->post('tingkat_keahlian_bahasa');
        $cv                            = $_FILES['cv'];
        $foto_pelamar                  = $_FILES['foto_pelamar'];
        try {

            $config['upload_path'] = './assets/data_pelamar/';
            $config['allowed_types'] = 'jpg|png|jpeg|doc|docx|pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('cv')) {
                $this->session->set_flashdata('error', 'Gagal Mengupload CV');
                redirect('Pelamar/Data_Pelamar');
            } else {
                $file_cv =  $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('foto_pelamar')) {
                $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                redirect('Pelamar/Data_Pelamar');
            } else {
                $file_foto = $this->upload->data('file_name');
            }
            $data_pelamar = [
                'id_user'               => $id_user,
                'nama_pelamar'          => $nama_pelamar,
                'no_ktp'                => $no_ktp,
                'email'                 => $email,
                'hp'                    => $hp,
                'tempat_lahir'          => $tempat_lahir,
                'tgl_lahir'             => $tgl_lahir,
                'jk'                    => $jk,
                'pendidikan_terakhir'   => $pendidikan_terakhir,
                'jurusan        '       => $jurusan,
                'agama'                 => $agama,
                'no_npwp'               => $no_npwp,
                'sim'                   => $sim,
                'no_sim'                => $no_sim,
                'alamat'                => $alamat,
                'alamat_domisili'       => $alamat_domisili,
                'status_tempat_tinggal' => $status_tempat_tinggal,
                'foto_pelamar'          => $file_foto,
                'cv'                    => $file_cv,
            ];

            $data_pendidikan = [
                'id_user'             => $id_user,
                'pendidikan_terakhir' => $pendidikan_terakhir,
                'nama_sekolah'        => $nama_sekolah,
                'kota'                => $kota,
                'jurusan'             => $jurusan,
                'start_year'          => $start_year,
                'end_year'            => $end_year,
                'nilai_pend'          => $nilai_pend,
            ];

            $data_pengalaman = [
                'id_user'            => $id_user,
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

            $data_keahlian = [
                'id_user'                       => $id_user,
                'keterampilan'                  => $keterampilan,
                'tingkat_keahlian_keterampilan' => $tingkat_keahlian_keterampilan
            ];

            $data_bahasa = [
                'id_user'                 => $id_user,
                'bahasa_asing'            => $bahasa_asing,
                'tingkat_keahlian_bahasa' => $tingkat_keahlian_bahasa,
            ];

            $data_training = [
                'id_user'         => $id_user,
                'training'        => $training,
                'sertifikasi'     => $sertifikasi,
                'penyelenggara'   => $penyelenggara,
                'tahun_pelatihan' => $tahun_pelatihan
            ];

            $this->db->trans_start();
            $this->db->insert('pelamar', $data_pelamar);
            $this->db->insert('pendidikan', $data_pendidikan);
            $this->db->insert('pengalaman', $data_pengalaman);
            $this->db->insert('keahlian', $data_keahlian);
            $this->db->insert('bahasa', $data_bahasa);
            $this->db->insert('training', $data_training);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $this->result['status'] = false;
                echo json_encode($this->result);
            } else {
                $this->db->trans_commit();
                $this->result['status'] = true;
                echo json_encode($this->result);
            }
        } catch (\Exception $e) {
            $this->result['status'] = false;
            echo json_encode($this->result);
        }
    }

    // ########################### PERSONAL DATA ########################### //

    public function Personal_Data()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];
        $data = [
            'personal_data' => $this->AdminModel->cekData('pelamar', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/personal_data', $data);
    }

    public function updateDataPelamar()
    {
        $id['id_pelamar']      = $this->input->post('id');
        $nama_pelamar          = $this->input->post('nama_lengkap');
        $no_ktp                = $this->input->post('no_ktp');
        $email                 = $this->input->post('email');
        $tempat_lahir          = $this->input->post('tempat_lahir');
        $tgl_lahir             = $this->input->post('tgl_lahir');
        $jk                    = $this->input->post('jk');
        $hp                    = $this->input->post('hp');
        $pendidikan_terakhir   = $this->input->post('pendidikan_terakhir');
        $jurusan               = $this->input->post('jurusan');
        $sim                   = $this->input->post('sim');
        $agama                 = $this->input->post('agama');
        $no_npwp               = $this->input->post('no_npwp');
        $no_sim                = $this->input->post('no_sim');
        $alamat                = $this->input->post('alamat');
        $alamat_domisili       = $this->input->post('alamat_domisili');
        $status_tempat_tinggal = $this->input->post('status_tempat_tinggal');
        $cv                    = $_FILES['cv'];
        $foto_pelamar          = $_FILES['foto_pelamar'];
        $old_foto_pelamar      = $this->input->post('old_foto_pelamar');
        $old_cv                = $this->input->post('old_cv');

        try {
            if ($cv['name'] != "") {
                $config['upload_path'] = './assets/data_pelamar/';
                $config['allowed_types'] = 'doc|docx|pdf';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('cv')) {
                    $this->session->set_flashdata('error', 'Gagal Mengupload CV');
                    redirect('Pelamar/Data_Pelamar');
                } else {
                    unlink('./assets/data_pelamar/' . $old_cv);
                    $file_cv =  $this->upload->data('file_name');
                }
            }

            if ($foto_pelamar['name'] != "") {
                $config['upload_path'] = './assets/data_pelamar/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('foto_pelamar')) {
                    $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                    redirect('Pelamar/Data_Pelamar');
                } else {
                    unlink('./assets/data_pelamar/' . $old_foto_pelamar);
                    $file_foto = $this->upload->data('file_name');
                }
            }

            if ($foto_pelamar['name'] != "") {
                $config['upload_path'] = './assets/profile/';
                $config['allowed_types'] = 'jpg|png|jpeg';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('foto_pelamar')) {
                    $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                    redirect('Pelamar/Data_Pelamar');
                } else {
                    unlink('./assets/profile/' . $old_foto_pelamar);
                    $file_foto = $this->upload->data('file_name');
                }
            }

            if ($foto_pelamar['name'] == "" && $cv['name'] == "") {
                $data = [
                    'nama_pelamar' => $nama_pelamar,
                    'no_ktp'                => $no_ktp,
                    'email'                 => $email,
                    'hp'                    => $hp,
                    'tempat_lahir'          => $tempat_lahir,
                    'tgl_lahir'             => $tgl_lahir,
                    'jk'                    => $jk,
                    'pendidikan_terakhir'   => $pendidikan_terakhir,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'no_npwp'               => $no_npwp,
                    'sim'                   => $sim,
                    'no_sim'                => $no_sim,
                    'alamat'                => $alamat,
                    'alamat_domisili'       => $alamat_domisili,
                    'status_tempat_tinggal' => $status_tempat_tinggal,
                ];
            } elseif ($foto_pelamar['name'] != "" && $cv['name'] != "") {
                $data = [
                    'nama_pelamar' => $nama_pelamar,
                    'no_ktp'                => $no_ktp,
                    'email'                 => $email,
                    'hp'                    => $hp,
                    'tempat_lahir'          => $tempat_lahir,
                    'tgl_lahir'             => $tgl_lahir,
                    'jk'                    => $jk,
                    'pendidikan_terakhir'   => $pendidikan_terakhir,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'no_npwp'               => $no_npwp,
                    'sim'                   => $sim,
                    'no_sim'                => $no_sim,
                    'alamat'                => $alamat,
                    'alamat_domisili'       => $alamat_domisili,
                    'status_tempat_tinggal' => $status_tempat_tinggal,
                    'foto_pelamar'          => $file_foto,
                    'cv'                    => $file_cv
                ];
            } elseif ($foto_pelamar['name'] != "") {
                $data = [
                    'nama_pelamar' => $nama_pelamar,
                    'no_ktp'                => $no_ktp,
                    'email'                 => $email,
                    'hp'                    => $hp,
                    'tempat_lahir'          => $tempat_lahir,
                    'tgl_lahir'             => $tgl_lahir,
                    'jk'                    => $jk,
                    'pendidikan_terakhir'   => $pendidikan_terakhir,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'no_npwp'               => $no_npwp,
                    'sim'                   => $sim,
                    'no_sim'                => $no_sim,
                    'alamat'                => $alamat,
                    'alamat_domisili'       => $alamat_domisili,
                    'status_tempat_tinggal' => $status_tempat_tinggal,
                    'foto_pelamar'          => $file_foto,
                ];
            } elseif ($cv['name'] != "") {
                $data = [
                    'nama_pelamar' => $nama_pelamar,
                    'no_ktp'                => $no_ktp,
                    'email'                 => $email,
                    'hp'                    => $hp,
                    'tempat_lahir'          => $tempat_lahir,
                    'tgl_lahir'             => $tgl_lahir,
                    'jk'                    => $jk,
                    'pendidikan_terakhir'   => $pendidikan_terakhir,
                    'jurusan'               => $jurusan,
                    'agama'                 => $agama,
                    'no_npwp'               => $no_npwp,
                    'sim'                   => $sim,
                    'no_sim'                => $no_sim,
                    'alamat'                => $alamat,
                    'alamat_domisili'       => $alamat_domisili,
                    'status_tempat_tinggal' => $status_tempat_tinggal,
                    'cv'                    => $file_cv
                ];
            }

            $this->AdminModel->updateData('pelamar', $data, $id);
            $this->session->set_flashdata('success', 'Berhasil Update Personal Data!');
            redirect('Pelamar/Personal_Data');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Personal Data!');
            redirect('Pelamar/Personal_Data');
        }
    }

    // ########################### DATA PENDIDIKAN ########################### //

    public function Pendidikan()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];

        $data = [
            'pendidikan' => $this->AdminModel->get_pendidikan('pendidikan', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/pendidikan', $data);
    }

    public function Tambah_Pendidikan()
    {
        $this->template->load('layout/layout', 'pelamar/pendidikan_tambah');
    }

    public function tambahDataPendidikan()
    {
        try {
            for ($i = 0; $i < count($this->input->post('pendidikan_terakhir')); $i++) {
                $data = [
                    'id_user' => $_SESSION['id_user'],
                    'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir')[$i],
                    'nama_sekolah' => $this->input->post('nama_sekolah')[$i],
                    'kota' => $this->input->post('kota')[$i],
                    'jurusan' => $this->input->post('jurusan')[$i],
                    'start_year' => $this->input->post('start_year')[$i],
                    'end_year' => $this->input->post('end_year')[$i],
                    'nilai_pend' => $this->input->post('nilai_pend')[$i],
                ];

                $this->AdminModel->createData('pendidikan', $data);
            }

            $this->session->set_flashdata('success', 'Data Pendidikan Berhasil Disimpan!');
            redirect("Pelamar/Pendidikan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pendidikan Gagal Disimpan!');
            redirect("Pelamar/Tambah_Pendidikan");
        }
    }

    public function Edit_Pendidikan($id)
    {
        $id = [
            'id_pendidikan' => $id
        ];

        $data = [
            'pendidikan' => $this->AdminModel->cekData('pendidikan', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/pendidikan_edit', $data);
    }

    public function editDataPendidikan()
    {
        $id['id_pendidikan'] = $this->input->post('id');
        $id_pendidikan = $this->input->post('id');
        try {
            $data = [
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'kota' => $this->input->post('kota'),
                'jurusan' => $this->input->post('jurusan'),
                'start_year' => $this->input->post('start_year'),
                'end_year' => $this->input->post('end_year'),
                'nilai_pend' => $this->input->post('nilai_pend'),
            ];

            $this->AdminModel->updateData('pendidikan', $data, $id);
            $this->session->set_flashdata('success', 'Data Pendidikan Berhasil Diupdate!');
            redirect("Pelamar/Pendidikan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pendidikan Gagal Diupdate!');
            redirect("Pelamar/Edit_Pendidikan/$id_pendidikan");
        }
    }

    /// add 12/06/2024
    public function deletePendidikan()
    {
        $id['id_pendidikan'] = $this->input->post('id');

        try {
            $this->AdminModel->deleteData('pendidikan', $id);
            $this->session->set_flashdata('success', 'Data Departement Berhasil Dihapus!');
            redirect("Pelamar/Pendidikan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Departement Gagal Dihapus!');
            redirect("Pelamar/Pendidikan");
        }
    }

    // public function deletePendidikan()
    // {
    // $id = $this->input->post('id');

    // if (!$id) {
    //     $this->session->set_flashdata('error', 'ID is required!');
    //     redirect("Pelamar/Pendidikan");
    //     return;
    // }

    // try {
    //     $this->AdminModel->deleteData('pendidikan', ['id_pendidikan' => $id]);
    //     $this->session->set_flashdata('success', 'Data Departement successfully deleted!');
    // } catch (\Exception $e) {
    //     $this->session->set_flashdata('error', 'Failed to delete Data Departement!');
    // }

    // redirect("Pelamar/Pendidikan");
    // }

    // ########################### DATA PENGALAMAN ########################### //

    
    public function Pengalaman()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];

        $data = [
            'pengalaman' => $this->AdminModel->get_pengalaman('pengalaman', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/pengalaman', $data);
    }

    public function Tambah_Pengalaman()
    {
        $this->template->load('layout/layout', 'pelamar/pengalaman_tambah');
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
            redirect("Pelamar/Pengalaman");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pengalaman Gagal Disimpan!');
            redirect("Pelamar/Tambah_Pengalaman");
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

        $this->template->load('layout/layout', 'pelamar/pengalaman_edit', $data);
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
            redirect("Pelamar/Edit_Pengalaman/$id_pengalaman");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Pengalaman Gagal Diupdate!');
            redirect("Pelamar/Edit_Pengalaman/$id_pengalaman");
        }
    }

    // ########################### DATA KEAHLIAN ########################### //

    public function Keahlian()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];

        $data = [
            'keahlian' => $this->AdminModel->get_keahlian('keahlian', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/keahlian', $data);
    }

    public function Tambah_Keahlian()
    {
        $this->template->load('layout/layout', 'pelamar/keahlian_tambah');
    }

    public function tambahDataKeahlian()
    {
        $keterampilan                  = $this->input->post('keterampilan');
        $tingkat_keahlian_keterampilan = $this->input->post('tingkat_keahlian_keterampilan');

        try {
            for ($i = 0; $i < count($keterampilan); $i++) {
                $data_keahlian = [
                    'id_user'                       => $_SESSION['id_user'],
                    'keterampilan'                  => $keterampilan[$i],
                    'tingkat_keahlian_keterampilan' => $tingkat_keahlian_keterampilan[$i]
                ];

                $this->AdminModel->createData('keahlian', $data_keahlian);
            }
            $this->session->set_flashdata('success', 'Data Keahlian Berhasil Disimpan!');
            redirect("Pelamar/Keahlian");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Keahlian Gagal Disimpan!');
            redirect("Pelamar/Tambah_Keahlian");
        }
    }

    public function Edit_Keahlian($id)
    {
        $id = [
            'id_keahlian' => $id
        ];

        $data = [
            'keahlian' => $this->AdminModel->cekData('keahlian', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/keahlian_edit', $data);
    }

    public function editDataKeahlian()
    {
        $id['id_keahlian']             = $this->input->post('id');
        $id_keahlian                   = $this->input->post('id');
        $keterampilan                  = $this->input->post('keterampilan');
        $tingkat_keahlian_keterampilan = $this->input->post('tingkat_keahlian_keterampilan');
        try {
            $data_keahlian = [
                'keterampilan'                  => $keterampilan,
                'tingkat_keahlian_keterampilan' => $tingkat_keahlian_keterampilan
            ];
            $this->AdminModel->updateData('keahlian', $data_keahlian, $id);
            $this->session->set_flashdata('success', 'Data Keahlian Berhasil Diupdate!');
            redirect("Pelamar/Edit_Keahlian/$id_keahlian");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Keahlian Gagal Diupdate!');
            redirect("Pelamar/Edit_Keahlian/$id_keahlian");
        }
    }

    // ########################### DATA TRAINING ########################### //

    public function Training()
    {
        $id = [
            'id_user' => $_SESSION['id_user']
        ];

        $data = [
            'training' => $this->AdminModel->get_training('training', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/training', $data);
    }

    public function Tambah_Training()
    {
        $this->template->load('layout/layout', 'pelamar/training_tambah');
    }

    public function tambahDataTraining()
    {
        $training        = $this->input->post('training');
        $sertifikasi     = $this->input->post('sertifikasi');
        $penyelenggara   = $this->input->post('penyelenggara');
        $tahun_pelatihan = $this->input->post('tahun_pelatihan');

        try {
            for ($i = 0; $i < count($training); $i++) {
                $data_training = [
                    'id_user'         => $_SESSION['id_user'],
                    'training'        => $training[$i],
                    'sertifikasi'     => $sertifikasi[$i],
                    'penyelenggara'   => $penyelenggara[$i],
                    'tahun_pelatihan' => $tahun_pelatihan[$i],
                ];

                $this->AdminModel->createData('training', $data_training);
            }
            $this->session->set_flashdata('success', 'Data Training Berhasil Disimpan!');
            redirect("Pelamar/Training");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Training Gagal Disimpan!');
            redirect("Pelamar/Tambah_Training");
        }
    }

    public function Edit_Training($id)
    {
        $id = [
            'id_training' => $id
        ];

        $data = [
            'training' => $this->AdminModel->cekData('training', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/training_edit', $data);
    }

    public function editDataTraining()
    {
        $id['id_training']   = $this->input->post('id');
        $id_training         = $this->input->post('id');
        $training            = $this->input->post('training');
        $sertifikasi         = $this->input->post('sertifikasi');
        $penyelenggara       = $this->input->post('penyelenggara');
        $tahun_pelatihan     = $this->input->post('tahun_pelatihan');
        try {
            $data_training = [
                'training'        => $training,
                'sertifikasi'     => $sertifikasi,
                'penyelenggara'   => $penyelenggara,
                'tahun_pelatihan' => $tahun_pelatihan,
            ];
            $this->AdminModel->updateData('training', $data_training, $id);
            $this->session->set_flashdata('success', 'Data Training Berhasil Diupdate!');
            redirect("Pelamar/Edit_Training/$id_training");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Training Gagal Diupdate!');
            redirect("Pelamar/Edit_Training/$id_training");
        }
    }

    // ########################### CARI LOWONGAN KERJA ########################### //

    public function Cari_Lowongan_Kerja()
    {
        $database = 'lowongan';
        $database1 = 'departement';
        $database2 = 'jabatan';
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';

        $datas = [
            'lowongan' => $this->AdminModel->doubleJoin($database, $database1, $database2, $join, $join2)
        ];

        foreach ($datas['lowongan'] as $row) {
            if ($row->tgl_close < date('Y-m-d')) {
                $status = [
                    'status' => 0
                ];
                $id['id_lowongan'] = $row->id_lowongan;
                $this->AdminModel->updateData('lowongan', $status, $id);
            } else {
                $status = [
                    'status' => 1
                ];
                $id['id_lowongan'] = $row->id_lowongan;
                $this->AdminModel->updateData('lowongan', $status, $id);
            }
        }
        $data = [
            'lowongan' => $this->AdminModel->get_cari_lowongan($database, $database1, $database2, $join, $join2)
        ];
        $this->template->load('layout/layout', 'pelamar/cari_lowongan_kerja', $data);
    }

    public function Detail_Lowongan($id)
    {
        $data = [
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/lowongan_detail', $data);
    }


    
    // Public function cari_jurusan($database, $database2, $database3, $data1, $data2)
    // {
    //     $database = 'apply_job';
    //     $database1 = 'pendidikan';
    //     $database2 = 'lowongan';
    //     $join = 'pendidikan.id_user = lowongan.id_user';
    //     $join2 = 'apply_job.id_lowongan = lowongan.id_lowongan';
    //     $this->db->select('*');
    //     $this->db->from($database);
    //     $this->db->join($database2, $data1);
    //     $this->db->join($database3, $data2);
    //     $this->db->where('status', 1);
    //     return $this->db->get()->result();
    // }

    /// Work In Process ////

    // public function Apply($id)
    // {
    //     $id_user = $_SESSION['id_user'];
    //     $id_pelamar = [
    //         'id_user' => $id_user
    //     ];
        
    //     $cek = $this->AdminModel->cekApply('apply_job', $id, $id_user);
    //     $get_pelamar = $this->AdminModel->cekData('pelamar', $id_pelamar);
    //     $get_pendidikan = $this->AdminModel->cekData('pendidikan', ['id_user' => $id_user]);
    //     $jurusan = $get_pendidikan['id_pendidikan'];

    //     try {
    //         if ($cek == NULL) {
    //             $data = [
    //                 'id_user' => $_SESSION['id_user'],
    //                 'id_pelamar' => $get_pelamar['id_pelamar'],
    //                 'id_lowongan' => $id,
    //                 'jurusan' => $jurusan,   
    //                 'status_hasil' => 'Menunggu',
    //                 'tgl_lamar' => date('Y-m-d'),
    //             ];
    //             $this->AdminModel->createData('apply_job', $data);
    //             $this->session->set_flashdata('success', 'Anda Berhasil Apply Job!');
    //             redirect("Pelamar/Cari_Lowongan_Kerja");
    //         } else {
    //             $this->session->set_flashdata('error', 'Anda Sudah Apply Lowongan Tersebut!');
    //             redirect("Pelamar/Cari_Lowongan_Kerja");
    //         }
    //     } catch (\Exception $e) {
    //         $this->session->set_flashdata('error', 'Anda Gagal Apply Job!');
    //         redirect("Pelamar/Cari_Lowongan_Kerja");
    //     }
    // }

    /// Asli tanpa biang ///
    // public function Apply($id)
    // {
    //     $id_user = $_SESSION['id_user'];
    //     $id_pelamar = [
    //         'id_user' => $id_user
    //     ];
    //     $cek = $this->AdminModel->cekApply('apply_job', $id, $id_user);
    //     $get_pelamar = $this->AdminModel->cekData('pelamar', $id_pelamar);
    //     try {
    //         if ($cek == NULL) {
    //             $data = [
    //                 'id_user' => $_SESSION['id_user'],
    //                 'id_pelamar' => $get_pelamar['id_pelamar'],
    //                 'id_lowongan' => $id,
    //                 'status_hasil' => 'Menunggu',
    //                 'tgl_lamar' => date('Y-m-d'),
    //             ];
    //             $this->AdminModel->createData('apply_job', $data);
    //             $this->session->set_flashdata('success', 'Anda Berhasil Apply Job!');
    //             redirect("Pelamar/Cari_Lowongan_Kerja");
    //         } else {
    //             $this->session->set_flashdata('error', 'Anda Sudah Apply Lowongan Tersebut!');
    //             redirect("Pelamar/Cari_Lowongan_Kerja");
    //         }
    //     } catch (\Exception $e) {
    //         $this->session->set_flashdata('error', 'Anda Gagal Apply Job!');
    //         redirect("Pelamar/Cari_Lowongan_Kerja");
    //     }
    // }

    /// ##### Apply Sesuai Jurusan ##### ///////
    public function Apply($id)
    {
        $id_user = $_SESSION['id_user'];
        $id_pelamar = [
            'id_user' => $id_user
        ];
        $cek = $this->AdminModel->cekApply('apply_job', $id, $id_user);
        
        $get_pelamar = $this->AdminModel->cekData('pelamar', $id_pelamar);
        
        // Check if the jurusan_pend matches with the pendidikan_terakhir
        $check_jurusan_pend = $this->AdminModel->checkJurusanPend($id, $id_user);
        
        try {
            if ($cek == NULL && $check_jurusan_pend) {
                $data = [
                    'id_user' => $_SESSION['id_user'],
                    'id_pelamar' => $get_pelamar['id_pelamar'],
                    'id_lowongan' => $id,
                    'status_hasil' => 'Menunggu',
                    'tgl_lamar' => date('Y-m-d'),
                ];
                $this->AdminModel->createData('apply_job', $data);
                $this->session->set_flashdata('success', 'Anda Berhasil Apply Job!');
                redirect("Pelamar/Cari_Lowongan_Kerja");
            } elseif (!$check_jurusan_pend) {
                $this->session->set_flashdata('error', 'Jurusan pendidikan tidak sesuai dengan lowongan!');
                redirect("Pelamar/Cari_Lowongan_Kerja");
            } else {
                $this->session->set_flashdata('error', 'Anda Sudah Apply Lowongan Tersebut!');
                redirect("Pelamar/Cari_Lowongan_Kerja");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Anda Gagal Apply Job!');
            redirect("Pelamar/Cari_Lowongan_Kerja");
        }
    }

    // ########################### LOWONGAN ANDA ########################### //
    public function Lowongan_Anda()
    {
        $id = [
            'apply_job.id_user' => $_SESSION['id_user']
        ];
        $data_apply = $this->AdminModel->get_apply('apply_job', $id);
        foreach ($data_apply as $row) {
            if ($row->status_hasil == 'Lolos Seleksi') {
                if ($row->hasil_test != NULL && $row->hasil_psikotes !== NULL) {
                    $data_update = [
                        'status_hasil' => 'Sedang Di Proses'
                    ];

                    $ida['id_apply_job'] = $row->id_apply_job;
                    $this->AdminModel->updateData('apply_job', $data_update, $ida);
                }
            }
        }

        $data = [
            'apply' => $this->AdminModel->get_apply('apply_job', $id)
        ];

        $this->template->load('layout/layout', 'pelamar/lowongan_anda', $data);
    }

    public function Test($id)
    {
        $ida['id_apply_job'] = $id;
        $get_lowongan = $this->AdminModel->cekData('apply_job', $ida);
        $data = [
            'apply' => $get_lowongan,
            'soal' => $this->AdminModel->get_soal('soal', $get_lowongan['id_lowongan']),
        ];

        $this->template->load('layout/layout', 'pelamar/soal', $data);
    }

    public function jawabanTest()
    {
        try {
            for ($i = 1; $i <= count($this->input->post('total')); $i++) {
                $id_soal = $this->input->post("id_soal$i");
                $jawaban = $this->input->post("jawaban$i");
                $get_kunjaw = $this->AdminModel->get_kunjaw('soal', $id_soal);
                if ($get_kunjaw['kunjaw'] == $jawaban) {
                    $data_benar[] = 1;
                } else {
                    $data_benar[] = 0;
                }
                if ($get_kunjaw['kunjaw'] != $jawaban) {
                    $data_salah[] = 1;
                }
            }
            if (empty($data_benar)) {
                $hasil = 0;
                $data_benar = 0;
            } else {
                $hasil       = array_sum($data_benar);
                $hasil       = $hasil * 100;
                $hasil       = $hasil / count($this->input->post('total'));
                $data_benar  = array_sum($data_benar);
            }

            if (empty($data_salah)) {
                $hasil_salah = 0;
            } else {
                $hasil_salah = array_sum($data_salah);
            }

            $id['id_apply_job'] = $this->input->post('id');

            $data = [
                'hasil_test' => $hasil,
            ];

            $this->AdminModel->updateData('apply_job', $data, $id);
            $this->session->set_flashdata("nilai", "Jawaban Anda Benar: $data_benar, Salah: $hasil_salah");
            redirect("Pelamar/Lowongan_Anda");
        } catch (\Exception $e) {
            $this->session->set_flashdata("error", "Gagal Mengirimkan Nilai");
            redirect("Pelamar/Lowongan_Anda");
        }
    }

    public function Psikotes($id)
    {
        $ida['id_apply_job'] = $id;
        $get_lowongan = $this->AdminModel->cekData('apply_job', $ida);
        $data = [
            'apply' => $get_lowongan,
            'psikotes' => $this->AdminModel->get_soal('psikotes', $get_lowongan['id_lowongan']),
        ];

        $this->template->load('layout/layout', 'pelamar/psikotes', $data);
    }

    public function jawabanPsikotes()
    {
        try {
            for ($i = 1; $i <= count($this->input->post('total')); $i++) {
                $id_soal = $this->input->post("id_psikotes$i");
                $jawaban = $this->input->post("jawaban$i");
                $get_kunjaw = $this->AdminModel->get_kunjaw_psikotes('psikotes', $id_soal);
                if ($get_kunjaw['kunjaw_psikotes'] == $jawaban) {
                    $data_benar[] = 1;
                } else {
                    $data_benar[] = 0;
                }
                if ($get_kunjaw['kunjaw_psikotes'] != $jawaban) {
                    $data_salah[] = 1;
                }
            }
            if (empty($data_benar)) {
                $hasil = 0;
                $data_benar = 0;
            } else {
                $hasil       = array_sum($data_benar);
                $hasil       = $hasil * 100;
                $hasil       = $hasil / count($this->input->post('total'));
                $data_benar  = array_sum($data_benar);
            }

            if (empty($data_salah)) {
                $hasil_salah = 0;
            } else {
                $hasil_salah = array_sum($data_salah);
            }

            $id['id_apply_job'] = $this->input->post('id');

            $data = [
                'hasil_psikotes' => $hasil,
            ];

            $this->AdminModel->updateData('apply_job', $data, $id);
            $this->session->set_flashdata("nilai", "Jawaban Anda Benar: $data_benar, Salah: $hasil_salah");
            redirect("Pelamar/Lowongan_Anda");
        } catch (\Exception $e) {
            $this->session->set_flashdata("error", "Gagal Mengirimkan Nilai");
            redirect("Pelamar/Lowongan_Anda");
        }
    }

    // ############################## MY PROFILE ############################## //

    public function My_Profile()
    {
        $this->template->load('layout/layout', 'Pelamar/my_profile');
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
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('Pelamar/My_Profile');
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
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('User/My_Profile');
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
            redirect('Pelamar/My_Profile');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Pelamar/My_Profile');
        }
    }

    // ############################## SETTING ############################## //

    public function Settings()
    {
        $this->template->load('layout/layout', 'Pelamar/setting');
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
                    redirect("Pelamar/Settings");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect("Pelamar/Settings");
                }
            } else {
                $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                redirect("Pelamar/Settings");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Password Gagal Diupdate!');
            redirect("Pelamar/Settings");
        }
    }
}
