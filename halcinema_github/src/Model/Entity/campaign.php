<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;

class Campaign extends Entity{

	private $id;
	private $title;
	private $content;
	private $postiong_time;

	public function _setCampaign($row){
		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->content = $row['content'];
		$this->postiong_time = $row['postiong_time'];
	}

	public function _getCampaign(){
		$campaigns = array(
			'id' => $this->id,
			'title' => $this->title,
			'content' => $this->content,
			'posting_time' => $this->postiong_time
		);
		return $campaigns;
	}

}
