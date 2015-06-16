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
        $this->studentid = $this->user->insert_student($user_name = 'Andrew44', $password = 'mathy');
        $this->assertGreaterThan(0, $this->studentid, 'Insert_Student not functiong (in user_model.php, lines 11-22)')
    }

    public function testGetStudents(){
        $this->testInsertStudent();
        $this->assertTrue(count($this->user->get_students($offset = 0, $limit = 20)) >= 1, 'Get not functioning (in user_model.php, lines 24-31)');
    }

    public function testUpdateStudentById(){
        $this->testInsertStudent();
        $this->user->update_student_by_id($this->studentid, $user_name = "Michael44", $password = "englishy");
        $student_grouped = $this->user->get_students($offset=0, $limit = 100);
        $student_count = count($this->user->get_students($offset = 0, $limit = 100));
        if($student_count > 0){
            foreach($student_grouped as $student){
                if($student['id]'] == $this->studentid){
                    $this->assertEquals('Michael44', $student['user_name'], 'username not updated (in user_model.php, lines 34-9');
                    $this->assertEquals('englishy', $student['password'], 'password not updated (in user_model.php, lines 34-9');
                }
            }
        } else{
            echo "Zero students returned. This might be a problem with InsertStudent";
        }
    }

    protected function clean(){
        $this->db->where('id', $studentid);
        $this->db->delete('Student', $data);
    }
    
}
?>
