<?php defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
	protected $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('proposal_model');
		$this->load->model('mahasiswa_model');
		$this->load->model('dosen_model');
		$this->load->model('user_model');
	}

	function index()
	{
		// var_dump($this->session->userdata());
		$this->data['view']    = 'home';
		$this->data['param']    = $this->proposal_model->getJudul();
		$this->load->view('template/default', $this->data);
	}


	function buatAkun()
	{
		$this->data['view']    = 'pendaftaran';
		$this->data['param']    = '';
		$this->load->view('simple', $this->data);
	}





	function regist()
	{
		$stat = $this->input->post('sat');

		$userid = $this->input->post('userid');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$jurusan = $this->input->post('js');
		$hp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$role = '';
		if ($stat == 'Dosen') {
			$role = '1';
			if ($this->dosen_model->insert($userid, $nama, $jk, $jurusan, $hp, $email)) {
				if ($this->user_model->insert($userid, $nama, $email, $pass, $role)) {

					redirect('User');
				} else {
					redirect('Home/buatAkun');
				}
			} else {
				redirect('Home/buatAkun');
			}
		} else {
			$role = '0';

			if ($this->mahasiswa_model->insert($userid, $nama, $jk, $jurusan, $hp, $email)) {
				if ($this->user_model->insert($userid, $nama, $email, $pass, $role)) {

					redirect('User');
				} else {
					redirect('Home/buatAkun');
				}
			} else {
				redirect('Home/buatAkun');
			}
		}
	}



	function about()
	{

		$this->data['view']    = 'about';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}
}
