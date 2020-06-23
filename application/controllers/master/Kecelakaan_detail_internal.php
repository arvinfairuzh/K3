<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Kecelakaan_detail_internal extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data['page_name'] = "kecelakaan_detail_internal";
		$this->template->load('template/template', 'master/kecelakaan_detail_internal/all-kecelakaan_detail_internal', $data);
	}

	public function create()
	{
		$data['sr'] = $this->mymodel->selectDataOne("pegawai", array('id' => $_SESSION['id']));
		$data['departemen'] = $this->mymodel->selectDataOne("master_departemen", array('id' => $_SESSION['id_departemen']));
		$data['bagian'] = $this->mymodel->selectDataOne("master_bagian", array('id' => $_SESSION['id_bagian']));
		$data['page_name'] = "kecelakaan_detail_internal";

		$this->template->load('template/template', 'master/kecelakaan_detail_internal/add-kecelakaan_detail_internal', $data);
	}

	public function validate()
	{
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		$this->form_validation->set_rules('dt[kk_tanggal_jam]', '<strong>Kk Tanggal Jam</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_lokasi]', '<strong>Kk Lokasi</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_penjelasan_kecelakaan]', '<strong>Kk Penjelasan Kecelakaan</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_bagian_tubuh_cedera]', '<strong>Kk Bagian Tubuh Cedera</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_apkh_1]', '<strong>Tw Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_apkh_2]', '<strong>Tw Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_apkh_3]', '<strong>Tw Apkh 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_tidak_q1]', '<strong>Tw Tidak Q1</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_tidak_q2]', '<strong>Tw Tidak Q2</strong>', 'required');
		// $this->form_validation->set_rules('dt[tw_tidak_q3]', '<strong>Tw Tidak Q3</strong>', 'required');
		// $this->form_validation->set_rules('dt[sp_apkh_1]', '<strong>Sp Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[sp_apkh_2]', '<strong>Sp Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[sp_tidak_2]', '<strong>Sp Tidak 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk__apkh_1]', '<strong>Pk  Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk_tidak_1]', '<strong>Pk Tidak 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk_apkh_2]', '<strong>Pk Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk_tidak_2]', '<strong>Pk Tidak 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk_apkh_3]', '<strong>Pk Apkh 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[pk_tidak_3]', '<strong>Pk Tidak 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[papd_apkh_1]', '<strong>Papd Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[papd_apd]', '<strong>Papd Apd</strong>', 'required');
		// $this->form_validation->set_rules('dt[papd_apkh_2]', '<strong>Papd Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[papd_tidak_2]', '<strong>Papd Tidak 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_fungsi_alat]', '<strong>Md Fungsi Alat</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_apkh_1]', '<strong>Md Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_ya_1]', '<strong>Md Ya 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_apkh_2]', '<strong>Md Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_apkh_3]', '<strong>Md Apkh 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_tidak_3]', '<strong>Md Tidak 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_apkh_4]', '<strong>Md Apkh 4</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_tidak_4]', '<strong>Md Tidak 4</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_apkh_5]', '<strong>Md Apkh 5</strong>', 'required');
		// $this->form_validation->set_rules('dt[md_ya_5]', '<strong>Md Ya 5</strong>', 'required');
		// $this->form_validation->set_rules('dt[snp_apkh_1]', '<strong>Snp Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[snp_adakah_1]', '<strong>Snp Adakah 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[snp_apkh_2]', '<strong>Snp Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[snp_tidak_2]', '<strong>Snp Tidak 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[pttk_apkh_1]', '<strong>Pttk Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[pttk_kesimpulan]', '<strong>Pttk Kesimpulan</strong>', 'required');
	}



	public function store()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$kabag = $this->mymodel->selectDataOne("pegawai", array('id_departemen' => $_SESSION['id_departemen'], 'id_bagian' => $_SESSION['id_bagian'], 'id_role' => 3));

			$dta = $_POST['dta'];
			$dta['id_penderita'] = $_SESSION['id'];
			$dta['jenis_form'] = 1;
			$dta['id_kabag'] = $kabag['id'];
			$dta['updated_at'] = date('Y-m-d H:i:s');
			$this->mymodel->insertData('kecelakaan_main', $dta);
			$last_id = $this->db->insert_id();

			$dt = $_POST['dt'];
			$dt['id_kecelakaan'] = $last_id;
			$dt['created_by'] = $_SESSION['id'];
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";
			$keadaan = $_POST['keadaan'];

			for ($i = 0; $i < count($keadaan); $i++) {
				if ($keadaan[$i] == 'Lainya') {
					$keadaan[$i] = $_POST['pttk_kondisi_lingkungan_lainnya'];
				}
				$keadaan_arr[$i] = array(
					'keadaan' => $keadaan[$i]
				);
			}

			$dt['pttk_kondisi_lingkungan'] = json_encode($keadaan_arr);

			if (!empty($_FILES['kk_gambar_lokasi']['name'])) {
				$dir  = "webfile/kecelakaan/";
				$config['upload_path']          = $dir;
				$config['allowed_types']        = '*';
				$config['file_name']           = md5('smartsoftstudio') . rand(1000, 100000);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('kk_gambar_lokasi')) {
					$error = $this->upload->display_errors();
					$this->alert->alertdanger($error);
				} else {
					$file_kk = $this->upload->data();
					$dt['kk_gambar_lokasi'] = $dir . $file_kk['file_name'];
				}
			}

			if (!empty($_FILES['md_gambar_1']['name'])) {
				$dir  = "webfile/kecelakaan/";
				$config['upload_path']          = $dir;
				$config['allowed_types']        = '*';
				$config['file_name']           = md5('smartsoftstudio') . rand(1000, 100000);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('md_gambar_1')) {
					$error = $this->upload->display_errors();
					$this->alert->alertdanger($error);
				} else {
					$file_md = $this->upload->data();
					$dt['md_gambar_1'] = $dir . $file_md['file_name'];
				}
			}

			$this->mymodel->insertData('kecelakaan_detail_internal', $dt);
			$this->alert->alertsuccess('Success Send Data');
		}
	}

	public function update()
	{
		$id = $this->input->post('id', TRUE);
		$saran = $_POST['saran'];
		$hasil = $_POST['hasil'];
		$hasil_file_old = $_POST['hasil_file_old'];
		$keterangan = $_POST['keterangan'];
		$dta = $_POST['dta'];
		$dta['id_se'] = $_SESSION['id'];
		for ($i = 0; $i < count($saran); $i++) {
			if ($_FILES['hasil_file']['name'][$i]) {
				echo 'oke';
				$path = $_SERVER['DOCUMENT_ROOT'] . "/k3/webfile/saran/";
				$dir  = "webfile/saran/";
				// $path = base_url()."webfile/document/my_document-$last_agenda/";
				// print_r($path);
				// die();

				$file_ext = $_FILES['hasil_file']['name'][$i];
				$ext = pathinfo($file_ext, PATHINFO_EXTENSION);
				$file_name = 'ftl-' . $i . '.' . $ext;
				$file_size = $_FILES['hasil_file']['size'][$i];
				$file_tmp = $_FILES['hasil_file']['tmp_name'][$i];
				$file_type = $_FILES['hasil_file']['type'][$i];

				move_uploaded_file($file_tmp, $path . $file_name);
				$upload = $dir . $file_name;
				$gambar = $upload;
			} else {
				$gambar = $hasil_file_old[$i];
			}
			$json[$i] = array(
				'saran' => $saran[$i],
				'hasil' => $hasil[$i],
				'keterangan' => $keterangan[$i],
				'gambar' => $gambar,
			);
		}
		$dta['tindak_lanjut'] = json_encode($json);
		$this->db->update('kecelakaan_main', $dta, array('id' => $id));

		$dt = $_POST['dt'];
		$dt['updated_at'] = date('Y-m-d H:i:s');
		$keadaan = $_POST['keadaan'];

		for ($i = 0; $i < count($keadaan); $i++) {
			if ($keadaan[$i] == 'Lainya') {
				$keadaan[$i] = $_POST['pttk_kondisi_lingkungan_lainnya'];
			}
			$keadaan_arr[$i] = array(
				'keadaan' => $keadaan[$i]
			);
		}

		$dt['pttk_kondisi_lingkungan'] = json_encode($keadaan_arr);

		if (!empty($_FILES['kk_gambar_lokasi']['name'])) {
			$dir  = "webfile/kecelakaan/";
			$config['upload_path']          = $dir;
			$config['allowed_types']        = '*';
			$config['file_name']           = md5('smartsoftstudio') . rand(1000, 100000);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('kk_gambar_lokasi')) {
				$error = $this->upload->display_errors();
				$this->alert->alertdanger($error);
			} else {
				$file_kk = $this->upload->data();
				$dt['kk_gambar_lokasi'] = $dir . $file_kk['file_name'];
			}
		}

		if (!empty($_FILES['md_gambar_1']['name'])) {
			$dir  = "webfile/kecelakaan/";
			$config['upload_path']          = $dir;
			$config['allowed_types']        = '*';
			$config['file_name']           = md5('smartsoftstudio') . rand(1000, 100000);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('md_gambar_1')) {
				$error = $this->upload->display_errors();
				$this->alert->alertdanger($error);
			} else {
				$file_md = $this->upload->data();
				$dt['md_gambar_1'] = $dir . $file_md['file_name'];
			}
		}

		$str = $this->db->update('kecelakaan_detail_internal', $dt, array('id_kecelakaan' => $id));
		$this->alert->alertsuccess('Success Update Data');
	}

	public function json()
	{
		$status = $_GET['status'];
		if ($status == '') {
			$status = 'ENABLE';
		}
		header('Content-Type: application/json');
		$this->datatables->select('id,id_kecelakaan,kk_tanggal_jam,kk_lokasi,kk_penjelasan_kecelakaan,kk_gambar_lokasi,kk_bagian_tubuh_cedera,tw_apkh_1,tw_apkh_2,tw_apkh_3,tw_tidak_q1,tw_tidak_q2,tw_tidak_q3,sp_apkh_1,sp_ya_1,sp_tidak_1,sp_apkh_2,sp_tidak_2,pk__apkh_1,pk_tidak_1,pk_apkh_2,pk_tidak_2,pk_apkh_3,pk_tidak_3,papd_apkh_1,papd_ya_1,papd_tidak_1,papd_apd,papd_apkh_2,papd_tidak_2,md_gambar_1,md_fungsi_alat,md_apkh_1,md_ya_1,md_apkh_2,md_apkh_3,md_tidak_3,md_apkh_4,md_tidak_4,md_apkh_5,md_ya_5,snp_apkh_1,snp_ya_1,snp_tidak_1,snp_adakah_1,snp_apkh_2,snp_tidak_2,pttk_kondisi_lingkungan,pttk_apkh_1,pttk_kesimpulan,status');
		$this->datatables->where('status', $status);
		$this->datatables->from('kecelakaan_detail_internal');
		if ($status == "ENABLE") {
			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button></div>', 'id');
		} else {
			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button><button type="button" onclick="hapus($1)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></div>', 'id');
		}
		echo $this->datatables->generate();
	}

	public function edit($id)
	{
		$data['kecelakaan_main'] = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['kecelakaan_detail_internal'] = $this->mymodel->selectDataone('kecelakaan_detail_internal', array('id_kecelakaan' => $data['kecelakaan_main']['id']));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_internal'));
		$data['page_name'] = "kecelakaan_detail_internal";

		$this->template->load('template/template', 'master/kecelakaan_detail_internal/edit-kecelakaan_detail_internal', $data);
	}

	public function detail($id)
	{
		$data['kecelakaan_main'] = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['k3'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_k3']));
		$data['kabag'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_kabag']));
		$data['penderita'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_penderita']));
		$datamain = $data['kecelakaan_main'];
		$data['kecelakaan_detail_internal'] = $this->mymodel->selectDataone('kecelakaan_detail_internal', array('id_kecelakaan' => $datamain['id']));
		$data['master_status_kecelakaan'] = $this->mymodel->selectDataone('master_status_kecelakaan', array('id' => $data['kecelakaan_main']['status_kecelakaan']));

		$data['page_name'] = "kecelakaan_detail_internal";

		$this->template->load('template/template', 'master/kecelakaan_detail_internal/detail-kecelakaan_detail_internal', $data);
	}

	public function cetak($id)
	{
		$data['kecelakaan_main'] = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['k3'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_k3']));
		$data['kabag'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_kabag']));
		$data['penderita'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_penderita']));
		$datamain = $data['kecelakaan_main'];
		$data['kecelakaan_detail_internal'] = $this->mymodel->selectDataone('kecelakaan_detail_internal', array('id_kecelakaan' => $datamain['id']));

		$data['page_name'] = "kecelakaan_detail_internal";

		$this->load->view('master/kecelakaan_detail_internal/cetak-kecelakaan_detail_internal', $data);
	}

	public function validasi($id)
	{
		$kecelakaan_main = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['status_sekarang'] = $kecelakaan_main['status_kecelakaan'];
		$data['id'] = $kecelakaan_main['id'];
		$data['page_name'] = "kecelakaan_detail_internal";

		$this->load->view('master/kecelakaan_detail_internal/modal', $data);
	}

	public function validasi_tolak($id)
	{
		$kecelakaan_detail_internal = $this->mymodel->selectDataone('kecelakaan_detail_internal', array('id' => $id));
		$data['id'] = $kecelakaan_detail_internal['id'];
		$data['page_name'] = "kecelakaan_detail_internal";

		$this->load->view('master/kecelakaan_detail_internal/modal-tolak', $data);
	}

	public function validasi_act($id, $status)
	{
		$kecelakaan_main = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$status_sekarang = $kecelakaan_main['status_kecelakaan'];
		if ($status == 'terima') {
			if ($_SESSION['role_id'] == 1) {
				$status_kecelakaan = 0;
			} else if ($_SESSION['role_id'] == 3) {
				if ($_SESSION['id_bagian'] == 16) {
					if ($status_sekarang == 3) {
						$status_kecelakaan = 5;
						$dt['id_k3'] = $_SESSION['id'];
					} else if ($status_sekarang == 8) {
						$status_kecelakaan = 10;
						$dt['id_k3'] = $_SESSION['id'];
					}
				} else {
					if ($status_sekarang == 0) {
						$status_kecelakaan = 2;
					} else if ($status_sekarang == 5 || $status_sekarang == 7) {
						$status_kecelakaan = 6;
					}
				}
			} else if ($_SESSION['role_id'] == 6) {
				$dt['id_se'] = $_SESSION['id'];
				if ($status_sekarang == 2) {
					$status_kecelakaan = 3;
				} else if ($status_sekarang == 4) {
					$status_kecelakaan = 3;
				} else if ($status_sekarang == 6) {
					$status_kecelakaan = 8;
				} else if ($status_sekarang == 9) {
					$status_kecelakaan = 8;
				}
			}
		} else {
			$dt['keterangan'] = $_POST['keterangan'];
			if ($_SESSION['role_id'] == 3) {
				if ($_SESSION['id_bagian'] == 16) {
					if ($status_sekarang == 3) {
						$status_kecelakaan = 4;
						$dt['id_k3'] = $_SESSION['id'];
					} else if ($status_sekarang == 8) {
						$status_kecelakaan = 9;
						$dt['id_k3'] = $_SESSION['id'];
					}
				} else {
					if ($status_sekarang == 0) {
						$status_kecelakaan = 1;
					}
				}
			} else if ($_SESSION['role_id'] == 6) {
				if ($status_sekarang == 6) {
					$status_kecelakaan = 7;
					$dt['id_se'] = $_SESSION['id'];
				}
			}
		}
		$dt['status_kecelakaan'] = $status_kecelakaan;
		$dt['updated_at'] = date('Y-m-d H:i:s');
		$this->db->update('kecelakaan_main', $dt, array('id' => $id));

		$dta['status'] = $status_kecelakaan;
		$dta['id_laporan'] = $id;
		$dta['jenis'] = "Internal";
		$dta['id_user'] = $_SESSION['id'];
		$dta['tanggal'] = date('Y-m-d H:i:s');
		$this->mymodel->insertData('history_validasi', $dt);
		header('Location: ' . base_url('master/kecelakaan_detail_internal/'));
	}

	public function delete()

	{
		$id = $this->input->post('id', TRUE);
		$dt['status'] = 'DISABLE';
		$str = $this->db->update('kecelakaan_detail_internal', $dt, array('id' => $id));
		header('Location: ' . base_url('master/kecelakaan_detail_internal/'));
	}

	public function status($id, $status)
	{
		$this->mymodel->updateData('kecelakaan_detail_internal', array('status' => $status), array('id' => $id));
		redirect('master/Kecelakaan_detail_internal');
	}
}
