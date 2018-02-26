<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class schedulesTable extends Table {
	public function initialize(array $config) {
		$this->belongsTo('movies');
		$this->belongsTo('screens');
	}
}
