<?php
namespace App\Controller;
use App\Utils\Session;
use App\Utils\DataAccessObject;
/**
 *IndexController
 */
class ReserveController extends AppController{
	public function initialize(){
		$this -> name = 'Reserve';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// 予約フォーム
	// Reserve/?movie_id=1&schedule_id=1
	public function index(){
		// Getで値がなかったらリダイレクト
		if(!isset($_GET['movie_id']) && !isset($_GET['schedule_id'])){
			$this->redirect([
				'controller' => 'Movie',
				'action' => 'index'
			]);
			return;
		}

		$movie_id = $_GET['movie_id'];
		$schedule_id = $_GET['schedule_id'];

	}

	public function confirm(){

	}
}
