<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kmj extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Activitylog_model');
		$this->load->model('Kmj_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
  	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allKmj' => $this->Kmj_model->getAllKmj(),
		];
		$activity = "Admin #" . $id . " masuk dashboard Kmj";
		$this->Activitylog_model->setLog($id,"Kmj", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/kmj/kmj',$data);
		$this->load->view('backend/template/footer');
	}

	public function addKmjForm(){
		$id = $_SESSION['admin']->id;
		$activity = "Admin #" . $id . " masuk dashboard add Kmj";
		$this->Activitylog_model->setLog($id,"Kmj", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/kmj/add_kmj');
		$this->load->view('backend/template/footer');
	}
	public function editKmjForm($id){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'kmj' => $this->Kmj_model->getOneKmj($id),
		];
		$activity = "Admin #" . $id . " masuk dashboard edit Kmj";
		$this->Activitylog_model->setLog($id_admin,"Kmj", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/kmj/edit_kmj',$data);
		$this->load->view('backend/template/footer');
	}

	public function setKmj(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/kmj/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '1080';
			$config['max_height'] = '1920';
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
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'periode' => $this->input->post('periode'),
			'image' => $upload,
		];
		$submit_status = $this->Kmj_model->setKmj($data, $id=null);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " menambahkan kmj " . $this->input->post('kmj') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
			$this->alert->SetAlert('success', 'Kmj berhasil ditambahkan', base_url("admin/kmj"));
		} else {
			$activity = "Admin #" . $id_admin . " menambahkan kmj " . $this->input->post('kmj') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
			$this->alert->SetAlert('error', 'Kmj gagal ditambahkan');
		}
	}
	public function updateKmj($id){
		$current_data = $this->Kmj_model->getOneKmj($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/kmj/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '1080';
			$config['max_height'] = '1920';
			$config['max_size'] = '5000';
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
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'periode' => $this->input->post('periode'),
			'image' => $upload,
		];
		$submit_status = $this->Kmj_model->setKmj($data, $id);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " edit kmj " . $this->input->post('kmj') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
			$this->alert->SetAlert('success', 'Kmj berhasil diedit', base_url("admin/kmj"));
		} else {
			$activity = "Admin #" . $id_admin . " edit kmj " . $this->input->post('kmj') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
			$this->alert->SetAlert('error', 'Kmj gagal diedit');
		}
	}
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Kmj_model->deleteKmj($id);
		if ($delete_status == true) {
		$callback = array(
			'status' => 'failed',
			'title' => 'Gagal!',
			'text' => 'Kmj gagal dihapus!',
			'type' => "error",
			'icon' => "error",
		);
		$activity = "Admin #" . $id_admin . " delete data Kmj dengan ID " . $id . ' -> FAILED';
		$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
		} else {
		$callback = array(
			'status' => 'created',
			'title' => 'Success',
			'text' => 'Kmj berhasil di hapus',
			'type' => "success",
			'icon' => "success",
		);
		$activity = "Admin #" . $id_admin . " delete data Kmj dengan ID " . $id . ' -> SUCCESS';
		$this->Activitylog_model->setLog($id_admin, "Kmj", $activity);
		}
		echo json_encode($callback);
	}
}