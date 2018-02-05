<?php
namespace App\Controller;
use App\Utils\Session;
use App\Utils\DataAccessObject;
/**
 *IndexController
 */
class MyPageController extends AppController{
	public function initialize(){
		$this -> name = 'MyPage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}

	public function password(){

	}

	public function ChangePassword(){

	}

	public function mailaddress(){

	}

	public function ChangeMailaddress(){

	}
}
