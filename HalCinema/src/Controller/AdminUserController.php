<?php
namespace App\Controller;

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
	public function delete(){

	}

	// ユーザ完了
	public function comp(){

	}
}
