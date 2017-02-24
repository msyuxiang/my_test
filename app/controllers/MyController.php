<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
class MyController extends Controller {
	//put your code here
	public function registerAction() {
		//$my = new My();
		//$myForm = new MyForm($my);
		$myForm = new MyForm();
		$this->view->setVar('myForm', $myForm);
	}
	
	public function registerConfirmAction() {
		$safe_params = array();
		foreach ($_REQUEST as $key => $values){
			$safe_params[$key] = htmlspecialchars($values, ENT_QUOTES);
		}
		echo "yes";
		$my = new My();
		$myForm = new MyForm();
		//public bind (array $data, object $entity, [array $whitelist])
		//Binds data to the entity
		$myForm->bind($safe_params, $my);
//		if($mstFundForm->isValid())
//		{
//			//入力内容をセッションに保存
//			$this->setMsSession('myForm', $myForm);
//			$this->setMsSession('safe_params', $safe_params);
//			//確認画面へ
//			return $this->response->redirect('/admin/fund/add/confirm');
//		}
	}
	
}
