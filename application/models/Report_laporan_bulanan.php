<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report_laporan_bulanan extends CI_Model
{

    public function __construct()
    {

        $this->load->database();

        $departemen = $_SESSION['id_departemen'];
        $bagian = $_SESSION['id_bagian'];

        $this->column_order = array(null, 'lokasi', 'departemen', 'bagian', 'tanggal', 'id_kabag', 'created_by'); //field yang ada di table user
        $this->column_search = array(null, 'lokasi', 'departemen', 'bagian', 'tanggal', 'id_kabag', 'created_by'); //field yang ada di table user
        $this->order = array('lokasi' => 'asc'); // default order 
        $this->table = "(SELECT form_laporan_bulanan.id,lokasi,master_departemen.nama as departemen,
        master_bagian.nama as bagian,tanggal,value,kabag.nama as id_kabag,
        form_laporan_bulanan.status,sr.nama as created_by 
        FROM form_laporan_bulanan
        LEFT JOIN master_departemen on form_laporan_bulanan.departemen = master_departemen.id
        LEFT JOIN master_bagian on form_laporan_bulanan.bagian = master_bagian.id
        LEFT JOIN pegawai sr on form_laporan_bulanan.created_by = sr.id
        LEFT JOIN pegawai kabag on form_laporan_bulanan.id_kabag = kabag.id
        WHERE form_laporan_bulanan.status = 'ENABLE' AND form_laporan_bulanan.departemen = '$departemen' AND form_laporan_bulanan.bagian = '$bagian') as tabledata";
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
