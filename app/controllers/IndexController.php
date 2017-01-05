<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author yo
 */
use \Phalcon\Mvc\Controller;
class IndexController extends Controller{
	//put your code here
	public function indexAction() {
		echo "welcome to Phalcon!";
	}
	
	public function myAction($name = "未知姓名", $hobby="未知爱好"){
		echo "My name is  ".$name."<br />";
		echo "My hobby is ".$hobby."<br />";
	}
	
	public function getAction(){
		$name = $this->request->get('name');
		$gender= $this->request->get('gender');
		
		echo "name is ".$name."<br />";
		echo "gender is ".$gender."<br />";
	}
	
	public function forwardAction($to = "1"){//不是重定位
		echo "在跳转之前输出的内容<br />";
		if($to == "1"){
			$this->dispatcher->forward(
				array(
					'controller' => 'index',
					'action' => 'one'
				)
			);
		}elseif($to == '2'){
			$this->dispatcher->forward(
					array(
						'controller'=>'index',
						'action'=>'two'
					)
				);
		}else{
			echo "无法跳转，请核对参数！<br />";
		}
		echo "在跳转之后输出的内容<br />";
	}
	
	public function oneAction(){
		echo "Here is 1";
	}
	
	public function twoAction(){
		echo "this is 2";
	}
	public function methodAction(){
		$method = $this->request->getMethod();
		echo "当前动作的调用方法是：",$method;
	}
	public function beAction(){//重定位跳转
		echo "This is the content of BE";
		$this->response->redirect('http://www.baidu.com');
	}
}

