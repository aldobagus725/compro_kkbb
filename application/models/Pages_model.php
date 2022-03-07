<?php
class Pages_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllPages(){
		$this->db   
                    ->select('id, title, body, type, slug, image, created_at, updated_at')
                    ->from('pages');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOnePages
	public function getOnePages($id){
		$this->db->select('*')->from('pages')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOnePages
	public function getPagesBySlug($slug){
		$this->db->select('*')->from('pages')->where('slug', $slug);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// getPagesByType
	public function getPagesByType($type){
		$this->db->select('*')->from('pages')->where('type', $type);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// getPagesByType
	public function getBeritaDuka(){
		$this->db->select('*')->from('pages')->where('type', "berita_duka")->order_by('created_at asc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// Setting Pages to be created
	public function setPages($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('pages', array(
				'title' => $post['title'] ,
				'body' => $post['body'] ,
				'type' => $post['type'] ,
                'image' => $post['image'] ,
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('pages', array(
				'slug' => strtolower(str_replace(" ","_",trim($post['title']))) ,
				'title' => $post['title'] ,
				'body' => $post['body'] ,
				'type' => $post['type'] ,
                'image' => $post['image'] ,
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
	// deletePages
	public function deletePages($id){
		$this->db->where('id', $id);
		$this->db->delete('pages');
	}
	// pagesChecker
	public function pagesChecker($post){
		$this->db->select('*')
            ->where('title', $post['title']);
		$query = $this->db->get('pages');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
