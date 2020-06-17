<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_laporan_risalah_sidang extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
        $qry = " ";
        $kompartemen = $_SESSION['id_kompartemen'];
        $bagian = $_SESSION['id_bagian'];
        if (!$_SESSION['role_id'] == 1) {
            $qry = " AND ketua.id_kompartemen = '$kompartemen'";
        } else if ($_SESSION['role_id'] == 2) {
            $qry = " AND ketua.id_kompartemen = '$kompartemen'";
        } else if ($_SESSION['role_id'] == 3) {
            if ($bagian == 16) {
                $qry = " ";
            } else {
                $qry = " AND ketua.id_kompartemen = '$kompartemen'";
            }
        } else if ($_SESSION['role_id'] == 5) {
            $qry = " ";
        } else if ($_SESSION['role_id'] == 6) {
            $qry = " ";
        }

        $this->column_order = array(null, 'id_jadwal', 'pimpinan_sidang', 'tanggal', 'jam_mulai', 'jam_selesai', 'lokasi', 'id_notulis', 'nama_status'); //field yang ada di table user
        $this->column_search = array(null, 'id_jadwal', 'pimpinan_sidang', 'tanggal', 'jam_mulai', 'jam_selesai', 'lokasi', 'id_notulis', 'nama_status'); //field yang ada di table user
        $this->order = array('id' => 'desc'); // default order 
        $this->table = "(SELECT hasil_rapat.id,master_jadwal_rapat.nama as id_jadwal,hasil_rapat.pimpinan_sidang,hasil_rapat.tanggal,hasil_rapat.jam_mulai,hasil_rapat.jam_selesai,hasil_rapat.lokasi,pendahuluan,review,tindak_lanjut,materi_tambahan,materi_kesehatan,pegawai.nama as id_notulis,hasil_rapat.status_sidang, master_status_sidang.nama as nama_status
        FROM hasil_rapat
        LEFT JOIN master_jadwal_rapat on hasil_rapat.id_jadwal = master_jadwal_rapat.id
        LEFT JOIN pegawai on hasil_rapat.id_notulis = pegawai.id
        LEFT JOIN master_status_sidang on hasil_rapat.status_sidang = master_status_sidang.id
        LEFT JOIN pegawai ketua on master_jadwal_rapat.id_ketua = ketua.id
        WHERE hasil_rapat.status = 'ENABLE' " . $kompartemen . " ) as tabledata";
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
