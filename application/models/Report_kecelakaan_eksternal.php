<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_kecelakaan_eksternal extends CI_Model
{

    public function __construct()
    {

        $this->load->database();

        $qry = '';
        $departemen = $_SESSION['id_departemen'];
        $bagian = $_SESSION['id_bagian'];
        $kompartemen = $_SESSION['id_kompartemen'];
        if ($_SESSION['role_id'] == 1) {
            $qry = " AND penderita.id_departemen = '$departemen' AND penderita.id_bagian = '$bagian'";
        } else if ($_SESSION['role_id'] == 2) {
            $qry = " AND penderita.id_kompartemen = '$kompartemen'";
        } else if ($_SESSION['role_id'] == 3) {
            if ($bagian == 16) {
                $qry = " ";
            } else {
                $qry = " AND kabag.id_departemen = '$departemen' AND kabag.id_bagian = '$bagian'";
            }
        } else if ($_SESSION['role_id'] == 4) {
            $qry = " AND kabag.id_departemen = '$departemen'";
        } else if ($_SESSION['role_id'] == 5) {
            $qry = " ";
        } else if ($_SESSION['role_id'] == 6) {
            $qry = " ";
        } else {
            $qry = " ";
        }

        $this->column_order = array(null, 'ip_nama', 'ip_nomor_induk', 'ip_dep_birobid', 'ip_bagian_seksi', 'nama_se', 'nama_kabag', 'nama_k3', 'nama_penderita', 'status_kecelakaan', 'nama_status'); //field yang ada di table user
        $this->column_search = array(null, 'ip_nama', 'ip_nomor_induk', 'ip_dep_birobid', 'ip_bagian_seksi', 'nama_se', 'nama_kabag', 'nama_k3', 'nama_penderita', 'status_kecelakaan', 'nama_status'); //field yang ada di table user
        $this->order = array('ip_nama' => 'asc'); // default order 
        $this->table = "(SELECT kecelakaan_main.id, kecelakaan_main.ip_nama, kecelakaan_main.ip_nomor_induk, kecelakaan_main.ip_dep_birobid, kecelakaan_main.ip_bagian_seksi, se.nama as nama_se, kabag.nama as nama_kabag, k3.nama as nama_k3, penderita.nama as nama_penderita, kecelakaan_main.status_kecelakaan, master_status_kecelakaan.nama as nama_status 
  FROM kecelakaan_main 
  LEFT JOIN kecelakaan_detail_ekternal on kecelakaan_main.id = kecelakaan_detail_ekternal.id_kecelakaan 
  LEFT JOIN pegawai se on kecelakaan_main.id_se = se.id 
  LEFT JOIN pegawai kabag on kecelakaan_main.id_kabag = kabag.id 
  LEFT JOIN pegawai k3 on kecelakaan_main.id_k3 = k3.id 
  LEFT JOIN pegawai penderita on kecelakaan_main.id_penderita = penderita.id
  LEFT JOIN master_status_kecelakaan on kecelakaan_main.status_kecelakaan = master_status_kecelakaan.id 
  WHERE kecelakaan_detail_ekternal.status = 'ENABLE' " . $qry . ") as tabledata";
    }


    private function _get_datatables_query()
    {

        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)

                    $this->db->group_end();
            }
            $i++;
        }



        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }



    function get_datatables()
    {

        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }



    function count_filtered()
    {

        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }



    public function count_all()
    {

        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    function get_data()
    {

        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
}
