

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_risalah_sidang extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Report_laporan_risalah_sidang', 'rLaporan_risalah_sidang');
  }

  public function index()
  {
    $data['page_name'] = "Report Laporan_risalah_sidang";
    $this->template->load('template/template', 'report/laporan_risalah_sidang/all', $data);
  }


  function ajaxAll()
  {
    $list = $this->rLaporan_risalah_sidang->get_datatables();
    $data = array();
    $i = 1;
    foreach ($list as $u) {
      $row = array();

      $row[] = $i;
      $row[] = $u->id_jadwal;
      $row[] = $u->pimpinan_sidang;
      $row[] = $u->tanggal;
      $row[] = $u->jam_mulai;
      $row[] = $u->jam_selesai;
      $row[] = $u->lokasi;
      $row[] = $u->id_notulis;
      if ($u->status_sidang == 0) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_sidang == 1) {
        $badge_color = 'bg-red';
      } else {
        $badge_color = 'bg-green';
      }
      $row[] = "<h6><span class='badge badge-pill $badge_color'>$u->nama_status</span></h6>";
      $row[] = "<button type='button' class='btn btn-sm btn-info pull-right' onclick='detail($u->id)'>Detail</button>";
      $data[] = $row;
      $i++;
    }



    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->rLaporan_risalah_sidang->count_all(),
      "recordsFiltered" => $this->rLaporan_risalah_sidang->count_filtered(),
      "data" => $data
    );

    echo json_encode($output);
  }


  function getExcel()
  {
    $list = $this->rLaporan_risalah_sidang->get_data();
    $data = array();
    $i = 1;
    foreach ($list as $u) {



      $data[] = array($i, $u->id_jadwal, $u->pimpinan_sidang, $u->tanggal, $u->jam_mulai, $u->jam_selesai, $u->lokasi, $u->id_notulis, $u->nama_status);

      $i++;
    }

    $judul = "Report Laporan_risalah_sidang";

    $head = array('No', 'jadwal', 'pimpinan', 'tanggal', 'jam mulai', 'jam selesai', 'lokasi', 'notulis', 'status');

    $json = [
      'judul' => $judul,
      'head' => $head,
      'data' => $data
    ];

    $this->session->set_flashdata('report', $json);
    redirect('fitur/exportreport');
  }
}

/* End of file  */
/* Location: ./application/controllers/ */
?> 