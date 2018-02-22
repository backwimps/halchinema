<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class moviesTable extends Table {
	public function initialize(array $config) {
		$this->hasOne('Sliders',['dependent' => true, 'cascadeCallbacks' => true]);
		$this->hasOne('Release_periods',['dependent' => true, 'cascadeCallbacks' => true]);
	}
}
