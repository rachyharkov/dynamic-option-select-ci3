<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

    }
	public function index()
	{

		$data = array(
			'level_penilaian_list' => $this->db->get('penilaiananu')->result()
		);
		$this->load->view('welcome_message', $data);
	}

	public function get_detail_penilaian($id)
	{
		$getdata = $this->db->where('kode_penilaian', $id)->get('penilaiananu')->row();
		echo $getdata->deskripsi;
	}
}
