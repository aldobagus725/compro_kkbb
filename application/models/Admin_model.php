<?php
class Admin_model extends Users_model{
	public function __construct(){
		parent::__construct();
	}
	// Get All Admins
	public function getAllAdmins(){
		$this->db->select(
                            '
                                users_admins.id, users_admins.username, users_admins.fullname, users_admins.last_login_at, users_admins.email, 
                                users_admins.id_role,users_role.role, users_admins.created_at, 
                                users_admins.updated_at,
                            '
                        )
			->from('users_admins')
			->join('users_role', 'users_role.id = users_admins.id_role');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	// Validating Admin to determine whether the username exist or not
	public function getValidAdmin($username){
		$this->db   ->select('username')
			        ->where('username', $username);
		$query = $this->db->get('users_admins');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	// Validating Admin's Password
	public function getAdminPassword($username){
		$this->db->select('username, password')
			->from('users_admins')
			->where('username', $username);
		return $this->db->get()->row();
	}

	// If all goes well for login, we get just the ID and the username for session existance
	// Getting Admin Info
	public function getAdminInfo($username){
		$this->db->select(
                            '
                                users_admins.id, users_admins.fullname, users_admins.username, 
                                users_admins.email, users_role.role,
                            '
                        )
			->from('users_admins')
			->join('users_role', 'users_role.id = users_admins.id_role')
			->where('users_admins.username', $username);
		return $this->db->get()->row();
	}
	// Getting Admin's Full profile
	public function getAdminProfile($username){
		$this->db   ->join('users_role', 'users_role.id_role = users_admins.id_role')
                    ->select(   
                                '
                                users_admins.id, users_admins.fullname, users_admins.username, 
                                users_admins.email, users_admins.id_role,users_role.role,
                                '
                            )
                    ->from('users_admins')
                    ->where('username', $username);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	// Adding More Admins to the system
	public function setAdmin($post){
		$this->db->trans_begin();
		if (!$this->db->insert('users_admins', array(
			'id_role' => $post['id_role'],
            'fullname' => $post['fullname'],
			'username' => $post['username'],
			'email' => $post['email'],
			'password' => $post['password'],
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
	// Update Admins
	public function updateAdmin($post, $id){
		$this->db->trans_begin();
		$this->db->where('id', $id);
		if (!$this->db->update('users_admins', array(
			'id_role' => $post['id_role'],
            'fullname' => $post['fullname'],
			'username' => $post['username'],
			'email' => $post['email'],
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
	// Set Admin's Password
	public function setAdminPassword($password, $id){
		$this->db->trans_begin();
		$this->db->where('id', $id);
		if (!$this->db->update('users_admins', array(
			'password' => $password
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
	// Delete Admin to the system
	public function deleteAdmin($id){
		$this->db->where('id', $id);
		$this->db->delete('users_admins');
	}
}
