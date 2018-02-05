<?php
namespace App\Controller;

class FoodDrinkManageontroller extends AppController{
	public function initialize(){
		$this -> name = 'FoodDrinkManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// Food & Drink メニュー
	public function index(){


	}
}
