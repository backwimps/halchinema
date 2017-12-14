<?php
namespace App\Utils;
use Cake\ORM\TableRegistry;
use App\Model\Entity\User;

/**
 * DataAccessObject
 * @author Shuhei Usui
 */
class Auth
{
	private $id;
	private $name;
	private $address;
	private $password;
	private $userEntity;
	private $userTable;

	function __construct($address, $password){
		$this->userEntity = new User;
		$this->address = $address;
		$this->password = $password;
	}

	/*
	 * @return $array{
	 *	['flg'] loginフラグ
	 *	['miss'] password不一致
	 * 	['empty'] address不一致
	*/
	public function userAuth(){
		$auth = array(
			'flg' => false,
			'empty' => false,
			'miss' => false,
			'authority' => 2
		);

		$savedPassword = '';
		$this->userTable = TableRegistry::get('Users');

		$user = $this->userTable->find()->where(['mailAddress =' => $this->address]);

		foreach ($user as $row) {
			if($row['password'] == hash('sha256',$this->password)){
				//認証
				$auth['flg'] = true;
				$this->id = $row['id'];
				$this->name = $row['nickname'];
			}else if(!empty($row)){
				//password不一致
				$auth['miss'] = true;
			}
		}
		//addressが存在しない時
		if(!$auth['flg'] && !$auth['miss']){
			$auth['empty'] = true;
		}

		return $auth;
	}

	public function getUserInfo(){
		$userInfo = array(
			'id' => hash('sha256', $this->id),
			'name' => $this->name
		);
		return $userInfo;
	}

}
