

<?php defined('BASEPATH') || exit('No direct script access allowed');

class User extends Data_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('mahasiswa_model');
        $this->load->model('admin_model');

        $this->load->model('dosen_model');
    }

    function index()
    {

        if ($this->session->userdata('role') == 0) {
            $data = $this->mahasiswa_model->getMhsData();
        } else if ($this->session->userdata('role') == 1) {
            $data = $this->dosen_model->getMhsBimbingan($this->session->userdata('userid'));
        } else if ($this->session->userdata('role') == 9 || $this->session->userdata('role') == 8) {
            $data['m'] = $this->admin_model->getMhsTotal();
            $data['d'] = $this->admin_model->getDosenTotal();
            $data['k'] = $this->admin_model->getKelompokTotal();
            $data['p'] = $this->admin_model->getPengajuanTotal();
        }

        // echo $this->session->userdata('userid');
        // var_dump($data);

        $this->data['view'] = 'dashboard';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }
}
