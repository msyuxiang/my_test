<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Phalcon\Mvc\Controller;

class HomeController extends controller{
	//public function indexAction() {
		
	//}
	
	public function hiAction() {
		//echo "来自控制器的输出";
		//$this->view->pick("路径一/路径二/.../文件名");
		//通过这种方式，我们对视图文件的加载更加灵活方便。
		
		//$this->view->disable();屏蔽视图的功能
		//echo "来自控制器的输出";
		
		$this->view->pick('/test/yu');
	}
	public function varAction() {
		$this->view->name = "Yu Xiang";
		$this->view->love = "Dou Changxiao";
	}
	
	public function startAction()
	{

	}
	
	public function nameAction(){
		
	}
	
	public function yuAction(){
		$this->view->name ="Yu Xiang";
	}
}

