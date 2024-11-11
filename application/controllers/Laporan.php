<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
        $this->AuthModel->cekLoginKaur();
    }

	public function print()
	{
		$data['pelamar'] = $this->AdminModel->get_pelamar_diterima('apply_job', 1);
		$this->load->view('Kaur/print', $data);
		
	}

}