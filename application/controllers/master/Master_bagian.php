

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Master_bagian extends MY_Controller
{



	public function __construct()

	{

		parent::__construct();
	}



	public function index()

	{

		$data['page_name'] = "master_bagian";

		$this->template->load('template/template', 'master/master_bagian/all-master_bagian', $data);
	}

	public function create()

	{

		$this->load->view('master/master_bagian/add-master_bagian');
	}

	public function validate()

	{

		$this->form_validation->set_error_delimiters('<li>', '</li>');

		$this->form_validation->set_rules('dt[id_departemen]', '<strong>Id Departemen</strong>', 'required');
		$this->form_validation->set_rules('dt[nama]', '<strong>Nama</strong>', 'required');
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

			$str = $this->mymodel->insertData('master_bagian', $dt);

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

						'table' => 'master_bagian',

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

					'table' => 'master_bagian',

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

		$this->datatables->select('master_bagian.id,master_departemen.nama as id_departemen,master_bagian.nama,master_bagian.status');

		$this->datatables->where('master_bagian.status', $status);

		$this->datatables->from('master_bagian');
		$this->datatables->join('master_departemen', 'master_bagian.id_departemen = master_departemen.id', 'left');

		if ($status == "ENABLE") {

			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button></div>', 'id');
		} else {

			$this->datatables->add_column('view', '<div class="btn-group"><button type="button" class="btn btn-sm btn-primary" onclick="edit($1)"><i class="fa fa-pencil"></i> Edit</button><button type="button" onclick="hapus($1)" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></div>', 'id');
		}

		echo $this->datatables->generate();
	}

	public function edit($id)

	{

		$data['master_bagian'] = $this->mymodel->selectDataone('master_bagian', array('id' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_bagian'));
		$data['page_name'] = "master_bagian";

		$this->load->view('master/master_bagian/edit-master_bagian', $data);
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

						'table' => 'master_bagian',

						'table_id' => $id,

						'updated_at' => date('Y-m-d H:i:s')

					);

					$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_bagian'));

					@unlink($file['dir']);

					if ($file == "") {

						$this->mymodel->insertData('file', $data);
					} else {

						$this->mymodel->updateData('file', $data, array('id' => $file['id']));
					}





					$dt = $_POST['dt'];



					$dt['updated_at'] = date("Y-m-d H:i:s");

					$str =  $this->mymodel->updateData('master_bagian', $dt, array('id' => $id));

					return $str;
				}
			} else {

				$dt = $_POST['dt'];



				$dt['updated_at'] = date("Y-m-d H:i:s");

				$str = $this->mymodel->updateData('master_bagian', $dt, array('id' => $id));

				return $str;
			}
		}
	}



	public function delete()

	{

		$id = $this->input->post('id', TRUE);
		$file = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'master_bagian'));

		@unlink($file['dir']);

		$this->mymodel->deleteData('file',  array('table_id' => $id, 'table' => 'master_bagian'));



		$str = $this->mymodel->deleteData('master_bagian',  array('id' => $id));
		return $str;
	}



	public function status($id, $status)

	{

		$this->mymodel->updateData('master_bagian', array('status' => $status), array('id' => $id));


		redirect('master/Master_bagian');
	}
}

?>