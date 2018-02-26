<?php
namespace App\Controller;
use App\Utils\Session;
/**
 *IndexController
 */
class ReserveController extends AppController{
	public function initialize(){
		$this -> name = 'Reserve';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}
}
