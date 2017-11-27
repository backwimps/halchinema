<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;

class Slider extends Entity{

	private $id;

	private $movie_id;
	private $movie_title;
	private $movie_imagePath;

	public function _setSlider($row) {
		$this->id = $row['id'];

		$this->mavie_id = $row['movie']['id'];
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
