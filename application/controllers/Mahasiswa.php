<?php defined('BASEPATH') || exit('No direct script access allowed');

class Mahasiswa extends Data_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('mahasiswa_model');
    }

    function index()
    {
        $data = $this->mahasiswa_model->getMhsDataAll();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'mahasiswa';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }
}
