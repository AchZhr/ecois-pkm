<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'user';
        $this->pkey = 'nidn';
        $this->load->library('hash');
    }

    function insert($userid = '', $nama = '',  $email = '',  $password = '', $role = '')
    {
        $pass = $this->hash->ecryptPassword($password);


        $sql = "INSERT INTO user(userid,nama,email,password,role) VALUES('$userid','$nama','$email','$pass',$role)";
        return $this->db->query($sql);
    }

    function getDosenData()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nidn', $this->session->userdata('userid'));
        return $this->db->get()->row();
    }

    function acc($id = '')
    {

        $sql = "UPDATE user SET status='1' WHERE userid='$id'";


        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
