<?php
namespace App\Controller;

class AdminLoginController extends AppController{
	public function initialize(){
		$this -> name = 'AdminLogin';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// 管理者ログインフォーム
	public function index(){

	}

	// 認証
	public function execute(){

	}
}
