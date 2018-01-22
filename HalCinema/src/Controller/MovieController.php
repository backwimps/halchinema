<?php
namespace App\Controller;
use App\Utils\Session;
use Cake\ORM\TableRegistry;

class MovieController extends AppController{
	public function initialize(){
		$this -> name = 'Movie';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// 上映中作品
	public function index(){

		// 現在日付取得
		$today = date('Y-m-d');

		$movieTable = TableRegistry::get('Movies');

		$newMovies = $movieTable->find()->contain('release_periods')->where(['releaseDate <' => $today])->where(['last_day >' => $today]);
		//->order('releaseDate DESC');

		$this->set('movie', $newMovies);

	}

	public function more(){
		if(!isset($_GET['id'])){
			// リダイレクト
		}
		$id = $_GET['id'];

		$movieTable = TableRegistry::get('Movies');
		$scheduleTable = TableRegistry::get('Schedules');

		$movie = $movieTable->find()->where(['id =' => $id]);

        // Schedulesテーブルから上映を予定している劇場を取得(新宿のみ)
		$theaterID = 1;



		$this->set('movie',$movie);

	}
}
