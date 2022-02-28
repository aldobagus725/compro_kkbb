<?php
class Kmj_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllKmj(){
		$this->db   
                    ->select('id, nama_lengkap, periode, image, created_at, updated_at')
                    ->from('kmj');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// getOneKmj
	public function getOneKmj($id){
		$this->db->select('*')->from('kmj')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
		}
        else{
            return false;
        }
	}
	// Setting Kmj to be created
	public function setKmj($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('kmj', array(
				'nama_lengkap' => $post['nama_lengkap'],
				'periode' => $post['periode'] ,
                'image' => $post['image'] ,
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('kmj', array(
				'nama_lengkap' => $post['nama_lengkap'],
				'periode' => $post['periode'] ,
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
	// delete Kmj
	public function deleteKmj($id){
		$this->db->where('id', $id);
		$this->db->delete('kmj');
	}
	// kmjChecker
	public function kmjChecker($post){
		$this->db->select('*')
			->where('nama_lengkap', $post['nama_lengkap']);
		$query = $this->db->get('kmj');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
