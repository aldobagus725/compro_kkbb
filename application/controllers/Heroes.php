<?php defined('BASEPATH') or exit('No direct script access allowed');

class Heroes extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('Heroes_model');
		$this->load->model('Activitylog_model');
		if ($_SESSION['admin'] == null) {redirect("admin/login");}
	}
	// Show All Heroes
	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'heroes' => $this->Heroes_model->getAllHeroes(),
		];
		$activity = "Admin #". $id . " masuk dashboard heroes ";
		$this->Activitylog_model->setLog($id,"Heroes",$activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/heroes/heroes',$data);
		$this->load->view('backend/template/footer');
	}
	// Form Add Heroes
	public function addHeroesForm(){
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/heroes/add_heroes');
		$this->load->view('backend/template/footer');
	}
	// Form Edit Heroes
	public function editHeroesForm($id){
		$data = [
			'heroes' => $this->Heroes_model->getOneHeroes($id),
		];
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/heroes/edit_heroes',$data);
		$this->load->view('backend/template/footer');
	}
	// Set Heroes
	public function setHeroes(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = './resource/heroes/';
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die;
			} else {
				$upload = $this->upload->data('file_name');
			}
		}
		//Set Data
		$data = [
			'title' => $this->input->post('title'),
			'image' => $upload,
			'is_active' => $this->input->post('is_active'),
		];
		//Save to db
		if ($this->Heroes_model->setHeroes($data,$id=null)) {
			$activity = "Admin #". $id_admin . " membuat herores dengan judul ".$this->input->post('title')." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
			$this->alert->SetAlert('success', 'Data heroes berhasil ditambahkan', base_url("admin/heroes"));
		} else {
			$activity = "Admin #". $id_admin . " membuat heroes dengan judul ".$this->input->post('title')." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
			$this->alert->SetAlert('error', 'Data heroes gagal ditambahkan');
		}
	}
	// Update Heroes
	public function updateHeroes($id){
		$current_data = $this->Heroes_model->getOneHeroes($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = './resource/heroes/';
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
				$upload = $current_data->image;
			} else {
				$upload = $this->upload->data('file_name');
			}
		}
		else{
			$upload = $current_data->image;
		}
		//Set Data
		$data = [
			'title' => $this->input->post('title'),
			'image' => $upload,
			'is_active' => $this->input->post('is_active'),
		];
		//Save to db
		if ($this->Heroes_model->setHeroes($data,$id)) {
			$activity = "Admin #". $id_admin . " mengubah heroes dengan judul ".$this->input->post('title')." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
			$this->alert->SetAlert('success', 'Data heroes berhasil ditambahkan', base_url("admin/heroes"));
		} else {
			$activity = "Admin #". $id_admin . " mengubah heroes dengan judul ".$this->input->post('title')." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
			$this->alert->SetAlert('error', 'Data heroes gagal ditambahkan');
		}
	}
	// deleteHeroes
	public function delete($id){
		$id_admin = $_SESSION['admin']->id;
		$current_data = $this->Heroes_model->getOneHeroes($id);
		if($this->Heroes_model->deleteHeroes($id)){
			$callback = array(
				'status'=> 'failed',
				'title' => 'Gagal!',
				'text' => 'Data gagal dihapus!',
				'type' => "error",
				'icon' => "error",
			);
			$activity = "Admin #". $id_admin . " menghapus heroes ".$current_data->title." -> FAIL!";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
		}
		else{
			$callback = array(
				'status'=> 'created',
				'title' => 'Success',
				'text' => 'Data berhasil di hapus',
				'type' => "success",
				'icon' => "success",
			);
			$activity = "Admin #". $id_admin . " menghapus heroes ".$current_data->title." -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin,"Heroes",$activity);
		}
		echo json_encode($callback); 
	}
}
