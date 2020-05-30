

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Master_jadwal_rapat extends MY_Controller
{



	public function __construct()

	{

		parent::__construct();
	}



	public function index()

	{

		$data['page_name'] = "master_jadwal_rapat";

		$this->template->load('template/template', 'master/master_jadwal_rapat/all-master_jadwal_rapat', $data);
	}

	public function create()

	{

		$data['page_name'] = "master_jadwal_rapat";

		$this->template->load('template/template', 'master/master_jadwal_rapat/add-master_jadwal_rapat', $data);
	}

	public function validate()

	{

		$this->form_validation->set_error_delimiters('<li>', '</li>');

		$this->form_validation->set_rules('dt[nama]', '<strong>Nama</strong>', 'required');
		$this->form_validation->set_rules('dt[tanggal]', '<strong>Tanggal</strong>', 'required');
		$this->form_validation->set_rules('dt[jam_mulai]', '<strong>Jam Mulai</strong>', 'required');
		$this->form_validation->set_rules('dt[jam_selesai]', '<strong>Jam Selesai</strong>', 'required');
		$this->form_validation->set_rules('dt[lokasi]', '<strong>Lokasi</strong>', 'required');
		$this->form_validation->set_rules('dt[id_ketua]', '<strong>Id Ketua</strong>', 'required');
	}



	public function store()

	{

		$this->validate();

		if ($this->form_validation->run() == FALSE) {

			$this->alert->alertdanger(validation_errors());
		} else {

			$dt = $_POST['dt'];



			$dt['created_by'] = $_SESSION['id'];

			$dt['created_at'] = date('Y-m-d H:i:s');

			$dt['status'] = "ENABLE";

			$str = $this->mymodel->insertData('master_jadwal_rapat', $dt);

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

						'table' => 'master_jadwal_rapat',

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

					'table' => 'master_jadwal_rapat',

					'table_id' => $last_id,

					'status' => 'ENABLE',

					'created_at' => date('Y-m-d H:i:s')

				);



				$str = $this->mymodel->insertData('file', $data);

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

		$this->datatables->select('master_jadwal_rapat.id,master_jadwal_rapat.nama,tanggal,jam_mulai,jam_selesai,lokasi,pegawai.nama as id_ketua,master_jadwal_rapat.status');

		$this->datatables->where('master_jadwal_rapat.status', $status);

		$this->datatables->from('master_jadwal_rapat');
		$this->datatables->join('pegawai', 'master_jadwal_rapat.id_ketua = pegawai.id', 'left');

		if ($status == "ENABLE") {

			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button></div>', 'id');
		} else {

			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button><button type="button" onclick="hapus($1)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></div>', 'id');
		}

		echo $this->datatables->generate();
	}

	public function edit($id)

	{

		$data['master_jadwal_rapat'] = $this->mymodel->selectDataone('master_jadwal_rapat', array('id' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_jadwal_rapat'));
		$data['page_name'] = "master_jadwal_rapat";

		$this->template->load('template/template', 'master/master_jadwal_rapat/edit-master_jadwal_rapat', $data);
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

						'table' => 'master_jadwal_rapat',

						'table_id' => $id,

						'updated_at' => date('Y-m-d H:i:s')

					);

					$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_jadwal_rapat'));

					@unlink($file['dir']);

					if ($file == "") {

						$this->mymodel->insertData('file', $data);
					} else {

						$this->mymodel->updateData('file', $data, array('id' => $file['id']));
					}





					$dt = $_POST['dt'];



					$dt['updated_at'] = date("Y-m-d H:i:s");

					$str =  $this->mymodel->updateData('master_jadwal_rapat', $dt, array('id' => $id));

					return $str;
				}
			} else {

				$dt = $_POST['dt'];



				$dt['updated_at'] = date("Y-m-d H:i:s");

				$str = $this->mymodel->updateData('master_jadwal_rapat', $dt, array('id' => $id));

				return $str;
			}
		}
	}



	public function delete()

	{

		$id = $this->input->post('id', TRUE);
		$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_jadwal_rapat'));

		@unlink($file['dir']);

		$this->mymodel->deleteData('file',  array('table_id' => $id, 'table' => 'master_jadwal_rapat'));



		$str = $this->mymodel->deleteData('master_jadwal_rapat',  array('id' => $id));
		return $str;
	}



	public function status($id, $status)

	{

		$this->mymodel->updateData('master_jadwal_rapat', array('status' => $status), array('id' => $id));


		redirect('master/Master_jadwal_rapat');
	}
}

?>