<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$this->load->view('frontend/template/header.php');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/sidebar.php');
		$this->load->view('frontend/template/footer.php');
	}
}