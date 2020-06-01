

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);


class Kecelakaan_detail_ekternal extends MY_Controller
{



	public function __construct()

	{

		parent::__construct();
	}



	public function index()

	{

		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->template->load('template/template', 'master/kecelakaan_detail_ekternal/all-kecelakaan_detail_ekternal', $data);
	}

	public function create()

	{
		$data['sr'] = $this->mymodel->selectDataOne("pegawai", array('id' => $_SESSION['id']));
		$data['departemen'] = $this->mymodel->selectDataOne("master_departemen", array('id' => $_SESSION['id_departemen']));
		$data['bagian'] = $this->mymodel->selectDataOne("master_bagian", array('id' => $_SESSION['id_bagian']));
		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->template->load('template/template', 'master/kecelakaan_detail_ekternal/add-kecelakaan_detail_ekternal', $data);
	}

	public function validate()

	{

		$this->form_validation->set_error_delimiters('<li>', '</li>');

		$this->form_validation->set_rules('dt[kk_tanggal_jam]', '<strong>Kk Tanggal Jam</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_lokasi]', '<strong>Kk Lokasi</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_penjelasan_kecelakaan]', '<strong>Kk Penjelasan Kecelakaan</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_bagian_tubuh_cedera]', '<strong>Kk Bagian Tubuh Cedera</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apabila_1]', '<strong>Kk Apabila 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apkh_1]', '<strong>Kk Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_tidak_1]', '<strong>Kk Tidak 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apkh_2]', '<strong>Kk Apkh 2</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_jenis_kendaraan]', '<strong>Kk Jenis Kendaraan</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apkh_3]', '<strong>Kk Apkh 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_ya_3]', '<strong>Kk Ya 3</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apkh_4]', '<strong>Kk Apkh 4</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_tidak_4]', '<strong>Kk Tidak 4</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_apkh_5]', '<strong>Kk Apkh 5</strong>', 'required');
		// $this->form_validation->set_rules('dt[kk_tidak_5]', '<strong>Kk Tidak 5</strong>', 'required');
		// $this->form_validation->set_rules('dt[wp_apbl_1]', '<strong>Wp Apbl 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[wp_masa_aktif_administrasi]', '<strong>Wp Masa Aktif Administrasi</strong>', 'required');
		// $this->form_validation->set_rules('dt[wp_mengapa]', '<strong>Wp Mengapa</strong>', 'required');
		// $this->form_validation->set_rules('dt[wp_bgmn_1]', '<strong>Wp Bgmn 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[wp_usaha_pencegahan_1]', '<strong>Wp Usaha Pencegahan 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[sp_apkh_1]', '<strong>Sp Apkh 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[sp_ya_1]', '<strong>Sp Ya 1</strong>', 'required');
		// $this->form_validation->set_rules('dt[pttk_kondisi_lingkungan]', '<strong>Pttk Kondisi Lingkungan</strong>', 'required');
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
			$dta['jenis_form'] = 2;
			$dta['id_kabag'] = $kabag['id'];
			$this->mymodel->insertData('kecelakaan_main', $dta);
			$last_id = $this->db->insert_id();

			$dt = $_POST['dt'];
			$wp_persyaratan_administrasi = $_POST['wp_persyaratan_administrasi'];

			for ($i = 0; $i < count($wp_persyaratan_administrasi); $i++) {
				$persyaratan[$i] = array(
					'persyaratan' => $wp_persyaratan_administrasi[$i]
				);
			}
			$persyaratan = json_encode($persyaratan);

			$dt['wp_persyaratan_administrasi'] = $persyaratan;
			$dt['id_kecelakaan'] = $last_id;
			$dt['created_by'] = $_SESSION['id'];
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";

			if ($dt['pttk_kondisi_lingkungan'] == 'Lainya') {
				$dt['pttk_kondisi_lingkungan'] = $_POST['pttk_kondisi_lingkungan_lainnya'];
			}

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
			$this->mymodel->insertData('kecelakaan_detail_ekternal', $dt);
			// die();
			$this->alert->alertsuccess('Success Send Data');
		}
	}

	public function update()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$id = $this->input->post('id', TRUE);

			$dta = $_POST['dta'];
			$dta['id_se'] = $_SESSION['id'];
			$this->mymodel->updateData('kecelakaan_main', $dta, array('id' => $id));

			$dt = $_POST['dt'];
			$wp_persyaratan_administrasi = $_POST['wp_persyaratan_administrasi'];

			for ($i = 0; $i < count($wp_persyaratan_administrasi); $i++) {
				$persyaratan[$i] = array(
					'persyaratan' => $wp_persyaratan_administrasi[$i]
				);
			}
			$persyaratan = json_encode($persyaratan);

			$dt['wp_persyaratan_administrasi'] = $persyaratan;
			$dt['updated_at'] = date('Y-m-d H:i:s');
			if ($dt['pttk_kondisi_lingkungan'] == 'Lainya') {
				$dt['pttk_kondisi_lingkungan'] = $_POST['pttk_kondisi_lingkungan_lainnya'];
			}

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

			$str = $this->mymodel->updateData('kecelakaan_detail_ekternal', $dt, array('id_kecelakaan' => $id));
		}
	}

	public function json()
	{
		$status = $_GET['status'];
		if ($status == '') {
			$status = 'ENABLE';
		}
		header('Content-Type: application/json');
		$this->datatables->select('id,id_kecelakaan,kk_tanggal_jam,kk_lokasi,kk_penjelasan_kecelakaan,kk_gambar_lokasi,kk_bagian_tubuh_cedera,kk_aktifitas_penderita,kk_apabila_1,kk_apkh_1,kk_tidak_1,kk_apkh_2,kk_jenis_kendaraan,kk_apkh_3,kk_ya_3,kk_apkh_4,kk_tidak_4,kk_apkh_5,kk_tidak_5,wp_apbl_1,wp_ya_q1,wp_ya_q2,wp_ya_q3,wp_tidak_q1,wp_tidak_q2,wp_persyaratan_administrasi,wp_masa_aktif_administrasi,wp_mengapa,wp_bgmn_1,wp_usaha_pencegahan_1,wp_ya_1,wp_apkh_2,wp_ya_2,sp_apkh_1,sp_ya_1,pttk_kondisi_lingkungan,pttk_apkh_1,pttk_kesimpulan,status');
		$this->datatables->where('status', $status);
		$this->datatables->from('kecelakaan_detail_ekternal');
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
		$data['kecelakaan_detail_ekternal'] = $this->mymodel->selectDataone('kecelakaan_detail_ekternal', array('id_kecelakaan' => $data['kecelakaan_main']['id']));
		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->template->load('template/template', 'master/kecelakaan_detail_ekternal/edit-kecelakaan_detail_ekternal', $data);
	}

	public function detail($id)
	{
		$data['kecelakaan_main'] = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['k3'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_k3']));
		$data['kabag'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_kabag']));
		$data['penderita'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_penderita']));
		$datamain = $data['kecelakaan_main'];
		$data['kecelakaan_detail_ekternal'] = $this->mymodel->selectDataone('kecelakaan_detail_ekternal', array('id_kecelakaan' => $datamain['id']));

		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->template->load('template/template', 'master/kecelakaan_detail_ekternal/detail-kecelakaan_detail_ekternal', $data);
	}

	public function cetak($id)
	{
		$data['kecelakaan_main'] = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['k3'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_k3']));
		$data['kabag'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_kabag']));
		$data['penderita'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['kecelakaan_main']['id_penderita']));
		$datamain = $data['kecelakaan_main'];
		$data['kecelakaan_detail_ekternal'] = $this->mymodel->selectDataone('kecelakaan_detail_ekternal', array('id_kecelakaan' => $datamain['id']));

		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->load->view('master/kecelakaan_detail_ekternal/cetak-kecelakaan_detail_ekternal', $data);
	}

	public function validasi($id)
	{
		$kecelakaan_main = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$data['status_sekarang'] = $kecelakaan_main['status_kecelakaan'];
		$data['id'] = $kecelakaan_main['id'];
		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->load->view('master/kecelakaan_detail_ekternal/modal', $data);
	}

	public function validasi_act($id, $status)
	{
		$kecelakaan_main = $this->mymodel->selectDataone('kecelakaan_main', array('id' => $id));
		$status_sekarang = $kecelakaan_main['status_kecelakaan'];
		if ($status == 'terima') {
			if ($_SESSION['role_id'] == 1) {
				$dt['status_kecelakaan'] = 0;
			} else if ($_SESSION['role_id'] == 3) {
				if ($_SESSION['id_bagian'] == 16) {
					if ($status_sekarang == 3) {
						$dt['status_kecelakaan'] = 5;
						$dt['id_k3'] = $_SESSION['id'];
					} else if ($status_sekarang == 8) {
						$dt['status_kecelakaan'] = 10;
						$dt['id_k3'] = $_SESSION['id'];
					}
				} else {
					if ($status_sekarang == 0) {
						$dt['status_kecelakaan'] = 2;
					} else if ($status_sekarang == 5 || $status_sekarang == 7) {
						$dt['status_kecelakaan'] = 6;
					}
				}
			} else if ($_SESSION['role_id'] == 6) {
				$dt['id_se'] = $_SESSION['id'];
				if ($status_sekarang == 2) {
					$dt['status_kecelakaan'] = 3;
				} else if ($status_sekarang == 4) {
					$dt['status_kecelakaan'] = 3;
				} else if ($status_sekarang == 6) {
					$dt['status_kecelakaan'] = 8;
				} else if ($status_sekarang == 9) {
					$dt['status_kecelakaan'] = 8;
				}
			}
		} else {
			if ($_SESSION['role_id'] == 3) {
				if ($_SESSION['id_bagian'] == 16) {
					if ($status_sekarang == 3) {
						$dt['status_kecelakaan'] = 4;
						$dt['id_k3'] = $_SESSION['id'];
					} else if ($status_sekarang == 8) {
						$dt['status_kecelakaan'] = 9;
						$dt['id_k3'] = $_SESSION['id'];
					}
				} else {
					if ($status_sekarang == 0) {
						$dt['status_kecelakaan'] = 1;
					}
				}
			} else if ($_SESSION['role_id'] == 6) {
				if ($status_sekarang == 6) {
					$dt['status_kecelakaan'] = 7;
					$dt['id_se'] = $_SESSION['id'];
				}
			}
		}
		$str = $this->db->update('kecelakaan_main', $dt, array('id' => $id));
		header('Location: ' . base_url('master/kecelakaan_detail_ekternal/'));
	}

	public function delete()
	{
		$id = $this->input->post('id', TRUE);
		$dt['status'] = 'DISABLE';
		$str = $this->db->update('kecelakaan_detail_ekternal', $dt, array('id' => $id));
		header('Location: ' . base_url('master/kecelakaan_detail_ekternal/'));
	}

	public function status($id, $status)
	{
		$this->mymodel->updateData('kecelakaan_detail_ekternal', array('status' => $status), array('id' => $id));
		redirect('master/Kecelakaan_detail_ekternal');
	}
}

?>