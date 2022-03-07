<?php defined('BASEPATH') or exit('No direct script access allowed');

    class Frontend extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Activitylog_model');
            $this->load->model('Presbiter_model');
            $this->load->model('Pelkat_model');
            $this->load->model('Kmj_model');
            $this->load->model('Pages_model');
            $this->load->model('Komisi_model');
            $this->load->model('Banner_model');
            $this->load->model('Heroes_model');
            date_default_timezone_set('Asia/Singapore');
        }
        public function index(){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'banners' =>$this->Banner_model->getBannersFrontend(),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
                
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/home',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
        public function viewPresbiter($presbiter){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'presbiters' => $this->Presbiter_model->getPresbiterBySlug($presbiter),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/presbiter',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
        public function viewPelkat($pelkat){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'pelkats' => $this->Pelkat_model->getPelkatByTitle($pelkat),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/pelkat',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
        public function viewKmj(){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'kmj' => $this->Kmj_model->getAllKmj(),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/kmj',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
        public function viewKomisi($slug){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'komisis' => $this->Komisi_model->getKomisiBySlug($slug),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/komisi',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
        public function viewPages($slug){
            $header = [
                'presbiter' => $this->Presbiter_model->getAllPresbiter(),
                'pelkat' => $this->Pelkat_model->getAllPelkat(),
                'komisi' => $this->Komisi_model->getAllKomisi(),
                'heroes' => $this->Heroes_model->getActiveHeroes(),
            ];
            $data = [
                'pages' => $this->Pages_model->getPagesBySlug($slug),
            ];
            $footer = [
                'berita_duka' =>$this->Pages_model->getBeritaDuka(),
            ];
            $this->load->view('frontend/template/header',$header);
            $this->load->view('frontend/pages',$data);
            $this->load->view('frontend/template/footer',$footer);
        }
    }
?>