<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $month_1 = date('Y-m') . '-01';
        $month_2 = date('Y-m') . '-31';
        $year = date('Y');
        $data['chart'] = $this->mymodel->selectWithQuery("SELECT a.selected_date as date, b.value FROM
        (
            SELECT * FROM 
            (select adddate('2020-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date FROM
            (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0,
            (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1,
            (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
            (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3,
            (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t4) v
            where selected_date between '$month_1' and '$month_2'
        ) a
        LEFT JOIN
        (
            SELECT DATE_FORMAT(tanggal, '%Y-%m-%d') as date, 
            COUNT(id) as value 
            FROM form_laporan_bulanan
            GROUP BY DATE_FORMAT(tanggal, '%Y-%m-%d')
        ) b
        ON a.selected_date = b.date
        ORDER BY a.selected_date asc");
        // print_r($data['chart']);
        // die();

        $data['chart_2'] = $this->mymodel->selectWithQuery("SELECT 
        DATE_FORMAT(tanggal, '%M %Y') as date, 
        COUNT(id) as value 
        FROM hasil_rapat
        WHERE DATE_FORMAT(tanggal, '%Y') = '$year'
        GROUP BY DATE_FORMAT(tanggal, '%M %Y')");


        $data['chart_3'] = $this->mymodel->selectWithQuery("SELECT a.date as category, b.value as first, c.value as second FROM
        (
            SELECT DATE_FORMAT(m1, '%M %Y') as date, m1
            FROM
            (
            SELECT 
            ('2020-01-01' - INTERVAL DAYOFMONTH('2020-01-01')-1 DAY) 
            +INTERVAL m MONTH as m1
            FROM
            (
            SELECT @rownum:=@rownum+1 as m FROM
            (SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4) t1,
            (SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4) t2,
            (SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4) t3,
            (SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4) t4,
            (SELECT @rownum:=-1) t0
            ) d1
            ) d2 
            where m1<='2020-12-31'
            order by m1
        ) a
        LEFT JOIN
        (
            SELECT 
            DATE_FORMAT(kk_tanggal_jam, '%M %Y') as date, 
            COUNT(id) as value 
            FROM kecelakaan_detail_internal
            GROUP BY DATE_FORMAT(kk_tanggal_jam, '%M %Y')
        ) b
        ON a.date = b.date
        LEFT JOIN
        (
            SELECT 
            DATE_FORMAT(kk_tanggal_jam, '%M %Y') as date, 
            COUNT(id) as value 
            FROM kecelakaan_detail_ekternal
            GROUP BY DATE_FORMAT(kk_tanggal_jam, '%M %Y')
        ) c
        ON a.date = c.date
        ORDER BY a.m1 asc");
        // print_r($data['chart_3']);
        // die();

        $data['data1'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM pegawai");

        $data['data2'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM form_laporan_bulanan");

        $data['data3'] = $this->mymodel->selectWithQuery("SELECT COUNT(id) as value FROM hasil_rapat");

        $data['page_name'] = "home";
        $this->template->load('template/template', 'template/index', $data);
    }
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
