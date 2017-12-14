<?php
namespace App\Controller;
use App\Utils\Session;
use App\Utils\DataAccessObject;
/**
 *IndexController
 */
class SignUpController extends AppController{
	public function initialize(){
		$this -> name = 'SignUp';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;
        
	}
    
    //
    public function excute(){
        $this -> autoRender = false;
        
        $user = array(
            'nickname' => $_POST['name'],
            'gender' => $_POST['gender'],
            'birthday' => $_POST['year'].$_POST['month'].$_POST['day'],
            'mailAddress' => $_POST['mail'],
            'password' => hash('sha256',$_POST['pass'])
        );
        
        $this-> loadModel('users');
        $entity = $this->users->newentity($user);
        $dao = new DataAccessObject;
        
        $dao->createuser($entity); 
        
        $this->redirect(
        ['controller' => 'MyPage', 'action' => 'index']
        );
        return;
            
    }
}
