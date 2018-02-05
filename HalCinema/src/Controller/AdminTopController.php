<?php
namespace App\Controller;

class AdminTopController extends AppController{
	public function initialize(){
		$this -> name = 'AdminTop';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// AdminTop
	public function index(){
		// $dao = new DataAccessObject;

	}
}
