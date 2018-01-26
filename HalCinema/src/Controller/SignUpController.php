<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use App\Utils\Session;
// use App\Utils\DataAccessObject;
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
		$this->autoRender = false;

		$userTable = TableRegistry::get('Users');

		$user = array(
			'nickname' => $_POST['name'],
			'gender' => $_POST['gender'],
			'birthday' => $_POST['year'].$_POST['month'].$_POST['day'],
			'mailAddress' => $_POST['mail'],
			'password' => hash('sha256',$_POST['pass'])
		);

		$this-> loadModel('users');
		$entity = $this->users->newEntity($user);

		$userTable->save($entity);

		$this->redirect([
			'controller' => 'MyPage',
			'action' => 'index'
		]);
		return;

	}
}
