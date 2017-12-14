<?php
namespace App\Controller;
use App\Utils\Auth;
use App\Utils\DataAccessObject;
/**
 *IndexController
 */
class LoginController extends AppController{
	public function initialize(){
		$this -> name = 'Login';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}
    
    public function excute(){
		// $dao =  new DataAccessObject;
        $this -> autoRender = false;
        $mailAddress = $_POST['mail'];
        $password = hash('sha256',$_POST['pass']);
        
        $user = new Auth($mailAddress,$password);
        
        $this->redirect(
        ['controller' => 'Mypage', 'action' => 'index']
        );
    }
}
