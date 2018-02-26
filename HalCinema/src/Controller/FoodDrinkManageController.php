<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class FoodDrinkManageontroller extends AppController{
	public function initialize(){
		$this -> name = 'FoodDrinkManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// Food & Drink メニュー
	public function index(){

	}

	public function add(){

	}

	public function edit(){

	}

	public function delete(){

	}
}
