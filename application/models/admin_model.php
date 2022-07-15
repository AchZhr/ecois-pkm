<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'proposal';
        $this->pkey = 'id_proposal';
    }



    function getMhsTotal()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        return $this->db->get()->num_rows();
    }

    function getDosenTotal()
    {
        $this->db->select('*');
        $this->db->from('dosen');

        return $this->db->get()->num_rows();
    }

    function getKelompokTotal()
    {
        $this->db->select('*');
        $this->db->from('kelompok');

        return $this->db->get()->num_rows();
    }

    function getPengajuanTotal()
    {
        $this->db->select('*');
        $this->db->from('proposal');

        return $this->db->get()->num_rows();
    }
}
