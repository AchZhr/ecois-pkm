<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class proposal_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_proposal';
        $this->pkey = 'id_produk';
    }

    function getTotalProposalMhs($npm)
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');
        $this->db->where('npm');

        return $this->db->get()->num_rows();
    }

    function insert($judul = '', $abstrak = '', $nidn = '', $file = '', $npm = '', $tahun = '', $dana = '', $kategori = '')
    {
        $param = $this->session->userdata('userid');

        $id = 'O' . $param . date('Y')  . str_pad($this->getTotalProposalMhs($npm) + 1, 4, "0", STR_PAD_LEFT);
        $sql = "INSERT INTO proposal(id_proposal,judul,abstrak,nidn,filename,npm,tahun,dana_ajuan,kategori) VALUES('$id','$judul','$abstrak','$nidn','$file','$npm','$tahun', '$dana','$kategori')";


        if ($this->db->query($sql)) {
            return $id;
        } else {
            return '';
        }
    }

    function insertJudul($judul = '')
    {
        $param = $this->session->userdata('userid');

        $sql = "INSERT INTO judul(judul_proposal,npm) VALUES('$judul','$param')";


        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }


    function update($id = '', $judul = '', $abstrak = '', $nidn = '', $file = '', $npm = '', $tahun = '', $dana = '', $kategori = '')
    {

        $sql = "UPDATE proposal SET judul='$judul',abstrak='$abstrak',nidn='$nidn',filename='$file',npm='$npm',dana_ajuan='$dana',kategori='$kategori' WHERE id_proposal='$id'";


        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    function acc($id = '')
    {

        $sql = "UPDATE proposal SET status='Disetujui' WHERE id_proposal='$id'";


        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id = '')
    {

        $sql = "DELETE FROM proposal where id_proposal='$id'";
        $this->db->query("DELETE FROM kelompok where id_proposal='$id'");

        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getProposalMhs()
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');
        $this->db->where('npm', $this->session->userdata('userid'));

        return $this->db->get()->result();
    }

    function getProposalDosen()
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');
        $this->db->where('nidn', $this->session->userdata('userid'));

        return $this->db->get()->result();
    }

    function getProposalAll()
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');

        return $this->db->get()->result();
    }

    function getProposal($id)
    {
        $this->db->select('*');
        $this->db->from('vw_proposal');
        $this->db->where('id_proposal', $id);

        return $this->db->get()->row();
    }

    function getAnggota($id)
    {
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->where('id_proposal', $id);

        return $this->db->get()->row();
    }


    function getJudul()
    {
        $this->db->select('*');
        $this->db->from('judul');
        return $this->db->get()->result();
    }

    function getJudulMhs()
    {
        $this->db->select('*');
        $this->db->from('judul');
        $this->db->where('npm', $this->session->userdata('userid'));

        return $this->db->get()->result();
    }
}
