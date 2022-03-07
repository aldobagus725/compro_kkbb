<?php
class Pelkat_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllPelkat(){
		$this->db   
                    ->select('id, pelkat, title, body,image, slug, created_at, updated_at, logo')
                    ->from('pelkat');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOnePelkat
	public function getOnePelkat($id){
		$this->db->select('*')->from('pelkat')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getPelkatByTitle
	public function getPelkatByTitle($pelkat){
		$this->db->select('*')->from('pelkat')->where('pelkat', $pelkat);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// getPelkatBySlug
	public function getPelkatBySlug($slug){
		$this->db->select('*')->from('pelkat')->where('slug', $slug);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// Setting Pelkat to be created
	public function setPelkat($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('pelkat', array(
				'pelkat' => $post['pelkat'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
                'image' => $post['image'] ,
				'logo' => $post['logo'] ,
				'slug' => strtolower(str_replace(" ","_",trim($post['pelkat']))),
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('pelkat', array(
				'pelkat' => $post['pelkat'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
                'image' => $post['image'] ,
				'logo' => $post['logo'] ,
				'slug' => strtolower(str_replace(" ","_",trim($post['pelkat']))),
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
	// delete Pelkat
	public function deletePelkat($id){
		$this->db->where('id', $id);
		$this->db->delete('pelkat');
	}
	// pelkatChecker
	public function pelkatChecker($post){
		$this->db->select('*')
			->where('pelkat', $post['pelkat'])
            ->where('title', $post['title']);
		$query = $this->db->get('pelkat');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
