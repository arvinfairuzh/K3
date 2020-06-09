<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class Form_laporan_bulanan extends MY_Controller
{



	public function __construct()

	{

		parent::__construct();
	}



	public function index()

	{

		$data['page_name'] = "form_laporan_bulanan";

		$this->template->load('template/template', 'master/form_laporan_bulanan/all-form_laporan_bulanan', $data);
	}

	public function create()
	{
		$master_departemen = $this->mymodel->selectDataOne('master_departemen', array('id' => $_SESSION['id_departemen']));
		$master_bagian = $this->mymodel->selectDataOne('master_bagian', array('id' => $_SESSION['id_bagian']));
		$data['bagian'] = $master_bagian['nama'];
		$data['departemen'] = $master_departemen['nama'];
		$data['page_name'] = "form_laporan_bulanan";
		$this->template->load('template/template', 'master/form_laporan_bulanan/add-form_laporan_bulanan', $data);
	}

	public function validate()
	{
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		$this->form_validation->set_rules('dt[lokasi]', '<strong>Lokasi</strong>', 'required');
		$this->form_validation->set_rules('dt[departemen]', '<strong>Departemen</strong>', 'required');
		$this->form_validation->set_rules('dt[tanggal]', '<strong>Tanggal</strong>', 'required');
	}

	public function store()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$dt = $_POST['dt'];
			$id_dp = $_POST['id_dp'];
			$hasil = $_POST['hasil'];
			$keterangan = $_POST['keterangan'];
			$count_id_dp = count($id_dp);
			$jenis_temuan = $_POST['jenis_temuan'];
			$hasil_temuan = $_POST['hasil_temuan'];
			$ke = $_POST['ke'];
			$tindak_lanjut = $_POST['tindak_lanjut'];
			$count_jenis_temuan = count($jenis_temuan);

			for ($i = 0; $i < $count_id_dp; $i++) {
				$hasil_text = '';
				// print_r($hasil[$i]);
				if ($hasil[$i] == 'Ya') {
					$hasil_text = 'Ya';
				} else {
					$hasil_text = 'Tidak';
				}
				// print_r($hasil_text);
				$json[$i] = array(
					'id_dp' => $id_dp[$i],
					'hasil' => $hasil_text,
					'keterangan' => $keterangan[$i]
				);
			}

			// die();
			$datajson = json_encode($json);

			$dt['value'] = $datajson;
			$dt['created_by'] = $_SESSION['id'];
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";

			$kabag = $this->mymodel->selectDataOne("pegawai", array('id_bagian' => $_SESSION['id_bagian'], 'id_role' => 3));
			$dt['id_kabag'] = $kabag['id'];
			$str = $this->mymodel->insertData('form_laporan_bulanan', $dt);
			$last_id = $this->db->insert_id();

			for ($i = 0; $i < $count_jenis_temuan; $i++) {
				$dta['id_laporan'] = $last_id;
				$dta['jenis'] = $jenis_temuan[$i];
				$dta['hasil_temuan'] = $hasil_temuan[$i];
				$dta['ke'] = $ke[$i];
				$dta['tindak_lanjut'] = $tindak_lanjut[$i];
				$dta['created_at'] = date('Y-m-d H:i:s');
				$dta['status'] = "ENABLE";
				$dta['created_by'] = $_SESSION['id'];

				$upload = '';
				if (!empty($_FILES['file']['name'][$i])) {
					$path = $_SERVER['DOCUMENT_ROOT'] . "/k3/webfile/tindak_lanjut/";
					$dir  = "webfile/tindak_lanjut/";
					// $path = base_url()."webfile/document/my_document-$last_agenda/";
					// print_r($path);
					// die();

					$file_ext = $_FILES['file']['name'][$i];
					$ext = pathinfo($file_ext, PATHINFO_EXTENSION);
					$file_name = 'ftl-' . $last_id . '.' . $ext;
					$file_size = $_FILES['file']['size'][$i];
					$file_tmp = $_FILES['file']['tmp_name'][$i];
					$file_type = $_FILES['file']['type'][$i];

					move_uploaded_file($file_tmp, $path . $file_name);
					$upload = $dir . $file_name;
				}
				$dta['gambar'] = $upload;
				$this->mymodel->insertData('form_tindak_lanjut', $dta);
			}
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
		$this->datatables->select('form_laporan_bulanan.id,lokasi,master_departemen.nama as departemen,master_bagian.nama as bagian,tanggal,value,kabag.nama as id_kabag,form_laporan_bulanan.status,sr.nama as created_by');
		$this->datatables->where('form_laporan_bulanan.status', $status);
		$this->datatables->from('form_laporan_bulanan');
		$this->datatables->join('master_departemen', 'form_laporan_bulanan.departemen = master_departemen.id', 'left');
		$this->datatables->join('master_bagian', 'form_laporan_bulanan.bagian = master_bagian.id', 'left');
		$this->datatables->join('pegawai sr', 'form_laporan_bulanan.created_by = sr.id', 'left');
		$this->datatables->join('pegawai kabag', 'form_laporan_bulanan.id_kabag = kabag.id', 'left');
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
		$data['form_laporan_bulanan'] = $this->mymodel->selectDataone('form_laporan_bulanan', array('id' => $id));
		$data['form_tindak_lanjut'] = $this->mymodel->selectWhere('form_tindak_lanjut', array('id_laporan' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'form_laporan_bulanan'));
		$master_departemen = $this->mymodel->selectDataOne('master_departemen', array('id' => $data['form_laporan_bulanan']['departemen']));
		$master_bagian = $this->mymodel->selectDataOne('master_bagian', array('id' => $data['form_laporan_bulanan']['bagian']));
		$data['bagian'] = $master_bagian['nama'];
		$data['departemen'] = $master_departemen['nama'];
		$data['page_name'] = "form_laporan_bulanan";

		$this->template->load('template/template', 'master/form_laporan_bulanan/edit-form_laporan_bulanan', $data);
	}

	public function update()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$id = $this->input->post('id', TRUE);
			$dt = $_POST['dt'];
			$id_dp = $_POST['id_dp'];
			$hasil = $_POST['hasil'];
			$keterangan = $_POST['keterangan'];
			$count_id_dp = count($id_dp);
			$id_tl = $_POST['id_tl'];
			$jenis_temuan = $_POST['jenis_temuan'];
			$hasil_temuan = $_POST['hasil_temuan'];
			$ke = $_POST['ke'];
			$tindak_lanjut = $_POST['tindak_lanjut'];
			$count_jenis_temuan = count($jenis_temuan);
			// print_r($files['name']);
			// die();

			// print_r($hasil);
			for ($i = 0; $i < $count_id_dp; $i++) {
				$hasil_text = '';
				// print_r($hasil[$i]);
				if ($hasil[$i] == 'Ya') {
					$hasil_text = 'Ya';
				} else {
					$hasil_text = 'Tidak';
				}
				// print_r($hasil_text);
				$json[$i] = array(
					'id_dp' => $id_dp[$i],
					'hasil' => $hasil_text,
					'keterangan' => $keterangan[$i]
				);
			}

			$datajson = json_encode($json);

			// print_r($datajson);
			// die();
			$dt['value'] = $datajson;
			$dt['updated_at'] = date('Y-m-d H:i:s');
			$str = $this->db->update('form_laporan_bulanan', $dt, array('id' => $id));

			for ($i = 0; $i < $count_jenis_temuan; $i++) {
				$form_tindak_lanjut = $this->mymodel->selectDataone('form_tindak_lanjut', array('id' => $id_tl[$i]));
				$dta['jenis'] = $jenis_temuan[$i];
				$dta['hasil_temuan'] = $hasil_temuan[$i];
				$dta['ke'] = $ke[$i];
				$dta['tindak_lanjut'] = $tindak_lanjut[$i];
				$dta['updated_at'] = date('Y-m-d H:i:s');
				if ($_FILES['file']['name'][$i]) {
					echo 'oke';
					$path = $_SERVER['DOCUMENT_ROOT'] . "/k3/webfile/tindak_lanjut/";
					$dir  = "webfile/tindak_lanjut/";
					// $path = base_url()."webfile/document/my_document-$last_agenda/";
					// print_r($path);
					// die();

					$file_ext = $_FILES['file']['name'][$i];
					$ext = pathinfo($file_ext, PATHINFO_EXTENSION);
					$file_name = 'ftl-' . $id_tl[$i] . '.' . $ext;
					$file_size = $_FILES['file']['size'][$i];
					$file_tmp = $_FILES['file']['tmp_name'][$i];
					$file_type = $_FILES['file']['type'][$i];

					move_uploaded_file($file_tmp, $path . $file_name);
					$upload = $dir . $file_name;
					$dta['gambar'] = $upload;
				} else {
					$dta['gambar'] = $form_tindak_lanjut['gambar'];
				}

				// print_r($dta['gambar']);
				$this->db->update('form_tindak_lanjut', $dta, array('id' => $id_tl[$i]));
			}
			// die();
			$this->alert->alertsuccess('Success Send Data');
		}
	}

	public function detail($id)
	{
		$data['form_laporan_bulanan'] = $this->mymodel->selectDataone('form_laporan_bulanan', array('id' => $id));
		$data['form_tindak_lanjut'] = $this->mymodel->selectWhere('form_tindak_lanjut', array('id_laporan' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'form_laporan_bulanan'));
		$master_departemen = $this->mymodel->selectDataOne('master_departemen', array('id' => $data['form_laporan_bulanan']['departemen']));
		$master_bagian = $this->mymodel->selectDataOne('master_bagian', array('id' => $data['form_laporan_bulanan']['bagian']));
		$data['sr'] = $this->mymodel->selectDataOne('pegawai', array('id' => $data['form_laporan_bulanan']['created_by']));
		$data['kabag'] = $this->mymodel->selectDataOne('pegawai', array('id' => $data['form_laporan_bulanan']['id_kabag']));
		$data['bagian'] = $master_bagian['nama'];
		$data['departemen'] = $master_departemen['nama'];
		$data['master_status_bulanan'] = $this->mymodel->selectDataone('master_status_bulanan', array('id' => $data['form_laporan_bulanan']['status_bulanan']));

		$data['page_name'] = "form_laporan_bulanan";

		$this->template->load('template/template', 'master/form_laporan_bulanan/detail-form_laporan_bulanan', $data);
	}

	public function cetak($id)
	{
		$data['form_laporan_bulanan'] = $this->mymodel->selectDataone('form_laporan_bulanan', array('id' => $id));
		$data['form_tindak_lanjut'] = $this->mymodel->selectWhere('form_tindak_lanjut', array('id_laporan' => $id));
		$data['file'] = $this->mymodel->selectDataone('file', array('table_id' => $id, 'table' => 'form_laporan_bulanan'));
		$master_departemen = $this->mymodel->selectDataOne('master_departemen', array('id' => $data['form_laporan_bulanan']['departemen']));
		$master_bagian = $this->mymodel->selectDataOne('master_bagian', array('id' => $data['form_laporan_bulanan']['bagian']));
		$data['sr'] = $this->mymodel->selectDataOne('pegawai', array('id' => $data['form_laporan_bulanan']['created_by']));
		$data['kabag'] = $this->mymodel->selectDataOne('pegawai', array('id' => $data['form_laporan_bulanan']['id_kabag']));
		$data['bagian'] = $master_bagian['nama'];
		$data['departemen'] = $master_departemen['nama'];

		$data['page_name'] = "form_laporan_bulanan";

		$this->load->view('master/form_laporan_bulanan/cetak-form_laporan_bulanan', $data);
	}


	public function validasi($id)
	{
		$form_laporan_bulanan = $this->mymodel->selectDataone('form_laporan_bulanan', array('id' => $id));
		$data['id'] = $form_laporan_bulanan['id'];
		$data['page_name'] = "form_laporan_bulanan";

		$this->load->view('master/form_laporan_bulanan/modal', $data);
	}

	public function validasi_tolak($id)
	{
		$form_laporan_bulanan = $this->mymodel->selectDataone('form_laporan_bulanan', array('id' => $id));
		$data['id'] = $form_laporan_bulanan['id'];
		$data['page_name'] = "form_laporan_bulanan";

		$this->load->view('master/form_laporan_bulanan/modal-tolak', $data);
	}

	public function validasi_act($id, $status)
	{
		if ($status == 'terima') {
			if ($_SESSION['role_id'] == 1) {
				$dt['status_bulanan'] = 3;
			} else if ($_SESSION['role_id'] == 3) {
				$dt['status_bulanan'] = 1;
			}
		} else {
			$dt['keterangan'] = $_POST['keterangan'];
			if ($_SESSION['role_id'] == 1) {
				$dt['status_bulanan'] = 2;
			}
		}
		$str = $this->db->update('form_laporan_bulanan', $dt, array('id' => $id));
		header('Location: ' . base_url('master/form_laporan_bulanan/'));
	}

	public function delete()
	{
		$id = $this->input->post('id', TRUE);
		$dt['status'] = 'DISABLE';
		$str = $this->db->update('form_laporan_bulanan', $dt, array('id' => $id));
		header('Location: ' . base_url('master/form_laporan_bulanan/'));
	}

	public function delete_temuan($id)
	{
		$form_tindak_lanjut = $this->mymodel->selectDataone("form_tindak_lanjut", array('id' => $id));
		$form_laporan_bulanan = $this->mymodel->selectDataone("form_laporan_bulanan", array('id' => $form_tindak_lanjut['id_laporan']));
		$this->mymodel->deleteData('form_tindak_lanjut',  array('id' => $id));
		header('Location: ' . base_url('master/form_laporan_bulanan/edit/' . $form_laporan_bulanan['id']));
	}

	public function status($id, $status)
	{
		$this->mymodel->updateData('form_laporan_bulanan', array('status' => $status), array('id' => $id));
		redirect('master/Form_laporan_bulanan');
	}
}
