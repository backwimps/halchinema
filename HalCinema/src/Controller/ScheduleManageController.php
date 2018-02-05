<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use App\Utils\Session;

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

	public function add(){
		$this->autoRender = false;

		$scheduleTable = TableRegistry::get('Schedules');

		$schedule = array();

		$this->loadModel('Schedules');
		$entity = $this->Schedules->newEntity($schedule);

		$scheduleTable->save($entity);
	}

}
