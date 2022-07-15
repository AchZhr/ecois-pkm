

<?php defined('BASEPATH') || exit('No direct script access allowed');

class Pengajuan extends Data_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('proposal_model');
        $this->load->model('mahasiswa_model');
    }

    function index()
    {
        $data = $this->proposal_model->getProposalMhs();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'pengajuan';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function pengajuanProposal()
    {
        $data = $this->proposal_model->getProposalDosen();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'pengajuanProposal';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function proposal()
    {
        $data = $this->proposal_model->getProposalAll();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'pengajuanProposal';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function judul()
    {
        $data = $this->proposal_model->getJudul();

        // var_dump($this->session->userdata);
        $this->data['view'] = 'judul';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function detail()
    {
        $id = $this->uri->segment(3);
        $data['p'] = $this->proposal_model->getProposal($id);
        $data['a'] = $this->proposal_model->getAnggota($id);

        // var_dump($this->session->userdata);
        $this->data['view'] = 'detailProposal';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function edit()
    {
        $id = $this->uri->segment(3);
        $data['p'] = $this->proposal_model->getProposal($id);
        $data['a'] = $this->proposal_model->getAnggota($id);

        // var_dump($this->session->userdata);
        $this->data['view'] = 'editProposal';
        $this->data['param'] = $data;
        $this->load->view('template/admin/default', $this->data);
    }

    function frmUpload()
    {
        $this->data['view'] = 'formProposal';
        $this->data['param'] = '';
        $this->load->view('template/admin/default', $this->data);
    }

    function upload()
    {
        if ($this->session->userdata('logged_in')) {
            if (isset($_POST["submit"])) {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'pdf';
                $config['overwrite'] = TRUE;
                $config['remove_space'] = TRUE;
                $this->upload->initialize($config);



                if (!$this->upload->do_upload('propo')) {
                    // echo $this->upload->display_errors();
                    $this->session->set_flashdata('message', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                    return false;
                }


                $periode = $this->input->post('periode');
                $judul = $this->input->post('judul');
                $abs = $this->input->post('abs');
                $Kategori = $this->input->post('kategori');
                $dana = $this->input->post('dana');
                $nidn = $this->input->post('nidn');
                $npmk = $this->input->post('npmk');
                $npm1 = $this->input->post('npm1');
                $npm2 = $this->input->post('npm2');
                $npm3 = $this->input->post('npm3');
                $npm4 = $this->input->post('npm4');
                $file = $this->upload->data('file_name');

                $m1 = '-';
                $m2 = '-';
                $m3 = '-';
                $m4 = '-';

                if ($npm1 != '') {
                    $m1 = $npm1;
                }

                if ($npm2 != '') {
                    $m2 = $npm2;
                }

                if ($npm3 != '') {
                    $m3 = $npm3;
                }

                if ($npm4 != '') {
                    $m4 = $npm4;
                }

                $proposal = $this->proposal_model->insert($judul, $abs, $nidn, $file, $npmk, $periode, $dana, $Kategori);

                if ($proposal != '') {
                    $this->mahasiswa_model->buatKelompok($npmk, $m1, $m2, $m3, $m4, $proposal);

                    redirect('Pengajuan');
                } else {
                    redirect('Home');
                }
            }
        }
    }


    function save()
    {
        if ($this->session->userdata('logged_in')) {
            if (isset($_POST["submit"])) {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'pdf';
                $config['overwrite'] = TRUE;
                $config['remove_space'] = TRUE;
                $this->upload->initialize($config);

                $propo = $this->input->post('filnya');

                if ($this->upload->do_upload('propo')) {
                    // echo $this->upload->display_errors();
                    $propo
                        = $this->upload->data('file_name');
                }



                $periode = $this->input->post('periode');
                $judul = $this->input->post('judul');
                $abs = $this->input->post('abs');
                $Kategori = $this->input->post('kategori');
                $dana = $this->input->post('dana');
                $nidn = $this->input->post('nidn');
                $npmk = $this->input->post('npmk');
                $npm1 = $this->input->post('npm1');
                $npm2 = $this->input->post('npm2');
                $npm3 = $this->input->post('npm3');
                $npm4 = $this->input->post('npm4');
                $file = $propo;
                $id_proposal = $this->input->post('idnya');

                $m1 = '-';
                $m2 = '-';
                $m3 = '-';
                $m4 = '-';

                if ($npm1 != '') {
                    $m1 = $npm1;
                }

                if ($npm2 != '') {
                    $m2 = $npm2;
                }

                if ($npm3 != '') {
                    $m3 = $npm3;
                }

                if ($npm4 != '') {
                    $m4 = $npm4;
                }

                $proposal = $this->proposal_model->update($id_proposal, $judul, $abs, $nidn, $file, $npmk, $periode, $dana, $Kategori);

                if ($proposal) {
                    $this->mahasiswa_model->editKelompok($npmk, $m1, $m2, $m3, $m4, $id_proposal);

                    redirect('Pengajuan');
                } else {
                    redirect('Pengajuan');
                }
            } else {
                redirect('Pengajuan');
            }
        } else {
            redirect('Pengajuan');
        }
    }


    function hapus()
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            if ($this->proposal_model->delete($id)) {

                redirect('Pengajuan');
            } else {
                redirect('Pengajuan');
            }
        }
    }

    function verifikasi()
    {
        if ($this->session->userdata('logged_in')) {
            $id = $this->uri->segment(3);
            if ($this->proposal_model->acc($id)) {

                redirect('Pengajuan/pengajuanProposal');
            } else {
                redirect('Pengajuan/pengajuanProposal');
            }
        }
    }

    function tambahJudul()
    {
        if ($this->session->userdata('logged_in')) {
            if ($this->proposal_model->insertJudul($this->input->post('judul'))) {

                redirect('Pengajuan/judul');
            } else {
                redirect('Pengajuan/judul');
            }
        }
    }
}
