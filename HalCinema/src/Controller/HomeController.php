<?php
namespace App\Controller;
use App\Utils\Session;
use Cake\ORM\TableRegistry;
// use App\Model\Entity\Slider;
// use App\Model\Entity\Movie;
// use App\Model\Entity\Campaign;
// use App\Model\Entity\News;
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
		// $dao = new DataAccessObject;

		$sliderTable = TableRegistry::get('Sliders');
		$movieTable = TableRegistry::get('Movies');
		$campaignTable = TableRegistry::get('Campaigns');
		$newsTable = TableRegistry::get('News');

		$sliders = $sliderTable->find()->limit(3)->contain('movies');
		$newMovies = $movieTable->find()->order('releaseDate DESC')->limit(3);
		$campaigns = $campaignTable->find()->limit(3);
		$news = $newsTable->find()->limit(4);

		$this->set('sliders', $sliders);
		$this->set('newMovies', $newMovies);
		$this->set('campaigns', $campaigns);
		$this->set('news', $news);
	}
}
