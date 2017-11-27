<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class SlidersTable extends Table {
	public function initialize(array $config) {
		$this->belongsTo('movies');
	}
}
