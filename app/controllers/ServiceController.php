<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceController
 *
 * @author yo
 */
use Phalcon\Mvc\Controller;
use Phalcon\Session\Adapter\Files as Session;
class ServiceController extends Controller{
	//put your code here
	public function indexAction(){
		$this->yu->show();
	}
	
	public function flashAction() {
		$this->flash->success("Success!");
		$this->flash->error("Error!");
		$this->flash->notice("Notice!");
		$this->flash->warning("Warning!");
	}
	public function sessionAction() {
		$before = $this->session->get('name');
		echo "设置之前的Name的值是：",$before,"<br />";
		$this->session->set('name', 'Yu Xiang');
		$after = $this->session->get('name');
		echo "设置之後的Name的值是：",$after,"<br />"; 
		var_dump($_SESSION);
	}
	
	public function aAction() {
		$this->response->redirect('service/b');
	}
	public function bAction() {
		echo "Redirect Success!","<br />";
	}
}
