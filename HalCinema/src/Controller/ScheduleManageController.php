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

	public function index(){
		$scheduleTable = TableRegistry::get('Schedules');

		$schedules = array();
		$schedules = $scheduleTable->find()->where(['theater_id =' => 1])->order(['start_datetime'])->contain('Movies')->contain('screens');

		$this->set('schedules', $schedules);
	}

	public function create(){

		$movies = TableRegistry::get('Movies')->find();
		$screens = TableRegistry::get('Screens')->find()->where(['theater_id = ' => 1]);

		$this->set('movies',$movies);
		$this->set('screens',$screens);
	}

	public function store(){
		$this->autoRender = false;

		$schedule = array(
			'movie_id' => $_POST['movie_id'],
			'screen_id' => $_POST['screen_id'],
			'start_datetime' => $_POST['start_year'].'-'.$_POST['start_month'].'-'.$_POST['start_day'].' '
		);

		$this->loadModel('Schedules');
		$schedule = $this->Schedules->newEntity($schedule);

		$this->Schedules->save($schedule);

		$this->redirect([
			'controller' => 'ScheduleManage',
			'action' => 'index'
		]);
	}

	public function edit($id = null){
		$this->loadModel('Schedules');

		$entity = $this->Schedules->get($id);
	}

	public function update(){
		$this->autoRender = true;

	}


	public function destroy(){
		$this->autoRender = true;

	}
}
