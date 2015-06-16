<?php
class UserModelTest extends CIUnit_Framework_TestCase
{
    private $user;
    private $studentid;

    protected function init(){
        $this->get_instance()->load->model('User_model', 'user');
        $this->user = $this->get_instance()->user;
    }

    public function testInsertStudent(){

    }

    public function testGetStudents(){

    }

    public function testUpdateStudentById(){

    }

    protected function clean(){
        $this->db->where('id', $studentid);
        $this->db->delete('Student', $data);
    }
    
}
?>
