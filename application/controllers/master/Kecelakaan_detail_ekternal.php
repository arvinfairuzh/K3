

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



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
		$this->form_validation->set_rules('dt[kk_apabila_1]', '<strong>Kk Apabila 1</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_apkh_1]', '<strong>Kk Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_tidak_1]', '<strong>Kk Tidak 1</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_apkh_2]', '<strong>Kk Apkh 2</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_jenis_kendaraan]', '<strong>Kk Jenis Kendaraan</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_apkh_3]', '<strong>Kk Apkh 3</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_ya_3]', '<strong>Kk Ya 3</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_apkh_4]', '<strong>Kk Apkh 4</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_tidak_4]', '<strong>Kk Tidak 4</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_apkh_5]', '<strong>Kk Apkh 5</strong>', 'required');
		$this->form_validation->set_rules('dt[kk_tidak_5]', '<strong>Kk Tidak 5</strong>', 'required');
		$this->form_validation->set_rules('dt[wp_apbl_1]', '<strong>Wp Apbl 1</strong>', 'required');
		$this->form_validation->set_rules('dt[wp_masa_aktif_administrasi]', '<strong>Wp Masa Aktif Administrasi</strong>', 'required');
		$this->form_validation->set_rules('dt[wp_mengapa]', '<strong>Wp Mengapa</strong>', 'required');
		$this->form_validation->set_rules('dt[wp_bgmn_1]', '<strong>Wp Bgmn 1</strong>', 'required');
		$this->form_validation->set_rules('dt[wp_usaha_pencegahan_1]', '<strong>Wp Usaha Pencegahan 1</strong>', 'required');
		$this->form_validation->set_rules('dt[sp_apkh_1]', '<strong>Sp Apkh 1</strong>', 'required');
		$this->form_validation->set_rules('dt[sp_ya_1]', '<strong>Sp Ya 1</strong>', 'required');
		$this->form_validation->set_rules('dt[pttk_kondisi_lingkungan]', '<strong>Pttk Kondisi Lingkungan</strong>', 'required');
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
			$this->mymodel->insertData('kecelakaan_detail_internal', $dt);
			$this->alert->alertsuccess('Success Send Data');
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

		$data['kecelakaan_detail_ekternal'] = $this->mymodel->selectDataone('kecelakaan_detail_ekternal', array('id' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_ekternal'));
		$data['page_name'] = "kecelakaan_detail_ekternal";

		$this->template->load('template/template', 'master/kecelakaan_detail_ekternal/edit-kecelakaan_detail_ekternal', $data);
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

						'table' => 'kecelakaan_detail_ekternal',

						'table_id' => $id,

						'updated_at' => date('Y-m-d H:i:s')

					);

					$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_ekternal'));

					@unlink($file['dir']);

					if ($file == "") {

						$this->mymodel->insertData('file', $data);
					} else {

						$this->mymodel->updateData('file', $data, array('id' => $file['id']));
					}





					$dt = $_POST['dt'];



					$dt['updated_at'] = date("Y-m-d H:i:s");

					$str =  $this->mymodel->updateData('kecelakaan_detail_ekternal', $dt, array('id' => $id));

					return $str;
				}
			} else {

				$dt = $_POST['dt'];



				$dt['updated_at'] = date("Y-m-d H:i:s");

				$str = $this->mymodel->updateData('kecelakaan_detail_ekternal', $dt, array('id' => $id));

				return $str;
			}
		}
	}



	public function delete()

	{

		$id = $this->input->post('id', TRUE);
		$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'kecelakaan_detail_ekternal'));

		@unlink($file['dir']);

		$this->mymodel->deleteData('file',  array('table_id' => $id, 'table' => 'kecelakaan_detail_ekternal'));



		$str = $this->mymodel->deleteData('kecelakaan_detail_ekternal',  array('id' => $id));
		return $str;
	}



	public function status($id, $status)

	{

		$this->mymodel->updateData('kecelakaan_detail_ekternal', array('status' => $status), array('id' => $id));


		redirect('master/Kecelakaan_detail_ekternal');
	}
}

?>