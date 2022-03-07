<?php

/**
 *
 * Users_role
 *
 */
class Usersrole_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	// Getters for all
	public function getAllRole(){
		$this->db->select('*')->from('users_role');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	// GetOneArea
	public function getOneRole($id){
		$this->db->select('*')->from('users_role')->where('id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	// Area entry validation / just get it by name
	public function getRoleName($name){
		$this->db->select('*')
			->from('users_role')
			->where('role =', $name);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	// Setting an Area to be created
	public function setRole($post, $id){
		$this->db->trans_begin();
		if ($id) {
			$this->db->where('id', $id);
			if (!$this->db->update('users_role', array(
				'role' => $post['role'],
			))) {
				log_message('error', print_r($this->db->error(), true));
			}
		} else {
			if (!$this->db->insert('users_role', array(
				'role' => $post['role'],
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
	// delete role
	public function deleteRole($id){
		$this->db->where('id', $id);
		$this->db->delete('users_role');
	}
	// roleChecker
	public function roleChecker($post){
		$this->db->select('*')
			->where('role', $post['role']);
		$query = $this->db->get('users_role');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}