

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kecelakaan_internal extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Report_kecelakaan_internal', 'rKecelakaan_internal');
  }

  public function index()
  {
    $data['page_name'] = "Report Kecelakaan_internal";
    $this->template->load('template/template', 'report/kecelakaan_internal/all', $data);
  }


  function ajaxAll()
  {
    $list = $this->rKecelakaan_internal->get_datatables();
    $data = array();
    $i = 1;
    foreach ($list as $u) {
      $row = array();

      $row[] = $i;
      $row[] = $u->ip_nama;
      $row[] = $u->ip_nomor_induk;
      $row[] = $u->ip_dep_birobid;
      $row[] = $u->ip_bagian_seksi;
      if ($u->nama_se == '') {
        $u->nama_se = "<h6><span class='badge badge-pill badge-secondary'>Belum Tersedia</span></h6>";
      }
      $row[] = $u->nama_se;
      if ($u->nama_kabag == '') {
        $u->nama_kabag = "<h6><span class='badge badge-pill badge-secondary'>Belum Tersedia</span></h6>";
      }
      $row[] = $u->nama_kabag;
      if ($u->nama_k3 == '') {
        $u->nama_k3 = "<h6><span class='badge badge-pill badge-secondary'>Belum Tersedia</span></h6>";
      }
      $row[] = $u->nama_k3;
      if ($u->status_kecelakaan == 0) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 1) {
        $badge_color = 'bg-red';
      } else if ($u->status_kecelakaan == 2) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 3) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 4) {
        $badge_color = 'bg-red';
      } else if ($u->status_kecelakaan == 5) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 6) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 7) {
        $badge_color = 'bg-red';
      } else if ($u->status_kecelakaan == 8) {
        $badge_color = 'bg-yellow';
      } else if ($u->status_kecelakaan == 9) {
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
      "recordsTotal" => $this->rKecelakaan_internal->count_all(),
      "recordsFiltered" => $this->rKecelakaan_internal->count_filtered(),
      "data" => $data
    );

    echo json_encode($output);
  }


  function getExcel()
  {
    $list = $this->rKecelakaan_internal->get_data();
    $data = array();
    $i = 1;
    $saran = '';

    foreach ($list as $u) {
      foreach (json_decode($u->tindak_lanjut) as $s) {
        $saran .= $s->saran;
      }
      $data[] = array($i, $u->ip_nama . '-' . $u->ip_nomor_induk, $u->kk_tanggal_jam, $u->kk_lokasi, $u->kk_penjelasan_kecelakaan, $u->kk_bagian_tubuh_cedera, $u->lpp_di_rs_petro, $u->lpp_di_rs_luar, $u->lpp_istirahat_dokter, $saran);
      $i++;
    }

    $judul = "Report Kecelakaan_internal";

    $head = array('No', 'Identitas Penderita', 'Tanggal', 'Lokasi', 'Deskripsi Kecelakaan', 'Bagian Cedera', 'Lama Pengobatan di RS Petrokimia Gresik', 'Lama Pengobatan di RS Luar', 'Lama Pengobatan Istirahat Dokter', 'Saran');

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