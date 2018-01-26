<?php
namespace App\Utils;

/**
 * AppUtility.
 */
class Session
{
	private $id;
	private $name;

	public function __construct(){
		session_start();
	}

	public function setUserInfo($userInfo){
		$this->id = $userInfo['id'];
		$this->name = $userInfo['name'];
	}

	public function getUserInfo(){
		return $_SESSION['userInfo'];
	}

	public function setSession(){
		// 非login状態であることの確認

		$_SESSION['userInfo'] = array(
			'id' => $this->id,
			'name' => $this->name
		);
	}

	// login状態の確認
	public function checkSession(){
		$flg = false;

		if(isset($_SESSION['userInfo'])){
			// sessionの正当性確認
			$flg = true;
		}
		return $flg;
	}

	// sessionの破棄
	public function eraseSession(){
		$_SESSION = array();

		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}

		session_destroy();
	}
}
