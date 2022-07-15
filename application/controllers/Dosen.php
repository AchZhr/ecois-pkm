<?php defined('BASEPATH') || exit('No direct script access allowed');

class Dosen extends Data_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('dosen_model');

        
    }

    function index()
    {

        $data = $this->dosen_model->getDosenDataAll();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'dosen';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }
}
