<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;

class Slider extends Entity{

	private $id;
	private $name;
	private $imgPath;

	public function _setSlider($slide) {
		$this->id = $slide['id'];
		$this->name = '';
		$this->imgPath = '';
	}

	public function _getSlider() {
		$slider = array(
			'id' => $this->id,
			'name' => $this->name,
			'imgPath' => $this->imgPath
		);

		return $slider;
	}

}
