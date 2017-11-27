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

	public function getSlider() {
		$sliderTable = TableRegistry::get('Sliders');
		$this->sliderEntity = new Slider;

		$slideList = array();

		$slider = $sliderTable->find()->limit(3)->contain('movies');

		foreach ($slider as $row) {
			$this->sliderEntity->set('slider', $row);
			$slideList[] = $this->sliderEntity->get('slider');
		}

		return $slideList;
	}

	public function getCampaign() {
		$campaignTable = TableRegistry::get('Campaigns');
		$this->campaignEntity = new Campaign;

		$campaignList = array();

		$campaign = $campaignTable->find()->limit(3);

		foreach ($campaign as $row) {
			// print_r($row);
			// $row['posting_time'] =
			$this->campaignEntity->set('campaign', $row);
			$campaignList[] = $this->campaignEntity->get('campaign');
		}
		// echo '<pre>';
		// print_r($campaign);
		// echo '</pre>';

		return $campaignList;

	}



	// public function spotDetail($id){
	// 	$spotTable = TableRegistry::get('Spots');
    //
	// 	$spot = $spotTable
	// 	->find()
	// 	->where(['id =' => $id]);
    //
	// 	foreach ($spot as $row) {
	// 		$this->spotEntity->set('spot', $row);
	// 		$detail = $this->spotEntity->get('spot');
	// 	}
	// 	return $detail;
	// }
    //
	// public function spotArticles($id){
	// 	$article = TableRegistry::get('Articles');
    //
	// 	$arts = array();
    //
	// 	$art = $article->find()->where(['articles.spot_id =' => $id])->contain(['Users']);
    //
	// 	foreach ($art as $row) {
	// 		$this->artEntity->set('article',$row);
	// 		$this->userEntity->set('name',$row['users']['nickname']);
	// 		$arts[] = array_merge($this->artEntity->get('article'), array('name' => $this->userEntity->get('name')));
	// 	}
    //
	// 	return $arts;
	// }
    //
	// public function userArticles($id){
	// 	$arts = array();
	// 	$user = TableRegistry::get('Users');
    //
	// 	$art = $user
	// 	->find()
	// 	->where(['users.id =' => $id])
	// 	->contain(['Articles']);
    //
	// 	foreach ($art as $row) {
    //
	// 	}
	// 	return $art;
	// }
}
