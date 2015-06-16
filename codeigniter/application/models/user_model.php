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

    }

    public function get_students($offset = 0, $limit = 20){

    }

    public function update_student_by_id($id, $username, $password){

    }
}
?>
