<?php
namespace App\Controller;
use App\Utils\Session;
use Cake\ORM\TableRegistry;
/**
 *IndexController
 */
class TheaterController extends AppController{
	public function initialize(){
		$this -> name = 'Theater';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){

		$theaterTable = TableRegistry::get('Theaters');

		$theaters = $theaterTable->find();

		$this->set('theaters', $theaters);

	}
}
