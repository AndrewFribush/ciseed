<?php
class User_model extends CI_Model
{
    var $user_name = '';   
    var $password = '';
    public function __construct ()
    {
        parent::__construct();
    }
    
    public function insert_student($username, $password){
        $data = array(
            'user_name' => $username,
            'password' => $password,
            );
        $this->db->insert('Student', $data);
        if($this->db->insert_id()){
            return $this->db->insert_id();
        } else{
            return FALSE;
        }
    }

    public function get_students($offset = 0, $limit = 20){
        $query = $this->db->get('Student', $limit, $offset);
        if($query->num_rows() > 0){
            return $query->result_array();
        } else{
            return FALSE;
        }
    }

    public function update_student_by_id($id, $username, $password){
        $data = array(
            'user_name' => $username,
            'password' => $password,
            );
        $this->db->where('id', $id);
        $this->db->update('Student', $data);
        if($this->db->affected_rows() >0){
            return TRUE;
        } else{
            return FALSE;
        }
    }
}
?>
