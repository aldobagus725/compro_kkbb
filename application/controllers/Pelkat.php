<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pelkat extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Activitylog_model');
		$this->load->model('Pelkat_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
  	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allPelkat' => $this->Pelkat_model->getAllPelkat(),
		];
		$activity = "Admin #" . $id . " masuk dashboard Pelkat";
		$this->Activitylog_model->setLog($id,"Pelkat", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pelkat/pelkat',$data);
		$this->load->view('backend/template/footer');
	}

	public function addPelkatForm(){
		$id = $_SESSION['admin']->id;
		$activity = "Admin #" . $id . " masuk dashboard add Pelkat";
		$this->Activitylog_model->setLog($id,"Pelkat", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pelkat/add_pelkat');
		$this->load->view('backend/template/footer');
	}
	public function editPelkatForm($id){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'pelkat' => $this->Pelkat_model->getOnePelkat($id),
		];
		$activity = "Admin #" . $id . " masuk dashboard edit Pelkat";
		$this->Activitylog_model->setLog($id_admin,"Pelkat", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pelkat/edit_pelkat',$data);
		$this->load->view('backend/template/footer');
	}

	public function setPelkat(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/pelkat/";
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
        // upload logo
        if ($_FILES['logo']) {
			$logo = null;
			$config['upload_path']  = "./resource/pelkat/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '3000';
			$config['max_height'] = '3000';
			$config['max_size'] = '4096';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('logo')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die();
			} else {
				$logo = $this->upload->data('file_name');
			}
		}
		//Set Data
		$data = [
			'pelkat' => $this->input->post('pelkat'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
            'logo' => $logo,
		];
		$submit_status = $this->Pelkat_model->setPelkat($data, $id=null);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " menambahkan pelkat " . $this->input->post('pelkat') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id, "Pelkat", $activity);
			$this->alert->SetAlert('success', 'Pelkat berhasil ditambahkan', base_url("admin/pelkat"));
		} else {
			$activity = "Admin #" . $id_admin . " menambahkan pelkat " . $this->input->post('pelkat') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id, "Pelkat", $activity);
			$this->alert->SetAlert('error', 'Pelkat gagal ditambahkan');
		}
	}
	public function updatePelkat($id){
		$current_data = $this->Pelkat_model->getOnePelkat($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/pelkat/";
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
        //Upload Logo
		if ($_FILES['logo']) {
			$logo = null;
			$config['upload_path']  = "./resource/pelkat/";
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$config['max_width'] = '3000';
			$config['max_height'] = '3000';
			$config['max_size'] = '4096';
			$config['overwrite'] = true;
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('logo')) {
				$logo = $current_data[0]->logo;
			} else {
				$logo = $this->upload->data('file_name');
			}
		} else{
			$logo = $current_data[0]->logo;
		}
	
		//Set Data
		$data = [
			'pelkat' => $this->input->post('pelkat'),
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image' => $upload,
            'logo' => $logo ,
		];
		$submit_status = $this->Pelkat_model->setPelkat($data, $id);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " edit pelkat " . $this->input->post('pelkat') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id, "Pelkat", $activity);
			$this->alert->SetAlert('success', 'Pelkat berhasil diedit', base_url("admin/pelkat"));
		} else {
			$activity = "Admin #" . $id_admin . " edit pelkat " . $this->input->post('pelkat') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id, "Pelkat", $activity);
			$this->alert->SetAlert('error', 'Pelkat gagal diedit');
		}
	}
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Pelkat_model->deletePelkat($id);
		if ($delete_status == true) {
		$callback = array(
			'status' => 'failed',
			'title' => 'Gagal!',
			'text' => 'Pelkat gagal dihapus!',
			'type' => "error",
			'icon' => "error",
		);
		$activity = "Admin #" . $id_admin . " delete data Pelkat dengan ID " . $id . ' -> FAILED';
		$this->Activitylog_model->setLog($id, "Pelkat", $activity);
		} else {
		$callback = array(
			'status' => 'created',
			'title' => 'Success',
			'text' => 'Pelkat berhasil di hapus',
			'type' => "success",
			'icon' => "success",
		);
		$activity = "Admin #" . $id_admin . " delete data Pelkat dengan ID " . $id . ' -> SUCCESS';
		$this->Activitylog_model->setLog($id, "Pelkat", $activity);
		}
		echo json_encode($callback);
	}
}