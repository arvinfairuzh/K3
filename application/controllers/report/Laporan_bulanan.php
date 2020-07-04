

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_bulanan extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Report_laporan_bulanan', 'rLaporan_bulanan');
  }

  public function index()
  {
    $data['page_name'] = "Report Laporan_bulanan";
    $this->template->load('template/template', 'master/form_laporan_bulanan/all-form_laporan_bulanan', $data);
  }


  function ajaxAll()
  {
    $list = $this->rLaporan_bulanan->get_datatables();
    $data = array();
    $i = 1;
    foreach ($list as $u) {
      $row = array();

      $row[] = $i;
      $row[] = $u->lokasi;
      $row[] = $u->departemen;
      $row[] = $u->bagian;
      $row[] = $u->tanggal;
      $row[] = $u->id_kabag;
      $row[] = $u->created_by;
      if ($u->status_bulanan == 0) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_bulanan == 1) {
        $badge_color = 'bg-blue';
      } else if ($u->status_bulanan == 2) {
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
      "recordsTotal" => $this->rLaporan_bulanan->count_all(),
      "recordsFiltered" => $this->rLaporan_bulanan->count_filtered(),
      "data" => $data
    );

    echo json_encode($output);
  }


  function getExcel()
  {
    $list = $this->rLaporan_bulanan->get_data();
    $data = array();
    $i = 1;
    foreach ($list as $u) {


      $data[] = array($i, $u->nik_kabag . '-' . $u->id_kabag, $u->nik_sr . '-' . $u->created_by, $u->lokasi, $u->departemen, $u->bagian, $u->tanggal, $u->nama_status);

      $i++;
    }

    $judul = "Report Laporan_bulanan";

    $head = array('No', 'kabag', 'sr', 'lokasi', 'departemen', 'bagian', 'tanggal', 'status');

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