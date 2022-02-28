<?php
class Users_model extends CI_Model{
    public function __construct(){
        date_default_timezone_set('Asia/Makassar');
        parent::__construct();
    }
    // setLastLogin function for more than one user
    // public function setLastLogin($type, $id){
    //     $db = '';
    //     $id_field = '';
    //     if ($type == 'customers') {
    //         $db = "users_customers";
    //         $id_field = 'id_customer';
    //     } else if ($type == 'admin') {
    //         $db = "users_admins";
    //         $id_field = 'id';
    //     }
    //     $this->db->trans_begin();
    //     $this->db->where($id_field, $id);
    //     if (!$this->db->update($db, array(
    //         'last_login_at' => date('d-m-Y H:i:s',time())
    //     ))) {
    //         log_message('error', print_r($this->db->error(), true));
    //     }
    //     if ($this->db->trans_status() === FALSE) {
    //         $this->db->trans_rollback();
    //         return false;
    //     } else {
    //         $this->db->trans_commit();
    //         return true;
    //     }
    // }
    // setLastLogin
    public function setLastLogin($type, $id){
        $db = '';
        $id_field = '';
        if ($type == 'admin') {
            $db = "users_admins";
            $id_field = 'id';
        }
        $this->db->trans_begin();
        $this->db->where($id_field, $id);
        if (!$this->db->update($db, array(
            'last_login_at' => date('d-m-Y H:i:s',time())
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
}
