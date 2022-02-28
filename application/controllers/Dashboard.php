<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        // $this->load->model('Notification_model');
        $this->load->model('Activitylog_model');
        date_default_timezone_set('Asia/Singapore');
        if ($_SESSION['admin'] == null) {
            redirect("admin/login");
        }
    }
    public function index(){
        $id = $_SESSION['admin']->id;
        // $notification = array();
        // if ($_SESSION['admin']->nama_role != 'superadmin') {
        //     $notification = $this->Notification_model->getAllAdminNotif($_SESSION['admin']->id);
        // } else {
        //     $notification = $this->Notification_model->getAllSuperAdminNotif();
        // }
            $data = [
            // 'totalProducts' => $this->Admin_model->countAllProducts(),
            // 'totalUsers' => $this->Admin_model->countAllCustomer(),
            // 'totalOrders' => $this->Admin_model->countAllOrders(),
            // 'allNotifications' => $notification
            ];
        $activity = "Admin #" . $id . " masuk dashboard utama";
        $this->Activitylog_model->setLog($id,'Access', $activity);
        $this->load->view('backend/template/header');
        $this->load->view('backend/template/sidebar');
        $this->load->view('backend/dashboard');
        $this->load->view('backend/template/footer');
    }
}
