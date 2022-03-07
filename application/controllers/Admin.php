<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Usersrole_model');
		$this->load->model('Activitylog_model');
		date_default_timezone_set('Asia/Singapore');
		if ($_SESSION['admin'] == null) {
			redirect("admin/login");
		}
	}
	public function index(){
		$id_admin = $_SESSION['admin']->id;
		$data = [
			'allAdmins' => $this->Admin_model->getAllAdmins(),
			'allRoles' => $this->Usersrole_model->getAllRole(),
		];
		$activity = "Admin #". $id_admin . " masuk dashboard admin ";
		$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		$this->load->view('backend/template/header');
        $this->load->view('backend/template/sidebar');
        $this->load->view('backend/admins/users_admin',$data);
        $this->load->view('backend/template/footer');
	}
	public function set(){
		$id_admin = $_SESSION['admin']->id;
		$post['username'] = $_POST['username'];
		$post['email'] = $_POST['email'];
		$post['fullname'] = $_POST['fullname'];
		$post['password'] = password_hash(base64_decode($_POST['password']), PASSWORD_DEFAULT);
		$post['id_role'] = $_POST['id_role'];
		$adminChecker = $this->Admin_model->getValidAdmin($post['username']);
		if ($adminChecker == false) {
			$submitStatus = $this->Admin_model->setAdmin($post);
			if ($submitStatus) {
				$callback = array(
					'status' => 'success',
					'title' => 'Success',
					'text' => 'Data berhasil disimpan!',
					'type' => "success",
					'icon' => "success",
				);
				$activity = "Admin #". $id_admin . " membuat admin baru dengan username ". $post['username']. ' -> SUCCESS';
				$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
			} else {
				$callback = array(
					'status' => 'failed',
					'title' => 'Gagal!',
					'text' => 'Data gagal disimpan!',
					'type' => "error",
					'icon' => "error",
				);
				$activity = "Admin #". $id_admin . " membuat admin baru dengan username ". $post['username']. ' -> FAILED';
				$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
			}
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Gagal! User sudah ada!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " membuat admin baru dengan username ". $post['username']. ' -> FAILED (EXIST)';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		}
		echo json_encode($callback);
	}

	public function update($id){
		$id_admin = $_SESSION['admin']->id;
		$post['fullname'] = $_POST['fullname'];
		$post['username'] = $_POST['username'];
		$post['email'] = $_POST['email'];
		$post['id_role'] = $_POST['id_role'];
		$submitStatus = $this->Admin_model->updateAdmin($post, $id);
		if ($submitStatus == true) {
			$callback = array(
				'status' => 'success',
				'title' => 'Success',
				'text' => 'Data berhasil disimpan!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " update data admin dengan username ". $post['username']. ' -> SUCCESS';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Data gagal disimpan!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " update data admin dengan username ". $post['username']. ' -> FAILED';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		}
		echo json_encode($callback);
	}

	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$delete_status = $this->Admin_model->deleteAdmin($id);
		if ($delete_status == true) {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Data gagal dihapus!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " delete data admin dengan ID ". $id. ' -> FAILED';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		} else {
			$callback = array(
				'status' => 'created',
				'title' => 'Success',
				'text' => 'Data berhasil dihapus!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " delete data admin dengan ID ". $id. ' -> SUCCESS';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		}
		echo json_encode($callback);
	}

	public function changePassword($id){
		$id_admin = $_SESSION['admin']->id;
		$password = password_hash(base64_decode($_POST['password']), PASSWORD_DEFAULT);
		$passwordStatus = $this->Admin_model->setAdminPassword($password, $id);
		if ($passwordStatus == true) {
			$callback = array(
				'status' => 'success',
				'title' => 'Success',
				'text' => 'Password berhasil diubah!',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " change password admin dengan ID ". $id. ' -> SUCCESS';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		} else {
			$callback = array(
				'status' => 'failed',
				'title' => 'Gagal!',
				'text' => 'Password gagal diubah!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " change password admin dengan ID ". $id. ' -> FAILED';
			$this->Activitylog_model->setLog($id_admin,"Admin",$activity);
		}
		echo json_encode($callback);
	}
}
