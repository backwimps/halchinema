<?php
namespace App\Utils;

use Cake\ORM\TableRegistry;

use App\Model\Entity\Admin;
use App\Model\Entity\Campaign;
// use App\Model\Entity\Class;
use App\Model\Entity\Inquiry_category;
use App\Model\Entity\Inquiry;
use App\Model\Entity\Menu;
use App\Model\Entity\Menu_reserve;
use App\Model\Entity\Movie;
use App\Model\Entity\News;
use App\Model\Entity\Option;
use App\Model\Entity\Price;
use App\Model\Entity\Relase_period;
use App\Model\Entity\Reply;
use App\Model\Entity\Reserve;
use App\Model\Entity\Schedule;
use App\Model\Entity\Screen;
use App\Model\Entity\Slider;
use App\Model\Entity\Theater;
use App\Model\Entity\User;

/* DataAccessObject */
class DataAccessObject
{

	private $adminEntity;
	private $campaignEntity;
	// private $classEntity;
	private $inquiryEntity;
	private $inquiryCategoryEntity;
	private $menuReserveEntity;
	private $menuEntity;
	private $movieEntity;
	private $newsEntity;
	private $optionEntity;
	private $priceEntity;
	private $relasePeriodEntity;
	private $replyEntity;
	private $reserveEntity;
	private $cheduleEntity;
	private $screenEntity;
	private $theaterEntity;
	private $userEntity;

	function __construct(){
		// $this->spotEntity = new Spot;
		// $this->artEntity = new Article;
		// $this->userEntity = new User;
	}

	public function getSliders() {
		$slideList = array();
		$sliderTable = TableRegistry::get('Sliders');
		$this->sliderEntity = new Slider;

		$slider = $sliderTable->find()->limit(3)->contain('movies');

		foreach ($slider as $row) {
			$this->sliderEntity->set('slider', $row);
			$slideList[] = $this->sliderEntity;
		}

		return $slideList;
	}

	public function getCampaigns() {
		$campaignList = array();
		$campaignTable = TableRegistry::get('Campaigns');
		$this->campaignEntity = new Campaign;

		$campaign = $campaignTable->find()->limit(3);

		foreach ($campaign as $row) {
			$this->campaignEntity->set('campaign', $row);
			$campaignList[] = $this->campaignEntity;
		}

		return $campaignList;
	}

    // getterを使用しないver.(obj)
	public function getNews() {
		$newsList = array();
		$newsTable = TableRegistry::get('News');
		$this->newsEntity = new News;

		$news = $newsTable->find()->limit(3);

		foreach ($news as $row) {
			$this->newsEntity->set('news', $row);
			$newsList[] = $this->newsEntity;
		}

		return $newsList;
	}
}
