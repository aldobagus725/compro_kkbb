<?php defined('BASEPATH') or exit('No direct script access allowed');

    class Frontend extends CI_Controller{
        var $sektor;
        public function __construct(){
            parent::__construct();
            $this->sektor = array(
                'Anthiokia',
                'Betlehem',
                'Corinthians',
                'Damsyik',
                'Efrata',
                'Filipi',
                'Galilea',
                'Hermon'
            );
            // $this->load->model('Warung_model');
            // $this->load->model('Usersrole_model');
            // $this->load->model('Customers_model');
            $this->load->model('Activitylog_model');
            $this->load->model('Presbiter_model');
            $this->load->model('Pelkat_model');
            $this->load->model('Kmj_model');
            $this->load->model('Pages_model');
            // $this->load->model('Notification_model');
            // $this->load->model('Settings_model');
            date_default_timezone_set('Asia/Singapore');
            // if ($_SESSION['admin'] == null) {
            //     redirect("admin/login");
            // }
 
        }
        public function index(){
            $header = [
                'sektor' => $this->sektor,
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/home');
            $this->load->view('frontend/template/sidebar');
            $this->load->view('frontend/template/footer');
        }
        public function viewPresbiter($presbiter){
            $header = [
                'sektor' => $this->sektor,
            ];
            $data = [
                'presbiter' => $this->Presbiter_model->getPresbiterByTitle($presbiter),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/presbiter',$data);
            $this->load->view('frontend/template/sidebar');
            $this->load->view('frontend/template/footer');
        }
        public function viewPelkat($pelkat){
            $header = [
                'sektor' => $this->sektor,
            ];
            $data = [
                'pelkat' => $this->Pelkat_model->getPelkatByTitle($pelkat),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/pelkat',$data);
            $this->load->view('frontend/template/sidebar');
            $this->load->view('frontend/template/footer');
        }
        public function viewKmj(){
            $header = [
                'sektor' => $this->sektor,
            ];
            $data = [
                'kmj' => $this->Kmj_model->getAllKmj(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/kmj',$data);
            $this->load->view('frontend/template/sidebar');
            $this->load->view('frontend/template/footer');
        }
        public function viewPages($slug){
            $header = [
                'sektor' => $this->sektor,
            ];
            $data = [
                'pages' => $this->Pages_model->getPagesBySlug($slug),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/pages',$data);
            $this->load->view('frontend/template/sidebar');
            $this->load->view('frontend/template/footer');
        }
    }
?>