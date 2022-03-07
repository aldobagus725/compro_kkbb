<?php

class Banner_model extends CI_model{
	public function __construct()
	{
		parent::__construct();
	}
	// Get All banners for user
	public function getAllBanners(){
		$this->db->select('*')->from('banner');
		return $this->db->get()->result_array();
	}
	// Get All banners for user
	public function getBannersFrontend(){
		$this->db->select('*')->from('banner');
		$this->db->where('visibility',"1");
		$this->db->order_by('position asc');
		return $this->db->get()->result_array();
	}
	// Get One Banner
	public function getOneBanner($id){
		$this->db->select('*')
			->from('banner')
			->where('id', $id);
		return $this->db->get()->row();
	}
	// Get all Position
	public function getAllPos(){
		$this->db->select('id, title, position')->from('banner');
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return 0;
		}
	}
	// Setting Banner to be created
	public function setBanner($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('banner', array(
				'title' => $post['title'],
				'image' => $post['image'] ,
				'position' => $post['position'] ,
                'visibility' => $post['visibility'] ,
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('banner', array(
				'title' => $post['title'],
				'image' => $post['image'] ,
				'position' => $post['position'] ,
                'visibility' => $post['visibility'] ,
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
	// delete banner
	public function deleteBanner($id){
		$this->db->where('id', $id);
		$this->db->delete('banner');
	}
}
