<?php defined('BASEPATH') || exit('No direct script access allowed');

class Admin extends Data_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('mahasiswa_model');
        $this->load->model('dosen_model');

        $this->load->model('user_model');
    }

    function index()
    {
        $data = $this->mahasiswa_model->getMhsDataAllU();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'verifikasiMhs';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function verifikasiMahasiswa()
    {
        $data = $this->mahasiswa_model->getMhsDataAllU();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'verifikasiMhs';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }


    function verifikasiDosen()
    {
        $data = $this->dosen_model->getDosenDataAllU();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'verifikasiDosen';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }


    function verifikasi()
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            if ($this->user_model->acc($id)) {

                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}
