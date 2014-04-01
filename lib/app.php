<?php
	class App extends Prefab{
		function __construct(){
			//bootstrap some custom configuration options for our application
			Base::instance()->set('DB', new DB\SQL('mysql:host='.$_SERVER['DB_HOST'].';port='.$_SERVER['DB_PORT'].';dbname='.$_SERVER['DB_NAME'],$_SERVER['DB_USER'],$_SERVER['DB_PASS']));
		}
	}