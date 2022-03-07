<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Activitylog_model');
		$this->load->model('Pages_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
  	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allPages' => $this->Pages_model->getAllPages(),
		];
		$activity = "Admin #" . $id . " masuk dashboard Pages";
		$this->Activitylog_model->setLog($id,"Pages", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pages/pages',$data);
		$this->load->view('backend/template/footer');
	}

	public function addPagesForm(){
		$id = $_SESSION['admin']->id;
		$activity = "Admin #" . $id . " masuk dashboard add Pages";
		$this->Activitylog_model->setLog($id,"Pages", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pages/add_pages');
		$this->load->view('backend/template/footer');
	}
	public function editPagesForm($id){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'pages' => $this->Pages_model->getOnePages($id),
		];
		$activity = "Admin #" . $id . " masuk dashboard edit Pages";
		$this->Activitylog_model->setLog($id_admin,"Pages", $activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/pages/edit_pages',$data);
		$this->load->view('backend/template/footer');
	}

	public function setPages(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/pages/";
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
            'title' => $this->input->post('title'),
            'image' => $upload,
            'body' => $this->input->post('body'),
			'type' => $this->input->post('type'),
		];
		$submit_status = $this->Pages_model->setPages($data, $id=null);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " menambahkan pages " . $this->input->post('pages') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
			$this->alert->SetAlert('success', 'Pages berhasil ditambahkan', base_url("admin/pages"));
		} else {
			$activity = "Admin #" . $id_admin . " menambahkan pages " . $this->input->post('pages') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
			$this->alert->SetAlert('error', 'Pages gagal ditambahkan');
		}
	}
	public function updatePages($id){
		$current_data = $this->Pages_model->getOnePages($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = "./resource/pages/";
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
            'title' => $this->input->post('title'),
            'image' => $upload,
            'body' => $this->input->post('body'),
			'type' => $this->input->post('type'),
		];
		$submit_status = $this->Pages_model->setPages($data, $id);
		// Save to db
		if ($submit_status==true) {
			$activity = "Admin #" . $id_admin . " edit pages " . $this->input->post('pages') . "|" . " -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
			$this->alert->SetAlert('success', 'Pages berhasil diedit', base_url("admin/pages"));
		} else {
			$activity = "Admin #" . $id_admin . " edit pages " . $this->input->post('pages') . "|" . " -> FAIL!";
			$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
			$this->alert->SetAlert('error', 'Pages gagal diedit');
		}
	}
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Pages_model->deletePages($id);
		if ($delete_status == true) {
		$callback = array(
			'status' => 'failed',
			'title' => 'Gagal!',
			'text' => 'Pages gagal dihapus!',
			'type' => "error",
			'icon' => "error",
		);
		$activity = "Admin #" . $id_admin . " delete data Pages dengan ID " . $id . ' -> FAILED';
		$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
		} else {
		$callback = array(
			'status' => 'created',
			'title' => 'Success',
			'text' => 'Pages berhasil di hapus',
			'type' => "success",
			'icon' => "success",
		);
		$activity = "Admin #" . $id_admin . " delete data Pages dengan ID " . $id . ' -> SUCCESS';
		$this->Activitylog_model->setLog($id_admin, "Pages", $activity);
		}
		echo json_encode($callback);
	}
}