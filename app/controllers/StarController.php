<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StarController
 *
 * @author yo
 */
use \Phalcon\Mvc\Controller;
class StarController extends Controller {
	//put your code here
	public function beforeExecuteRoute($dispatcher){
		echo "这是一个公共的开始调用","<br />";
		if($dispatcher->getActionName() == 'save'){
			echo "保存Operation Start <br />";
		}elseif($dispatcher->getActionName() == 'cut'){
			echo "剪切Opetation Start<br />";
		}else{
			echo "此操作被禁止！<br />";
			return false;
		}
	}
	
	public function saveAction(){
		echo "保存执行中...<br />";
	}
	
	public function cutAction(){
		echo "剪切执行中...<br />";
	}
	
	public function allAction(){
		echo "这里是allAction<br />";
	}
	public function afterExecuteRoute($dispatcher){
		echo "公共操作执行End","<br />";
	}
}
