<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;

class news extends Entity{
	public $id;
	public $title;
	public $content;
	public $posting_time;

	public function _setNews($row) {
		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->content = $row['content'];
		$this->posting_time = $row['posting_time'];
	}
}
