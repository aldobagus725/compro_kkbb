<?php
class Activitylog_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters to get all the logs
	public function getAdminLog(){
		$this->db->select('*');
		$this->db->order_by('created_at ASC');
		$query = $this->db->get('activity_log');
		return $query->result();
	}
	// Setters to set the logs
	public function setLog($id,$title,$log){
		$this->db->trans_begin();
		if (!$this->db->insert('activity_log', array(
			'id_admin' => $id,
            'title' => $title,
			'log' => $log,
		))) {
			log_message('error', print_r($this->db->error(), true));
		}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}
	// clear log
	public function clear_log(){
		$this->db->truncate('activity_log');
	}
}
