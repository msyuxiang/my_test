<?php

/*

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InitController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
class InitController extends Controller{
	//put your code here
	public function initialize(){//完成一些初始化操作
		echo "开始执行初始化","<br />";
	}
	
	public function hiAction(){
		echo "这里是hiAction","<br />";
	}
}
