

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kecelakaan_internal extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Report_kecelakaan_internal','rKecelakaan_internal');
  }

  public function index()
  {
      $data['page_name'] = "Report Kecelakaan_internal";
      $this->template->load('template/template','report/kecelakaan_internal/all',$data);
    
  }
 

  function ajaxAll()
  {
    $list = $this->rKecelakaan_internal->get_datatables();
    $data = array();
    $i=1;
    foreach ($list as $u) {
      $row = array();

      $row[] = $i;
  $row[] = $u->ip_nama;
$row[] = $u->ip_nomor_induk;
$row[] = $u->ip_dep_birobid;
$row[] = $u->ip_bagian_seksi;
$row[] = $u->nama_se;
$row[] = $u->nama_kabag;
$row[] = $u->nama_k3;
$row[] = $u->nama_penderita;
$row[] = $u->status_kecelakaan;
$row[] = $u->nama_status;
$row[] = "<button type='button' class='btn btn-info btn-flat' onclick='detail()'><i class='fa fa-edit'></i>Detail</button>";
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


  function getExcel(){
    $list = $this->rKecelakaan_internal->get_data();
    $data = array();
    $i=1;
    foreach ($list as $u) {


  
    $data[] = array($i,$u->ip_nama,$u->ip_nomor_induk,$u->ip_dep_birobid,$u->ip_bagian_seksi,$u->nama_se,$u->nama_kabag,$u->nama_k3,$u->nama_penderita,$u->status_kecelakaan,$u->nama_status);
  
    $i++;
    }

    $judul = "Report Kecelakaan_internal";

    $head = array('No','ip_nama','ip_nomor_induk','ip_dep_birobid','ip_bagian_seksi','nama_se','nama_kabag','nama_k3','nama_penderita','status_kecelakaan','nama_status');

    $json = [
      'judul'=>$judul,
      'head'=>$head,
      'data'=>$data
    ];

    $this->session->set_flashdata('report',$json);
    redirect('fitur/exportreport');


  }
  

}

/* End of file  */
/* Location: ./application/controllers/ */
 ?> 