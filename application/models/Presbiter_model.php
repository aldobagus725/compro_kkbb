<?php
class Presbiter_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllPresbiter(){
		$this->db   
                    ->select('id, presbiter, title, body,image, slug, created_at, updated_at')
                    ->from('presbiter');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOnePresbiter
	public function getOnePresbiter($id){
		$this->db->select('*')->from('presbiter')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getPresbiterByTitle
	public function getPresbiterByTitle($presbiter){
		$this->db->select('*')->from('presbiter')->where('presbiter', $presbiter);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// getPresbiterBySlug
	public function getPresbiterBySlug($slug){
		$this->db->select('*')->from('presbiter')->where('slug', $slug);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// Setting Presbiter to be created
	public function setPresbiter($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('presbiter', array(
				'presbiter' => $post['presbiter'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
                'image' => $post['image'] ,
				'slug' => strtolower(str_replace(" ","_",trim($post['presbiter']))),
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('presbiter', array(
				'presbiter' => $post['presbiter'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
                'image' => $post['image'] ,
				'slug' => strtolower(str_replace(" ","_",trim($post['presbiter']))),
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}
	// delete Presbiter
	public function deletePresbiter($id){
		$this->db->where('id', $id);
		$this->db->delete('presbiter');
	}
	// presbiterChecker
	public function presbiterChecker($post){
		$this->db->select('*')
			->where('presbiter', $post['presbiter'])
            ->where('title', $post['title']);
		$query = $this->db->get('presbiter');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
