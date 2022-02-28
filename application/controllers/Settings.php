<?php defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('Settings_model');
		$this->load->model('Activitylog_model');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
	// see all settings
	public function index(){
		$data = [
			'allSettings' => $this->Settings_model->getAllSettings(),
		];
		$id = $_SESSION['admin']->id;
		$activity = "Admin #". $id . " masuk dashboard settings";
		$this->Activitylog_model->setLog($id,"Settings",$activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/settings/settings',$data);
		$this->load->view('backend/template/footer');
	}
	// logs
	public function logs(){
		$data = [
			'activityLog' => $this->Activitylog_model->getAdminLog(),
		];
		$id = $_SESSION['admin']->id;
		$activity = "Admin #". $id . " melihat system logs";
		$this->Activitylog_model->setLog($id,"Settings",$activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/settings/logs',$data);
		$this->load->view('backend/template/footer');
	}
	// set Settings
	public function set($id = null){
		$id_admin = $_SESSION['admin']->id;
		$post['value'] = $_POST['value'];
		$post['name'] = $_POST['name'];
		$post['title'] = $_POST['title'];
		$submitStatus = $this->Settings_model->setSettings($post, $id);
		if ($submitStatus) {
			$callback = array(
				'status' => 'success',
				'title' => 'Success',
				'text' => 'Settings berhasil disimpan!',
				'type' => "success",
				'icon' => "success",
			);
			
			$activity = "Admin #". $id_admin . " set settings '" . $post['title'] . "' -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Settings gagal disimpan!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " set settings '" . $post['title'] . "' -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		}
		echo json_encode($callback);
	}
	// delete Settings
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Settings_model->deleteSettings($id);
		if ($delete_status == true) {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Settings gagal dihapus!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " delete settings - ".$id." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		} else {
			$callback = array(
				'status' => 'created',
				'title' => 'Success',
				'text' => 'Settings berhasil dihapus!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " delete settings - ".$id." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		}
		echo json_encode($callback);
	}

	public function clearLog(){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Activitylog_model->clear_log();
		if ($delete_status == false) {
			$callback = array(
				'status' => 'created',
				'title' => 'Success',
				'text' => 'Log berhasil dihapus!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " mengosongkan actvity log -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Log gagal dihapus!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " mengosongkan actvity log -> FAILED!";
			$this->Activitylog_model->setLog($id_admin,"Settings",$activity);
		}
		echo json_encode($callback);
	}
}
