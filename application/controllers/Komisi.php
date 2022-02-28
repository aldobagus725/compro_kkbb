<?php defined('BASEPATH') or exit('No direct script access allowed');

class Komisi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Activitylog_model');
		$this->load->model('Komisi_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
  	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allKomisi' => $this->Komisi_model->getAllKomisi(),
		];
		$activity = "Admin #" . $id . " masuk dashboard Komisi";
		$this->Activitylog_model->setLog($id,"Komisi", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/komisi/komisi',$data);
		$this->load->view('backend/template/footer');
	}

	public function addKomisiForm(){
		$id = $_SESSION['admin']->id;
		$activity = "Admin #" . $id . " masuk dashboard add Komisi";
		$this->Activitylog_model->setLog($id,"Komisi", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/komisi/add_komisi');
		$this->load->view('backend/template/footer');
	}
	public function editKomisiForm($id){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'komisi' => $this->Komisi_model->getOneKomisi($id),
		];
		$activity = "Admin #" . $id . " masuk dashboard edit Komisi";
		$this->Activitylog_model->setLog($id_admin,"Komisi", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/komisi/edit_komisi',$data);
		$this->load->view('backend/template/footer');
	}

	public function setKomisi(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/komisi/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '3000';
			$config['max_height'] = '3000';
			$config['max_size'] = '4096';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die();
			} else {
				$upload = $this->upload->data('file_name');
			}
		}
		//Set Data
		$data = [
			'komisi' => $this->input->post('komisi'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
		];
		$submit_status = $this->Komisi_model->setKomisi($data, $id=null);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " menambahkan komisi " . $this->input->post('komisi') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id, "Komisi", $activity);
			$this->alert->SetAlert('success', 'Komisi berhasil ditambahkan', base_url("admin/komisi"));
		} else {
			$activity = "Admin #" . $id_admin . " menambahkan komisi " . $this->input->post('komisi') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id, "Komisi", $activity);
			$this->alert->SetAlert('error', 'Komisi gagal ditambahkan');
		}
	}
	public function updateKomisi($id){
		$current_data = $this->Komisi_model->getOneKomisi($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/komisi/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '3000';
			$config['max_height'] = '3000';
			$config['max_size'] = '4096';
			$config['overwrite'] = true;
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$upload = $current_data[0]->image;

			} else {
				$upload = $this->upload->data('file_name');
			}
		} else{
			$upload = $current_data[0]->image;
		}
	
		//Set Data
		$data = [
			'komisi' => $this->input->post('komisi'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
		];
		$submit_status = $this->Komisi_model->setKomisi($data, $id);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " edit komisi " . $this->input->post('komisi') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id, "Komisi", $activity);
			$this->alert->SetAlert('success', 'Komisi berhasil diedit', base_url("admin/komisi"));
		} else {
			$activity = "Admin #" . $id_admin . " edit komisi " . $this->input->post('komisi') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id, "Komisi", $activity);
			$this->alert->SetAlert('error', 'Komisi gagal diedit');
		}
	}
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Komisi_model->deleteKomisi($id);
		if ($delete_status == true) {
		$callback = array(
			'status' => 'failed',
			'title' => 'Gagal!',
			'text' => 'Komisi gagal dihapus!',
			'type' => "error",
			'icon' => "error",
		);
		$activity = "Admin #" . $id_admin . " delete data Komisi dengan ID " . $id . ' -> FAILED';
		$this->Activitylog_model->setLog($id, "Komisi", $activity);
		} else {
		$callback = array(
			'status' => 'created',
			'title' => 'Success',
			'text' => 'Komisi berhasil di hapus',
			'type' => "success",
			'icon' => "success",
		);
		$activity = "Admin #" . $id_admin . " delete data Komisi dengan ID " . $id . ' -> SUCCESS';
		$this->Activitylog_model->setLog($id, "Komisi", $activity);
		}
		echo json_encode($callback);
	}
}