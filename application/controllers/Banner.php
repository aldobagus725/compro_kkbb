<?php defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('Banner_model');
		$this->load->model('Activitylog_model');
		if ($_SESSION['admin'] == null) {redirect("admin/login");}
	}
	// Show All Banners
	public function index(){
		$id = $_SESSION['admin']->id;
		$data = [
			'banner' => $this->Banner_model->getAllBanners(),
		];
		$activity = "Admin #". $id . " masuk dashboard banner ";
		$this->Activitylog_model->setLog($id,'Banner',$activity);
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/banner/banner',$data);
		$this->load->view('backend/template/footer');
	}
	// Form Add Banners
	public function addBannerForm(){
		$data = [
			'pos' => $this->Banner_model->getAllPos(),
			'banner' => $this->Banner_model->getAllBanners(),
		];
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/banner/add_banner',$data);
		$this->load->view('backend/template/footer');
	}
	// Form Add Banners
	public function editBannerForm($id){
		$data = [
			'banner' => $this->Banner_model->getOneBanner($id),
		];
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/banner/edit_banner',$data);
		$this->load->view('backend/template/footer');
	}
	// Set Banner
	public function setBanner(){
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = './resource/banner/';
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
			'position' => $this->input->post('position'),
			'visibility' => $this->input->post('visibility'),
		];
		//Save to db
		if ($this->Banner_model->setBanner($data,$id=null)) {
			$activity = "Admin #". $id_admin . " membuat banner dengan judul ".$this->input->post('judul_banner')." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
			$this->alert->SetAlert('success', 'Data banner berhasil ditambahkan', base_url("admin/banner"));
		} else {
			$activity = "Admin #". $id_admin . " membuat banner dengan judul ".$this->input->post('judul_banner')." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
			$this->alert->SetAlert('error', 'Data banner gagal ditambahkan');
		}
  	}
	// Update Banner
  	public function updateBanner($id){
		$current_data = $this->Banner_model->getOneBanner($id);
		$id_admin = $_SESSION['admin']->id;
		//Upload Image
		if ($_FILES['image']) {
			$upload = null;
			$config['upload_path']  = './resource/banner/';
			$config['allowed_types']  = "jpg|png|gif|jpeg";
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {
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
			'title' => $this->input->post('title'),
			'image' => $upload,
			'position' => $this->input->post('position'),
			'visibility' => $this->input->post('visibility'),
		];
		//Save to db
		if ($this->Banner_model->setBanner($data,$id)) {
			$activity = "Admin #". $id_admin . " mengubah banner dengan judul ".$this->input->post('judul_banner')." -> SUCCESS";
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
			$this->alert->SetAlert('success', 'Data banner berhasil ditambahkan', base_url("admin/banner"));
		} else {
			$activity = "Admin #". $id_admin . " mengubah banner dengan judul ".$this->input->post('judul_banner')." -> FAILED";
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
			$this->alert->SetAlert('error', 'Data banner gagal ditambahkan');
		}
	}
	// deleteBanner
	public function delete($id){
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
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
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
			$this->Activitylog_model->setLog($id_admin,"Banner",$activity);
        }
        echo json_encode($callback); 
	}

	// public function getAllPosition(){
	// 	return $this->Banner_model->getAllPos();
	// }
}
