<?php
namespace App\Controller;
use App\Utils\Session;
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
		$dao = new DataAccessObject;

	}
}
