<?php
namespace App\Controller;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class MovieManageController extends AppController{
	public function initialize(){
		$this -> name = 'MovieManage';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// MovieManage TopPage
	public function index(){
		$movieTable = TableRegistry::get('Movies');

		$movies = $movieTable->find()->where(['state =' => 0]);

		$this->set('movies', $movies);
	}

	public function create(){

	}

	public function store(){
		//入力チェック
		// if(){}

		$this->loadModel('Movies');
		$this->loadModel('ReleasePeriods');

		// option_id
		// 1: 2D, 2:3D, 3:4D
		// sound
		// 1: 日本語, 2: 字幕

		$movie = array(
			'option_id' => $_POST['option'],
			'sound' => $_POST['sound'],
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'screeningTime' => $_POST['time'],
			'imagePath' => 'it.png',
			'state' => 0,
		);

		$movie = $this->Movies->newEntity($movie);

		$this->Movies->save($movie);

		$release = array(
			'movie_id' => $movie->id,
			'theater_id' => '1', //現段階では固定
			'releaseDate' => $_POST['start_year'].'-'.$_POST['start_month'].'-'.$_POST['start_day'],
			'last_day' => $_POST['end_year'].'-'.$_POST['end_month'].'-'.$_POST['end_day'],
		);

		$release = $this->ReleasePeriods->newEntity($release);

		$this->ReleasePeriods->save($release);

		$this->redirect([
			'controller' => 'MovieManage',
			'action' => 'index'
		]);
		return;
	}

	public function edit(){
		$movie_id = $_GET['id'];

		$movieTable = TableRegistry::get('Movies');

		$movie = $movieTable->find()->where(['id =' => $movie_id])->first();

		$this->set('movie', $movie);
	}

	public function update(){
		//入力チェック
		// if(){}

		$movie_id = $_POST['id'];

		$movieInfo = array(
			'id' => $movie_id,
			'option_id' => $_POST['option'],
			'sound' => $_POST['sound'],
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'screeningTime' => $_POST['time'],
			'imagePath' => 'it.png'
		);

		$this->loadModel('Movies');
		$entity = $this->Movies->newEntity($movieInfo);

		$this->Movies->save($entity);

		$this->redirect([
			'controller' => 'MovieManage',
			'action' => 'index'
		]);
		return;
	}

	public function destroy(){
		$movie = array(
			'id' => $_POST['id']
		);

		$this->loadModel('Movies');

		$entity = $this->Movies->get($movie);
		$entity->state = 1;
		$result = $this->Movies->save($entity);

		$this->redirect([
			'controller' => 'MovieManage',
			'action' => 'index'
		]);
		return;
	}
}
