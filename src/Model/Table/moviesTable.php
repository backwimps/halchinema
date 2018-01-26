<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class moviesTable extends Table {
	public function initialize(array $config) {
		$this->hasOne('Sliders');
		$this->hasOne('release_periods');
		// $this->hasOne('Schedules');
	}
}
