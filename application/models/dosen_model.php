<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class dosen_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'dosen';
        $this->pkey = 'nidn';
        $this->load->library('hash');
    }

    function insert($nidn = '', $nama = '', $jk = '', $jurusan = '', $nohp = '', $email = '')
    {
        $sql = "INSERT INTO dosen(nidn,nama,jk,jurusan,nohp,email) VALUES('$nidn','$nama','$jk','$jurusan','$nohp','$email')";


        return $this->db->query($sql);
    }

    function getDosenData()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nidn', $this->session->userdata('userid'));
        return $this->db->get()->row();
    }

    function getMhsBimbingan($id)
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');
        $this->db->where('nidn', $id);

        return $this->db->get()->num_rows();
    }

    function getDosenDataAllU()
    {
        return $this->db->query("select * from mahasiswa where npm in(select userid from user where role='0' and status='0')")->result();

        return $this->db->query("select * from dosen where nidn in(select userid from user where role='1' and status='0')")->result();
    }
}
