<?php
namespace App\Controller;
use App\Utils\Session;
use Cake\ORM\TableRegistry;
/**
 *HomeController
 */
class HomeController extends AppController{
	public function initialize(){
		$this -> name = 'Home';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){

		// table取得
		$sliderTable = TableRegistry::get('Sliders');
		$movieTable = TableRegistry::get('Movies');
		$campaignTable = TableRegistry::get('Campaigns');
		$newsTable = TableRegistry::get('News');

		// DBから取得
		$sliders = $sliderTable->find()->limit(3)->contain('movies');
		$newMovies = $movieTable->find()->limit(3)->contain('release_periods');
		$campaigns = $campaignTable->find()->limit(3);
		$news = $newsTable->find()->limit(4);

		// viewへ
		$this->set('sliders', $sliders);
		$this->set('newMovies', $newMovies);
		$this->set('campaigns', $campaigns);
		$this->set('news', $news);
	}
}
