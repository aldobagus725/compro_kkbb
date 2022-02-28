<?php defined('BASEPATH') or exit('No direct script access allowed');

class UsersRole extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('Usersrole_model');
		$this->load->model('Activitylog_model');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'allRole' => $this->Usersrole_model->getAllRole(),
		];
		$activity = "Admin #". $id . " masuk dashboard role";
		$this->Activitylog_model->setLog($id,$activity);
		$this->template->load('backend/template', 'backend/users_role/users_role', $data);
	}
	public function set($id = null){
		$id_admin = $_SESSION['admin']->id;
		$post['nama_role'] = $_POST['nama_role'];
		$combiChecker = $this->Usersrole_model->roleChecker($post);
		if ($combiChecker == false) {
			$submitStatus = $this->Usersrole_model->setRole($post, $id);
			if ($submitStatus) {
				$callback = array(
					'status' => 'success',
					'title' => 'Success',
					'text' => 'Data berhasil disimpan!',
					'type' => "success",
					'icon' => "success",
				);
				$activity = "Admin #". $id_admin . " membuat role baru - ".$post['nama_role']." -> SUCCESS";
				$this->Activitylog_model->setLog($id_admin,$activity);
			} else {
				$callback = array(
					'status' => 'failed',
					'title' => 'Gagal!',
					'text' => 'Data gagal disimpan!',
					'type' => "error",
					'icon' => "error",
				);
				$activity = "Admin #". $id_admin . " membuat role baru - ".$post['nama_role']." -> FAILED";
				$this->Activitylog_model->setLog($id_admin,$activity);
			}
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Gagal! Data sudah ada!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " membuat role baru - ".$post['nama_role']." -> FAILED (EXIST)";
			$this->Activitylog_model->setLog($id_admin,$activity);
		}
		echo json_encode($callback);
	}
	public function delete($id)
	{
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Usersrole_model->deleteRole($id);
		if ($delete_status == true) {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Data gagal dihapus!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " delete role - ".$id." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,$activity);
		} else {
			$callback = array(
				'status' => 'created',
				'title' => 'Success',
				'text' => 'Data berhasil dihapus!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " delete role - ".$id." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,$activity);
		}
		echo json_encode($callback);
	}
}