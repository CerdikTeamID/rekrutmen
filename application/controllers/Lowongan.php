<?php
class Lowongan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('m_tulisan');
    }

    function index(){

        $this->data['main_view']   = 'depan/cari_lowongan_kerja';
        $this->data['lowongan']=$this->AdminModel->getLowongan();
        $this->load->view('theme/template',$this->data);
        
    }
   

    public function Detail_Lowongan($id)
    {
        $this->data['main_view']   = 'depan/lowongan_detail';
        $this->data['lowongan']=$this->AdminModel->get_detail_lowongan();
        $this->load->view('theme/template',$this->data);
        // $data = [
        //     'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id)
        // ];

        // $this->template->load('theme/template', 'depan/lowongan_detail', $data);
    }

    public function Apply($id)
    {
        $id_user = $_SESSION['id_user'];
        $id_pelamar = [
            'id_user' => $id_user
        ];
        $cek = $this->AdminModel->cekApply('apply_job', $id, $id_user);
        $get_pelamar = $this->AdminModel->cekData('pelamar', $id_pelamar);
        try {
            if ($cek == NULL) {
                $data = [
                    'id_user' => $_SESSION['id_user'],
                    'id_pelamar' => $get_pelamar['id_pelamar'],
                    'id_lowongan' => $id,
                    'status_hasil' => 'Menunggu',
                    'tgl_lamar' => date('Y-m-d'),
                ];
                $this->AdminModel->createData('apply_job', $data);
                $this->session->set_flashdata('success', 'Anda Berhasil Apply Job!');
                redirect("Lowongan/Cari_Lowongan_Kerja");
            } else {
                $this->session->set_flashdata('error', 'Anda Sudah Apply Lowongan Tersebut!');
                redirect("Lowongan/Cari_Lowongan_Kerja");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Anda Gagal Apply Job!');
            redirect("Lowongan/Cari_Lowongan_Kerja");
        }
    }
}
