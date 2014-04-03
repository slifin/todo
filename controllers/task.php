<?php
	namespace controllers;
	class Task{
		protected $view, $task, $content=[]; 
		function __construct(){
			$this->task = new \models\Task; 
		}
		function get(\Base $f3){
			$this->content['content'] = $this->task->find(null,['order'=>'id desc']);
		}
		function post(\Base $f3){
		}
		function safeLoad($id){

		}
		function delete(){

		}
		function check(){

		}
		function uncheck(){

		}
		function beforeroute(\Base $f3){
			if($f3->get('AJAX')) $this->view = new \views\Json;
			else $this->view = new \views\Html;
		}
		function afterroute(\Base $f3){
			$this->view->setData($this->content);
			echo $this->view->render();
		}
	}