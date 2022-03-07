<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presbiter extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Activitylog_model');
		$this->load->model('Presbiter_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
  	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allPresbiter' => $this->Presbiter_model->getAllPresbiter(),
		];
		$activity = "Admin #" . $id . " masuk dashboard Presbiter";
		$this->Activitylog_model->setLog($id,"Presbiter", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/presbiter/presbiter',$data);
		$this->load->view('backend/template/footer');
	}

	public function addPresbiterForm(){
		$id = $_SESSION['admin']->id;
		$activity = "Admin #" . $id . " masuk dashboard add Presbiter";
		$this->Activitylog_model->setLog($id,"Presbiter", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/presbiter/add_presbiter');
		$this->load->view('backend/template/footer');
	}
	public function editPresbiterForm($id){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'presbiter' => $this->Presbiter_model->getOnePresbiter($id),
		];
		$activity = "Admin #" . $id . " masuk dashboard edit Presbiter";
		$this->Activitylog_model->setLog($id_admin,"Presbiter", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/presbiter/edit_presbiter',$data);
		$this->load->view('backend/template/footer');
	}

	public function setPresbiter(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/presbiter/";
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
			'presbiter' => $this->input->post('presbiter'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
		];
		$submit_status = $this->Presbiter_model->setPresbiter($data, $id=null);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " menambahkan presbiter " . $this->input->post('presbiter') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
			$this->alert->SetAlert('success', 'Presbiter berhasil ditambahkan', base_url("admin/presbiter"));
		} else {
			$activity = "Admin #" . $id_admin . " menambahkan presbiter " . $this->input->post('presbiter') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
			$this->alert->SetAlert('error', 'Presbiter gagal ditambahkan');
		}
	}
	public function updatePresbiter($id){
		$current_data = $this->Presbiter_model->getOnePresbiter($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/presbiter/";
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
			'presbiter' => $this->input->post('presbiter'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
		];
		$submit_status = $this->Presbiter_model->setPresbiter($data, $id);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " edit presbiter " . $this->input->post('presbiter') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
			$this->alert->SetAlert('success', 'Presbiter berhasil diedit', base_url("admin/presbiter"));
		} else {
			$activity = "Admin #" . $id_admin . " edit presbiter " . $this->input->post('presbiter') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
			$this->alert->SetAlert('error', 'Presbiter gagal diedit');
		}
	}
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Presbiter_model->deletePresbiter($id);
		if ($delete_status == true) {
		$callback = array(
			'status' => 'failed',
			'title' => 'Gagal!',
			'text' => 'Presbiter gagal dihapus!',
			'type' => "error",
			'icon' => "error",
		);
		$activity = "Admin #" . $id_admin . " delete data Presbiter dengan ID " . $id . ' -> FAILED';
		$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
		} else {
		$callback = array(
			'status' => 'created',
			'title' => 'Success',
			'text' => 'Presbiter berhasil di hapus',
			'type' => "success",
			'icon' => "success",
		);
		$activity = "Admin #" . $id_admin . " delete data Presbiter dengan ID " . $id . ' -> SUCCESS';
		$this->Activitylog_model->setLog($id_admin, "Presbiter", $activity);
		}
		echo json_encode($callback);
	}
}