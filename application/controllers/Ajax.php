<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_departemen($id)
    {
        $departemen = $this->mymodel->selectWithQuery("SELECT * FROM master_departemen WHERE id_kompartemen = '$id'");
        // print_r($departemen);
        // die();
        echo json_encode($departemen);
    }
    public function get_bagian($id)
    {
        $bagian = $this->mymodel->selectWithQuery("SELECT * FROM master_bagian WHERE id_departemen = '$id'");
        // print_r($bagian);
        // die();
        echo json_encode($bagian);
    }

    public function get_jadwal($id)
    {
        $jadwal_rapat = $this->mymodel->selectWithQuery("SELECT master_jadwal_rapat.*, pegawai.nama as nama_pegawai
        FROM master_jadwal_rapat 
        LEFT JOIN pegawai on master_jadwal_rapat.id_ketua = pegawai.id
        WHERE master_jadwal_rapat.id = '$id'");
        // print_r($jadwal_rapat);
        // die();
        echo json_encode($jadwal_rapat);
    }
}
