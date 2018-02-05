<?php
namespace App\Controller;

class MovieManageController extends AppController{
	public function initialize(){
		$this -> name = 'MovieManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}
}
