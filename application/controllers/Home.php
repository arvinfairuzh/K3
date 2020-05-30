<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $month = date('Y-m');
        $year = date('Y');
        $data['chart'] = $this->mymodel->selectWithQuery("SELECT 
        DATE_FORMAT(tanggal, '%Y-%m-%d') as date, 
        COUNT(id) as value 
        FROM form_laporan_bulanan
        WHERE DATE_FORMAT(tanggal, '%Y-%m') = '$month'
        GROUP BY DATE_FORMAT(tanggal, '%Y-%m-%d')");

        $data['chart_2'] = $this->mymodel->selectWithQuery("SELECT 
        DATE_FORMAT(tanggal, '%M %Y') as date, 
        COUNT(id) as value 
        FROM hasil_rapat
        WHERE DATE_FORMAT(tanggal, '%Y') = '$year'
        GROUP BY DATE_FORMAT(tanggal, '%M %Y')");

        $data['data1'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM pegawai");

        $data['data2'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM form_laporan_bulanan");

        $data['data3'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM hasil_rapat");

        $data['page_name'] = "home";
        $this->template->load('template/template', 'template/index', $data);
    }
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
