<?php
class Komisi_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllKomisi(){
		$this->db   
                    ->select('id, komisi, title, body,image, created_at, updated_at')
                    ->from('komisi');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOneKomisi
	public function getOneKomisi($id){
		$this->db->select('*')->from('komisi')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getKomisiByTitle
	public function getKomisiByTitle($komisi){
		$this->db->select('*')->from('komisi')->where('komisi', $komisi);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	// Setting Komisi to be created
	public function setKomisi($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('komisi', array(
				'komisi' => $post['komisi'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
                'image' => $post['image'] ,
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('komisi', array(
				'komisi' => $post['komisi'],
				'title' => $post['title'] ,
				'body' => $post['body'] ,
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
	// delete Komisi
	public function deleteKomisi($id){
		$this->db->where('id', $id);
		$this->db->delete('komisi');
	}
	// komisiChecker
	public function komisiChecker($post){
		$this->db->select('*')
			->where('komisi', $post['komisi'])
            ->where('title', $post['title']);
		$query = $this->db->get('komisi');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
