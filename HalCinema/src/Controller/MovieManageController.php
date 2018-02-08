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

		$movies = $movieTable->find();

		$this->set('movies', $movies);
	}

	public function add(){
		$movie_id = 2;
		// $_POST['movie_id'];

		$movieTable = TableRegistry::get('Movies');

		$movie = $movieTable->find()->where(['id =' => $movie_id]);
		foreach($movie as $row){
			$movie = $row;
		}

		$this->set('movie', $movie);
	}

	public function addExecute(){
		//入力チェック
		// if(){}

		// $_POST['movie_id'];

		$movieInfo = array(
			'option_id' => 1,
			'sound' => 1,
			'title' => 'newTitle',
			'content' => 'newContent',
			'screeningTime' => 60,
			'imagePath' => 'image.jpg'
		);

		// 変更箇所を追加していく
		// $movieInfo['option_id'] = 'before_option_id';
		// $movieInfo['sound'] = 'before_sound';
		// $movieInfo['title'] = 'before_name';
		// $movieInfo['content'] = 'before_content';
		// $movieInfo['screeningTime'] = 'before_screeningTime';

		$this->loadModel('Movies');
		$entity = $this->Movies->newEntity($movieInfo);

		$this->Movies->save($entity);
	}

	public function edit(){

	}

	public function editExecute(){
		//入力チェック
		// if(){}

		$movie_id = 2;
		// $_POST['movie_id'];

		$movieInfo = array(
			'id' => $movie_id,
		);

		// 変更箇所を追加していく
		// $movieInfo['option_id'] = 'before_option_id';
		// $movieInfo['sound'] = 'before_sound';
		$movieInfo['title'] = 'before_name';
		// $movieInfo['content'] = 'before_content';
		// $movieInfo['screeningTime'] = 'before_screeningTime';

		$this->loadModel('Movies');
		$entity = $this->Movies->newEntity($movieInfo);

		$this->Movies->save($entity);
	}

	public function delete(){

	}

	public function deleteExecute(){
		$movieInfo = array(
			'id' => 11
		);

		$this->loadModel('Movies');
		$entity = $this->Movies->get($movieInfo);

		$result = $this->Movies->delete($entity);
	}
}
