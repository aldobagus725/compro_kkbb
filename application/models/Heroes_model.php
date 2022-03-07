<?php

class Heroes_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Get All Heroes for user
	public function getAllHeroes(){
		$this->db->select('*')->from('heroes');
		return $this->db->get()->result_array();
	}
	// Get One heroes
	public function getOneHeroes($id){
		$this->db->select('*')
			->from('heroes')
			->where('id', $id);
		return $this->db->get()->row();
	}
	// Setting Heroes to be created
	public function setHeroes($post, $id){
		// var_dump($post);
		// die();
		$dumper = array();
		$this->db->trans_begin();
		if($post['is_active']=="1"){
			$allHeroes = $this->getAllHeroes();
			if ($allHeroes != null){
				foreach ($allHeroes as $h) {
					$dumper = array('id' => $h['id'],'is_active' => 0);
				}
				$data = array($dumper);
				$this->db->update_batch('heroes', $data, 'id');
			}
		} else {}
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('heroes', array(
				'title' => $post['title'],
				'image' => $post['image'] ,
				'is_active' => $post['is_active'],
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('heroes', array(
				'title' => $post['title'],
				'image' => $post['image'] ,
				'is_active' => $post['is_active'] ,
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
	public function deleteHeroes($id){
		$this->db->where('id', $id);
		$this->db->delete('heroes');
	}
	// SetPrimaryHeroes
	public function setPrimaryHeroesFlag($id){
		$this->db->trans_begin();
		$this->db->where('id', $id);
		if (!$this->db->update('heroes', array(
			"is_active" => 1,
		))) {
			log_message('error', print_r($this->db->error(), true));
		}
		// echo '<pre>'; print_r($post); die();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}
	// Primary Heroes auxiliary function setting flag only
	public function userPrimaryHeroesSetFlag($pid){
		$allHeroes = $this->getAllHeroes();
		foreach ($allHeroes as $h) {
			$dumper = array("id" => $h['id'],'flag' => 0);
		}
		$data = array($dumper);
		$this->db->update_batch('heroes', $data, 'id');
		if ($this->setPrimaryHeroesFlag($pid) == true) {
			return true;
		} else {
			return false;
		}
	}

	public function getActiveHeroes(){
		$this->db	->select('*')
					->where('is_active',"1")
					->from('heroes');
		$query = $this->db->get();
		return $query->result();
	}
}