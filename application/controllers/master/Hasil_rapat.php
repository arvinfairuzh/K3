

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Hasil_rapat extends MY_Controller
{



	public function __construct()

	{

		parent::__construct();
	}



	public function index()

	{

		$data['page_name'] = "hasil_rapat";

		$this->template->load('template/template', 'master/hasil_rapat/all-hasil_rapat', $data);
	}

	public function create()
	{
		$data['page_name'] = "hasil_rapat";

		$this->template->load('template/template', 'master/hasil_rapat/add-hasil_rapat', $data);
	}

	public function validate()

	{

		$this->form_validation->set_error_delimiters('<li>', '</li>');

		$this->form_validation->set_rules('dt[id_jadwal]', '<strong>Id Jadwal</strong>', 'required');
		$this->form_validation->set_rules('dt[pimpinan_sidang]', '<strong>Pimpinan Sidang</strong>', 'required');
		$this->form_validation->set_rules('dt[tanggal]', '<strong>Tanggal</strong>', 'required');
		$this->form_validation->set_rules('dt[jam_mulai]', '<strong>Jam Mulai</strong>', 'required');
		$this->form_validation->set_rules('dt[jam_selesai]', '<strong>Jam Selesai</strong>', 'required');
		$this->form_validation->set_rules('dt[lokasi]', '<strong>Lokasi</strong>', 'required');
	}



	public function store()
	{

		$this->validate();

		if ($this->form_validation->run() == FALSE) {

			$this->alert->alertdanger(validation_errors());
		} else {

			$dt = $_POST['dt'];
			$permasalahan = $_POST['permasalahan'];
			$tindakan = $_POST['tindakan'];
			$pic = $_POST['pic'];
			$status = $_POST['status'];

			for ($i = 0; $i < count($permasalahan); $i++) {
				$tindak_lanjut[$i] = array(
					'permasalahan' => $permasalahan[$i],
					'tindakan' => $tindakan[$i],
					'pic' => $pic[$i],
					'status' => $status[$i]
				);
			}
			$tindak_lanjut = json_encode($tindak_lanjut);

			$dt['tindak_lanjut'] = $tindak_lanjut;
			$dt['created_by'] = $_SESSION['id'];
			$dt['id_notulis'] = $_SESSION['id'];
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";

			$str = $this->mymodel->insertData('hasil_rapat', $dt);

			$last_id = $this->db->insert_id();
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
						'id' => '',
						'name' => $file['file_name'],
						'mime' => $file['file_type'],
						'dir' => $dir . $file['file_name'],
						'table' => 'hasil_rapat',
						'table_id' => $last_id,
						'status' => 'ENABLE',
						'created_at' => date('Y-m-d H:i:s')
					);

					$str = $this->mymodel->insertData('file', $data);
					$this->alert->alertsuccess('Success Send Data');
				}
			} else {
				$data = array(
					'id' => '',
					'name' => '',
					'mime' => '',
					'dir' => '',
					'table' => 'hasil_rapat',
					'table_id' => $last_id,
					'status' => 'ENABLE',
					'created_at' => date('Y-m-d H:i:s')
				);

				$str = $this->mymodel->insertData('file', $data);
				// die();
				$this->alert->alertsuccess('Success Send Data');
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
		$this->datatables->select('hasil_rapat.id,master_jadwal_rapat.nama as id_jadwal,hasil_rapat.pimpinan_sidang,hasil_rapat.tanggal,hasil_rapat.jam_mulai,hasil_rapat.jam_selesai,hasil_rapat.lokasi,pendahuluan,review,tindak_lanjut,materi_tambahan,materi_kesehatan,pegawai.nama as id_notulis,hasil_rapat.status');
		$this->datatables->where('hasil_rapat.status', $status);
		$this->datatables->from('hasil_rapat');
		$this->datatables->join('master_jadwal_rapat', 'hasil_rapat.id_jadwal = master_jadwal_rapat.id', 'left');
		$this->datatables->join('pegawai', 'hasil_rapat.id_notulis = pegawai.id', 'left');
		if ($status == "ENABLE") {
			$this->datatables->add_column('view', '<div class="btn-group">
			<button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button>
			<button type="button" class="btn btn-sm btn-info" onclick="cetak($1)" style="margin-left: 5px;"><i class="fa fa-print"></i> Print</button>
			</div>', 'id');
		} else {
			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button><button type="button" onclick="hapus($1)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></div>', 'id');
		}

		echo $this->datatables->generate();
	}

	public function edit($id)
	{
		$data['hasil_rapat'] = $this->mymodel->selectDataone('hasil_rapat', array('id' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'hasil_rapat'));
		$data['page_name'] = "hasil_rapat";

		$this->template->load('template/template', 'master/hasil_rapat/edit-hasil_rapat', $data);
	}

	public function update()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$id = $this->input->post('id', TRUE);
			$dt = $_POST['dt'];
			$permasalahan = $_POST['permasalahan'];
			$tindakan = $_POST['tindakan'];
			$pic = $_POST['pic'];
			$status = $_POST['status'];

			for ($i = 0; $i < count($permasalahan); $i++) {
				$tindak_lanjut[$i] = array(
					'permasalahan' => $permasalahan[$i],
					'tindakan' => $tindakan[$i],
					'pic' => $pic[$i],
					'status' => $status[$i]
				);
			}
			$tindak_lanjut = json_encode($tindak_lanjut);

			$dt['tindak_lanjut'] = $tindak_lanjut;
			$dt['id_notulis'] = $_SESSION['id'];
			$dt['updated_at'] = date("Y-m-d H:i:s");
			$str = $this->mymodel->updateData('hasil_rapat', $dt, array('id' => $id));

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
						'table' => 'hasil_rapat',
						'table_id' => $id,
						'updated_at' => date('Y-m-d H:i:s')
					);
					$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'hasil_rapat'));
					@unlink($file['dir']);
					if ($file == "") {
						$this->mymodel->insertData('file', $data);
					} else {
						$this->mymodel->updateData('file', $data, array('id' => $file['id']));
					}
				}
			}
			return $str;
		}
	}


	public function cetak($id)
	{
		$data['hasil_rapat'] = $this->mymodel->selectDataone('hasil_rapat', array('id' => $id));
		$data['jadwal'] = $this->mymodel->selectDataone('master_jadwal_rapat', array('id' => $data['hasil_rapat']['id_jadwal']));
		$data['pimpinan_rapat'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['jadwal']['id_ketua']));
		$data['notulis'] = $this->mymodel->selectDataone('pegawai', array('id' => $data['hasil_rapat']['id_notulis']));
		$data['pimpinan_rapat_role'] = $this->mymodel->selectDataone('master_kompartemen', array('id' => $data['pimpinan_rapat']['id_kompartemen']));

		$data['notulis_jabatan'] = $this->mymodel->selectDataone('role', array('id' => $data['notulis']['id_role']));
		if ($data['notulis']['id_role'] == 4) {
			$data['notulis_role'] = $this->mymodel->selectDataone('master_departemen', array('id' => $data['notulis']['id_departemen']));
		} else if ($data['notulis']['id_role'] == 3) {
			$data['notulis_role'] = $this->mymodel->selectDataone('master_departemen', array('id' => $data['notulis']['id_bagian']));
		} else if ($data['notulis']['id_role'] == 1) {
			$data['notulis_role'] = $this->mymodel->selectDataone('master_departemen', array('id' => $data['notulis']['id_bagian']));
		}

		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'hasil_rapat'));
		$data['page_name'] = "hasil_rapat";

		$this->load->view('master/hasil_rapat/cetak-hasil_rapat', $data);
	}


	public function delete()

	{

		$id = $this->input->post('id', TRUE);
		$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'hasil_rapat'));

		@unlink($file['dir']);

		$this->mymodel->deleteData('file',  array('table_id' => $id, 'table' => 'hasil_rapat'));



		$str = $this->mymodel->deleteData('hasil_rapat',  array('id' => $id));
		return $str;
	}



	public function status($id, $status)

	{

		$this->mymodel->updateData('hasil_rapat', array('status' => $status), array('id' => $id));


		redirect('master/Hasil_rapat');
	}
}

?>