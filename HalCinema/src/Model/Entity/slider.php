<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;

class Slider extends Entity{

	public $id;
	public $movie_id;
	public $movie_title;
	public $movie_imagePath;

	public function _setSlider($row) {
		$this->id = $row['id'];
		$this->movie_id = $row['movie_id'];
		$this->movie_title = $row['movie']['title'];
		$this->movie_imagePath = $row['movie']['imagePath'];
	}

	public function _getSlider() {
		$sliders = array(
			'id' => $this->id,
			'movie_id' => $this->movie_id,
			'movie_title' => $this->movie_title,
			'movie_imagePath' => $this->movie_imagePath
		);

		return $sliders;
	}

}
