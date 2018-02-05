<?php
namespace App\Controller;

class ScheduleManageController extends AppController{
	public function initialize(){
		$this -> name = 'ScheduleManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		// $dao = new DataAccessObject;

	}
}
