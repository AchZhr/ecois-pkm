<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'mahasiswa';
        $this->pkey = 'npm';
        $this->load->library('hash');
    }

    function insert($npm = '', $nama = '', $jk = '', $jurusan = '', $nohp = '', $email = '')
    {
        $sql = "INSERT INTO mahasiswa(npm,nama,jk,jurusan,nohp,email) VALUES('$npm','$nama','$jk','$jurusan','$nohp','$email')";


        return $this->db->query($sql);
    }


    function buatKelompok($npmk = '', $m1 = '', $m2 = '', $m3 = '', $m4 = '', $id_prop = '')
    {
        $sql = "INSERT INTO kelompok(npm,anggota1,anggota2,anggota3,anggota4,id_proposal) VALUES('$npmk','$m1','$m2','$m3','$m4','$id_prop')";


        return $this->db->query($sql);
    }

    function editKelompok($npmk = '', $m1 = '', $m2 = '', $m3 = '', $m4 = '', $id_prop = '')
    {
        $sql = "UPDATE kelompok SET npm='$npmk',anggota1='$m1',anggota2='$m2',anggota3='$m3',anggota4='$m4' WHERE id_proposal='$id_prop'";


        return $this->db->query($sql);
    }



    function getMhsData()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('npm', $this->session->userdata('userid'));
        return $this->db->get()->row();
    }

    function getMhsDataAll()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        return $this->db->get()->result();
    }

    function getMhsDataAllU()
    {
        return $this->db->query("select * from mahasiswa where npm in(select userid from user where role='0' and status='0')")->result();
    }
}
