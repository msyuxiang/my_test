<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
class SessionController extends Controller{
	//put your code here
	public function saveAction(){
		//由于我们这里并没有把session这个服务注入di进去，
		//因此我们必须手工使用session_start()来开启session
		session_start();
		//这是一个会话数据，存储在session中
		//它和控制器相关
		$this->persistent->name = "yuxiang1";
		var_dump($_SESSION);
		//output
		//array(1) { ["SessionController"]=> array(1) { ["name"]=> string(7) "yuxiang" } }
	}
	
	public function fetchAction(){
		session_start();
		$name = $this->persistent->name;
		var_dump($name);
		echo "<br />";
		var_dump($_SESSION);
	}
}
