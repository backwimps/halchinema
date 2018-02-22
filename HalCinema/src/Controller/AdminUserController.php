<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class AdminUserController extends AppController{
	public function initialize(){
		$this -> name = 'AdminUser';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// ユーザ管理
	public function index(){

	}

	// ユーザ追加
	public function add(){

	}

	// ユーザ削除
	public function destroy(){

	}

	// ユーザ完了
	public function comp(){

	}
}
