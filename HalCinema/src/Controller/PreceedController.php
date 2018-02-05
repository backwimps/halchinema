<?php
namespace App\Controller;

class ProceedController extends AppController{
	public function initialize(){
		$this -> name = 'Proceed';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}
}
