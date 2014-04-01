<?php
	namespace models;
	class Task extends \DB\Cortex{
		protected $fieldConf = [
			'text'=>['type'=>'TEXT'],
			'finished'=>['type'=>'INT1','default'=>0],
			'date'=>['type'=>'DATETIME']
		],
		$db='DB',
		$table='tasks';
	}