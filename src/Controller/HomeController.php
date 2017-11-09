<?php
namespace App\Controller;

/**
 *IndexController
 */
class HomeController extends AppController{
	public function initialize(){
		$this -> name = 'Home';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(false);
	}

	public function index(){

	}
}
