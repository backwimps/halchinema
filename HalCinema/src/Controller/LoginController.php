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
        $password = $_POST['pass'];
        
        $auth = new Auth($mailAddress,$password);
        
        $result = $auth->userAuth();
        
        if($result['flg']){
            $this->redirect(
                ['controller' => 'Mypage', 'action' => 'index']

            );
            return;
        }
        else{
            $this->redirect(
                ['controller' => 'Login', 'action' => 'index']

            );
        }
        
    }
}
