<?php
namespace App\Controller;
use App\Utils\Session;
use App\Utils\DataAccessObject;
/**
 *IndexController
 */
class HomeController extends AppController{
	public function initialize(){
		$this -> name = 'Home';
		$this -> autoRender = true;
		$this -> viewBuilder() -> autoLayout(true);
	}

	// halcinema/
	public function index(){
		$dao = new DataAccessObject;

		$slider = $dao->getSliders();
		$campaign = $dao->getCampaigns();
		$news = $dao->getNews();

		$this->set('slider', $slider);
		$this->set('campaign', $campaign);
		$this->set('news', $news);
	}
}
