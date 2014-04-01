<?php
	//load the f3 framework, bootstrap the application
	$f3 = require 'lib/base.php'; App::instance();


	//list valid routes for the application
	$f3->route('GET /','controllers\Task->get');
	$f3->route('GET /list','controllers\Task->get');
	$f3->route('POST /save','controllers\Task->post');
	$f3->route('GET /delete/@id','controllers\Task->delete');
	$f3->route('GET /check/@id [ajax]','controllers\Task->check');
	$f3->route('GET /uncheck/@id [ajax]','controllers\Task->uncheck');



	//need to install the table? 
	$f3->route('GET /install',function(){
		\models\Task::setdown();
		\models\Task::setup();
		echo 'setup complete';
	});


	//execute routes
	$f3->run();