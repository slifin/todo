<?php
	$f3 = require 'lib/base.php';
	echo 'hello world';
	$f3->get('GET /test',function(){
		echo 'test';
	});
	$f3->run();