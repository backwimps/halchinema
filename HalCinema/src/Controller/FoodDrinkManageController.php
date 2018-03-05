<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class FoodDrinkManageController extends AppController{
	public function initialize(){
		$this -> name = 'FoodDrinkManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// Food & Drink メニュー
	public function index(){

	}

	public function create(){

	}

	public function store(){

	}

	public function edit(){

	}

	public function update(){

	}

	public function destroy(){

	}
}
