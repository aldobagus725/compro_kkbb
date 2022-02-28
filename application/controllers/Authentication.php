<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * This is the class for authentication etc....
 */
class Authentication extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('Admin_model');
		$this->load->model('Activitylog_model');
	}
	// Customers Login Verification
	// public function login($username, $password){
	// 	$result = $this->Customers_model->getValidCustomer($username);
	// 	if ($result == true) {
	// 		$passwordValid = $this->Customers_model->getCustomerPassword($username);
	// 		if (password_verify($password, $passwordValid->password) || $password == $passwordValid->password) {
	// 			$_SESSION['profile'] = $this->Customers_model->getCustomerInfo($username);
	// 			$_SESSION['jenis_pengiriman'] = 'ambil_sendiri';
	// 			$this->Customers_model->setLastLogin('customers', $_SESSION['profile']->id);
	// 			redirect('store');
	// 		} else {
	// 			$this->alert->SetAlert('error', 'Username/password invalid!');
	// 		}
	// 	} else {
	// 		$this->alert->SetAlert('error', 'Username/password invalid!');
	// 	}
	// }
	// Admin Login Verification
	public function loginAdmin($username, $password){
		$result = $this->Admin_model->getValidAdmin($username);
		if ($result == true) {
			$passwordValid = $this->Admin_model->getAdminPassword($username);
			// var_dump($password);
			// var_dump(password_verify($password, $passwordValid->password));
			// die();
			if (password_verify($password, $passwordValid->password)) {
				$_SESSION['admin'] = $this->Admin_model->getAdminInfo($username);
				$this->Admin_model->setLastLogin('admin', $_SESSION['admin']->id);
				$activity = "Admin #" . $_SESSION['admin']->id . " logged in ";
				$this->Activitylog_model->setLog($_SESSION['admin']->id, "Login", $activity);
				redirect('admin');
			} else {
				$this->alert->SetAlert('error', 'Username/password invalid!');
			}
		} else {
			$this->alert->SetAlert('error', 'Username/password invalid!');
		}
	}
	// Customers Login
	// public function viewLoginCustomers()
	// {
	// 	if (isset($_SESSION['profile']) != null) {
	// 		redirect('store');
	// 	} else {
	// 		$username = $this->input->post('username', TRUE);
	// 		$password = $this->input->post('password', TRUE);
	// 		if (isset($_POST['login'])) {
	// 			$this->login($username, $password);
	// 		}
	// 		$this->load->view('frontend/login_customer/login');
	// 	}
	// }
	// Admin Login
	public function viewLoginAdmin()
	{
		if (isset($_SESSION['admin']) != null) {
			redirect('admin');
		} else {
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			if (isset($_POST['login'])) {
				$this->loginAdmin($username, $password);
			}
			$this->load->view('backend/login');
		}
	}

	public function change_password()
	{
	}

	public function forgot_password()
	{
	}

	public function register()
	{
	}
	// Logout Customers
	public function logout(){
		// Logout Admin
		if (isset($_SESSION['admin'])) {	
			$activity = "Admin #" . $_SESSION['admin']->id . " logged out ";
			$this->Activitylog_model->setLog($_SESSION['admin']->id,'Logout', $activity);
			$this->session->unset_userdata('admin');
			redirect('admin/login');
		}
		// Coming Soon Logout Jemaat/User Biasa
		else if (isset($_SESSION['profile'])){
			$this->session->unset_userdata('profile');
			redirect('/');
		}
		
	}
}
