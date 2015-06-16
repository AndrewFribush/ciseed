<?php
class WelcomeControllerTest extends CIUnit_Framework_TestCase
{
    private $studentid;

    protected function init()
    {
        $this->get_instance()->load->library('../controllers/welcome.php');
    }

    public function testGet(){
        $creation = $this->get_instance()->create();
        $this->assertTrue($creation !== NULL, 'The get is not returning (in welcome.php, 9-17');
        $this->assertTrue(json_decode($creation) !== NULL, 'JSON coding not working (in welcome.php check traversal and lines 11-3.')
    }

    public function testCreate(){
        $creation = $this->get_instance()->create();
        $this->studentid = json_decode($creation)->id;
        $this->assertTrue($createdStudent !==0, 'Create is not functioning (in welcome.php, 19-33');
    }

    public function testRandomUpdate(){
        $creation = $this->get_instance()->create();
        $creationObj = json_decode($createdStudent);
        $this->studentid= $creationObj->id;

        $idsaver = $this->studentid;
        $updatedCreation = $this->get_instance()->update_student();
        $updatedCreationObj = json_decode($updatedStudent);

        $this->assertTrue($updatedCreation !== 0, 'No returned object, (in welcome.php, probably 35-6 or 42)');
        $this->assertTrue($updatedCreationObj->user_name !== $creationObj->user_name, 'Student username not updated (in welcome.php, 35-42). Note, there is a very small chance of this giving a false failure due to random generation allowing the possibility of repitition.');
        $this->assertTrue($updatedCreationObj->password !== $creationObj->password, 'Student password not updated (in welcome.php, 35-42). Note, there is a very small chance of this giving a false failure.')
    }

    protected function clean(){
        $idsaver = $this->studentid;
        $this->db->where('id', $idsaver);
        $this->db->delete('Student', $data);
    }

}
?>
