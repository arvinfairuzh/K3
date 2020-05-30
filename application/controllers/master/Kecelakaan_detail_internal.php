

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



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
		$this->form_validation->set_rules('dt[tw_apkh_1]', '<strong>Tw Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[tw_apkh_2]', '<strong>Tw Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[tw_apkh_3]', '<strong>Tw Apkh 3</strong>', 'required');
		$this->form_validation->set_rules('dt[tw_tidak_q1]', '<strong>Tw Tidak Q1</strong>', 'required');
		$this->form_validation->set_rules('dt[tw_tidak_q2]', '<strong>Tw Tidak Q2</strong>', 'required');
		$this->form_validation->set_rules('dt[tw_tidak_q3]', '<strong>Tw Tidak Q3</strong>', 'required');
		$this->form_validation->set_rules('dt[sp_apkh_1]', '<strong>Sp Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[sp_apkh_2]', '<strong>Sp Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[sp_tidak_2]', '<strong>Sp Tidak 2</strong>', 'required');
		$this->form_validation->set_rules('dt[pk__apkh_1]', '<strong>Pk  Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[pk_tidak_1]', '<strong>Pk Tidak 1</strong>', 'required');
		$this->form_validation->set_rules('dt[pk_apkh_2]', '<strong>Pk Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[pk_tidak_2]', '<strong>Pk Tidak 2</strong>', 'required');
		$this->form_validation->set_rules('dt[pk_apkh_3]', '<strong>Pk Apkh 3</strong>', 'required');
		$this->form_validation->set_rules('dt[pk_tidak_3]', '<strong>Pk Tidak 3</strong>', 'required');
		$this->form_validation->set_rules('dt[papd_apkh_1]', '<strong>Papd Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[papd_apd]', '<strong>Papd Apd</strong>', 'required');
		$this->form_validation->set_rules('dt[papd_apkh_2]', '<strong>Papd Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[papd_tidak_2]', '<strong>Papd Tidak 2</strong>', 'required');
		$this->form_validation->set_rules('dt[md_fungsi_alat]', '<strong>Md Fungsi Alat</strong>', 'required');
		$this->form_validation->set_rules('dt[md_apkh_1]', '<strong>Md Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[md_ya_1]', '<strong>Md Ya 1</strong>', 'required');
		$this->form_validation->set_rules('dt[md_apkh_2]', '<strong>Md Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[md_apkh_3]', '<strong>Md Apkh 3</strong>', 'required');
		$this->form_validation->set_rules('dt[md_tidak_3]', '<strong>Md Tidak 3</strong>', 'required');
		$this->form_validation->set_rules('dt[md_apkh_4]', '<strong>Md Apkh 4</strong>', 'required');
		$this->form_validation->set_rules('dt[md_tidak_4]', '<strong>Md Tidak 4</strong>', 'required');
		$this->form_validation->set_rules('dt[md_apkh_5]', '<strong>Md Apkh 5</strong>', 'required');
		$this->form_validation->set_rules('dt[md_ya_5]', '<strong>Md Ya 5</strong>', 'required');
		$this->form_validation->set_rules('dt[snp_apkh_1]', '<strong>Snp Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[snp_adakah_1]', '<strong>Snp Adakah 1</strong>', 'required');
		$this->form_validation->set_rules('dt[snp_apkh_2]', '<strong>Snp Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[snp_tidak_2]', '<strong>Snp Tidak 2</strong>', 'required');
		$this->form_validation->set_rules('dt[pttk_apkh_1]', '<strong>Pttk Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[pttk_kesimpulan]', '<strong>Pttk Kesimpulan</strong>', 'required');
	}



	public function store()

	{

		$this->validate();

		if ($this->form_validation->run() == FALSE) {

			$this->alert->alertdanger(validation_errors());
		} else {

			$dta = $_POST['dta'];

			$this->mymodel->insertData('kecelakaan_main', $dta);
			$last_id = $this->db->insert_id();

			$dt = $_POST['dt'];
			$dt['id_kecelakaan'] = $last_id;
			$dt['created_by'] = $_SESSION['id'];
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";

			$dt['pttk_kondisi_lingkungan'] = $_POST['pttk_kondisi_lingkungan_lainnya'];
			if ($dt['pttk_kondisi_lingkungan'] == 'Lainya') {
				$dt['pttk_kondisi_lingkungan'] = $_POST['pttk_kondisi_lingkungan_lainnya'];
			}

			if (!empty($_FILES['kk_gambar_lokasi']['name'])) {
				$dir  = "webfile/";
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
				$dir  = "webfile/";
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

			$this->alert->alertsuccess('Success Send Data'); //kyoke ndak metu se kui metu iku ijo ndk duwur form
		}
	}

	public function update()

	{

		$this->validate();

		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$id = $this->input->post('id', TRUE);
			if (!empty($_FILES['file']['name'])) {
				$dir  = "webfile/";
				$config['upload_path']          = $dir;
				$config['allowed_types']        = '*';
				$config['file_name']           = md5('smartsoftstudio') . rand(1000, 100000);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('file')) {
					$error = $this->upload->display_errors();
					$this->alert->alertdanger($error);
				} else {
					$file = $this->upload->data();
					$data = array(
						'name' => $file['file_name'],
						'mime' => $file['file_type'],
						// 'size'=> $file['file_size'],
						'dir' => $dir . $file['file_name'],
						'table' => 'kecelakaan_detail_internal',
						'table_id' => $id,
						'updated_at' => date('Y-m-d H:i:s')
					);
					$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_internal'));
					@unlink($file['dir']);
					if ($file == "") {
						$this->mymodel->insertData('file', $data);
					} else {
						$this->mymodel->updateData('file', $data, array('id' => $file['id']));
					}
					$dt = $_POST['dt'];
					$dt['updated_at'] = date("Y-m-d H:i:s");
					$str =  $this->mymodel->updateData('kecelakaan_detail_internal', $dt, array('id' => $id));
					return $str;
				}
			} else {
				$dt = $_POST['dt'];
				$dt['updated_at'] = date("Y-m-d H:i:s");
				$str = $this->mymodel->updateData('kecelakaan_detail_internal', $dt, array('id' => $id));
				return $str;
			}
		}
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

		$data['kecelakaan_detail_internal'] = $this->mymodel->selectDataone('kecelakaan_detail_internal', array('id' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_internal'));
		$data['page_name'] = "kecelakaan_detail_internal";

		$this->template->load('template/template', 'master/kecelakaan_detail_internal/edit-kecelakaan_detail_internal', $data);
	}


	public function delete()

	{

		$id = $this->input->post('id', TRUE);
		$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_internal'));

		@unlink($file['dir']);

		$this->mymodel->deleteData('file',  array('table_id' => $id, 'table' => 'kecelakaan_detail_internal'));



		$str = $this->mymodel->deleteData('kecelakaan_detail_internal',  array('id' => $id));
		return $str;
	}



	public function status($id, $status)

	{

		$this->mymodel->updateData('kecelakaan_detail_internal', array('status' => $status), array('id' => $id));


		redirect('master/Kecelakaan_detail_internal');
	}
}

?>