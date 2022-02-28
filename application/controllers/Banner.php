<?php defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('Banner_model');
		$this->load->model('Usersarea_model');
		$this->load->model('Activitylog_model');
		if ($_SESSION['admin'] == null) {redirect("admin/login");}
	}
	// Show All Banners
	public function showAllBanners(){
		$id = $_SESSION['admin']->id;
		$data = [
			'banner' => $this->Banner_model->getAllAdminBanners(),
		];
		$activity = "Admin #". $id . " masuk dashboard banner ";
		$this->Activitylog_model->setLog($id,$activity);
		$this->template->load('backend/template', 'backend/banner/banner', $data);
	}
	// Form Add Banners
	public function addBannersForm(){
		$data = [
			'allArea' => $this->Usersarea_model->getAllArea(),
		];
		$this->template->load('backend/template', 'backend/banner/add_banner', $data);
	}
	// Form Add Banners
	public function editBannersForm($id){
		$data = [
			'banner' => $this->Banner_model->getOneBanner($id),
			'allArea' => $this->Usersarea_model->getAllArea(),
		];
		$this->template->load('backend/template', 'backend/banner/edit_banner', $data);
	}
	// Add Banners Process
	public function addBanner(){
		$id = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['file_banner']) {
			$upload = null;
			$config['upload_path']  = './resources/images/';
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_banner')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die;
			} else {
				$upload = $this->upload->data('file_name');
			}
		}
		//Set Data
		$data = [
			'judul_banner' => $this->input->post('judul_banner'),
			'file_banner' => $upload,
			'id_area' => $this->input->post('id_area'),
		];
		//Save to db
		if ($this->Banner_model->insert($table = 'banner', $data)) {
			$activity = "Admin #". $id . " membuat banner dengan judul ".$this->input->post('judul_banner')." -> SUCCESS";
			$this->Activitylog_model->setLog($id,$activity);
			$this->alert->SetAlert('success', 'Data banner berhasil ditambahkan', base_url("admin/banner"));
		} else {
			$activity = "Admin #". $id . " membuat banner dengan judul ".$this->input->post('judul_banner')." -> FAILED";
			$this->Activitylog_model->setLog($id,$activity);
			$this->alert->SetAlert('error', 'Data banner gagal ditambahkan');
		}
  	}
  	public function editBanner($id){
		$current_data = $this->Banner_model->getOneBanner($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['file_banner']) {
			$upload = null;
			$config['upload_path']  = './resources/images/';
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_banner')) {
				$upload = $current_data->file_banner;
			} else {
				$upload = $this->upload->data('file_name');
			}
		}
		else{
			$upload = $current_data->file_banner;
		}
		//Set Data
		$data = [
			'judul_banner' => $this->input->post('judul_banner'),
			'file_banner' => $upload,
			'id_area' => $this->input->post('id_area'),
		];
		$table = "banner";
		//Save to db
		if ($this->Banner_model->update($table, ['id' => $id], $data)) {
			$activity = "Admin #". $id_admin . " mengubah banner dengan judul ".$this->input->post('judul_banner')." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,$activity);
			$this->alert->SetAlert('success', 'Data banner berhasil ditambahkan', base_url("admin/banner"));
		} else {
			$activity = "Admin #". $id_admin . " mengubah banner dengan judul ".$this->input->post('judul_banner')." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,$activity);
			$this->alert->SetAlert('error', 'Data banner gagal ditambahkan');
		}
	}

	// deleteBanner
	public function deleteBanner($id){
		$id_admin = $_SESSION['admin']->id;
		$current_data = $this->Banner_model->getOneBanner($id);
		if($this->Banner_model->deleteBanner($id)){
            $callback = array(
                'status'=> 'failed',
                'title' => 'Gagal!',
                'text' => 'Data gagal dihapus!',
                'type' => "error",
                'icon' => "error",
            );
			$activity = "Admin #". $id_admin . " menghapus banner ".$current_data->judul_banner." -> FAIL!";
			$this->Activitylog_model->setLog($id_admin,$activity);
        }
        else{
            $callback = array(
                'status'=> 'created',
                'title' => 'Success',
                'text' => 'Data berhasil di hapus',
                'type' => "success",
                'icon' => "success",
            );
			$activity = "Admin #". $id_admin . " menghapus banner ".$current_data->judul_banner." -> SUCCESS!";
			$this->Activitylog_model->setLog($id_admin,$activity);
        }
        echo json_encode($callback); 
	}
}
