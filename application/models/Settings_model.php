<?php

class Settings_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// getAllSettings
	public function getAllSettings(){
		$this->db->select('*')->from('settings');
		$query = $this->db->get();
		return $query->result();
	}
	public function getSettings($settings_name)
	{
		$this->db->select('*')->where('name', $settings_name);
		$this->db->from('settings');
		$query = $this->db->get();
		return $query->row();
	}
	// Setters to setSettings
	public function setSettings($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('settings', array(
				'value' => $post['value'],
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('settings', array(
				'title' => $post['title'],
				'name' => str_replace(" ", "_", strtolower($post['title'])),
				'value' => $post['value'],
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
	// delete settings
	public function deleteSettings($id){
		$this->db->where('id', $id);
		$this->db->delete('settings');
	}
	// NEVERMIND THESE FUNCTION, PUTTING HERE JUST FOR SAFETY
	// countForm Gereja
	public function countFormGerejaPagi(){
		return $this->db->count_all_results('orders');
	}
    public function countFormGerejaSiang(){
		return $this->db->count_all_results('orders');
	}
    public function countFormBaptis(){
		return $this->db->count_all_results('orders');
	}
    public function countFormKatekisasi(){
		return $this->db->count_all_results('orders');
	}
    public function countFormSidi(){
		return $this->db->count_all_results('orders');
	}
    public function countFormPerkawinan(){
		return $this->db->count_all_results('orders');
	}
    public function countFormDaftarBaru(){
		return $this->db->count_all_results('orders');
	}
    public function countFormAtestasi(){
		return $this->db->count_all_results('orders');
	}
}
