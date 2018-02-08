<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use App\Utils\Session;

class ScheduleManageController extends AppController{
	public function initialize(){
		$this->name = 'ScheduleManage';
		$this->autoRender = true;
		$this->viewBuilder()->autoLayout(true);
	}

	// halcinema/
	public function index(){
		$scheduleTable = TableRegistry::get('Schedules');

		$schedules = array();
		$schedules = $scheduleTable->find();

		$this->set('schedules', $schedules);
	}

	public function add(){
		$this->loadModel('Schedules');
		$entity = $this->Schedules->newEntity($schedule);

		$scheduleTable->save($entity);
	}

	public function addExecute(){
		$this->autoRender = true;



	}

	public function edit(){

	}

	public function editExecute(){
		$this->autoRender = true;

	}

	public function delete(){

	}

	public function deleteExecute(){
		$this->autoRender = true;

	}
}
